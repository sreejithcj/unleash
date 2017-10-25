<?php
require_once APPPATH.'models/ICommand.php';

/**
 * Save_command class
 * Command class to execute the save command
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Save_command implements ICommand{
    
    /**
     * Saves the message to the database
     * 
     * @param type $post      post parameters submitted from view
     * @param type $msg_model object of Messages_model class
     * @return null|boolean|string 
     */
    public function handle($post,$msg_model)
    {
        if( ! $msg_model->is_present($post, 'save'))
        {
            return NULL;
        }
        try
        {
            $message = $msg_model->get_message_object('Entity\Messages', $post, 'messageId');        
            $map_obj = $msg_model->get_message_object('Entity\MapUsersMessages', $post, 'messageId');            
            
            $message->date = new \DateTime('now');
            $msg_model->begin_transaction(); 
            $msg_model->persist($message);      
            $map_obj->labelId = $msg_model->get_label_id(DRAFT);
            $map_obj->messageId = $message->messageId;
            $map_obj->isRead = TRUE;
            $map_obj->isStarred = FALSE;
            $msg_model->persist($map_obj);
            $msg_model->commit();
            return MESSAGE_SAVED;
        }catch (Exception $exception)
        {
            return FALSE;
        }
    }
}
//End of file Save_command.php