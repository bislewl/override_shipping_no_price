<?php
class overrideShippingNoPriceObserver extends base {

	function overrideShippingNoPriceObserver() {
		if(CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_ENABLED == 'true') {
			global $zco_notifier;
                        $zco_notifier->attach($this, array('NOTIFY_SHIPPING_MODULE_ENABLE'));
		}
	}
	
	function update(&$class, $eventID, $paramsArray) {
		global $order,$messageStack;
                if(CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_ENABLED == 'true') {
                    		
			$eligible_products_to_be_checked = CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_PRODUCTS;
			$eligible_products = explode(',', $eligible_products_to_be_checked);

			$products = $_SESSION['cart']->get_products();
			$eligible_product_found = 0;
                        
			
				foreach ($products as $product) {
					if (in_array((int)$product['id'], $eligible_products)) {
						$eligible_product_found = 1;
                                                
						break;                                                                 
					}                    
                                        else{
                                            
                                        }
				}
                                
				if ($eligible_product_found == 1) {
					define('MODULE_SHIPPING_FREESHIPPER_TEXT_TITLE', CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_TITLE);
                                        define('MODULE_SHIPPING_FREESHIPPER_TEXT_DESCRIPTION', CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_DESCRIPTION);
                                        define('MODULE_SHIPPING_FREESHIPPER_TEXT_WAY', CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_WAY);
				} else {
                                        define('MODULE_SHIPPING_FREESHIPPER_TEXT_TITLE', 'FREE SHIPPING!');
                                        define('MODULE_SHIPPING_FREESHIPPER_TEXT_DESCRIPTION', 'FREE SHIPPING');
                                        define('MODULE_SHIPPING_FREESHIPPER_TEXT_WAY', 'No Delivery Charge');
				}
			
		}
	}
}
// eof
