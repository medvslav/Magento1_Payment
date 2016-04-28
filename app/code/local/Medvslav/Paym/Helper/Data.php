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
 * Medvslav_Paym default helper
 *
 * @category    Medvslav
 * @package     Medvslav_Paym
 * @author      Medvslav
 */
class Medvslav_Paym_Helper_Data extends Mage_Core_Helper_Abstract
{
  function getPaymentGatewayUrl() 
  {
      //Here have to be the URL of the Payment Method Gateway 
      //(This is the imitation of working the Gateway) 
      return Mage::getUrl('mypaymentmethod/payment/gateway', array('_secure' => false));
  }
}
