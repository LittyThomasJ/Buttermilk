!function(t){"use strict";var e='[data-dismiss="sppb-alert"]',i=function(i){t(i).on("click",e,this.close)};i.VERSION="3.2.0",i.prototype.close=function(e){var i=t(this),n=i.attr("data-target");n||(n=(n=i.attr("href"))&&n.replace(/.*(?=#[^\s]*$)/,""));var s=t(n);function o(){s.detach().trigger("closed.sppb.alert").remove()}e&&e.preventDefault(),s.length||(s=i.hasClass("sppb-alert")?i:i.parent()),s.trigger(e=t.Event("close.sppb.alert")),e.isDefaultPrevented()||(s.removeClass("in"),t.support.transition&&s.hasClass("sppb-fade")?s.one("bsTransitionEnd",o).emulateTransitionEnd(150):o())};var n=t.fn.spbalert;t.fn.spbalert=function(e){return this.each(function(){var n=t(this),s=n.data("sppb.alert");s||n.data("sppb.alert",s=new i(this)),"string"==typeof e&&s[e].call(n)})},t.fn.spbalert.Constructor=i,t.fn.spbalert.noConflict=function(){return t.fn.spbalert=n,this},t(document).on("click.sppb.alert.data-api",e,i.prototype.close)}(jQuery),function(t){"use strict";var e=function(e,i){this.$element=t(e).on("keydown.sppb.carousel",t.proxy(this.keydown,this)),this.$indicators=this.$element.find(".sppb-carousel-indicators"),this.options=i,this.paused=this.sliding=this.interval=this.$active=this.$items=null,"hover"==this.options.pause&&this.$element.on("mouseenter.sppb.carousel",t.proxy(this.pause,this)).on("mouseleave.sppb.carousel",t.proxy(this.cycle,this))};function i(i){return this.each(function(){var n=t(this),s=n.data("sppb.carousel"),o=t.extend({},e.DEFAULTS,n.data(),"object"==typeof i&&i),a="string"==typeof i?i:o.slide;s||n.data("sppb.carousel",s=new e(this,o)),"number"==typeof i?s.to(i):a?s[a]():o.interval&&s.pause().cycle()})}e.VERSION="3.2.0",e.DEFAULTS={interval:5e3,pause:"hover",wrap:!0},e.prototype.keydown=function(t){switch(t.which){case 37:this.prev();break;case 39:this.next();break;default:return}t.preventDefault()},e.prototype.cycle=function(e){return e||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(t.proxy(this.next,this),this.options.interval)),this},e.prototype.getItemIndex=function(t){return this.$items=t.parent().children(".sppb-item"),this.$items.index(t||this.$active)},e.prototype.to=function(e){var i=this,n=this.getItemIndex(this.$active=this.$element.find(".sppb-item.active"));if(!(e>this.$items.length-1||e<0))return this.sliding?this.$element.one("slid.sppb.carousel",function(){i.to(e)}):n==e?this.pause().cycle():this.slide(e>n?"next":"prev",t(this.$items[e]))},e.prototype.pause=function(e){return e||(this.paused=!0),this.$element.find(".next, .prev").length&&t.support.transition&&(this.$element.trigger(t.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},e.prototype.next=function(){if(!this.sliding)return this.slide("next")},e.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},e.prototype.slide=function(e,i){var n=this.$element.find(".sppb-item.active"),s=i||n[e](),o=this.interval,a="next"==e?"left":"right",r="next"==e?"first":"last",p=this;if(!s.length){if(!this.options.wrap)return;s=this.$element.find(".sppb-item")[r]()}if(s.hasClass("active"))return this.sliding=!1;var l=s[0],c=t.Event("slide.sppb.carousel",{relatedTarget:l,direction:a});if(this.$element.trigger(c),!c.isDefaultPrevented()){if(this.sliding=!0,o&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var h=t(this.$indicators.children()[this.getItemIndex(s)]);h&&h.addClass("active")}var d=t.Event("slid.sppb.carousel",{relatedTarget:l,direction:a});return t.support.transition&&this.$element.hasClass("sppb-slide")?(s.addClass(e),s[0].offsetWidth,n.addClass(a),s.addClass(a),n.one("bsTransitionEnd",function(){s.removeClass([e,a].join(" ")).addClass("active"),n.removeClass(["active",a].join(" ")),p.sliding=!1,setTimeout(function(){p.$element.trigger(d)},0)}).emulateTransitionEnd(1e3*n.css("transition-duration").slice(0,-1))):(n.removeClass("active"),s.addClass("active"),this.sliding=!1,this.$element.trigger(d)),o&&this.cycle(),this}};var n=t.fn.sppbcarousel;t.fn.sppbcarousel=i,t.fn.sppbcarousel.Constructor=e,t.fn.sppbcarousel.noConflict=function(){return t.fn.sppbcarousel=n,this},t(document).ready(function(){t(".sppb-carousel").each(function(e){var i=t(this).find(".sppb-item"),n="sppb-carousel"+(e+1),s="";t(this).attr("id",n);for(var o=0;o<i.length;o++)s+=0==o?'<li data-sppb-target="#'+n+'" class="active" data-sppb-slide-to="0"></li>':'\n<li data-sppb-target="#'+n+'" data-sppb-slide-to="'+o+'"></li>';t(this).find(">.sppb-carousel-indicators").html(s),t(this).find(".sppb-carousel-control").attr("href","#"+n),t(this).find(".sppb-item").first().addClass("active")})}),t(document).on("click.sppb.carousel.data-api","[data-slide], [data-sppb-slide-to]",function(e){var n,s=t(this),o=t(s.attr("data-sppb-target")||(n=s.attr("href"))&&n.replace(/.*(?=#[^\s]+$)/,""));if(o.hasClass("sppb-carousel")){var a=t.extend({},o.data(),s.data()),r=s.attr("data-sppb-slide-to");r&&(a.interval=!1),i.call(o,a),r&&o.data("sppb.carousel").to(r),e.preventDefault()}}),t(window).on("load",function(){if(t('[data-sppb-ride="sppb-carousel"]').each(function(){var e=t(this);i.call(e,e.data())}),t(window).width()<767){var e=t(".sppb-carousel-pro-inner-content").outerHeight(!0)+50;t(".sppb-carousel-pro .sppb-item > img").css({height:e})}})}(jQuery),function(t){"use strict";t(document).on("click",".sppb-panel-heading",function(e){e.preventDefault();var i=t(this).closest(".sppb-panel-group").find(">div"),n=i.find(".sppb-panel-heading"),s=i.find(".sppb-panel-collapse");t(this).hasClass("active")?(t(this).removeClass("active"),s.slideUp()):(n.removeClass("active"),s.slideUp(),t(this).addClass("active").next().slideDown())})}(jQuery),function(t){"use strict";var e=function(e){this.element=t(e)};function i(i){return this.each(function(){var n=t(this),s=n.data("sppb.tab");s||n.data("sppb.tab",s=new e(this)),"string"==typeof i&&s[i]()})}e.VERSION="3.2.0",e.prototype.show=function(){var e=this.element,i=e.closest("ul:not(.dropdown-menu)"),n=e.data("target");if(n||(n=(n=e.attr("href"))&&n.replace(/.*(?=#[^\s]*$)/,"")),!e.parent("li").hasClass("active")){var s=i.find(".active:last a")[0],o=t.Event("show.sppb.tab",{relatedTarget:s});if(e.trigger(o),!o.isDefaultPrevented()){var a=t(n);this.activate(e.closest("li"),i),this.activate(a,a.parent(),function(){e.trigger({type:"shown.sppb.tab",relatedTarget:s})})}}},e.prototype.activate=function(e,i,n){var s=i.find("> .active"),o=n&&t.support.transition&&s.hasClass("sppb-fade");function a(){s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),e.addClass("active"),o?(e[0].offsetWidth,e.addClass("in")):e.removeClass("sppb-fade"),e.parent(".dropdown-menu")&&e.closest("li.dropdown").addClass("active"),n&&n()}o?s.one("bsTransitionEnd",a).emulateTransitionEnd(150):a(),s.removeClass("in")};var n=t.fn.sppbtab;t.fn.sppbtab=i,t.fn.sppbtab.Constructor=e,t.fn.sppbtab.noConflict=function(){return t.fn.sppbtab=n,this},t(document).ready(function(){t(".sppb-tab").each(function(e){var i="sppb-tab"+(e+1);t(this).find(">.sppb-nav").children().each(function(e){t(this).find(">a").attr("href","#"+i+"-"+(e+1))}),t(this).find(">.sppb-tab-content").children().each(function(e){t(this).attr("id",i+"-"+(e+1))})})}),t(document).on("click.sppb.tab.data-api",'[data-toggle="sppb-tab"], [data-toggle="sppb-pill"]',function(e){e.preventDefault(),i.call(t(this),"show")})}(jQuery),function(t){"use strict";var e=function(t,e){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null,this.init("sppbtooltip",t,e)};e.VERSION="3.2.0",e.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="sppb-tooltip" role="tooltip"><div class="sppb-tooltip-arrow"></div><div class="sppb-tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},e.prototype.init=function(e,i,n){this.enabled=!0,this.type=e,this.$element=t(i),this.options=this.getOptions(n),this.$viewport=this.options.viewport&&t(this.options.viewport.selector||this.options.viewport);for(var s=this.options.trigger.split(" "),o=s.length;o--;){var a=s[o];if("click"==a)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=a){var r="hover"==a?"mouseenter":"focusin",p="hover"==a?"mouseleave":"focusout";this.$element.on(r+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(p+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.getOptions=function(e){return(e=t.extend({},this.getDefaults(),this.$element.data(),e)).delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},e.prototype.getDelegateOptions=function(){var e={},i=this.getDefaults();return this._options&&t.each(this._options,function(t,n){i[t]!=n&&(e[t]=n)}),e},e.prototype.enter=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("sppb."+this.type);if(i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("sppb."+this.type,i)),clearTimeout(i.timeout),i.hoverState="in",!i.options.delay||!i.options.delay.show)return i.show();i.timeout=setTimeout(function(){"in"==i.hoverState&&i.show()},i.options.delay.show)},e.prototype.leave=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("sppb."+this.type);if(i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("sppb."+this.type,i)),clearTimeout(i.timeout),i.hoverState="out",!i.options.delay||!i.options.delay.hide)return i.hide();i.timeout=setTimeout(function(){"out"==i.hoverState&&i.hide()},i.options.delay.hide)},e.prototype.show=function(){var e=t.Event("show.sppb."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(e);var i=t.contains(document.documentElement,this.$element[0]);if(e.isDefaultPrevented()||!i)return;var n=this,s=this.tip(),o=this.getUID(this.type);this.setContent(),s.attr("id",o),this.$element.attr("aria-describedby",o),this.options.animation&&s.addClass("sppb-fade");var a="function"==typeof this.options.placement?this.options.placement.call(this,s[0],this.$element[0]):this.options.placement,r=/\s?auto?\s?/i,p=r.test(a);p&&(a=a.replace(r,"")||"top"),s.detach().css({top:0,left:0,display:"block"}).addClass(a).data("sppb."+this.type,this),this.options.container?s.appendTo(this.options.container):s.insertAfter(this.$element);var l=this.getPosition(),c=s[0].offsetWidth,h=s[0].offsetHeight;if(p){var d=a,u=this.$element.parent(),f=this.getPosition(u);a="bottom"==a&&l.top+l.height+h-f.scroll>f.height?"top":"top"==a&&l.top-f.scroll-h<0?"bottom":"right"==a&&l.right+c>f.width?"left":"left"==a&&l.left-c<f.left?"right":a,s.removeClass(d).addClass(a)}var b=this.getCalculatedOffset(a,l,c,h);this.applyPlacement(b,a);var v=function(){n.$element.trigger("shown.sppb."+n.type),n.hoverState=null};t.support.transition&&this.$tip.hasClass("sppb-")?s.one("bsTransitionEnd",v).emulateTransitionEnd(150):v()}},e.prototype.applyPlacement=function(e,i){var n=this.tip(),s=n[0].offsetWidth,o=n[0].offsetHeight,a=parseInt(n.css("margin-top"),10),r=parseInt(n.css("margin-left"),10);isNaN(a)&&(a=0),isNaN(r)&&(r=0),e.top=e.top+a,e.left=e.left+r,t.offset.setOffset(n[0],t.extend({using:function(t){n.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),n.addClass("in");var p=n[0].offsetWidth,l=n[0].offsetHeight;"top"==i&&l!=o&&(e.top=e.top+o-l);var c=this.getViewportAdjustedDelta(i,e,p,l);c.left?e.left+=c.left:e.top+=c.top;var h=c.left?2*c.left-s+p:2*c.top-o+l,d=c.left?"left":"top",u=c.left?"offsetWidth":"offsetHeight";n.offset(e),this.replaceArrow(h,n[0][u],d)},e.prototype.replaceArrow=function(t,e,i){this.arrow().css(i,t?50*(1-t/e)+"%":"")},e.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".sppb-tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("sppb-fade in top bottom left right")},e.prototype.hide=function(){var e=this,i=this.tip(),n=t.Event("hide.sppb."+this.type);function s(){"in"!=e.hoverState&&i.detach(),e.$element.trigger("hidden.sppb."+e.type)}if(this.$element.removeAttr("aria-describedby"),this.$element.trigger(n),!n.isDefaultPrevented())return i.removeClass("in"),t.support.transition&&this.$tip.hasClass("sppb-fade")?i.one("bsTransitionEnd",s).emulateTransitionEnd(150):s(),this.hoverState=null,this},e.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},e.prototype.hasContent=function(){return this.getTitle()},e.prototype.getPosition=function(e){var i=(e=e||this.$element)[0],n="BODY"==i.tagName;return t.extend({},"function"==typeof i.getBoundingClientRect?i.getBoundingClientRect():null,{scroll:n?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop(),width:n?t(window).width():e.outerWidth(),height:n?t(window).height():e.outerHeight()},n?{top:0,left:0}:e.offset())},e.prototype.getCalculatedOffset=function(t,e,i,n){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-i/2}:"top"==t?{top:e.top-n,left:e.left+e.width/2-i/2}:"left"==t?{top:e.top+e.height/2-n/2,left:e.left-i}:{top:e.top+e.height/2-n/2,left:e.left+e.width}},e.prototype.getViewportAdjustedDelta=function(t,e,i,n){var s={top:0,left:0};if(!this.$viewport)return s;var o=this.options.viewport&&this.options.viewport.padding||0,a=this.getPosition(this.$viewport);if(/right|left/.test(t)){var r=e.top-o-a.scroll,p=e.top+o-a.scroll+n;r<a.top?s.top=a.top-r:p>a.top+a.height&&(s.top=a.top+a.height-p)}else{var l=e.left-o,c=e.left+o+i;l<a.left?s.left=a.left-l:c>a.width&&(s.left=a.left+a.width-c)}return s},e.prototype.getTitle=function(){var t=this.$element,e=this.options;return t.attr("data-original-title")||("function"==typeof e.title?e.title.call(t[0]):e.title)},e.prototype.getUID=function(t){for(;t+=~~(1e6*Math.random()),document.getElementById(t););return t},e.prototype.tip=function(){return this.$tip=this.$tip||t(this.options.template)},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".sppb-tooltip-arrow")},e.prototype.validate=function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},e.prototype.enable=function(){this.enabled=!0},e.prototype.disable=function(){this.enabled=!1},e.prototype.toggleEnabled=function(){this.enabled=!this.enabled},e.prototype.toggle=function(e){var i=this;e&&((i=t(e.currentTarget).data("sppb."+this.type))||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("sppb."+this.type,i))),i.tip().hasClass("in")?i.leave(i):i.enter(i)},e.prototype.destroy=function(){clearTimeout(this.timeout),this.hide().$element.off("."+this.type).removeData("sppb."+this.type)};var i=t.fn.sppbtooltip;t.fn.sppbtooltip=function(i){return this.each(function(){var n=t(this),s=n.data("sppb.tooltip"),o="object"==typeof i&&i;(s||"destroy"!=i)&&(s||n.data("sppb.tooltip",s=new e(this,o)),"string"==typeof i&&s[i]())})},t.fn.sppbtooltip.Constructor=e,t.fn.sppbtooltip.noConflict=function(){return t.fn.sppbtooltip=i,this}}(jQuery),function(t){"use strict";var e=function(t,e){this.init("sppbpopover",t,e)};if(!t.fn.sppbtooltip)throw new Error("Popover requires tooltip.js");e.VERSION="3.2.0",e.DEFAULTS=t.extend({},t.fn.sppbtooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="sppb-popover" role="tooltip"><div class="arrow"></div><h3 class="sppb-popover-title"></h3><div class="sppb-popover-content"></div></div>'}),e.prototype=t.extend({},t.fn.sppbtooltip.Constructor.prototype),e.prototype.constructor=e,e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.setContent=function(){var t=this.tip(),e=this.getTitle(),i=this.getContent();t.find(".sppb-popover-title")[this.options.html?"html":"text"](e),t.find(".sppb-popover-content").empty()[this.options.html?"string"==typeof i?"html":"append":"text"](i),t.removeClass("sppb-fade top bottom left right in"),t.find(".sppb-popover-title").html()||t.find(".sppb-popover-title").hide()},e.prototype.hasContent=function(){return this.getTitle()||this.getContent()},e.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")},e.prototype.tip=function(){return this.$tip||(this.$tip=t(this.options.template)),this.$tip};var i=t.fn.sppbpopover;t.fn.sppbpopover=function(i){return this.each(function(){var n=t(this),s=n.data("sppb.popover"),o="object"==typeof i&&i;(s||"destroy"!=i)&&(s||n.data("sppb.popover",s=new e(this,o)),"string"==typeof i&&s[i]())})},t.fn.sppbpopover.Constructor=e,t.fn.sppbpopover.noConflict=function(){return t.fn.sppbpopover=i,this}}(jQuery),function(t){"use strict";t.fn.emulateTransitionEnd=function(e){var i=!1,n=this;t(this).one("bsTransitionEnd",function(){i=!0});return setTimeout(function(){i||t(n).trigger(t.support.transition.end)},e),this},t(function(){t.support.transition=function(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var i in e)if(void 0!==t.style[i])return{end:e[i]};return!1}(),t.support.transition&&(t.event.special.bsTransitionEnd={bindType:t.support.transition.end,delegateType:t.support.transition.end,handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}})})}(jQuery);var carousel=jQuery(".carousel");carousel&&jQuery(window).on("ready",function(){"undefined"!=typeof jQuery&&"undefined"!=typeof MooTools&&Element.implement({slide:function(t,e){return this}})}),function(){var t,e,i,n=function(t,e){return function(){return t.apply(e,arguments)}},s=[].indexOf||function(t){for(var e=0,i=this.length;i>e;e++)if(e in this&&this[e]===t)return e;return-1};e=function(){function t(){}return t.prototype.extend=function(t,e){var i,n;for(i in e)n=e[i],null==t[i]&&(t[i]=n);return t},t.prototype.isMobile=function(t){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(t)},t}(),i=this.WeakMap||this.MozWeakMap||(i=function(){function t(){this.keys=[],this.values=[]}return t.prototype.get=function(t){var e,i,n,s;for(e=i=0,n=(s=this.keys).length;n>i;e=++i)if(s[e]===t)return this.values[e]},t.prototype.set=function(t,e){var i,n,s,o;for(i=n=0,s=(o=this.keys).length;s>n;i=++n)if(o[i]===t)return void(this.values[i]=e);return this.keys.push(t),this.values.push(e)},t}()),t=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(t=function(){function t(){console.warn("MutationObserver is not supported by your browser."),console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return t.notSupported=!0,t.prototype.observe=function(){},t}()),this.SPPBWOW=function(){function o(t){null==t&&(t={}),this.scrollCallback=n(this.scrollCallback,this),this.scrollHandler=n(this.scrollHandler,this),this.start=n(this.start,this),this.scrolled=!0,this.config=this.util().extend(t,this.defaults),this.animationNameCache=new i}return o.prototype.defaults={boxClass:"sppb-wow",animateClass:"sppb-animated",offset:0,mobile:!0,live:!0},o.prototype.init=function(){var t;return this.element=window.document.documentElement,"interactive"===(t=document.readyState)||"complete"===t?this.start():document.addEventListener("DOMContentLoaded",this.start),this.finished=[]},o.prototype.start=function(){var e,i,n,s,o;if(this.stopped=!1,this.boxes=function(){var t,i,n,s;for(s=[],t=0,i=(n=this.element.querySelectorAll("."+this.config.boxClass)).length;i>t;t++)e=n[t],s.push(e);return s}.call(this),this.all=function(){var t,i,n,s;for(s=[],t=0,i=(n=this.boxes).length;i>t;t++)e=n[t],s.push(e);return s}.call(this),this.boxes.length,this.disabled())this.resetStyle();else{for(i=0,n=(s=this.boxes).length;n>i;i++)e=s[i],this.applyStyle(e,!0);window.addEventListener("scroll",this.scrollHandler,!1),window.addEventListener("resize",this.scrollHandler,!1),this.interval=setInterval(this.scrollCallback,50)}return this.config.live?new t((o=this,function(t){var e,i,n,s,a;for(a=[],n=0,s=t.length;s>n;n++)i=t[n],a.push(function(){var t,n,s,o;for(o=[],t=0,n=(s=i.addedNodes||[]).length;n>t;t++)e=s[t],o.push(this.doSync(e));return o}.call(o));return a})).observe(document.body,{childList:!0,subtree:!0}):void 0},o.prototype.stop=function(){return this.stopped=!0,window.removeEventListener("scroll",this.scrollHandler,!1),window.removeEventListener("resize",this.scrollHandler,!1),null!=this.interval?clearInterval(this.interval):void 0},o.prototype.sync=function(){return t.notSupported?this.doSync(this.element):void 0},o.prototype.doSync=function(t){var e,i,n,o,a;if(!this.stopped){if(null==t&&(t=this.element),1!==t.nodeType)return;for(a=[],i=0,n=(o=(t=t.parentNode||t).querySelectorAll("."+this.config.boxClass)).length;n>i;i++)e=o[i],s.call(this.all,e)<0?(this.applyStyle(e,!0),this.boxes.push(e),this.all.push(e),a.push(this.scrolled=!0)):a.push(void 0);return a}},o.prototype.show=function(t){return this.applyStyle(t),t.className=t.className+" "+this.config.animateClass},o.prototype.applyStyle=function(t,e){var i,n,s,o;return n=t.getAttribute("data-sppb-wow-duration"),i=t.getAttribute("data-sppb-wow-delay"),s=t.getAttribute("data-sppb-wow-iteration"),this.animate((o=this,function(){return o.customStyle(t,e,n,i,s)}))},o.prototype.animate="requestAnimationFrame"in window?function(t){return window.requestAnimationFrame(t)}:function(t){return t()},o.prototype.resetStyle=function(){var t,e,i,n,s;for(s=[],e=0,i=(n=this.boxes).length;i>e;e++)t=n[e],s.push(t.setAttribute("style","visibility: visible;"));return s},o.prototype.customStyle=function(t,e,i,n,s){return e&&this.cacheAnimationName(t),t.style.visibility=e?"hidden":"visible",i&&this.vendorSet(t.style,{animationDuration:i}),n&&this.vendorSet(t.style,{animationDelay:n}),s&&this.vendorSet(t.style,{animationIterationCount:s}),this.vendorSet(t.style,{animationName:e?"none":this.cachedAnimationName(t)}),t},o.prototype.vendors=["moz","webkit"],o.prototype.vendorSet=function(t,e){var i,n,s,o;for(i in o=[],e)n=e[i],t[""+i]=n,o.push(function(){var e,o,a,r;for(r=[],e=0,o=(a=this.vendors).length;o>e;e++)s=a[e],r.push(t[""+s+i.charAt(0).toUpperCase()+i.substr(1)]=n);return r}.call(this));return o},o.prototype.vendorCSS=function(t,e){var i,n,s,o,a,r;for(i=(n=window.getComputedStyle(t)).getPropertyCSSValue(e),o=0,a=(r=this.vendors).length;a>o;o++)s=r[o],i=i||n.getPropertyCSSValue("-"+s+"-"+e);return i},o.prototype.animationName=function(t){var e;try{e=this.vendorCSS(t,"animation-name").cssText}catch(i){e=window.getComputedStyle(t).getPropertyValue("animation-name")}return"none"===e?"":e},o.prototype.cacheAnimationName=function(t){return this.animationNameCache.set(t,this.animationName(t))},o.prototype.cachedAnimationName=function(t){return this.animationNameCache.get(t)},o.prototype.scrollHandler=function(){return this.scrolled=!0},o.prototype.scrollCallback=function(){var t;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var e,i,n,s;for(s=[],e=0,i=(n=this.boxes).length;i>e;e++)(t=n[e])&&(this.isVisible(t)?this.show(t):s.push(t));return s}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},o.prototype.offsetTop=function(t){for(var e;void 0===t.offsetTop;)t=t.parentNode;for(e=t.offsetTop;t=t.offsetParent;)e+=t.offsetTop;return e},o.prototype.isVisible=function(t){var e,i,n,s,o;return i=t.getAttribute("data-sppb-wow-offset")||this.config.offset,s=(o=window.pageYOffset)+Math.min(this.element.clientHeight,innerHeight)-i,e=(n=this.offsetTop(t))+t.clientHeight,s>=n&&e>=o},o.prototype.util=function(){return null!=this._util?this._util:this._util=new e},o.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},o}()}.call(this),jQuery(function(t){(new SPPBWOW).init()}),function(t){var e,i,n,s={},o=document,a=window,r=o.documentElement,p=t.expando;function l(){var n,p,l,c,h=t(),d=0;if(t.each(s,function(t,e){var i=e.data.selector,n=e.$element;h=h.add(i?n.find(i):n)}),n=h.length)for(e=e||((c={height:a.innerHeight,width:a.innerWidth}).height||!(p=o.compatMode)&&t.support.boxModel||(c={height:(l="CSS1Compat"===p?r:o.body).clientHeight,width:l.clientWidth}),c),i=i||{top:a.pageYOffset||r.scrollTop||o.body.scrollTop,left:a.pageXOffset||r.scrollLeft||o.body.scrollLeft};d<n;d++)if(t.contains(r,h[d])){var u,f,b,v=t(h[d]),m=v.height(),g=v.width(),y=v.offset(),w=v.data("inview");if(!i||!e)return;y.top+m>i.top&&y.top<i.top+e.height&&y.left+g>i.left&&y.left<i.left+e.width?(b=(u=i.left>y.left?"right":i.left+e.width<y.left+g?"left":"both")+"-"+(f=i.top>y.top?"bottom":i.top+e.height<y.top+m?"top":"both"),w&&w===b||v.data("inview",b).trigger("inview",[!0,u,f])):w&&v.data("inview",!1).trigger("inview",[!1])}}t.event.special.inview={add:function(e){s[e.guid+"-"+this[p]]={data:e,$element:t(this)},n||t.isEmptyObject(s)||(n=setInterval(l,250))},remove:function(e){try{delete s[e.guid+"-"+this[p]]}catch(t){}t.isEmptyObject(s)&&(clearInterval(n),n=null)}},t(a).bind("scroll resize scrollstop",function(){e=i=null}),!r.addEventListener&&r.attachEvent&&r.attachEvent("onfocusin",function(){i=null}),t(document).on("inview",".sppb-progress",function(e,i,n,s){var o=t(this).find(".sppb-progress-bar");i&&(o.css("width",o.data("width")),t(this).unbind("inview"))}),t.fn.sppbanimateNumbers=function(e,i,n,s){return this.each(function(){var o=t(this),a=parseInt(o.text().replace(/,/g,""));i=void 0===i||i,t({value:a}).animate({value:e},{duration:null==n?1e3:n,easing:null==s?"swing":s,step:function(){o.text(Math.floor(this.value)),i&&o.text(o.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,"))},complete:function(){parseInt(o.text())!==e&&(o.text(e),i&&o.text(o.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,")))}})})},t(document).on("inview",".sppb-animated-number",function(e,i,n,s){var o=t(this);i&&(o.sppbanimateNumbers(o.data("digit"),!1,o.data("duration")),o.unbind("inview"))}),t(document).on("inview",".sppb-pie-chart",function(e,i,n,s){var o=t(this);i&&(o.easyPieChart({barColor:o.data("barcolor"),trackColor:o.data("trackcolor"),scaleColor:!1,lineWidth:o.data("width"),size:o.data("size"),onStep:function(t,e,i){o.find(".sppb-chart-percent > span").text(Math.round(i)+"%")}}),o.unbind("inview"))})}(jQuery),jQuery(function(t){t(document).on("submit",".sppb-ajaxt-contact-form",function(e){e.preventDefault();var i=t(this),n=t(this).serializeArray(),s={option:"com_sppagebuilder",task:"ajax",addon:"ajax_contact","g-recaptcha-response":i.find("#g-recaptcha-response").val(),data:n};return t.ajax({type:"POST",data:s,beforeSend:function(){i.find(".fa").addClass("fa-spinner fa-spin")},success:function(e){var n=t.parseJSON(e);try{var s=t.parseJSON(n.data),o=s.content,a="json"}catch(t){o=n.data,a="strings"}"json"==a?s.status&&i.trigger("reset"):i.trigger("reset"),i.find(".fa-spin").removeClass("fa-spinner fa-spin"),i.next(".sppb-ajax-contact-status").html(o).fadeIn().delay(4e3).fadeOut(500)}}),!1})}),jQuery(function(t){t(document).on("submit",".sppb-optin-form",function(e){e.preventDefault();var i=t(this),n=t(this).serializeArray(),s={name:"view_type",value:"page"};if(i.closest(".sp-page-builder").hasClass("mod-sppagebuilder")){s.value="module";var o={name:"module_id",value:i.closest(".sp-page-builder").data("module_id")};n.push(o)}else i.closest(".sp-page-builder").hasClass("sppb-article-page-wrapper")&&(s.value="article");n.push(s);var a={option:"com_sppagebuilder",task:"ajax",addon:"optin_form","g-recaptcha-response":i.find("#g-recaptcha-response").val(),data:n};return t.ajax({type:"POST",data:a,beforeSend:function(){i.find(".fa").addClass("fa-spinner fa-spin")},success:function(e){var n=t.parseJSON(e),s=t.parseJSON(n.data),o="sppb-alert sppb-alert-warning";if(s.status){o="sppb-alert sppb-alert-success";i.trigger("reset")}i.find(".fa-spin").removeClass("fa-spinner fa-spin"),i.next(".sppb-optin-form-status").html('<p class="'+o+'">'+s.content+"</p>").fadeIn().delay(4e3).fadeOut(1e3)}}),!1})}),jQuery(function(t){t(document).on("click",".sppb-magnific-popup",function(e){e.preventDefault();var i=t(this);i.magnificPopup({type:i.data("popup_type"),mainClass:i.data("mainclass")}).magnificPopup("open")})}),jQuery(function(t){/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?(t(".sppb-addon-sppb-flibox .sppb-flipbox-panel, .threeD-flipbox .threeD-content-wrap").on("mouseover",function(e){t(this).toggleClass("flip")}),t(document).on("mouseenter",".sppb-addon-sppb-flibox .sppb-flipbox-panel, .threeD-flipbox .threeD-content-wrap",function(e){t(this).addClass("flip")}),t(document).on("mouseleave",".sppb-addon-sppb-flibox .sppb-flipbox-panel, .threeD-flipbox .threeD-content-wrap",function(e){t(this).removeClass("flip")})):(t(document).on("click",".sppb-addon-sppb-flibox.flipon-click .sppb-flipbox-panel, .threeD-flipbox.flipon-click .threeD-content-wrap",function(e){t(this).toggleClass("flip")}),t(document).on("mouseenter",".sppb-addon-sppb-flibox.flipon-hover .sppb-flipbox-panel, .threeD-flipbox.flipon-hover .threeD-content-wrap",function(){t(this).addClass("flip")}),t(document).on("mouseleave",".sppb-addon-sppb-flibox.flipon-hover .sppb-flipbox-panel, .threeD-flipbox.flipon-hover .threeD-content-wrap",function(){t(this).removeClass("flip")}))}),jQuery(function(t){new MutationObserver(function(e){e.forEach(function(e){var i=e.addedNodes;null!==i&&t(i).each(function(){t(this).find(".sppb-addon-countdown .sppb-countdown-timer").each(function(){var e=t(this),i=e.data("date")+" "+e.data("time");e.countdown(i,function(i){t(this).html(i.strftime('<div class="sppb-countdown-days sppb-col-xs-6 sppb-col-sm-3 sppb-text-center"><span class="sppb-countdown-number">%-D</span><span class="sppb-countdown-text">%!D: '+Joomla.JText._("COM_SPPAGEBUILDER_DAY")+","+Joomla.JText._("COM_SPPAGEBUILDER_DAYS")+';</span></div><div class="sppb-countdown-hours sppb-col-xs-6 sppb-col-sm-3 sppb-text-center"><span class="sppb-countdown-number">%H</span><span class="sppb-countdown-text">%!H: '+Joomla.JText._("COM_SPPAGEBUILDER_HOUR")+","+Joomla.JText._("COM_SPPAGEBUILDER_HOURS")+';</span></div><div class="sppb-countdown-minutes sppb-col-xs-6 sppb-col-sm-3 sppb-text-center"><span class="sppb-countdown-number">%M</span><span class="sppb-countdown-text">%!M:'+Joomla.JText._("COM_SPPAGEBUILDER_MINUTE")+","+Joomla.JText._("COM_SPPAGEBUILDER_MINUTES")+';</span></div><div class="sppb-countdown-seconds sppb-col-xs-6 sppb-col-sm-3 sppb-text-center"><span class="sppb-countdown-number">%S</span><span class="sppb-countdown-text">%!S:'+Joomla.JText._("COM_SPPAGEBUILDER_SECOND")+","+Joomla.JText._("COM_SPPAGEBUILDER_SECONDS")+";</span></div>")).on("finish.countdown",function(){t(this).html('<div class="sppb-countdown-finishedtext-wrap sppb-col-xs-12 sppb-col-sm-12 sppb-text-center"><h3 class="sppb-countdown-finishedtext">'+e.data("finish-text")+"</h3></div>")})})})})})}).observe(document.body,{childList:!0,subtree:!0})}),function(t){function e(){if("undefined"==typeof stickyParent&&(stickyParent=t('[data-sticky-it="true"]').parents(".sppb-section ")),!("undefined"==typeof stickyParent||0==stickyParent.length||t(window).width()<=767)){var e=stickyParent.offset();stickyParentWrap=stickyParent.parents(".sppb-sticky-wrap"),stickyParentWrap.hasClass("sppb-sticky-wrap")&&(e=stickyParentWrap.offset()),window.scrollY>=e.top&&!stickyParent.hasClass("sppb-sticky-it")?(stickyParent.wrap('<div class="sppb-sticky-wrap" style="height:'+stickyParent.outerHeight()+'px;"></div>'),stickyParent.addClass("sppb-sticky-it")):window.scrollY<e.top&&stickyParent.hasClass("sppb-sticky-it")&&(stickyParent.removeClass("sppb-sticky-it"),stickyParent.unwrap())}}window.sppbVideoBackgroundResize=function(t){t.find(".sppb-youtube-video-bg").removeClass("hidden");var e=t.innerWidth(),i=t.innerHeight();iframeW=e,iframeH=e*(9/16),marginTop=-Math.round((iframeH-i)/2),marginLeft=-Math.round((iframeW-e)/2),e/i<16/9&&(iframeW=i*(16/9),iframeH=i,marginLeft=-Math.round((iframeW-e)/2),marginTop=-Math.round((iframeH-i)/2)),t.find(".sppb-youtube-video-bg iframe").css({maxWidth:"1000%",marginLeft:marginLeft,marginTop:marginTop,width:iframeW,height:iframeH})},t(window).on("load resize",function(){t(".sppb-row-have-ext-bg").each(function(){sppbVideoBackgroundResize(t(this))})}),t(document).ready(function(){void 0!==jQuery.fn.parallax&&t('[data-sppb-parallax="on"]').parallax();var e=document.getElementsByClassName("section-bg-video");if(e.volume=0,t(window).width()<767){for(var i=0;i<e.length;i++)e[i].removeAttribute("autoplay");t(document).on("touchend touchcancel",function(){!function(){for(var t=0;t<e.length;t++)e[t].paused&&e[t].play()}()})}}),t(document).on("click",'[data-scroll-to="true"]',function(e){e.preventDefault();var i=t(this).attr("href");t(this).parents(".sppb-link-list-wrap").find(".sppb-active").removeClass("sppb-active"),t(this).parent().addClass("sppb-active"),t("html, body").animate({scrollTop:t(i).offset().top},600)}),t(document).on("load",e),t(window).on("scroll resize",e),t(document).on("click",".sppb-responsive-bars",function(){t(this).toggleClass("open"),t(this).next().toggleClass("open")})}(jQuery);