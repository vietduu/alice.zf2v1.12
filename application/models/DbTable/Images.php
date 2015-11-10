<?php

class Application_Model_DbTable_Images extends Zend_Db_Table_Abstract
{

    protected $_name = 'images';

    protected $_referenceClass = array(
    	'GeneralProductRef' => array(
    	'columns' => 'general_product_fk',
    	'refTableClass' => 'Application_Model_DbTable_GeneralProduct',
    	'refColumns' => 'general_id'
    	)
    );
}

