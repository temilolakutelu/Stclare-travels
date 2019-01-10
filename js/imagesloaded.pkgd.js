(function(){"use strict";function e(){}var t=e.prototype,n=this,i=n.EventEmitter;function r(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function s(e){return function(){return this[e].apply(this,arguments)}}t.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e){t={};for(n in i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n])}else t=i[e]||(i[e]=[]);return t},t.flattenListeners=function(e){var t,n=[];for(t=0;t<e.length;t+=1)n.push(e[t].listener);return n},t.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&((t={})[e]=n),t||n},t.addListener=function(e,t){var n,i=this.getListenersAsObject(e),s="object"==typeof t;for(n in i)i.hasOwnProperty(n)&&-1===r(i[n],t)&&i[n].push(s?t:{listener:t,once:!1});return this},t.on=s("addListener"),t.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},t.once=s("addOnceListener"),t.defineEvent=function(e){return this.getListeners(e),this},t.defineEvents=function(e){for(var t=0;t<e.length;t+=1)this.defineEvent(e[t]);return this},t.removeListener=function(e,t){var n,i,s=this.getListenersAsObject(e);for(i in s)s.hasOwnProperty(i)&&-1!==(n=r(s[i],t))&&s[i].splice(n,1);return this},t.off=s("removeListener"),t.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},t.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},t.manipulateListeners=function(e,t,n){var i,r,s=e?this.removeListener:this.addListener,o=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)s.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?s.call(this,i,r):o.call(this,i,r));return this},t.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"===n)delete i[e];else if("object"===n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},t.removeAllListeners=s("removeEvent"),t.emitEvent=function(e,t){var n,i,r,s=this.getListenersAsObject(e);for(r in s)if(s.hasOwnProperty(r))for(i=s[r].length;i--;)!0===(n=s[r][i]).once&&this.removeListener(e,n.listener),n.listener.apply(this,t||[])===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},t.trigger=s("emitEvent"),t.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},t.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},t._getOnceReturnValue=function(){return!this.hasOwnProperty("_onceReturnValue")||this._onceReturnValue},t._getEvents=function(){return this._events||(this._events={})},e.noConflict=function(){return n.EventEmitter=i,e},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return e}):"object"==typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(e){var t=document.documentElement,n=function(){};function i(t){var n=e.event;return n.target=n.target||n.srcElement||t,n}t.addEventListener?n=function(e,t,n){e.addEventListener(t,n,!1)}:t.attachEvent&&(n=function(e,t,n){e[t+n]=n.handleEvent?function(){var t=i(e);n.handleEvent.call(n,t)}:function(){var t=i(e);n.call(e,t)},e.attachEvent("on"+t,e[t+n])});var r=function(){};t.removeEventListener?r=function(e,t,n){e.removeEventListener(t,n,!1)}:t.detachEvent&&(r=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(i){e[t+n]=void 0}});var s={bind:n,unbind:r};"function"==typeof define&&define.amd?define("eventie/eventie",s):e.eventie=s}(this),function(e,t){"use strict";"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(n,i){return t(e,n,i)}):"object"==typeof module&&module.exports?module.exports=t(e,require("wolfy87-eventemitter"),require("eventie")):e.imagesLoaded=t(e,e.EventEmitter,e.eventie)}(window,function(e,t,n){var i=e.jQuery,r=e.console;function s(e,t){for(var n in t)e[n]=t[n];return e}var o=Object.prototype.toString;function h(e){var t,n=[];if(t=e,"[object Array]"==o.call(t))n=e;else if("number"==typeof e.length)for(var i=0;i<e.length;i++)n.push(e[i]);else n.push(e);return n}function a(e,t,n){if(!(this instanceof a))return new a(e,t,n);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=h(e),this.options=s({},this.options),"function"==typeof t?n=t:s(this.options,t),n&&this.on("always",n),this.getImages(),i&&(this.jqDeferred=new i.Deferred);var r=this;setTimeout(function(){r.check()})}a.prototype=new t,a.prototype.options={},a.prototype.getImages=function(){this.images=[];for(var e=0;e<this.elements.length;e++){var t=this.elements[e];this.addElementImages(t)}},a.prototype.addElementImages=function(e){"IMG"==e.nodeName&&this.addImage(e),!0===this.options.background&&this.addElementBackgroundImages(e);var t=e.nodeType;if(t&&u[t]){for(var n=e.querySelectorAll("img"),i=0;i<n.length;i++){var r=n[i];this.addImage(r)}if("string"==typeof this.options.background){var s=e.querySelectorAll(this.options.background);for(i=0;i<s.length;i++){var o=s[i];this.addElementBackgroundImages(o)}}}};var u={1:!0,9:!0,11:!0};a.prototype.addElementBackgroundImages=function(e){for(var t=c(e),n=/url\(['"]*([^'"\)]+)['"]*\)/gi,i=n.exec(t.backgroundImage);null!==i;){var r=i&&i[1];r&&this.addBackground(r,e),i=n.exec(t.backgroundImage)}};var c=e.getComputedStyle||function(e){return e.currentStyle};function f(e){this.img=e}function d(e,t){this.url=e,this.element=t,this.img=new Image}return a.prototype.addImage=function(e){var t=new f(e);this.images.push(t)},a.prototype.addBackground=function(e,t){var n=new d(e,t);this.images.push(n)},a.prototype.check=function(){var e=this;if(this.progressedCount=0,this.hasAnyBroken=!1,this.images.length)for(var t=0;t<this.images.length;t++){var n=this.images[t];n.once("progress",i),n.check()}else this.complete();function i(t,n,i){setTimeout(function(){e.progress(t,n,i)})}},a.prototype.progress=function(e,t,n){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded,this.emit("progress",this,e,t),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,e),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&r&&r.log("progress: "+n,e,t)},a.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emit(e,this),this.emit("always",this),this.jqDeferred){var t=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[t](this)}},f.prototype=new t,f.prototype.check=function(){this.getIsImageComplete()?this.confirm(0!==this.img.naturalWidth,"naturalWidth"):(this.proxyImage=new Image,n.bind(this.proxyImage,"load",this),n.bind(this.proxyImage,"error",this),n.bind(this.img,"load",this),n.bind(this.img,"error",this),this.proxyImage.src=this.img.src)},f.prototype.getIsImageComplete=function(){return this.img.complete&&void 0!==this.img.naturalWidth},f.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("progress",this,this.img,t)},f.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},f.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},f.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},f.prototype.unbindEvents=function(){n.unbind(this.proxyImage,"load",this),n.unbind(this.proxyImage,"error",this),n.unbind(this.img,"load",this),n.unbind(this.img,"error",this)},d.prototype=new f,d.prototype.check=function(){n.bind(this.img,"load",this),n.bind(this.img,"error",this),this.img.src=this.url,this.getIsImageComplete()&&(this.confirm(0!==this.img.naturalWidth,"naturalWidth"),this.unbindEvents())},d.prototype.unbindEvents=function(){n.unbind(this.img,"load",this),n.unbind(this.img,"error",this)},d.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("progress",this,this.element,t)},a.makeJQueryPlugin=function(t){(t=t||e.jQuery)&&((i=t).fn.imagesLoaded=function(e,t){return new a(this,e,t).jqDeferred.promise(i(this))})},a.makeJQueryPlugin(),a});