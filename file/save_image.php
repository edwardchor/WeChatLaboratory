<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/22/15
 * Time: 1:58 PM
 */
global $signPackage;
$url=$_POST["url"];
$imgstr=file_get_contents($url);
$imgf=fopen("../img/newImg.jpg",'w');
fwrite($imgf,$imgstr);
fclose($imgf);

?>