<?php

//use Doctrine\ORM\Mapping as ORM;
namespace Entity;

/**
  * Labels
  *
  * @Entity
  * @Table(name="labels")
  * 
  */  
class Labels{    
    
    /**
    * @Id
    * @Column(name="labelId", type="integer", nullable=false)
    * @GeneratedValue(strategy="AUTO")
    */
    
    public $labelId;
    
    /**
    * @var label
    * @Column(name="label", type="string", length=255, nullable=false)
    */
    
    public $label;    
}