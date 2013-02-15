<?php
	class SF9_Ireland_Model_Observer{

		public function update_address_format($observer){

			$event = $observer->getEvent();
			$type = $event->getType();
			$address = $event->getAddress();
			$regions = Mage::getModel('directory/country')->loadByCode('IE')->getRegions();

			foreach($regions as $region){
				if($region->getData('region_id') == $address->getRegionId()){
					$region_name = $region->getDefaultName();
					break;
				}
			}
            
			if(isset($region_name)){
				$address->setRegion($region_name);
			}

			$storeid = Mage::app()->getStore()->getId();

			if(strpos(Mage::helper('core/url')->getCurrentUrl(), 'checkout/onepage') === FALSE){
				$format = Mage::getConfig()->getNode('default/ireland/address/format');
				$type->setDefaultFormat($format);
			}
		}
    }