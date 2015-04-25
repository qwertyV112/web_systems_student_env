<?

require_once 'auto_include.php';
$includ = new Avto_include();
$includ->Include_all();

Review::setActive(New LimeTheme());
//$page_class = Review::GetView('Page');
//$page = new $page_class($content);
//echo $page->Show();
Routing::Analysis($_SERVER['REQUEST_URI']);
?>
