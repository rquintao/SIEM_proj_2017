<?php
$myFile = $BASE_DIR .'listaprodutos.txt';
$fh = fopen($myFile, 'w') or die("can't open file");




$result = getAllProductsSearch();	

foreach ($result as $key => $produto) {

	 $rss_txt .= $produto['id'];
	 $rss_txt .= '/';
	 $rss_txt .= $produto['nome'];
	 $rss_txt .= '/';

	 
}


fwrite($fh, $rss_txt);
fclose($fh);
?>