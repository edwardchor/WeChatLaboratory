<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/22/15
 * Time: 6:05 PM
 */

require_once "../response/jssdk.php";
$jssdk = new JSSDK('wxd1c57c307f05d877', 'f6473b539bf2b74d647350eb1d4fa26b');
$signPackage = $jssdk->GetSignPackage();
$access_token=$signPackage['access_token'];
$url="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$access_token."&media_id=".$_POST["media_id"];
/*
A374Bh3AvHKfxq4hzWJFCVS_7D9EtMYX4i4esJEP4IvPy2XZkFafoBHGEg2yNUgK*/

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

exec('sh /var/www/html/WeChat/voice/generate.sh '.$time.' '.$access_token);

$result=fopen('/var/www/html/WeChat/voice/media_info.txt','r');
$contents = fread($result, filesize ('/var/www/html/WeChat/voice/media_info.txt'));

exec("echo ".$contents." >> /var/www/html/WeChat/log.txt");
echo $contents;
?>