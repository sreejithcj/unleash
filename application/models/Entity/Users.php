<?php

namespace Entity;
//include_once APPPATH.'helpers/ModelBase.php';


use Doctrine\ORM\Mapping as ORM;


/**
  * Users
  *
  * @Entity
  * @Table(name="users")
  * 
  */  
class Users {   
    
    /**
    * @Id
    * @Column(name="userId", type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    */
    
    public $userId;
    
    /**
    * @var string
    * @Column(name="employeeId", type="string", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    */
    
    public $employeeId;
    
    /**
    * @var string
    *
    * @Column(name="email", type="string", length=50, nullable=false)
    */
    
    public $email;
    
    /**
    * @var string
    *
    * @Column(name="firstname", type="string", length=50, nullable=false)
    */

    public $firstname;
    
    /**
    * @var string
    *
    * @Column(name="lastname", type="string", length=50, nullable=false)
    */
    
    public $lastname;
    
    /**
    * @var string
    *
    * @Column(name="password", type="string", length=96, nullable=false)
    */
    public $password;   
  
}