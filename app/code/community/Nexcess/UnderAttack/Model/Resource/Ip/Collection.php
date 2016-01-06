<?php

class Nexcess_UnderAttack_Model_Resource_Ip_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    protected function _construct()
    {
        $this->_init('underattack/ip');
    }

}
