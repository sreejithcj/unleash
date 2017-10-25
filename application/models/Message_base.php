<?php
require_once APPPATH.'models/Model.php';

define('DRAFT', 'Draft');
define('INBOX', 'Inbox');
define('SENT', 'Sent');

/**
 * Message_base class
 * Base class for all model classes for handling the messages.
 * Currently, we have only Messages_model
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Message_base extends Model{
    
    public function __construct() 
    {
        parent::__construct();
    }

    /**
     * 
     * This method does the following:
     *  1. Checks whether the POST has messageId by calling get_from_array. If it has, the value is returned.
     *  2. Calls get_entity_object to get the requsted entity class. If the object is present in Doctrine repository, it is returned,
     *     else a new object will be returned.
     *  3. Calls load_from_array to populate the entiry object with the post parameters and returns it.
     * 
     * Returns requetsted entiry class after populating it's fields with the values from
     * POST. This
     * @param type $class name of the class
     * @param type $post  post fields received from UI
     * @param type $id    id (messageId)
     * @return type
     */
    public function get_message_object($class,$post,$unique_id='')
    {
        return $this->load_from_array($post, $this->get_entity_object($class, $this->get_from_array($post, $unique_id)));  
    }   
}
//End of file Message_base.php