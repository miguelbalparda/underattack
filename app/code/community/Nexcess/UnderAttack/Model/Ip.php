<?php


class Nexcess_UnderAttack_Model_Ip extends Mage_Core_Model_Abstract
{
    
    public function _construct()
    {
        parent::_construct();
        $this->_init('underattack/ip');
    }


}
