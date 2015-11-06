<?php

/**
 * Class Application_Model_ProductType
 */
class Application_Model_ProductType
{
	protected $_id;
	protected $_name;

    public function __construct(array $option = null){
        if (is_array($option)){
            $this->setOptions($option);
        }
    }

    public function setOptions(array $option = null){
        $methods = get_class_methods($this);
        foreach ($option as $key => $value){
            $method = "set" . ucfirst($key);
            if (in_array($method, $methods)){
                $this->$method($value);
            }
        }
        return $this;
    }


    public function __set($name, $value){
        $method = "set" . $name;
        if (("mapper" == $name) || !method_exists($this, $method)){
            throw new Exception("Invalid product type property");
        }
        $this->$method($value);
    }

    public function __get($name){
        $method = "get" . $name;
        if (("mapper" == $name) || !method_exists($this, $method)) {
            throw new Exception("Invalid product type property");
        }
        return $this->$method();
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = (string) $name;
        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = (int) $id;
        return $this;
    }
}

