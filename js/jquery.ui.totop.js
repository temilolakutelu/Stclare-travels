!function(e){e.fn.UItoTop=function(n){var o=e.extend({text:"",min:200,inDelay:600,outDelay:400,containerID:"toTop",containerHoverID:"toTopHover",scrollSpeed:1200,easingType:"linear"},n),t="#"+o.containerID,i="#"+o.containerHoverID;e("body").append('<a href="#" id="'+o.containerID+'">'+o.text+"</a>"),e(t).hide().on("click.UItoTop",function(){return e("html, body").animate({scrollTop:0},o.scrollSpeed,o.easingType),e("#"+o.containerHoverID,this).stop().animate({opacity:0},o.inDelay,o.easingType),!1}).prepend('<span id="'+o.containerHoverID+'"></span>').hover(function(){e(i,this).stop().animate({opacity:1},600,"linear")},function(){e(i,this).stop().animate({opacity:0},700,"linear")}),e(window).scroll(function(){var n=e(window).scrollTop();void 0===document.body.style.maxHeight&&e(t).css({position:"absolute",top:n+e(window).height()-50}),n>o.min?e(t).fadeIn(o.inDelay):e(t).fadeOut(o.Outdelay)})}}(jQuery),$(document).ready(function(){$().UItoTop({easingType:"easeOutQuart"})});