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
 * Medvslav_Paym form fields block (for checkout)
 *
 * @category    Medvslav
 * @package     Medvslav_Paym
 * @author      Medvslav
 */
class Medvslav_Paym_Block_Form_Mypaymentmethod extends Mage_Payment_Block_Form
{
  protected function _construct()
  {
    parent::_construct();
    $this->setTemplate('medvslav_paym/form/mypaymentmethod.phtml');
  }
}
