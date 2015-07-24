<?php
require_once "response/jssdk.php";
$jssdk = new JSSDK('wxe54a995e512e8047', 'ff3145e4a90aac2c4dc0a4eadb8997b0');
$signPackage= $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bello WeChat~!</title>
</head>
<body>
<div style="display:none"><img src="img/logo.png" alt=""/></div>
<!-- <p> Bello~ WeChat~!</p>-->
<br/>
<p id="anchor"></p>
<br/>
<!--<button onclick="chooseImage()">选择图片</button>
<br/>
<button onclick="uploadImage()">上传图片</button>
<br/>
<button onclick="downloadImage()">下载图片</button>
<br/>
<button onclick="previewImage()">预览图片</button>

<br/>

<button onclick="forWardToMoment()">分享到朋友圈</button>-->

</body>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/Bello.js"></script>
<script type="text/javascript">
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */

  wx.config({
      debug: true,
      appId: '<?php echo $signPackage["appId"];?>',
      timestamp: <?php echo $signPackage["timestamp"];?>,
      nonceStr: '<?php echo $signPackage["nonceStr"];?>',
      signature: '<?php echo $signPackage["signature"];?>',
      jsApiList: [
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

  function uploadImage(){
      if (localIdArray.length == 0) {
          alert('请先使用 chooseImage 接口选择图片');
          return;
      }
      var i = 0, length = localIdArray.length;
      function upload() {
          wx.uploadImage({
              localId: localIdArray[i],
              success: function (res) {
                  i++;
                  alert('已上传：' + i + '/' + length);
                  mediaIdArray.push(res.serverId);
                  $.post("file/saveImage.php",{
                      access_token:access_token,
                      media_id:res.serverId
                  },function(data,status){
                      serverImageUrlArray.push(data);
                  },'text');
                  if (i < length) {
                      upload();
                  }
              },
              fail: function (res) {
                  alert(eval(res));
              }
          });
      }
      upload();
  }

</script>
</html>
