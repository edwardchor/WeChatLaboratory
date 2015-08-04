<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>小黄人变声器</title>


	<!-- CSS FILES -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/pace.preloader.css" rel="stylesheet">
	<link href="css/slidingmenu.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/home-slider.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/naz.responsive.css" rel="stylesheet">

	<script src="js/modernizr.custom.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="bootstrap/js/html5shiv.js"></script>
	<script src="bootstrap/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<!-- START SLIDING NAVIGATION -->
<nav class="menu" id="sm">
	<div class="sm-wrap">

		<i class="icon-remove menu-close"></i>
		<p class="site-name">EDC</p>
		<a class="scroll-link"  href="#home">Home</a>
		<a class="scroll-link"  href="#services">你的世界</a>
		<a class="scroll-link"  href="#services">变身小黄人</a>
		<a class="scroll-link"  href="#services">照片识别年龄</a>

	</div>
	<!-- NAVIGATION TRIGGER BUTTON -->
	<div id="sm-trigger"></div>
</nav>
<!-- END OF SLIDING NAVIGATION -->

<!-- START MASTER WRAP -->
<section id="mastwrap" class="mast-wrap sliding">




	<!-- START MASTER HEAD -->
	<header id="masthead" class="clearfix trans-header">
	</header>
	<!-- END OF MASTER HEAD -->




	<!-- START HOME SECTION -->
	<section id="home" class="home-section page-section highlight">
		<section class="inner-section">
			<div class="home-carousel">
				<div id="home-owl-demo" class="home-owl">
					<div class="item">
						<div class="bg1 text-center">
							<div class="shadow">
								<div class="home-owl-content col-md-offset-2 col-md-8">
									<div class="heading">
										<h1>BELLO~</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="bg2 text-center">
							<div class="shadow">
								<div class="home-owl-content col-md-offset-2 col-md-8">
									<div class="heading">
										<h1>C'est Banana</h1>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="bg3 text-center">
							<div class="shadow">
								<div class="home-owl-content col-md-offset-2 col-md-8">
									<div class="heading">
										<h1>Miam Miam</h1>
									</div>
									<div class="motto">
										<span class="text">EASY CUSTOMIZE</span><span class="separator"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="scroll-link" data-soffset="50" href="#about">
				<div class="mouse-icon">
					<div class="scroll-down"></div>
				</div>
			</a>
		</section>
	</section>



	<section id="article1" class="article1-about padb60 prehint" >
		<div class="container">
			<div class="row">

				<article class="col-md-4 text-left intro">
					<h3>需要先关注测试公众号噢~!</h3>
					<p>扫码关注:</p>
				</article>
				<div class="col-md-4" >
					<img id="QRCode" src="img/0.jpeg"/>
				</div>


			</div>
		</div>
	</section>
	<!-- END OF HOME SECTION -->
	<!-- START MAIN NAVIGATION -->
	<section id="navigation" class="navigation-section page-section">
		<section class="inner-section">
			<section class="menu-container">
				<div class="row">
					<article class="col-md-12 text-center">
						<div class="navigation-container">
							<div class="logo pull-left">

							</div>
							<div class="navigation-right">
								<ul>
									<li><a id="home-linker" class="nav-active scroll-link" href="#home">home</a></li>
									<li><a id="services-linker" class="scroll-link" href="#services">你的世界</a></li>
									<li><a id="portfolio-linker" class="scroll-link" href="#services">变身小黄人</a></li>
									<li><a id="contact-linker" class="scroll-link" href="#services">照片识别年龄</a></li>
								</ul>
							</div>
						</div>
					</article>
				</div>
			</section>
		</section>
	</section>
	<!-- END OF MAIN NAVIGATION -->
	<!-- START ARTICLE1 -->

	<!-- END OF START ARTICLE1 -->
	<!-- START SERVICES SECTION -->
	<section id="services" class="page-section padb60">
		<section class="inner-section">
			<section class="container">
				<div class="row">
					<article class="col-md-12 text-center">
						<div class="section-heading margint60 marginb40">
							<h2>点击录音</h2>
							<div class="separator-line"></div>
						</div>
					</article>
				</div>
			</section>
		</section>
		<section class="inner-section">
			<section class="container">
				<div class="row">
					<div class="services-box-small col-md-6">
						<div class="services-content">
							<div class="text-content-services">
								<h4>点击录音</h4>
								<a onclick="startRecord()"><i class="fa fa-microphone"></i></a>
								<p>最长时间为20s,到时系统自动停止录音</p>
							</div>
						</div>
					</div>
					<div class="services-box-small col-md-6">
						<div class="services-content">
							<div class="text-content-services">
								<h4>停止录音</h4>
								<a onclick="stopRecord()"><i class="fa fa-stop"></i></a>
								<p>录音会自动上传到远程系统进行处理</p>
							</div>
						</div>
					</div>
					<div class="services-box-small col-md-6">
						<div class="services-content">
							<div class="text-content-services">
								<h4>播放小黄人版的你</h4>
								<a id="download"><i class="fa fa-star"></i></a>
								<p>系统处理完成的小黄人声音效果(稍等一会儿噢,给服务器一点时间:P )</p>
							</div>
						</div>
					</div>
					<div class="services-box-small col-md-6">
						<div class="services-content">
							<!--<div class="text-content-services">
								<h4>小黄人爱德华的声音</h4>
								<a onclick="playMySelf()"><i class="fa fa-magic"></i></a>
								<p>嗯,自己录了一段- -</p>
							</div>-->
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- END OF START SERVICES SECTION -->
	<!-- START TEAM SECTION -->
	<section id="team" class="team-section page-section padb60">
		<!-- START INNER SECTION -->
		<section class="inner-section">
			<section class="container">
				<div class="row">
					<article class="col-md-12 text-center">
						<div class="section-heading margint60 marginb40">
							<h2>小黄人三人组</h2>
							<div class="separator-line"></div>
						</div>
					</article>
				</div>
			</section>
		</section>
		<!-- END OF INNER SECTION -->

		<!-- START INNER SECTION -->
		<section class="inner-section">
			<section class="container">
				<div class="row">
					<article class="col-md-12 text-center">
						<div class="team-container">
							<div id="team-owl-demo" class="team-owl">
								<div class="item">
									<div class="team-pack">
										<img class="img-responsive" src="img/kevin.png" alt="" title="">
										<h2>凯文</h2>
										<h3>个最高 &amp; 扛把子?</h3></div>
								</div>
								<div class="item">
									<div class="team-pack">
										<img class="img-responsive" src="img/stuart.png" alt="">
										<h2>斯图尔特</h2>
										<h3>中分头的花花公子</h3>
									</div>
								</div>
								<div class="item">
									<div class="team-pack">
										<img class="img-responsive" src="img/bob.png" alt="">
										<h2>鲍勃</h2>
										<h3>萌萌嗒小小只</h3>
									</div>
								</div>

							</div>
						</div>
					</article>
				</div>
			</section>
		</section>
		<!-- END OF INNER SECTION -->
	</section>
	<!-- END OF TEAM SECTION -->


	<section id="article1" class="article1-about padb60">
		<div class="container">
			<div class="row">
				<div class="col-md-4" >
					<img id="bello" src="img/bello.jpg" />
				</div>


				<article class="col-md-4 text-left intro">
					<h3>个人工作室</h3>
					<p>这里是没牙的爱德华先森的个人demo发布场所</p>
					<p>You are free to enjoy every nice and cute stuff~!</p>
					<p ><a href="weixin://addfriend/edchorsutopia">欢迎扫码关注我的平台:UTOPIA</a></p>
					<p class="anchor" ></p>
				</article>
				<div class="col-md-4" >
					<img id="QRCode" src="img/qrcode_for_gh_44b3e0c6701b_258.jpg"/>
				</div>


			</div>
		</div>
	</section>
