<?php
/**
 * Medvslav_Paym extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Medvslav
 * @package        Medvslav_Paym
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * News2 module install script
 *
 * @category    Medvslav
 * @package     Medvslav_Paym
 * @author      Medvslav
 */

$this->startSetup();
$connection = $this->getConnection();
$connection->addColumn($this->getTable('sales/quote_payment'), 'my_field_one', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 255,
    'nullable' => false,
    'comment' => 'My field 1'
    )
);
$connection->addColumn($this->getTable('sales/quote_payment'), 'my_field_two', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT, 
    'length' => 255,
    'nullable' => false,
    'comment' => 'My field 2'
    )
);
$connection->addColumn($this->getTable('sales/order_payment'), 'my_field_one', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 255,
    'nullable' => false,
    'comment' => 'My field 1'
    )
);
$connection->addColumn($this->getTable('sales/order_payment'), 'my_field_two', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT, 
    'length' => 255,
    'nullable' => false,
    'comment' => 'My field 2'
    )
);

$this->endSetup();
