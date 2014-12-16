<?php
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('articles')};
CREATE TABLE {$this->getTable('articles')} (
  `articles_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `short_desc` text NOT NULL default '',
  `long_desc` text NOT NULL default '',
  `status` tinyint(2) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`articles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();
?>





