<?php
require_once APPPATH.'models/ICommand.php';

/**
 * Send_command class
 * Command class to execute the send command
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Send_command implements ICommand{
    
    /**
     * Saves the message to database and will be marked as 'sent'
     * 
     * @param type $post      post parameters submitted from view
     * @param type $msg_model object of Messages_model class
     * @return null|boolean|string
     */
    public function handle($post,$msg_model)
    {
        if( ! $msg_model->is_present($post, 'send'))
        {
            return NULL;
        }
        try
        {
            $message = $msg_model->get_message_object('Entity\Messages', $post, 'messageId');        
            $map_obj = $msg_model->get_message_object('Entity\MapUsersMessages', $post, 'messageId');
            
            $msg_model->begin_transaction(); 
            
            $map_obj->labelId = $msg_model->get_label_id(SENT);
            $message->date = new \DateTime('now');
            
            if($message->messageId === NULL)
            {
                $msg_model->persist($message); 
                $map_obj->messageId = $message->messageId;
                $map_obj->isRead = TRUE;
                $map_obj->isStarred = FALSE;                
                $msg_model->persist($map_obj);                 
            }
            else
            {
                $msg_model->flush();
            }
            
            $message_new = clone $message;
            $msg_model->persist($message_new);
            
            $map_obj_new = clone $map_obj;
            $map_obj_new->messageId = $message_new->messageId;
            $map_obj_new->labelId = $msg_model->get_label_id(INBOX);
            $map_obj_new->isRead = FALSE;
            $map_obj_new->isStarred = FALSE;            
            $msg_model->persist($map_obj_new); 
            $msg_model->commit();
            return MESSAGE_SENT;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }
}
//End of file Send_command.php