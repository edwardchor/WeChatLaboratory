/**
 * Created by EdwardChor on 7/22/15.
 */
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
                'downloadVoice'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
            success: function(res) {
                // 以键值对的形式返回，可用的api值true，不可用为false
                // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
            }
        });

    wx.onVoicePlayEnd({
        complete: function (res) {
            alert('录音（' + res.localId + '）播放结束');
        }
    });

    wx.onVoiceRecordEnd({
        complete: function (res) {
            localvoiceId = res.localId;
            alert('录音时间已超过一分钟');
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

function stopRecord(){
    wx.stopRecord({
        success: function (res) {
            localvoiceId=res.localId;
        },
        fail: function (res) {
            alert(res.errMsg);
        }
    });
}

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