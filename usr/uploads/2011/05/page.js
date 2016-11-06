/*
// Infinite Scroll jQuery plugin
// copyright Paul Irish, licensed GPL & MIT
// version 1.5.100504
// home and docs: http://www.infinite-scroll.com
*/
(function(A){A.fn.infinitescroll=function(R,O){function E(){if(B.debug){window.console&&console.log.call(console,arguments)}}function H(T){for(var S in T){if(S.indexOf&&S.indexOf("Selector")>-1&&A(T[S]).length===0){E("Your "+S+" found no elements.");return false}return true}}function N(S){S.match(C)?S.match(C)[2]:S;if(S.match(/^(.*?)\b2\b(.*?$)/)){S=S.match(/^(.*?)\b2\b(.*?$)/).slice(1)}else{if(S.match(/^(.*?)2(.*?$)/)){if(S.match(/^(.*?page=)2(\/.*|$)/)){S=S.match(/^(.*?page=)2(\/.*|$)/).slice(1);return S}E("Trying backup next selector parse technique. Treacherous waters here, matey.");S=S.match(/^(.*?)2(.*?$)/).slice(1)}else{if(S.match(/^(.*?page=)1(\/.*|$)/)){S=S.match(/^(.*?page=)1(\/.*|$)/).slice(1);return S}E("Sorry, we couldn't parse your Next (Previous Posts) URL. Verify your the css selector points to the correct A tag. If you still get this error: yell, scream, and kindly ask for help at infinite-scroll.com.");K.isInvalidPage=true}}return S}function L(){return B.localMode?(A(K.container)[0].scrollHeight&&A(K.container)[0].scrollHeight):A(document).height()}function F(){var S=0+L()-(B.localMode?A(K.container).scrollTop():(A(K.container).scrollTop()||A(K.container.ownerDocument.body).scrollTop()))-A(B.localMode?K.container:window).height();E("math:",S,K.pixelsFromNavToBottom);return(S-B.bufferPx<K.pixelsFromNavToBottom)}function M(){K.loadingMsg.find("img").hide().parent().find("div").html(B.donetext).animate({opacity:1},2000).fadeOut("normal");B.errorCallback()}function D(){if(K.isDuringAjax||K.isInvalidPage||K.isDone){return }if(!F(B,K)){return }A(document).trigger("retrieve.infscr")}function G(){K.isDuringAjax=true;K.loadingMsg.appendTo(B.contentSelector).show();A(B.navSelector).hide();K.currPage++;E("heading into ajax",Q);J=A(B.contentSelector).is("table")?A("<tbody/>"):A("<div/>");P=document.createDocumentFragment();J.load(Q.join(K.currPage)+" "+B.itemSelector,null,I)}function I(){if(K.isDone){M();return false}else{var T=J.children().get();if(T.length==0){return A.event.trigger("ajaxError",[{status:404}])}while(J[0].firstChild){P.appendChild(J[0].firstChild)}A(B.contentSelector)[0].appendChild(P);K.loadingMsg.fadeOut("normal");if(B.animate){var S=A(window).scrollTop()+A("#infscr-loading").height()+B.extraScrollPx+"px";A("html,body").animate({scrollTop:S},800,function(){K.isDuringAjax=false})}O.call(A(B.contentSelector)[0],T);if(!B.animate){K.isDuringAjax=false}}}A.browser.ie6=A.browser.msie&&A.browser.version<7;var B=A.extend({},A.infinitescroll.defaults,R),K=A.infinitescroll,J,P;O=O||function(){};if(!H(B)){return false}K.container=B.localMode?this:document.documentElement;B.contentSelector=B.contentSelector||this;var C=/(.*?\/\/).*?(\/.*)/,Q=A(B.nextSelector).attr("href");if(!Q){E("Navigation selector not found");return }Q=N(Q);if(B.localMode){A(K.container)[0].scrollTop=0}K.pixelsFromNavToBottom=L()+(K.container==document.documentElement?0:A(K.container).offset().top)-A(B.navSelector).offset().top;K.loadingMsg=A('<div id="infscr-loading" style="text-align: center;"><img alt="Loading..." src="'+B.loadingImg+'" /><div>'+B.loadingText+"</div></div>");(new Image()).src=B.loadingImg;A(document).ajaxError(function(T,U,S){E("Page not found. Self-destructing...");if(U.status==404){M();K.isDone=true;A(B.localMode?this:window).unbind("scroll.infscr")}});A(B.localMode?this:window).bind("scroll.infscr",D).trigger("scroll.infscr");A(document).bind("retrieve.infscr",G);return this};A.infinitescroll={defaults:{debug:false,preload:false,nextSelector:"div.navigation a:first",loadingImg:"http://www.infinite-scroll.com/loading.gif",loadingText:"<em>Loading the next set of posts...</em>",donetext:"<em>Congratulations, you've reached the end of the internet.</em>",navSelector:"div.navigation",contentSelector:null,extraScrollPx:150,itemSelector:"div.post",animate:false,localMode:false,bufferPx:40,errorCallback:function(){}},loadingImg:undefined,loadingMsg:undefined,container:undefined,currPage:1,currDOMChunk:null,isDuringAjax:false,isInvalidPage:false,isDone:false}})(jQuery);
function img() {
$('#container img').hover(
function() {$(this).fadeTo("fast", 0.7);},
function() {$(this).fadeTo("fast", 1);
});
} 
img();
$('#content-post').infinitescroll({
   //#indexpost 是包括所有文章的div元素id
      navSelector  : "#pagenavi",
                     // 页面分页元素(成功后隐藏)
      nextSelector : "#pagenavi a",
                     // 需要点击的下一页链接
      itemSelector : "#content-post div.post"   ,
                     // 返回后文章对应的插入位置
      loadingImg   : themeurl+"img/ajax-loader.gif",
                     //加载图片路径（绝对路径）
      loadingText  : "辛苦加载中，马上就好...",
                   //显示的提示文字
      animate      : true,
                   //加载完毕是否采用动态效果
      extraScrollPx: 250,
                  //向下滚动的像素，必须开启动态效果
      donetext     : "No More！后面真的没有了" ,
                //返回404，即到头了显示的文字
    },function(arrayOfNewElems){
$("#pagenavi").css("display","block");
       img();
            //成功后执行的自定义的函数，如页面javascript的重载
 });
 // 取消scroll绑定
    $(window).unbind('.infscr');
  // 手动点击的元素
    $('#pagenavi a').click(function(){
      $(document).trigger('retrieve.infscr');
      return false;
    });
    // 如果没有下一页，去掉分页
    $(document).ajaxError(function(e,xhr,opt){
      if (xhr.status == 404) $('#pagenavi').remove();
    });
    
    
//css代码,已经去掉了那个important      #pagenavi{border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px; border: 1px solid #ddd; background: #EFEFEF;box-shadow: 2px 2px 2px rgba(50,50,50,0.4); color: #444; text-decoration: none;width:60%;margin:0 0 0 140px; padding: 10px;text-align: center;}
