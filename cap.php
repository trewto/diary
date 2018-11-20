<?php
$string = '';  
for ($i = 0; $i < 3; $i++) {  
    // this numbers refer to numbers of the ascii table (lower case)  
    $string .= chr(rand(97, 122));  
}  
 //
 
$string = rand(10,999).$string;
setcookie('rand_fr_me', $string, time()+30);

$text = $string."+E";
$height = 30;
$width = 150 ;


	if(empty($text)){
		$text=' ';
	}
	if(!$height){
	$height  = 30 ;
	}
	if(!$width){
	$width = ( 15 * strlen($text) )+8 ;
	}
	
  
$dir = 'bootstrap/';  
  
$image = imagecreate($width, $height);  
$white = imagecolorallocate($image, 255, 255, 255);  
  $black = imagecolorallocate($image, 0, 0, 0);  
$color = imagecolorallocate($image, 200, 100, 90); // red  

  //dag
  /*
  for ($x=1; $x<=30; $x++){
	  
	  $x1 = rand(1,100);
	  $y1 =rand(1,100);
	  $x2 =rand(1,100);
	  $y2 =rand(1,100);
	  imageline($image, $x1 , $y1 , $x2 , $y2 , $color );
  }*/
  
  
//imagefilledrectangle($image,0,0,399,99,$white);  
imagettftext ($image, 20, 0, 5, 23, $color, $dir."arial.ttf", $text);  
  
header("Content-type: image/png");  
imagepng($image);  

