/**handles:devicepx**/
!function(e,t,i){"use strict";"undefined"!=typeof module&&module.exports?module.exports=i(t,e):"function"==typeof define&&define.amd?define("factory",function(){return i(t,e)}):e[t]=i(t,e)}(window,"detectZoom",function(){var e=function(){return window.devicePixelRatio||1},t=function(){return{zoom:1,devicePxPerCssPx:1}},i=function(){var t=Math.round(screen.deviceXDPI/screen.logicalXDPI*100)/100;return{zoom:t,devicePxPerCssPx:t*e()}},r=function(){var t=Math.round(document.documentElement.offsetHeight/window.innerHeight*100)/100;return{zoom:t,devicePxPerCssPx:t*e()}},n=function(){var t=90==Math.abs(window.orientation)?screen.height:screen.width,i=t/window.innerWidth;return{zoom:i,devicePxPerCssPx:i*e()}},o=function(){var t=function(e){return e.replace(/;/g," !important;")},i=document.createElement("div");i.innerHTML="1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>0",i.setAttribute("style",t("font: 100px/1em sans-serif; -webkit-text-size-adjust: none; text-size-adjust: none; height: auto; width: 1em; padding: 0; overflow: visible;"));var r=document.createElement("div");r.setAttribute("style",t("width:0; height:0; overflow:hidden; visibility:hidden; position: absolute;")),r.appendChild(i),document.body.appendChild(r);var n=1e3/i.clientHeight;return n=Math.round(100*n)/100,document.body.removeChild(r),{zoom:n,devicePxPerCssPx:n*e()}},a=function(){var e=u("min--moz-device-pixel-ratio","",0,10,20,1e-4);return e=Math.round(100*e)/100,{zoom:e,devicePxPerCssPx:e}},s=function(){return{zoom:a().zoom,devicePxPerCssPx:e()}},c=function(){var t=window.top.outerWidth/window.top.innerWidth;return t=Math.round(100*t)/100,{zoom:t,devicePxPerCssPx:t*e()}},u=function(e,t,i,r,n,o){function a(i,r,n){var c=(i+r)/2;if(n<=0||r-i<o)return c;var u="("+e+":"+c+t+")";return s(u).matches?a(c,r,n-1):a(i,c,n-1)}var s,c,u,d;window.matchMedia?s=window.matchMedia:(c=document.getElementsByTagName("head")[0],u=document.createElement("style"),c.appendChild(u),d=document.createElement("div"),d.className="mediaQueryBinarySearch",d.style.display="none",document.body.appendChild(d),s=function(e){u.sheet.insertRule("@media "+e+"{.mediaQueryBinarySearch {text-decoration: underline} }",0);var t="underline"==getComputedStyle(d,null).textDecoration;return u.sheet.deleteRule(0),{matches:t}});var h=a(i,r,n);return d&&(c.removeChild(u),document.body.removeChild(d)),h},d=function(){var e=t;return isNaN(screen.logicalXDPI)||isNaN(screen.systemXDPI)?window.navigator.msMaxTouchPoints?e=r:"orientation"in window&&"string"==typeof document.body.style.webkitMarquee?e=n:"string"==typeof document.body.style.webkitMarquee?e=o:navigator.userAgent.indexOf("Opera")>=0?e=c:window.devicePixelRatio?e=s:a().zoom>.001&&(e=a):e=i,e}();return{zoom:function(){return d().zoom},device:function(){return d().devicePxPerCssPx}}});var wpcom_img_zoomer={zoomed:!1,timer:null,interval:1e3,imgNeedsSizeAtts:function(e){return null===e.getAttribute("width")&&null===e.getAttribute("height")&&!(e.width<e.naturalWidth||e.height<e.naturalHeight)},updateResizeUrl:function(e,t,i){var r=e.match(/resize=([0-9%2C,]+)/);if(null===r||!r[1])return e;var n=r[1].split(","),o=null;return n[0]!==t&&(o=t),n[1]!==i&&(null!==o&&(o+="%2C"),o+=i),o!==r[1]&&(o="resize="+o,e=e.replace(r[0],o)),e},init:function(){var e=this;try{e.zoomImages(),e.timer=setInterval(function(){e.zoomImages()},e.interval)}catch(e){}},stop:function(){this.timer&&clearInterval(this.timer)},getScale:function(){var e=detectZoom.device();return e>3&&(e=Math.ceil(2*e)/2),e},shouldZoom:function(e){var t=this;return!("innerWidth"in window&&!window.innerWidth)&&(1!=e||0!=t.zoomed)},zoomImages:function(){var e=this,t=e.getScale();if(e.shouldZoom(t)){e.zoomed=!0;for(var i=document.getElementsByTagName("img"),r=0;r<i.length;r++)if((!("complete"in i[r])||i[r].complete)&&!(i[r].hasAttribute("srcset")&&i[r].hasAttribute("sizes")&&"sizes"in i[r])){var n=i[r].getAttribute("scale");if(n!=t&&"0"!=n){var o=i[r].getAttribute("scale-fail");o&&o<=t||i[r].width&&i[r].height&&(!n&&i[r].getAttribute("data-lazy-src")&&i[r].getAttribute("data-lazy-src")!==i[r].getAttribute("src")||(e.scaleImage(i[r],t)?i[r].setAttribute("scale",t):i[r].setAttribute("scale","0")))}}}},scaleImage:function(e,t){var i=this,r=e.src;if(e.parentNode.className.match(/slideshow-slide/))return!1;if(e.src.match(/^https?:\/\/([^\/]*\.)?gravatar\.com\/.+[?&](s|size)=/))r=e.src.replace(/([?&](s|size)=)(\d+)/,function(r,n,o,a){var s="originals",c=e.getAttribute(s);null===c&&(c=a,e.setAttribute(s,c),i.imgNeedsSizeAtts(e)&&(e.width=e.width,e.height=e.height));var u=e.clientWidth,d=Math.ceil(e.clientWidth*t);return d=Math.max(d,c),d=Math.min(d,512),n+d});else if(e.src.match(/^https?:\/\/([^\/]+)\.files\.wordpress\.com\/.+[?&][wh]=/)){if(e.src.match(/[?&]crop/))return!1;for(var n={},o=e.src.match(/([?&]([wh])=)(\d+)/g),a=0;a<o.length;a++){var s=o[a].split("="),c=s[0].replace(/[?&]/g,""),u=s[1],d="original"+c,h=e.getAttribute(d);null===h&&(h=u,e.setAttribute(d,h),i.imgNeedsSizeAtts(e)&&(e.width=e.width,e.height=e.height));var l="w"==c?e.clientWidth:e.clientHeight,m="w"==c?e.naturalWidth:e.naturalHeight,g=Math.ceil(l*t);g=Math.max(g,h),t>e.getAttribute("scale")&&g<=m&&(g=u),m<u&&(g=u),g!=u&&(n[c]=g)}var f=n.w||!1,p=n.h||!1;f&&(r=e.src.replace(/([?&])w=\d+/g,function(e,t){return t+"w="+f})),p&&(r=r.replace(/([?&])h=\d+/g,function(e,t){return t+"h="+p}))}else if(e.src.match(/^https?:\/\/([^\/]+\.)*(wordpress|wp)\.com\/mshots\/.+[?&]w=\d+/))r=e.src.replace(/([?&]w=)(\d+)/,function(r,n,o){var a="originalw",s=e.getAttribute(a);null===s&&(s=o,e.setAttribute(a,s),i.imgNeedsSizeAtts(e)&&(e.width=e.width,e.height=e.height));var c=e.clientWidth,u=Math.ceil(c*t);return u=Math.max(u,s),t>e.getAttribute("scale")&&u<=e.naturalWidth&&(u=o),o!=u?n+u:r}),r=r.replace(/([?&]h=)(\d+)/,function(i,n,o){if(r==e.src)return i;var a="originalh",s=e.getAttribute(a);null===s&&(s=o,e.setAttribute(a,s));var c=e.clientHeight,u=Math.ceil(c*t);return u=Math.max(u,s),t>e.getAttribute("scale")&&u<=e.naturalHeight&&(u=o),o!=u?n+u:i});else if(e.src.match(/^https?:\/\/([^\/.]+\.)*(wp|wordpress)\.com\/imgpress\?(.+)/)){var w=["zoom","url","h","w","fit","filter","brightness","contrast","colorize","smooth","unsharpmask"],v=RegExp.$3.split("&");for(var b in v)if(b=v[b].split("=")[0],w.indexOf(b)==-1)return!1;e.width=e.width,e.height=e.height,r=1==t?e.src.replace(/\?(zoom=[^&]+&)?/,"?"):e.src.replace(/\?(zoom=[^&]+&)?/,"?zoom="+t+"&")}else if(e.src.match(/^https?:\/\/([^\/.]+\.)*(wp|wordpress)\.com\/latex\.php\?(latex|zoom)=(.+)/)||e.src.match(/^https?:\/\/i[\d]{1}\.wp\.com\/(.+)/)){if(navigator.userAgent.indexOf("Firefox")>-1)return;e.width=e.width,e.height=e.height,r=1==t?e.src.replace(/\?(zoom=[^&]+&)?/,"?"):e.src.replace(/\?(zoom=[^&]+&)?/,"?zoom="+t+"&"),!e.srcset&&e.src.match(/resize/)&&(r=i.updateResizeUrl(r,e.width,e.height),e.setAttribute("srcset",r))}else{if(!e.src.match(/^https?:\/\/[^\/]+\/.*[-@]([12])x\.(gif|jpeg|jpg|png)(\?|$)/))return!1;e.width=e.width,e.height=e.height;var z=RegExp.$1,x=z;x=t<=1?1:2,z!=x&&(r=e.src.replace(/([-@])[12]x\.(gif|jpeg|jpg|png)(\?|$)/,"$1"+x+"x.$2$3"))}if(r!=e.src){var A,P=e.getAttribute("src-orig");P||(P=e.src,e.setAttribute("src-orig",P)),A=e.src,e.onerror=function(){e.src=A,e.getAttribute("scale-fail")<t&&e.setAttribute("scale-fail",t),e.onerror=null},e.src=r}return!0}};wpcom_img_zoomer.init();