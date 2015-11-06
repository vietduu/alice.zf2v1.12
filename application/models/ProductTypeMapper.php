<?php

class Application_Model_ProductTypeMapper
{
	protected $_dbTable;

	public function setDbTable($dbTable)
	{
		if (is_string($dbTable)){
			$dbTable = new $dbTable();
		}

		if (!$dbTable instanceof Zend_Db_Table_Abstract){
			throw new Exception("Invalid table gateway provided");
		}

		$this->_dbTable = $dbTable;

		return $this;
	}

	public function getDbTable()
	{
		if (null === $this->_dbTable){
			$this->setDbTable("Application_Model_DbTable_ProductType");
		}

		return $this->_dbTable;
	}
	
	public function save(Application_Model_ProductType $productType){
		$data = array(
			"id"	=> $productType->getId(),
			"name"	=> $productType->getName(),
		);

		if (null === ($id = $productType->getId())){
			unset($data["id"]);
			$this->getDbTable()->insert($data);
		} else {
			$this->getDbTable()->update($data, array("id = ?" => $id));
		}
	}

	public function find($id, Application_Model_ProductType $productType){
		$result = $this->getDbTable()->find($id);

		if (0 == count($result)){
			return;
		}

		$productType->setId($result->getId())
					->setName($result->getName());
	}

	public function fetchAll(){
		$result = $this->getDbTable()->fetchAll();
		
		$entries = array();

		foreach($result as $row){
			$entry = new Application_Model_ProductType();
			$entry->setId($row->id)
				  ->setName($row->name);
			$entries[] = $entry;
		}

		return $entries;
	}

}

