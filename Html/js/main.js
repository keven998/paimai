/*!
 * M.YS.COM v0.0.0
 * Copyright 2015
 * Author burning <iburning@live.cn>
 */
function javacalljswithargs(a){_isOldAndroidApp=!0}function ioscalljswithargs(a){_isOldIOSApp=!0}function _ShareFriend(){var a=window._shareInfo;WeixinJSBridge.invoke("sendAppMessage",{appid:a.wxAppId,img_url:a.pics.split(",")[0],img_width:a.imgWidth||100,img_height:a.imgHeight||100,link:a.url,desc:a.content,title:a.title},function(a){utils.hideShareTip(),_report("send_msg",a.err_msg)})}function _ShareTL(){var a=window._shareInfo;WeixinJSBridge.invoke("shareTimeline",{appid:a.wxAppId,img_url:a.pics.split(",")[0],img_width:a.imgWidth||100,img_height:a.imgHeight||100,link:a.url,desc:a.content,title:a.title+"|"+a.content},function(a){utils.hideShareTip(),_report("timeline",a.err_msg)})}function _ShareWB(){var a=window._shareInfo;WeixinJSBridge.invoke("shareWeibo",{content:a.content,url:a.url},function(a){utils.hideShareTip(),_report("weibo",a.err_msg)})}function wxShareInit(){document.addEventListener("WeixinJSBridgeReady",function(){WeixinJSBridge.on("menu:share:appmessage",function(a){_ShareFriend()}),WeixinJSBridge.on("menu:share:timeline",function(a){_ShareTL()}),WeixinJSBridge.on("menu:share:weibo",function(a){_ShareWB()})},!1)}function _report(){}window.ejs&&(ejs.open="{{",ejs.close="}}"),$(function(){window._pagePaddingTop=parseInt($("body").css("padding-top").replace("px",""));var a=$("body");a.delegate('[data-toggle="modal-iframe"]',"click",function(a){var b=$(this);b.is("a")&&a.preventDefault();var c=b.data("title")||"Popup",d=b.data("url")||"about:blank";Math.floor(.75*window.innerHeight);utils.showPopup({title:c,iframeUrl:d})}),a.delegate(".btn-share","click",function(a){utils.showShareTip()}),a.delegate("[data-page-url]","click",function(a){var b=$(this),c=b.data("page-url");c&&utils.goUrl(c)}),a.delegate("[data-collect]","click",function(a){a.preventDefault();var b=$(this),c=b.data("collect"),d=b.data("id"),e=b.find("span"),f=b.find("em");b.hasClass("collected")?utils.uncollect(c,d,function(a){if(1===a.resultCode&&(b.removeClass("collected"),e.length&&(2400===c?e.html(b.data("text-collect")||"收藏拍品"):e.html(b.data("text-collect")||"收藏店铺")),f.length)){var d=parseInt(f.html())-1;d=0>d?0:d,f.html(d)}}):utils.collect(c,d,function(a){if(1===a.resultCode&&(b.addClass("collected"),e.length&&e.html(b.data("text-collected")||"已收藏"),f.length)){var c=parseInt(f.html())+1;c=0>c?0:c,f.html(c)}})}),a.delegate("img.img-preview","click",function(b){if(window.wx&&window.wx.previewImage){b.preventDefault();for(var c=$(this),d=a.find("img.img-preview"),e=[],f=0;f<d.length;f++){var g=$(d[f]);e.push(g.data("original-big")||g.attr("src"))}wx.previewImage({current:c.data("original-big")||c.attr("src"),urls:e})}}),initCountdown($("[data-endtime]")),initImageLazy($("img.lazy")),initImageCenter($(".img-center")),initCollection($("[data-collect]")),wxShareInit()}),window._isOldAndroidApp=!1,window._isOldIOSApp=!1,$.fn.serializeObject=function(){var a={},b=this.serializeArray();return $.each(b,function(){a[this.name]?(a[this.name].push||(a[this.name]=[a[this.name]]),a[this.name].push(this.value||"")):a[this.name]=this.value||""}),a};