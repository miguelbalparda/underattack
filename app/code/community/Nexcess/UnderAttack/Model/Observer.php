<?php


class Nexcess_UnderAttack_Model_Observer extends Mage_Core_Model_Abstract
{
    
    public function areUaHuman()
    {
        $cookie = Mage::getModel('core/cookie');
        if ($cookie->get('underattack_allowed')) {
            return;
        } else {
            $this->checkIfHuman();
        }
        die(a);
    }

    protected function checkIfHuman() {

        $ip = Mage::getModel('underattack/ip');
        if(something_unusuall) {
            if ($ip->loadByAttribute('ip', Mage::helper('core/http')->getRemoteAddr())) {
                $ip->setAccessCount($ip->getAccessCount()+1);
                $ip->save();
            } else {
                $ip->setIp(Mage::helper('core/http')->getRemoteAddr());
                $ip->setAccessCount(1);
                $ip->save();
            }
            header('HTTP/1.0 403 Forbidden');
            die('You are not allowed to access this file.'); 
        } else {
            $cookie->set('underattack_allowed',true, 60*60);
        }
        return;
    }


}
