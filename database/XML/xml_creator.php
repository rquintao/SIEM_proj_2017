<?php
$myFile = $BASE_DIR .'xml/rss.xml';
$fh = fopen($myFile, 'w') or die("can't open file");

$rss_txt .= '<?xml version="1.0" encoding="utf-8"?>';
$rss_txt .= "<rss version='2.0'>";
$rss_txt .= '<produtos>';

include($BASE_DIR .'database/products.php');

$result = getAllProducts();	

foreach ($result as $key => $produto) {
	 $rss_txt .= '<item>';
	 
	 $rss_txt .= '<id>';
	 $rss_txt .= $produto['id'];
	 $rss_txt .= '</id>';

	 $rss_txt .= '<nome>';
	 $rss_txt .= $produto['nome'];
	 $rss_txt .= '</nome>';

	 $rss_txt .= '</item>';
}


$rss_txt .= '</produtos>';
$rss_txt .= '</rss>';

fwrite($fh, $rss_txt);
fclose($fh);
?>