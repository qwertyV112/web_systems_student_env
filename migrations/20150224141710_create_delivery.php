<?php

use Phinx\Migration\AbstractMigration;

class CreateDelivery extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_goods` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `id_bid` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_vendors` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_fk1` (`id_goods`),
  KEY `delivery_fk2` (`id_bid`),
  KEY `delivery_fk3` (`id_vendors`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3001 ;
SQL;
        $this->execute($sql);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}