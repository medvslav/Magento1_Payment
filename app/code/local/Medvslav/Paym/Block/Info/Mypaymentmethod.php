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
 * Medvslav_Paym payment method information block (for checkout) 
 *
 * @category    Medvslav
 * @package     Medvslav_Paym
 * @author      Medvslav
 */
class Medvslav_Paym_Block_Info_Mypaymentmethod extends Mage_Payment_Block_Info
{
  protected function _prepareSpecificInformation($transport = null)
  {
    if (null !== $this->_paymentSpecificInformation) 
    {
      return $this->_paymentSpecificInformation;
    }
     
    $data = array();
    if ($this->getInfo()->getMyFieldOne()) 
    {
      $data[Mage::helper('payment')->__('My Field One')] = $this->getInfo()->getMyFieldOne();
    }
     
    if ($this->getInfo()->getMyFieldTwo()) 
    {
      $data[Mage::helper('payment')->__('My Field Two')] = $this->getInfo()->getMyFieldTwo();
    }
 
    $transport = parent::_prepareSpecificInformation($transport);
     
    return $transport->setData(array_merge($data, $transport->getData()));
  }
}
