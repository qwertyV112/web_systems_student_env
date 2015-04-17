<?php

use Phinx\Migration\AbstractMigration;

class CreateOrder extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_goods` int(11) DEFAULT NULL,
  `val_order` int(11) DEFAULT NULL,
  `datee` datetime DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `date_val` datetime DEFAULT NULL,
  `date_final` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `order_fk1` (`id_user`),
  KEY `order_fk2` (`id_goods`),
  KEY `order_fk3` (`id_operator`),
  KEY `id_user_2` (`id_user`),
  KEY `id_goods` (`id_goods`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=963 ;
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