<?php
$ancho=100;
$alto=30;

$imagen=imageCreate($ancho,$alto);

$amarillo=ImageColorAllocate($imagen,255,255,255);
ImageFill($imagen,0,0,$amarillo);
$color_numero=ImageColorAllocate($imagen, 255,5,0);
$valoraleatorio=rand(10,999);//mientras mayor se el numeo de datos sera el numeo mostrado(100000,9999999)
session_start();
$_SESSION['numeroaleatorio']=$valoraleatorio;

ImageString($imagen,5,25,5,$valoraleatorio,$color_numero);
/*
esto es para el tachado de numeos
for($c=0;$c<=5;$c++)
{
$x1=rand(0,$ancho);
$y1=rand(0,$alto);

$x2=rand(0,$ancho);
$y2=rand(0,$alto);
ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo);
}
*/
Header ("Content-type: image/jpeg");
ImageJPEG ($imagen);
ImageDestroy($imagen);
?>
