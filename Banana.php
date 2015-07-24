<?php
require_once "response/jssdk.php";
$jssdk = new JSSDK("wxd1c57c307f05d877", "f6473b539bf2b74d647350eb1d4fa26b");
$signPackage= $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<p class="anchor"></p>
<button onclick="startRecord()">开始录音</button>
<br/>
<button onclick="stopRecord()">停止录音</button>
<br/>
<button onclick="startPlay()">播放录音</button>
<br/>
<button onclick="stopPlay()">停止播放</button>
<br/>
<button onclick="pausePlay()">暂停播放</button>
<br/>
<button onclick="uploadVoice()">上传录音</button>
<br/>
<button onclick="downloadvoice()">下载录音</button>
</body>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/Banana.js"></script>
<script>

    var si='';
    $.get("response/getSignPackage.php",function(data,status){
       si=data.signature;
    });
    wx.config({
        debug: true,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature:si,
        jsApiList: ['onMenuShareTimeline',
            'startRecord',
            'stopRecord',
            'onVoiceRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'onVoicePlayEnd',
            'uploadVoice',
            'downloadVoice'
        ]
    });

    function uploadVoice(){
        if (localvoiceId == '') {
            alert('请先使用 startRecord 接口录制一段声音');
            return;
        }
        wx.uploadVoice({
            localId: localvoiceId,
            success: function (res) {
                alert('上传语音成功，serverId 为' + res.serverId);
                serverVoiceId = res.serverId;
                $.post("file/saveVoice.php",{
                    access_token:'<?php echo $signPackage['access_token'];?>',
                    media_id:res.serverId
                },function(data,status){
                    serverVoiceUrlArray.push(data);
                    $(".anchor").append("<p><?php echo $signPackage['access_token']; ?>&media_id="+res.serverId+"</p>")
                },'text');
            }
        });
    }

</script>
</html>