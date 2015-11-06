<?php

class Application_Model_DbTable_GeneralProduct extends Zend_Db_Table_Abstract
{
    protected $_name = 'general_product';

    public function getGeneralProduct($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row " . $id);
        }
        return $row->toArray();
    }

    public function addGeneralProduct($name){
        $data = array(
            'name' => $name,
        );
        $this->insert($data);
    }

    public function updateGeneralProduct($id, $name){
        $data = array(
          'name' => $name,
        );

        $this->update($data,'id = '.(int)$id);
    }

    public function deleteGeneralProduct($id){
        $this->delete('id = ' . (int)$id);
    }
}