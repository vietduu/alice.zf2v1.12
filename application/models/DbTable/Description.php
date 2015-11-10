<?php

class Application_Model_DbTable_Description extends Zend_Db_Table_Abstract
{

    protected $_name = 'description';

    protected $_dependentTables = array('Application_Model_DbTable_GeneralProduct');
}

