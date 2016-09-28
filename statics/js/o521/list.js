/****页面基础*/$('.hd_menu').click(function(){$('.hm_main').css('transform','translateX(0)');$('.hm_main_zz').css({'opacity':'1','z-index':'59'});$('.hm_cls').css('transform','rotate(720deg)');$('.left_list li').css('transform','translateX(0)');});$('.hm_cls').click(function(){$('.hm_main').removeAttr('style');$('.hm_main_zz').removeAttr('style');$('.hm_cls').removeAttr('style');$('.left_list li').removeAttr('style');});$('.hm_main_zz').click(function(){$('.hm_main').removeAttr('style');$('.hm_main_zz').removeAttr('style');$('.hm_cls').removeAttr('style');$('.left_list li').removeAttr('style');});$(function() {$(window).scroll(function(){if ($(document).scrollTop() <= $(document).height() - $(window).height() - 500) {$('.btp').css('margin-top','530px');}if ($(document).scrollTop() >= $(document).height() - $(window).height() - 400) {$('.btp').css('margin-top','0');}}); });$('.to_top').click(function(){$('body,html').animate({scrollTop:0},300);});
$('.list_tc li .pic_fm').click(function(){
	var pli = $(this).parent('li').children('.picbox').children('li').children('img');
	var plih = $(this).parent('li').children('.picbox').children('li').length;
	for(var i = 0; i<=plih; i++){
		setInterval(pli.eq(i).attr('src',pli.eq(i).attr('data-original')),1000);
	}
	pli.eq(0).trigger("click");
});
$(document).mouseup(function(e){
  //var _con = ["$('.viewer-canvas img')","$('.pnbtn')","$('.viewer-footer')"];
  var _con = $('.viewer-canvas img');
  var _pnb = $('.pnbtn');
  var _fot = $('.viewer-footer');
  if(!_con.is(e.target) && _con.has(e.target).length === 0 && !_pnb.is(e.target) && _pnb.has(e.target).length === 0 && !_fot.is(e.target) && _fot.has(e.target).length === 0){
	 $('.viewer-close').trigger("click");
  }
});
function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
 
// 调用方法
var mapn = GetQueryString('catid');
if(mapn == 11){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/madai.jpg');
}else if(mapn == 12){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/bali.jpg');
}else if(mapn == 13){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/weinisi.jpg');
}else if(mapn == 14){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/bulage.jpg');
}else if(mapn == 15){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/luoma.jpg');
}else if(mapn == 10){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/kz.jpg');
}else if(mapn == 21){
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/jzd.jpg');
}else{
		$('.l_ban').css('background-image','url(../haiwai/statics/images/o521/listban/gdd.jpg');
}
