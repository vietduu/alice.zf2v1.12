<?php

class Application_Model_DbTable_ProductType extends Zend_Db_Table_Abstract
{
    protected $_name = 'product_type';

 /*   public function getProductType($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row " . $id);
        }
        return $row->toArray();
    }

    public function addProductType($name){
        $data = array(
            'name' => $name,
        );
        $this->insert($data);
    }

    public function updateProductType($id, $name){
        $data = array(
          'name' => $name,
        );

        $this->update($data,'id = '.(int)$id);
    }

    public function deleteProductType($id){
        $this->delete('id = ' . (int)$id);
    }*/
}

