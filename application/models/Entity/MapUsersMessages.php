<?php

//use Doctrine\ORM\Mapping as ORM;
namespace Entity;

/**
  * MapUsersMessage
  *
  * @Entity
  * @Table(name="map_users_messages")
  * 
  */  
class MapUsersMessages{    
    
    /**
    * @Id
    * @Column(name="messageId", type="integer", nullable=false)
    */
    
    public $messageId;
    
    /**
    * @var integer
    * @Column(name="userId", type="integer", nullable=false)
    */
    
    public $userId;
    
    /**
    * @var integer
    *
    * @Column(name="labelId", type="integer", nullable=false)
    */
    
    public $labelId;
    
    /**
    * @var boolean
    *
    * @Column(name="isRead", type="boolean", nullable=false)
    */

    public $isRead;
    
    /**
    * @var boolean
    *
    * @Column(name="isStarred", type="boolean", nullable=false)
    */
    
    public  $isStarred ;  
}