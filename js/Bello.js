/**
 * Created by EdwardChor on 7/22/15.
 */
var localIdArray=new Array();
var mediaIdArray=new Array();
var serverImageUrlArray=new Array();
var localvoiceId='';
var serverVoiceId='';
var serverVoiceUrlArray=new Array();

wx.ready(function(){
    wx.checkJsApi({
        jsApiList: ['onMenuShareTimeline',
            'startRecord',
            'stopRecord',
            'onVoiceRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'onVoicePlayEnd',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'uploadImage',
            'previewImage',
            'downloadImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
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

    wx.onVoiceRecordEnd({
        complete: function (res) {
            localvoiceId = res.localId;
            alert('录音时间已超过一分钟,系统自动停止');
        }
    });


    wx.onMenuShareTimeline({
             title:"小黄人变声器!化身小黄人萌翻朋友圈~!!", // 分享标题
             desc: '喜欢小黄人,于是WeChat的第一个demo选了这个题材,赶再一天内完成略仓促,没有加降噪功能,勉强可以使用,欢迎吐槽',
            link: 'http://utopia.polarsky.cc/WeChat/index.php', // 分享链接
            imgUrl: '../img/logo_x.png', // 分享图标
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
            imgUrl: '../img/logo_x.png', // 分享图标
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

function startRecord(){
    wx.startRecord({
        cancel: function () {
            alert('用户拒绝授权录音');
        }
    });
}
/*
function stopRecord(){
    wx.stopRecord({
        success: function (res) {
            localvoiceId=res.localId;
        },
        fail: function (res) {
            alert(res.errMsg);
        }
    });
}*/

function startPlay(){
    if (localvoiceId =='') {
        alert('请先使用 startRecord 接口录制一段声音');
        return;
    }
    wx.playVoice({
        localId: localvoiceId
    });

}

function stopPlay(){
    wx.stopVoice({
        localId: localvoiceId
    });
}

function pausePlay(){
    wx.pauseVoice({
        localId: localvoiceId
    });
}


function downloadvoice(){
    if (serverVoiceId == '') {
        alert('请先使用 uploadVoice 上传声音');
        return;
    }
    wx.downloadVoice({
        serverId: serverVoiceId,
        success: function (res) {
            alert('下载语音成功，localId 为' + res.localId);
            localvoiceId = res.localId;
        }
    });
}



function chooseImage(){
    wx.chooseImage({
        count: 3, // 默认9
        sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
        sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
        success: function (res) {
            var localIds = res.localIds;// 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
            localIdArray=localIds;
        }
    });
}


function downloadImage() {
    if (mediaIdArray.length === 0) {
        alert('请先使用 uploadImage 上传图片');
        return;
    }
    var i = 0, length = mediaIdArray.length;
    function download() {
        wx.downloadImage({
            serverId: mediaIdArray[i],
            success: function (res) {
                i++;
                alert('已下载：' + i + '/' + length);
                localIdArray.push(res.localId);
                if (i < length) {
                    download();
                }
            }
        });
    }

    download();
}


function previewImage(){
    wx.previewImage({
        current: 'http://img5.douban.com/view/photo/photo/public/p1353993776.jpg',
        urls: [
            'http://utopia.polarsky.cc/WeChat/'+serverImageUrlArray[0],
            'http://utopia.polarsky.cc/WeChat/'+serverImageUrlArray[1],
            'http://utopia.polarsky.cc/WeChat/'+serverImageUrlArray[2]
        ]
    });
}





