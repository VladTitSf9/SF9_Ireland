<?php

/**
 * Shipping data helper
 */
class SF9_Ireland_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getCustomerTrackingUrl($trackingNumber){
        $template = 'https://track.anpost.ie/TrackingResults.aspx?rtt=0&site=website&trackcode=%s';
        return $this->__($template, $trackingNumber);
    }   
}
