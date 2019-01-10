<?php
include_once('../../config/init.php');



$alo=file_get_contents('../../listaprodutos.txt');



$separador = explode("/", $alo);

$x=0;


//get the q parameter from URL
$q=$_GET["q"];

while($separador[$x]){



if ($x % 2 !== 0) {
	
 	if (stripos($separador[$x], $q) !== false){
 		$id = $separador[$x-1];



  		// $hint= "<form action='action_page.php?id='".$separador[$id].">";
 		if ($hint=="") {

		$hint="<a href='".$BASE_URL."pages/products/displayproduct.php?id=".$id."'>" . 
          $separador[$x]. "</a>";
		}
		else{
			$hint=$hint . "<br /><br /><a href='".$BASE_URL."pages/products/displayproduct.php?id=".$id."'>" . 
          $separador[$x]. "</a>";

		}

 	}

}

	$x=$x+1;
 }








 


// Set output to "no suggestion" if no hint was found
// or to the correct values

if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>