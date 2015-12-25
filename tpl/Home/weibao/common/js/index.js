/**
author : zhupinglei
desc : index
**/
function index(){
	this.init();
}
index.prototype = {
	init : function(){
		if( $('#header .bannerItem').length > 1 ){
			this.banner();
		}
		if( $('#case .caseScroll .box li').length > 4 ){
			this.cases();
		}
		this.mass();
		this.video();
		$('#crow').windstagball({
			'size' : 5000
		});

		$('#func li:gt(11)').hide();
		$('#func .more a').click(function(){
			$('#func li:gt(11)').show();
			$(this).remove();
		});

		this.logos();
	},
	banner : function(){
		var t = null;
		var $banner = $('#header .banner'),
			$btn = $('.bannerBtn span',$banner),
			$bannerBody = $('.bannerBody',$banner),
			$bannerIcon = $('.bannerIcon',$banner);
		$bannerBody.find('.bannerItem').eq(0).show();
		var len = $bannerBody.find('.bannerItem').length;
		var maxLeft = len*980;
		$bannerBody.find('.bannerBox').width(maxLeft);

		var str = '';
		for(var i = 0; i < len; i++){
			$bannerBody.find('.bannerItem').eq(i).css({'left':i*980+'px'}).attr('ind',i);
			str += '<i class="'+( i == 0 ? "hover" : "" )+'""></i>';
		}
		$bannerBody.find('.bannerItem').show();
		$bannerIcon.html(str);

		function auto(){
			t = setInterval(function(){
				$bannerBody.addClass('moving');
				$bannerBody.find('.bannerItem').animate({'left':'-=980'},500,function(){
					if( parseInt($(this).css('left')) < 0 ){
						$(this).css({'left': '+='+maxLeft});
					}
					if( parseInt($(this).css('left')) == 0 ){
						var ind = $(this).attr('ind');
						setInd(ind);
					}
					$bannerBody.removeClass('moving');
				});
			},7000)
		}

		function setInd(n){
			$bannerIcon.find('i').removeClass('hover').eq(n).addClass('hover');
		}

		auto();

		$btn.on('click',function(){
			var active = $(this).attr('class');
			clearInterval(t);
			if( !$bannerBody.hasClass('moving') ){
				if( active == 'bannerBtn_left' ){
					$bannerBody.find('.bannerItem').each(function(){
						if( parseInt($(this).css('left')) >= 980 ){
							$(this).css({'left':'-='+maxLeft});
						}
					});
					$bannerBody.addClass('moving');
					$bannerBody.find('.bannerItem').animate({'left':'+=980'},500,function(){
						if( parseInt($(this).css('left')) < 0 ){
							$(this).css({'left': '+='+maxLeft});
						}
						if( parseInt($(this).css('left')) == 0 ){
							var ind = $(this).attr('ind');
							setInd(ind);
						}
						$bannerBody.removeClass('moving');
					});
				}else{
					$bannerBody.find('.bannerItem').each(function(){
						if( parseInt($(this).css('left')) < 0 ){
							$(this).css({'left':'-='+maxLeft});
						}
					});
					$bannerBody.addClass('moving');
					$bannerBody.find('.bannerItem').animate({'left':'-=980'},500,function(){
						if( parseInt($(this).css('left')) < 0 ){
							$(this).css({'left': '+='+maxLeft});
						}
						if( parseInt($(this).css('left')) == 0 ){
							var ind = $(this).attr('ind');
							setInd(ind);
						}
						$bannerBody.removeClass('moving');
					});
				}
			}
			auto();
		})
	},
	cases : function(){
		var t2 = null;
		var $caseScroll = $('#case .caseScroll'),
			$btn = $('.btn span',$caseScroll),
			$box = $('.box ul',$caseScroll);
		var len = $box.find('li').length;
		$box.width(len*226);
		var maxLeft = len*226;
		for(var i = 0; i < len; i++){
			$box.find('li').eq(i).css({'left':i*226+'px'});
		}

		function auto(){
			t2 = setInterval(function(){
				$box.addClass('moving');
				$box.find('li').animate({'left':'-=226'},500,function(){
					if( parseInt($(this).css('left')) < 0 ){
						$(this).css({'left': '+='+maxLeft});
					}
					$box.removeClass('moving');
				});
			},3000)
		}

		auto();

		$btn.on('click',function(){
			var active = $(this).attr('class');
			clearInterval(t2);
			if( !$box.hasClass('moving') ){
				if( active == 'btn_left' ){
					$box.find('li').each(function(){
						if( parseInt($(this).css('left')) >= (4*226) ){
							$(this).css({'left':'-='+maxLeft});
						}
					});
					$box.addClass('moving');
					$box.find('li').animate({'left':'+=226'},500,function(){
						if( parseInt($(this).css('left')) >= (4*226) ){
							$(this).css({'left':'-='+maxLeft});
						}
						$box.removeClass('moving');
					});
				}else{
					$box.find('li').each(function(){
						if( parseInt($(this).css('left')) < 0 ){
							$(this).css({'left':'+='+maxLeft});
						}
					});
					$box.addClass('moving');
					$box.find('li').animate({'left':'-=226'},500,function(){
						if( parseInt($(this).css('left')) < 0 ){
							$(this).css({'left': '+='+maxLeft});
						}
						$box.removeClass('moving');
					});
				}
			}
			auto();
		})
	},
	mass : function(){
		var t3 = null;
		$('#mass .massNav li').hover(function(){
			var here = this;
			clearTimeout(t3);
			t3 = setTimeout(function(){
				var ind = $(here).index();
				$('#mass .massNav li').removeClass('hover');
				$('#mass .massList .massItem').eq(ind).addClass('show').siblings().removeClass('show');
				$('#mass li').eq(ind).addClass('hover');
				$('#mass li.bgs').animate({'left':ind*105+'px'},300);
			},300);
		});
	},
	video : function(){
		$('#video li,area').click(function(){
			var src = $(this).attr('vsrc');
			if( src ){
				$('#popUp embed').attr('src',src);
				var pw = $('#popUp').width(),
					ph = $('#popUp').height(),
					ww = $(window).width(),
					wh = $(window).height();
				$('#popUp').css({
					'left' : (ww-pw)/2+'px',
					'top' : (wh-ph)/2 + 'px'
				})
				$('#mask').show();
				$('#popClose').show();
				$('#popUp').show();
			}
		});

		if( $.browser.msie && $.browser.version < 9 ){}else{
			$('#video li').hover(function(){
				$(this).css({
					'opacity' : '0.7'
				})
			},function(){
				$(this).css({
					'opacity' : '1'
				})
			});
		}

		$('#popClose').on('click',function(){
			$('#popUp embed').attr('src','');
			$('#mask').hide();
			$('#popClose').hide();
			$('#popUp').hide();
		})
	},
	logos : function(){
		$('.typical .logos a').each(function(){
			$(this).css({
				'background' : 'url(' + $(this).attr('bgdef') + ') center center no-repeat'
			})
		});

		$('.typical .logos a').hover(function(){
			$(this).css({
				'background' : 'url(' + $(this).attr('hov') + ') center center no-repeat'
			})
		},function(){
			$(this).css({
				'background' : 'url(' + $(this).attr('bgdef') + ') center center no-repeat'
			})
		});
	}
}
$(document).ready(function(){
	new index();
});