<?php
require_once APPPATH.'models/Entity/Messages.php';
require_once APPPATH.'models/Entity/MapUsersMessages.php';
require_once APPPATH.'models/Entity/Labels.php';
require_once APPPATH.'models/Message_base.php';
require_once APPPATH.'models/Command_chain.php';
require_once APPPATH.'models/Save_command.php';
require_once APPPATH.'models/Send_command.php';

use Doctrine\ORM\Query\Expr\Join;

/**
 * Model class for Messages feature
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Messages_model extends Message_base{
    
    public function __construct()
    {
        parent::__construct();
    }    
    
    /**
     * Function that runs the commands (Save and Send) to save or send a message.
     * 
     * @param type $post post paramters from the UI
     * @return type      returns the success message from the executed command (Save or Send)
     */
    public function store($post)
    {     
        $cmd_chain = new Command_chain();
        $cmd_chain->add_command(new Save_command());
        $cmd_chain->add_command(new Send_command());
        return $cmd_chain->run_command($post, $this);
    }
  
    /**
     * Will 'star' the selected message
     * 
     * @param type $message_id id of the message
     * @return boolean         TRUE or FALSE
     */
    public function star($message_id)
    {
        try{
            $map_obj = $this->find('Entity\MapUsersMessages', $message_id);
            if($map_obj != NULL)
            {
                if($map_obj->isStarred === FALSE)
                {
                    $map_obj->isStarred = TRUE;
                }else 
                {
                    $map_obj->isStarred = FALSE;
                }        
                $this->flush();     
                return TRUE;
            }
            return FALSE;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }
    
    /**
     * 
     * Mark a message as read
     * 
     * @param type $message_id id of the message
     * @return boolean         TRUE/FALSE
     */
    public function mark_as_read($message_id)
    {
        try
        {
            $map_obj = $this->find('Entity\MapUsersMessages', $message_id);
            if($map_obj !== NULL)
            {
                $map_obj->isRead = TRUE;
                $this->flush();        
                return TRUE;
            }
            return FALSE;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }
    
    /**
     * Mark a message as unread
     * 
     * @param type $message_id id of the message
     * @return boolean         TRUE/FALSE
     */
    
    public function mark_as_unread($message_id)
    {
        try
        {
            $map_obj = $this->find('Entity\MapUsersMessages', $message_id);
            if($map_obj !== NULL)
            {
                $map_obj->isRead = FALSE;
                $this->flush();   
                return TRUE;
            }
            return FALSE;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }
    
    /**
     * 
     * Delete a message
     * 
     * @param type $message_id id of the message
     * @return boolean         TRUE/FALSE
     */
    public function delete($message_id)
    {
        try
        {
            $map_obj = $this->find('Entity\MapUsersMessages', $message_id);
            if($map_obj !== NULL)
            {            
                $this->remove($map_obj);
                $this->flush();
                return TRUE;
            }
            return FALSE;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }

    /**
     * 
     * @param type $message_id id of the message to be retrieved
     * @return type            array of fields
     */
    public function get_single_message($message_id)
    {
        $repo =  $this->get_repository('EN:Messages');        
        $builder = $repo->createQueryBuilder('m');
        
        $builder
            ->select('m.subject,m.body,p.isRead, p.isStarred, m.authorId, u.firstname,u.lastname,m.date,m.messageId,p.labelId')
            ->join(
            'EN:MapUsersMessages', 'p',
            Join::WITH,
            $builder->expr()->eq('p.messageId', 'm.messageId'))
            ->join('EN:Users',
            'u',
            Join::WITH,
            $builder->expr()->eq('p.userId', 'u.userId'))
            ->where('m.messageId = :messageId')
            ->setParameter('messageId', $message_id);

            $query = $builder->getQuery();
            return $query->getArrayResult();
    }    
        
    
    /**
     * 
     * Returns the list of messages for the given label(inbox/draft/sent), page offset and 
     * limit(max. number of messages per page) 
     * 
     * @param type $label  Inbox/Draft/Sent
     * @param type $offset page offset (integer)
     * @param type $limit  max. number of messages per page
     * @return type
     */
    public function get_messages_list($userId,$label,$offset,$limit)
    {
        $repo =  $this->get_repository('EN:Messages');        
        $builder = $repo->createQueryBuilder('m');
        
        $user_type = $label==='inbox'? 'm.authorId' : 'p.userId';
        $condition = $label==='inbox'? 'p.userId = :userId and p.labelId = :labelId' : 'm.authorId = :userId and p.labelId = :labelId';

        error_log('LabelId'.$this->get_label_id($label));
        error_log('usertype'.$user_type);
        $builder
            ->select('m.subject, p.isRead, p.isStarred, u.firstname,u.lastname,m.date,m.messageId,m.authorId,p.userId')
            ->join(
            'EN:MapUsersMessages', 'p',
            Join::WITH,
            $builder->expr()->eq('p.messageId', 'm.messageId'))
            ->join('EN:Users',
            'u',
            Join::WITH,
            $builder->expr()->eq($user_type, 'u.userId'))
            ->where($condition)                
            ->setParameter('userId', $userId)
            ->setParameter('labelId', $this->get_label_id($label))
            ->orderBy('m.date', 'DESC');
        
            $query = $builder->getQuery();
            $count = count($query->getScalarResult());            
        
            $builder->setFirstResult($limit * ($offset-1));
            $builder->setMaxResults($limit);
        
            $queryMsg = $builder->getQuery();
            $messages = array($count,$queryMsg->getArrayResult());           
            return $messages;
    }
    
    /**
     * Returns the label  id of the given label
     * @param type $label INBOX/SENT/DRAFT
     * @return type       label id
     */
    public function get_label_id($label)
    {      
        $label_id = $this->get_from_cache($label);
        if($label_id === NULL )
        {
            $labels = $this->get_repository('Entity\Labels')->findBy(array('label'=>$label));
            $this->save_to_cache($label, $labels[0]->labelId);
            return $labels[0]->labelId;                
        }
        return $label_id;        
    }
     
    /**
     * Returns label text for the given label id
     * @param type $label_id label id
     * @return type          label text
     */
    private function _get_label($label_id)
    {        
        $labels = $this->get_repository('Entity\Labels')->findBy(array('labelId'=>$label_id));
        if($labels !== NULL)
        {
            return $labels[0]->label;                
        }
    }    
}
//End of file Messages_model.php