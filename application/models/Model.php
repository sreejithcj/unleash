<?php
require_once APPPATH.'helpers/Config.php';

/**
 * Model class
 * Base class for all model classes
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Model extends CI_Model{
    
    private $_em;
    private $_memcached; 
    function __construct()
    {
        $this->_em = $this->doctrine->em;     
        $this->_memcached = $this->cache->memcached;
    }
     
    /**
     * Checks whether the given param is present in the array 
     * 
     * @param type $array array to search
     * @param type $name  parameter to check  
     * @return boolean    TRUE/FALSE
     */
    public function is_present($array,$name)
    {
        if(isset($array[$name]))
        {
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
    }
     
    /**
     * Populates the given Entity class with the values fro the given array
     * 
     * @param type $array array with the parameters
     * @param type $class class that has to be populated
     * @return pbject     returns object of the given class 
     */
    protected function load_from_array($array,$class)
    {
        if($class === NULL)
            return NULL;
        $rclass = new ReflectionClass($class);
        
        $props = $rclass->getProperties();
        foreach($props as $prop)
        {
            if(isset($array[$prop->getName()]))
            {
                $prop->setValue($class, $this->security->xss_clean($array[$prop->getName()]));
            }
        }
        return $class;
    }

    /**
     * Returns the primary key of the given entity class
     * 
     * @param type $class name of the class
     * @return type       primary key
     */
    protected function get_primary_key($class)
    {
        $meta = $this->_em->getClassMetadata(get_class($class));
        return $meta->getSingleIdentifierFieldName();
    }
    
    /**
     * 
     * Checks the Doctrine repository for the availability of the given class,
     * the object is returned if present, else a new object of the class is created and returned
     * @param type $class     name of the class
     * @param type $unique_id unique id
     * @return \class
     */
    protected function get_entity_object($class,$unique_id=NULL)
    {
        if($unique_id !== NULL)
        {
            $class_obj = $this->_em->find($class, $unique_id);
            if($class_obj !== NULL)
            {
                return $class_obj;
            }
            else
            {
                return new $class;
            }                 
        }
        return new $class;
    }
    
    /**
     * 
     * Returns the value of the given field from the given array
     * 
     * @param type $array array input
     * @param type $field field to return the value
     * @return null
     */
    protected function get_from_array($array,$field)
    {
        if(isset($array[$field]))
        {
            return $array[$field];
        }
        else 
        {
            return NULL;
        }
    }

    /**
     * Makes Doctrine to interpret BIT as boolean
     */
    protected function set_custom_doctrine_type()
    {
        // get currently used platform
        $db_platform = $this->_em->getConnection()->getDatabasePlatform();
        // interpret BIT as boolean
        $db_platform->registerDoctrineTypeMapping('bit', 'boolean');
    }
    
    /**
     * Wrapper function for memcached Save
     * 
     * @param type $key_param key to store
     * @param type $value     value to store
     * @param type $interval  time interval to persist
     */
    protected function save_to_cache($key_param,$value,$interval=120)
    {
        $result = $this->_memcached->save($key_param, $value, $interval);
    }
    
    /**
     * 
     * Gets the value from memcached for the given key
     * 
     * @param type $key_param unique key
     * @return null
     */
    protected function get_from_cache($key_param)
    {
        if( ! is_null($this->_memcached))
        {
            if($this->_memcached->is_supported)
            {
                return $this->_memcached->get($key_param);
            }
        }
        return NULL;
    }
    
    /**
     * 
     * Wrapper function for Doctrine method
     * @param type $model
     * @return type
     */
    protected function get_repository($model)
    {
        return $this->_em->getRepository($model);
    }
    
    /**
     * Wrapper function for Doctrine method
     * 
     * @param type $model
     */
    protected function remove($model)
    {
        $this->_em->remove($model);
    }

    /**
     * Wrapper function for Doctrine method
     * 
     * @param type $model     model object to find
     * @param type $unique_id unique id
     * @return type           object
     */
    protected function find($model,$unique_id)
    {
        return $this->_em->find($model, $unique_id);
    }
    
    
    /**
     * Wrapper function for Doctrine method
     */
    public function flush()
    {
        $this->_em->flush();
    }
    
    /**
     * Wrapper function for Doctrine method
     * 
     * @param type $record object to persist
     */
    public function persist($record)
    {
        $this->_em->persist($record);
        $this->_em->flush();
    }
    
    
    /**
     * Gets total number of records in the given table 
     * 
     * @param type $table
     * @return type
     */
    public function get_count($table)
    {
        return $this->_em
            ->createQuery('SELECT COUNT(a) FROM ' . $table .' a')
            ->getSingleScalarResult();
    }
    
    /**
     * Wrapper function for Doctrine method
     */
    public function begin_transaction()
    {
         $this->_em->getConnection()->beginTransaction(); 
    }
    
    /**
     * Wrapper function for Doctrine method
     */
    public function commit()
    {
          $this->_em->getConnection()->commit();
    }
}
//End of file Model.php