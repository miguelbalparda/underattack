<?php

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS {$this->getTable('underattack/ip')};
CREATE TABLE {$this->getTable('underattack/ip')} (
    ip_id int(11) unsigned NOT NULL auto_increment,
    ip varchar(255) NOT NULL,
    status varchar(255) NOT NULL,
    access_count int(1) NOT NULL,
    PRIMARY KEY (ip_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();
