!function(e){var n={};function o(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=e,o.c=n,o.d=function(e,n,t){o.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,n){if(1&n&&(e=o(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var r in e)o.d(t,r,function(n){return e[n]}.bind(null,r));return t},o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,"a",n),n},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o.p="/",o(o.s=89)}({18:function(e,n,o){"use strict";o.r(n);var t=function(){return Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/))};function r(e,n,o){navigator.serviceWorker.register(e,o).then(function(e){n("registered",e),e.waiting?n("updated",e):e.onupdatefound=function(){n("updatefound",e);var o=e.installing;o.onstatechange=function(){"installed"===o.state&&(navigator.serviceWorker.controller?n("updated",e):n("cached",e))}}}).catch(function(e){n("error",e)})}function i(){"serviceWorker"in navigator&&navigator.serviceWorker.ready.then(function(e){e.unregister()})}(function(e,n){void 0===n&&(n={});var o=n.registrationOptions;void 0===o&&(o={}),delete n.registrationOptions;var c=function(e){for(var o=[],t=arguments.length-1;t-- >0;)o[t]=arguments[t+1];n&&n[e]&&n[e].apply(n,o)};"serviceWorker"in navigator&&window.addEventListener("load",function(){t()?(function(e,n,o){fetch(e).then(function(t){404===t.status?(n("error",new Error("Service worker not found at "+e)),i()):-1===t.headers.get("content-type").indexOf("javascript")?(n("error",new Error("Expected "+e+" to have javascript content-type, but received "+t.headers.get("content-type"))),i()):r(e,n,o)}).catch(function(e){navigator.onLine?n("error",e):n("offline")})}(e,c,o),navigator.serviceWorker.ready.then(function(e){c("ready",e)})):r(e,c,o)})})("".concat("http://localhost:8001","/service-worker.js"),{ready:function(){console.log("App is being served from cache by a service worker.\nFor more details, visit https://goo.gl/AFskqB")},registered:function(){console.log("Service worker has been registered.")},cached:function(){console.log("Content has been cached for offline use.")},updatefound:function(){console.log("New content is downloading.")},updated:function(){console.log("New content is available; please refresh.")},offline:function(){console.log("No internet connection found. App is running in offline mode.")},error:function(e){console.error("Error during service worker registration:",e)}})},89:function(e,n,o){e.exports=o(18)}});