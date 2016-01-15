<?php
include_once('db.php');

if(!isset($_GET['cid']))
{
    echo "Sorry no id found";
    exit();
}


$row=mysql_fetch_array(mysql_query("select c_tot from counter where c_id='".$_GET['cid']."'"));

if(!$row)
{
 echo "Sorry no id found";
    exit();   
}
  $fnt[44]="alex";
for ($i=45;$i<90;$i++){
    $fnt[$i]="fnt (".$i.")";
}
$tot=$row['c_tot'];
$tot=$tot+1;
mysql_query("update counter set c_tot=".$tot." where c_id='".$_GET['cid']."'");
$im = imagecreatetruecolor(150, 25);

imagealphablending($im, false);
imagesavealpha($im, true);
putenv('GDFONTPATH=' . realpath('.'));

// Name the font to be used (note the lack of the .ttf extension)
$font = 'c';
// Create colors and draw transparent background
$trans = imagecolorallocatealpha($im, 255, 255, 255, 127);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 149, 24, $trans);
$t=str_pad($tot, 10, '0', STR_PAD_LEFT);

// Bad text
imagettftext($im, 12, 0, 1, 20, $black, $fnt[$_GET['fnt']], $t);

// Good text

//imagealphablending($im, true);
//imagettftext($im, 22, 0, 50, 150, $black, 'alex.ttf', 'Good: Oj Pj wj');

/*** You'll need a copy of the arial.ttf font file in the same location as the PHP script ***/

// Output PNG
header("Content-type: image/png");
imagepng($im);
//imagedestroy($im);
?>
