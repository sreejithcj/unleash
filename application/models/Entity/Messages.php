<?php

use Doctrine\ORM\Mapping as ORM;
namespace Entity;

  /**
  * @Entity
  * @Table(name="messages")
  */  
class Messages{    
    
    /**
    * @Id
    * @Column(name="messageId", type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    */
    
    public $messageId;
    
    /**
    * @var string
    * @Column(name="subject", type="string", length=10000, nullable=false)
    */
    
    public $subject;
    
    /**
    * @var string
    *
    * @Column(name="body", type="string", length=10000, nullable=false)
    */
    
    public $body;
    
    /**
    * var datetime
    *
    * @Column(name="date", type="datetime", nullable=false)
)    */

    public $date;
    
    /**
    * @var string
    *
    * @Column(name="authorId", type="integer", nullable=false)
    */
    
    public $authorId;      
   
}