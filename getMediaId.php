<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/26/15
 * Time: 12:39 AM
 */
$mi=$_POST['media_id'];

$milog=fopen("mi.log",'w');
fwrite($milog,$mi);

echo '';
?>