# Magento1_Payment
This is Magento 1.x module for payment through the Payment Gateway (the user have to enter addition information into the form fields during checkout).<br />
<br />
There are additional fields in the database table (sales_flat_qoute_payment and sales_flat_order_payment) to store additional information which is entered by the user during the checkout process after selecting this payment method.<br />
This additional information can simply be stored in a database or can be used in the payment process (can be passed to the Payment Gateway).<br />
<br />
After installing this module in the admin panel, the new menu item will appear in the System -> Configuration -> Payment Methods. Its name is "Medvslav PaymentMethod Module".
You can enter the configuration of this payment module here.<br />
<br />
The form has following fields:<br />
- Title<br />
- Enabled (for activating this payment method in the checkout process)<br />
- New order status<br />
- Payment from applicable countries<br />
- Payment from Specific countries<br />
<br />
After installing this module you have to activate this payment method in the configuration.<br />
<br />
The module uses not a real Payment Gateway for the imitation payment process (the user won't get charged).
#
	

