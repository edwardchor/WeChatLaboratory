<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/22/15
 * Time: 1:58 PM
 */
$url="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$_POST['access_token']."&media_id=".$_POST["media_id"];

$imageStream=file_get_contents($url);
$time=time();
$imageName='../img/'.$time.'.jpg';
$imageFile=fopen($imageName,'w');
fwrite($imageFile,$imageStream);
fclose($imageFile);
echo "http://utopia.polarsky.cc/WeChat/voice/".$time.".jpg";
?>