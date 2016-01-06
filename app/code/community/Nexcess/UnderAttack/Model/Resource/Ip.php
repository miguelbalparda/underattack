<?php

class Nexcess_UnderAttack_Model_Resource_Ip extends Mage_Core_Model_Resource_Db_Abstract
{

    protected function _construct()
    {
        $this->_init('underattack/ip', 'ip_id');
    }

}
