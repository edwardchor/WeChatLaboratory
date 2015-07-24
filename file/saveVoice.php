<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/22/15
 * Time: 6:05 PM
 */
$url="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$_POST['access_token']."&media_id=".$_POST["media_id"];

$voiceStream=file_get_contents($url);
$time=time();
$voiceName='/var/www/html/WeChat/voice/'.$time.'.amr';
$voiceFile=fopen($voiceName,'w');
fwrite($voiceFile,$voiceStream);
fclose($voiceFile);
$tempFile='/var/www/html/WeChat/voice/'.$time.'.wav';
$tempFilex='/var/www/html/WeChat/voice/'.$time.'x.wav';
$finalFilex='/var/www/html/WeChat/voice/'.$time.'x.amr';
$voiceX='/var/www/html/WeChat/voice/'.$time.'x.amr';



$transForm='ffmpeg -i '.$voiceName.' '.$tempFile;
$process='soundstretch '.$tempFile.''.$tempFilex.' -pitch=+7.5 -tempo=+50';
$transFormx='ffmpeg -i '.$tempFilex.' '.$finalFilex;
$access_token=$_POST['access_token'];
exec('sh /var/www/html/WeChat/voice/generate.sh '.$time.' '.$access_token);

$result=fopen('/var/www/html/WeChat/voice/media_info.txt','r');
$contents = fread($result, filesize ('/var/www/html/WeChat/voice/media_info.txt'));

exec('echo '."'".$contents."'"." >> /var/www/html/WeChat/log.txt");
echo $contents;
?>