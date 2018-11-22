;(function($){'use strict'
$.srSmoothscroll=function(options){var self=$.extend({step:100,speed:400,ease:'easeOutCirc',target:$('body'),container:$(window)},options||{})
var container=self.container,top=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop,step=self.step,viewport=container.height(),wheel=false
var target
if(self.target.selector=='body'){target=(navigator.userAgent.indexOf('AppleWebKit')!==-1)?self.target:$('html')}else{target=container}self.target.mousewheel(function(event,delta){wheel=true
if(delta<0)top=(top+viewport)>=self.target.outerHeight(true)?top:top+=step
else
top=top<=0?0:top-=step
target.stop().animate({scrollTop:top},self.speed,self.ease,function(){wheel=false})
return false})
container.on('resize',function(e){viewport=container.height()}).on('scroll',function(e){if(!wheel)top=container.scrollTop()})}})(jQuery);