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
 * Medvslav_Paym model
 *
 * @category    Medvslav
 * @package     Medvslav_Paym
 * @author      Medvslav
 */
class Medvslav_Paym_Model_Paymentmethod extends Mage_Payment_Model_Method_Abstract 
{
  protected $_code  = 'medvslav_paym';
  protected $_formBlockType = 'medvslav_paym/form_mypaymentmethod';
  protected $_infoBlockType = 'medvslav_paym/info_mypaymentmethod';
 
  public function assignData($data)
  {
    $info = $this->getInfoInstance();
     
    if ($data->getMyFieldOne())
    {
      $info->setMyFieldOne($data->getMyFieldOne());
    }
     
    if ($data->getMyFieldTwo())
    {
      $info->setMyFieldTwo($data->getMyFieldTwo());
    }
 
    return $this;
  }
 
  public function validate()
  {
    parent::validate();
    $info = $this->getInfoInstance();
    
    $errorMsg = false;
     
    if (!$info->getMyFieldOne())
    {
      $errorCode = 'invalid_data';
      $errorMsg = $this->_getHelper()->__("MyFieldOne is a required field.\n");
    }
     
    if (!$info->getMyFieldTwo())
    {
      $errorCode = 'invalid_data';
      $errorMsg .= $this->_getHelper()->__('MyFieldTwo is a required field.');
    }
 
    if ($errorMsg) 
    {
      Mage::throwException($errorMsg);
    }
 
    return $this;
  }

  public function getOrderPlaceRedirectUrl()
  {
    //The user is redirected to that URL after clicking on the button "Place Order" 
    //The form of the Payment Gateway will be displayed to him
    return Mage::getUrl('mypaymentmethod/payment/redirect', array('_secure' => false));
  }
}
