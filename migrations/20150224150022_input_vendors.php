<?php

use Phinx\Migration\AbstractMigration;

class InputVendors extends AbstractMigration
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
INSERT INTO `vendors` (`id`, `name`) VALUES
(1, 'BlackData'),
(2, 'Cap Gemini'),
(3, 'Mlaha Karpa'),
(4, 'Sync Health'),
(5, 'Roussel'),
(6, 'Bracom'),
(7, 'Pitt and Cromwell Training'),
(8, 'Datanamic Solutions BV'),
(9, 'Spyglass'),
(10, 'EMI Music'),
(11, 'MCFR Payment Systems'),
(12, 'Elonco Consultancy'),
(13, 'Spencer and Jagger Finance'),
(14, 'Van Tonen Woonwinkel'),
(15, 'KPPP Systems'),
(16, 'Ulena Tech'),
(17, 'UStep'),
(18, 'Cisco Systems'),
(19, 'BWise'),
(20, 'RTS Group'),
(21, 'BetterOffice'),
(22, 'Cnet'),
(23, 'Briflex'),
(24, 'Sanofi'),
(25, 'Eetapa Tech'),
(26, 'Compuserve'),
(27, 'TopData'),
(28, 'NIBC Bank'),
(29, 'Grolsch'),
(30, 'Russell and Richards Data Solutions'),
(31, 'Carey and Stewart IT Services'),
(32, 'Saticom'),
(33, 'Symantec'),
(34, 'BASF'),
(35, 'Fenomen'),
(36, 'Sapanda.com'),
(37, 'Bank Labouchere'),
(38, 'Renault'),
(39, 'Organon'),
(40, '3Com'),
(41, 'Open Text'),
(42, 'Verity'),
(43, 'Unisol Paneel'),
(44, 'Vienna Bank'),
(45, 'Volkswagen AB'),
(46, 'MossTech'),
(47, 'Russell and Pitt Finance'),
(48, 'Zatimos'),
(49, 'Cascade Communications'),
(50, 'Credit Suisse'),
(51, 'Djong'),
(52, 'Nemenens'),
(53, 'Njongo Oil'),
(54, 'KHTR Consultancy'),
(55, 'Calder Worx corp'),
(56, 'Niops Software'),
(57, 'Mio Architecture'),
(58, 'Van Houweningen Ass.'),
(59, 'Van Ooyen Taxi'),
(60, 'U.S. Order'),
(61, 'Devote Informatics'),
(62, 'Netmanage Inc.'),
(63, 'Inbox Solutions'),
(64, 'UPC'),
(65, 'VOF De Vlinder'),
(66, 'Hassefras BV'),
(67, 'Glaxo'),
(68, 'Akwalampa Uniel'),
(69, 'Microput'),
(70, 'Wehkamp BV'),
(71, 'Wang Computers'),
(72, 'Squibb'),
(73, 'Van Walen Advies'),
(74, 'Van Vliesman Woonwinkel'),
(75, 'Djing Aero'),
(76, 'Gandalf Technologies'),
(77, 'Hill Worx co'),
(78, 'Premenos Technology'),
(79, 'Satimos'),
(80, 'Siemens DE'),
(81, 'Ebena Tech'),
(82, '7-Eleven'),
(83, 'Dacia'),
(84, 'Meinders Meubelen'),
(85, 'SkySoft'),
(86, 'BristolMyers Squibb'),
(87, 'Raptor Systems'),
(88, 'Laterna Corp.'),
(89, 'Notalya Consultancy'),
(90, 'Zjongo Aero'),
(91, 'Check Point Software Technologies'),
(92, 'SAAB'),
(93, 'Zotoca'),
(94, 'JetAir'),
(95, 'Djongo'),
(96, 'Eedasa Consultancy'),
(97, 'BigWorks co'),
(98, 'U.S. Robotics'),
(99, 'Calder Systems bv'),
(100, 'WinnerConsult');
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