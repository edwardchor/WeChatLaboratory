<?php
require_once "response/jssdk.php";
$jssdk = new JSSDK("wxd1c57c307f05d877", "f6473b539bf2b74d647350eb1d4fa26b");
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

<div><img src="img/logo.png" alt=""/></div>

<div><img class="showImage" src="" alt=""></div>
 <p> Bello~ WeChat~!</p>

<button>ClickCheck!</button>
<button>Forward~</button>

<span><input type="file"> 上传图片</span>
<br/>

<button onclick="chooseImage()">Upload Image</button>


<br/>


<button onclick="get_image()">Get Image Uploaded</button>

<br/>

<p id="anchor"></p>

<br/>

<button onclick="preview()">Preview</button>
</body>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/wx.js"></script>
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
  var serverId;
  wx.config({
      debug: true,
      appId: '<?php echo $signPackage["appId"];?>',
      timestamp: <?php echo $signPackage["timestamp"];?>,
      nonceStr: '<?php echo $signPackage["nonceStr"];?>',
      signature: '<?php echo $signPackage["signature"];?>',
      jsApiList: ['onMenuShareTimeline',
          'chooseImage',
          'uploadImage',
          'previewImage',
          'downloadImage'
      ]
  });

  function get_image(){
      $.post("file/save_image.php",{access_token:<?php echo $signPackage["access_token"];?>,media_id:serverId},function
(data,status){
          $("#anchor").append("<img src="+data['url']+"/>");
      },"json");

  }


  function prefiew(){
      wx.previewImage({
          current: '', // 当前显示图片的http链接
          urls: [] // 需要预览的图片http链接列表
      });
  }

</script>
</html>
