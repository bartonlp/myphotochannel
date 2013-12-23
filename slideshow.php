<?php
define('TOPFILE', $_SERVER['DOCUMENT_ROOT'] . "/siteautoload.php");
if(file_exists(TOPFILE)) {
  include(TOPFILE);
} else throw new Exception(TOPFILE . "not found");

$s->bannerFile = SITE_INCLUDES."/myphotochannelbanner.i.php";
$S = new Tom($s);

$h = array('title'=>'Slideshow Redirect Page', 'banner'=>'<h1>Slide Show Redirect</h1>');

list($top, $footer) = $S->getPageTopBottom($h);
echo <<<EOF
$top
<p>Follow the link on the <a href="/">Home Page</a></p>
<p>Link to the current version of the <a href="/slideshow-front-end.php">Slide Show</a></p>
$footer
EOF;
?>