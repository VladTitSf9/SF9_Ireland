<?php

class SF9_Ireland_Adminhtml_Model_System_Config_Source_Shipping_Anpost
{
    public function toOptionArray()
    {
		
        $tableRate = Mage::getSingleton('anpost_shipping/carrier_anpost');
        $arr = array();
        foreach ($tableRate->getCode('condition_name') as $k=>$v) {
            $arr[] = array('value'=>$k, 'label'=>$v);
        }
        return $arr;
    }
}
