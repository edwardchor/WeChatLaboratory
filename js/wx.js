/**
 * Created by EdwardChor on 7/22/15.
 */

  wx.ready(function(){
      wx.checkJsApi({
          jsApiList: ['onMenuShareTimeline',
          'chooseImage',
          'uploadImage',
          'previewImage',
          'downloadImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
          success: function(res) {
              // 以键值对的形式返回，可用的api值true，不可用为false
              // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
          }
      });


      wx.onMenuShareTimeline({
          title:"Bello~!", // 分享标题
          link: 'http://utopia.polarsky.cc/Bello.php', // 分享链接
          imgUrl: 'logo.png', // 分享图标
          success: function () {
              alert("分享成功!");
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              alert("分享取消");
              // 用户取消分享后执行的回调函数
          }
      });

 /*     wx.uploadImage({
          localId: '', // 需要上传的图片的本地ID，由chooseImage接口获得
          isShowProgressTips: 1, // 默认为1，显示进度提示
          success: function (res) {
              var serverId = res.serverId; // 返回图片的服务器端ID
          }
      });
*/
});