</section>
<!-- END OF MASTER WRAP -->


<!-- JS FILES -->
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/SmoothScroll.js" type="text/javascript"></script>
<script src="js/bootstrap.js" ></script>
<script src="js/pace.min.js"></script>
<script src="js/device.min.js" ></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/parallax-init.js" ></script>
<script src="js/slidingmenu.js" ></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/scroll.js"></script>
<script src="js/jquery.flexslider.js" ></script>
<script src="js/jquery.bxslider.min.js" ></script>
<script src="js/form-validation.js" ></script>
<script src="js/home-slider.js" ></script>
<script src="js/main.js" ></script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<!--<script src="js/Bello.js"></script>-->

<div class="invisible">
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
		<?php
    require_once "response/jssdk.php";
    $jssdk = new JSSDK('wxd1c57c307f05d877', 'f6473b539bf2b74d647350eb1d4fa26b');
    $signPackage= $jssdk->GetSignPackage();
    ?>

  		var localvoiceIdX='';
		var serverVoiceIdX='';
		var localvoiceId='';
		var serverVoiceId='';
		var stoped;
		wx.config({
			debug: false,
			appId: '<?php echo $signPackage["appId"];?>',
			timestamp: <?php echo $signPackage["timestamp"];?>,
			nonceStr: '<?php echo $signPackage["nonceStr"];?>',
			signature: '<?php echo $signPackage["signature"];?>',
			jsApiList: [
				'onMenuShareTimeline',
				'onMenuShareAppMessage',
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
		wx.error(function(res){
			alert(res.errMsg);
		});

		wx.ready(function(){
			wx.checkJsApi({
				jsApiList: [
					'startRecord',
					'stopRecord',
					'onVoiceRecordEnd',
					'playVoice',
					'pauseVoice',
					'stopVoice',
					'onVoicePlayEnd',
					'uploadVoice',
					'downloadVoice'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
				success: function(res) {
					// 以键值对的形式返回，可用的api值true，不可用为false
					// 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
				}
			});

			wx.onVoicePlayEnd({
				complete: function (res) {
					/*            alert('录音（' + res.localId + '）播放结束');*/
				}
			});



			wx.onMenuShareTimeline({
				title:"小黄人变声器!化身小黄人萌翻朋友圈~!!", // 分享标题
				desc: '喜欢小黄人,于是WeChat的第一个demo选了这个题材,赶再一天内完成略仓促,没有加降噪功能,勉强可以使用,欢迎吐槽',
				link: 'http://utopia.polarsky.cc/WeChat/index.php', // 分享链接
				imgUrl: 'http://utopia.polarsky.cc/WeChat/logo_x.png', // 分享图标
				success: function () {
					alert("分享成功!");
					// 用户确认分享后执行的回调函数
				},
				cancel: function () {
					alert("分享取消");
					// 用户取消分享后执行的回调函数
				}
			});

			wx.onMenuShareAppMessage({
				title:"小黄人变声器!化身小黄人萌翻朋友圈~!!",// 分享标题
				desc: '喜欢小黄人,于是WeChat的第一个demo选了这个题材,赶再一天内完成略仓促,没有加降噪功能,勉强可以使用,欢迎吐槽',
				link: 'http://utopia.polarsky.cc/WeChat/index.php', // 分享链接
				imgUrl: 'http://utopia.polarsky.cc/WeChat/logo_x.png', // 分享图标
				success: function () {
					alert("分享成功!");
					// 用户确认分享后执行的回调函数
				},
				cancel: function () {
					alert("分享取消");
					// 用户取消分享后执行的回调函数
				}
			});

		});

		function stopRecord() {
			stoped=true;
			wx.stopRecord({
				success: function (res) {
					localvoiceId = res.localId;
					uploadVoice();
				},
				fail: function (res) {
					alert(res.errMsg);
				}
			});


		}

		function uploadVoice() {
			if (localvoiceId == '') {
				alert('请先使用 startRecord 接口录制一段声音');
				return;
			}
			wx.uploadVoice({
				localId: localvoiceId,
				success: function (res) {
					/*alert('上传语音成功，serverId 为' + res.serverId);*/
					serverVoiceId = res.serverId;
				/*	$(".anchor").append("<p>"+serverVoiceId+"</p>");*/
					$.post("file/saveVoice.php", {
						media_id: res.serverId
					}, function (data, status) {
						serverVoiceIdX=data["media_id"];
					/*	alert(data["media_id"]);
						alert(serverVoiceIdX);
						$(".anchor").append("<p>"+serverVoiceIdX+"</p>");*/
					},"json");
				},
				fail:function(res){
					alert(res);
				}
			});
		}


		document.querySelector("#download").addEventListener("click",function(){
			if(serverVoiceIdX==''){
				alert("还未加载到本地噢!再等一会儿:P");
			}
			else{
				downloadvoice();
			}

		});

		function downloadvoice(){
		/*	alert(serverVoiceIdX);*/
			if (serverVoiceIdX == '') {
				alert('请先上传声音');
				return;
			}
			wx.downloadVoice({
				serverId: serverVoiceIdX,
				success: function (res) {
				/*alert('下载语音成功，localId 为' + res.localId);*/
					localvoiceIdX = res.localId;
					startPlayX();
				}
			});
		}

		function startPlayX(){
			if (localvoiceIdX =='') {
				alert('请先录制一段声音并提交服务器处理');
				return;
			}
			wx.playVoice({
				localId: localvoiceIdX
			});

		}

		function startRecord(){
			wx.startRecord({
				cancel: function () {
					alert('用户拒绝授权录音');
				}
			});
			setTimeout(function(){
				if(!stoped) {
					alert('20s到啦 录音停止!');
					wx.stopRecord({
						success: function (res) {
							localvoiceId = res.localId;
							uploadVoice();
						},
						fail: function (res) {
							alert(res.errMsg);
						}
					});
				}
			},20000)
		}


		function playMySelf(){
			wx.downloadVoice({
				serverId: '_ojB28TIkSJxFfTrR1GgCCkZcDcsH5DrIjPvW5hY8AjC_rQaG1Ow6pw79QmsEE5S',
				success: function (res) {
			/*		alert('下载语音成功，localId 为' + res.localId);*/
					wx.playVoice({
						localId:res.localId
					});
				}});
		}



	</script>

</div>
</body>
</html>
