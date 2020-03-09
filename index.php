<?php
require_once'phpqrcode/qrlib.php';
$path='images/';
$file=$path.uniqid().".png";

$text="something  else";
QRcode::png($text,$file,'L',10,2);
echo '<center><img src="'.$file.'"></center>';
?>
