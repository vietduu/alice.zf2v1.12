<?php

class Application_Model_DbTable_GeneralProduct extends Zend_Db_Table_Abstract
{
    protected $_name = 'general_product';

    protected $_dependentClass = array('Application_Model_DbTable_Images');

    protected $_referenceMap = array(
        'ProductTypeRef' => array(
            'columns' => 'product_type_fk',
            'refTableClass' => 'Application_Model_DbTable_ProductType',
            'refColumns' => 'id'
            ),
        'InvoiceTypeRef' => array(
            'columns' => 'invoice_type_fk',
            'refTableClass' => 'Application_Model_DbTable_InvoiceType',
            'refColumns' => 'invoice_type_id'
            ),
        'DescriptionRef' => array(
            'columns' => 'description_fk',
            'refTableClass' => 'Application_Model_DbTable_Description',
            'refColumns' => 'description_id'
            )
        );
}