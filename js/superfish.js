!function(s){s.fn.superfish=function(a){var i=s.fn.superfish,e=i.c,o=s(['<span class="',e.arrowClass,'"> &#187;</span>'].join("")),n=function(){var a=s(this),i=r(a);clearTimeout(i.sfTimer),a.showSuperfishUl().siblings().hideSuperfishUl()},t=function(){var a=s(this),e=r(a),o=i.op;clearTimeout(e.sfTimer),e.sfTimer=setTimeout(function(){o.retainPath=s.inArray(a[0],o.$path)>-1,a.hideSuperfishUl(),o.$path.length&&a.parents(["li.",o.hoverClass].join("")).length<1&&n.call(o.$path)},o.delay)},r=function(s){var a=s.parents(["ul.",e.menuClass,":first"].join(""))[0];return i.op=i.o[a.serial],a};return this.each(function(){var r=this.serial=i.o.length,h=s.extend({},i.defaults,a);h.$path=s("li."+h.pathClass,this).slice(0,h.pathLevels).each(function(){s(this).addClass([h.hoverClass,e.bcClass].join(" ")).filter("li:has(ul)").removeClass(h.pathClass)}),i.o[r]=i.op=h,s("li:has(ul)",this)[s.fn.hoverIntent&&!h.disableHI?"hoverIntent":"hover"](n,t).each(function(){h.autoArrows&&s(">a:first-child",this).addClass(e.anchorClass).append(o.clone())}).not("."+e.bcClass).hideSuperfishUl();var l=s("a",this);l.each(function(s){l.eq(s).parents("li")}),h.onInit.call(this)}).each(function(){var a=[e.menuClass];!i.op.dropShadows||s.browser.msie&&s.browser.version<7||a.push(e.shadowClass),s(this).addClass(a.join(" "))})};var a=s.fn.superfish;a.o=[],a.op={},a.IE7fix=function(){var i=a.op;s.browser.msie&&s.browser.version>6&&i.dropShadows&&void 0!=i.animation.opacity&&this.toggleClass(a.c.shadowClass+"-off")},a.c={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"sf-sub-indicator",shadowClass:"sf-shadow"},a.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:2,delay:800,animation:{height:"show"},speed:"normal",autoArrows:!1,dropShadows:!1,disableHI:!1,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){}},s.fn.extend({hideSuperfishUl:function(){var i=a.op,e=!0===i.retainPath?i.$path:"";i.retainPath=!1;var o=s(["li.",i.hoverClass].join(""),this).add(this).not(e).removeClass(i.hoverClass).find(">ul").hide();return i.onHide.call(o),this},showSuperfishUl:function(){var s=a.op,i=(a.c.shadowClass,this.not(".accorChild").addClass(s.hoverClass).find(">ul:hidden"));return a.IE7fix.call(i),s.onBeforeShow.call(i),i.animate(s.animation,s.speed,function(){a.IE7fix.call(i),s.onShow.call(i)}),this}})}(jQuery),$(function(){$(".sf-menu").superfish()});