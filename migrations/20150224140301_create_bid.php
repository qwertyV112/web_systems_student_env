<?php

use Phinx\Migration\AbstractMigration;

class CreateBid extends AbstractMigration
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
           CREATE TABLE IF NOT EXISTS `bid` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_goods` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `id_manager` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bid_fk1` (`id_goods`),
  KEY `bid_fk2` (`id_manager`)
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