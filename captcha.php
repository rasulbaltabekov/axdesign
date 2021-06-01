<?PHP
header("Content-type: image/png");
 
$string = "";
for($i = 0; $i < 3; $i++)
$string .= chr(rand(97, 122));
 
$_SESSION['rand_code'] = $string;
$images = imagecreate (170, 60);
$black = imagecolorallocate($images, 0, 0, 0);
$white = imagecolorallocate($images, 255, 255, 255);
imagettftext($images, 20, 0, 10, 20, $white, "fonts/arial.ttf", $_SESSION['rand_code']);
 
imagegif($images);
imagedestroy($images);
?>

