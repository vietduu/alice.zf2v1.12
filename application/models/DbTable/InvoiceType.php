<?php

class Application_Model_DbTable_InvoiceType extends Zend_Db_Table_Abstract
{

    protected $_name = 'invoice_type';

    protected $_dependentTables = array('Application_Model_DbTable_GeneralProduct');
    
}

