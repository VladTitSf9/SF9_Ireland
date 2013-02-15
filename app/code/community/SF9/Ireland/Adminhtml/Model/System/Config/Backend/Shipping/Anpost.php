<?php

class SF9_Ireland_Adminhtml_Model_System_Config_Backend_Shipping_Anpost extends Mage_Core_Model_Config_Data
{
    public function _afterSave()
    {
		Mage::getResourceModel('anpost_shipping/carrier_anpost')->uploadAndImport($this);
    }
}
