<?php
/**
 * User_base class
 * Base class for all model classes for 'User' feature
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class User_base extends Model{
    
    public function __construct() 
    {
            parent::__construct();
    }

    /**
     * This method does the following:
     *  1. Checks whether the POST has userId by calling get_from_array. If it has, the value is returned.
     *  2. Calls get_entity_object to get the requsted entity class. If the object is present in Doctrine repository, it is returned,
     *     else a new object will be returned.
     *  3. Calls load_from_array to populate the entiry object with the post parameters and returns it.
     * 
     * 
     * @param type $class name of the class
     * @param type $post post fields received from UI
     * @param type $id id (userId)
     * @return type
     */
    protected function get_user_object($class,$post,$unique_id='')
    {
        return $this->load_from_array($post, $this->get_entity_object($class, $this->get_from_array($post, $unique_id)));  
    }
}