<?php

require_once APPPATH.'models/User_base.php';
require_once APPPATH.'helpers/Utility.php';

/**
 * Model class for Users feature
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Users_model extends User_base{
    
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Handles user signup
     * 
     * @param type $post post parameters
     * @return boolean
     */
    public function signup($post)
    {     
        try
        {
            $users = $this->get_user_object('Entity\Users', $post);        
            $users->password = Utility::get_password_hash($users->password);                      
            $ret = $this->persist($users);
            return TRUE;
        }catch (Exception $exception) 
        {
            return FALSE;
        }        
    }    
    
    /**
     * Handles user login
     * 
     * @param type $post post parameters
     * @return boolean
     */
    public function login($post)
    {
        $users = $this->get_repository('Entity\Users')->findBy(array('email'=>$post['email']));
        if(count($users) === 0)
        {
            return FALSE;
        }
        if(Utility::verify_password($post['password'], $users[0]->password))
        {
            return $users;
        }else
        {
            return FALSE;
        }
    }    
    
    /**
     * 
     * Checks whether the given email address exists in database
     * 
     * @param type $email
     * @return boolean
     */
    public function check_email_exists($email)
    {
        $users = $this->get_repository('Entity\Users')->findBy(array('email'=>$email));        
        if(count($users) > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }            
    }    
    
    /**
     * Gets the list of users
     * 
     * @param type $page page index
     * @param type $limit max. number of records per page
     * @return type
     */
    public function get_users_list($page,$limit)
    {
        $repo = $this->get_repository('Entity\Users');
        $list = $repo->findBy(
            
            array(), //search criteria, as usual
            array('firstname' => 'ASC'),
            $limit, // limit
            $limit * ($page - 1) // offset
        );
        return $list;
    }    
    
     /**
     * Gets full name of a user whose user id is given
     * @param type $user_id
     * @return type
     */
    public function get_full_name($user_id)
    {
        $repo =  $this->get_repository('EN:Users');  
        $builder = $repo->createQueryBuilder('u');
        $builder
            ->select('u.firstname','u.lastname')
            ->where('u.userId = :userId')
            ->setParameter('userId',$user_id);        
        
         $query = $builder->getQuery();
         return $query->getArrayResult();
    }        
}
//End of file Users_model.php