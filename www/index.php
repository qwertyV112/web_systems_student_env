<?

require_once 'auto_include.php';
$includ = new Avto_include();
$includ->Include_all();
Routing::Analysis($_SERVER['REQUEST_URI']);
?>
