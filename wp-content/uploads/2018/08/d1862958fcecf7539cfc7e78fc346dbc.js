/**handles:skrollr**/
!function(e,t,r){"use strict";function n(r){if(o=t.documentElement,a=t.body,O(),j=this,r=r||{},K=r.constants||{},r.easing)for(var n in r.easing)V[n]=r.easing[n];if(Y={beforerender:r.beforerender,render:r.render},J=r.forceHeight!==!1,X=r.smoothScrolling!==!1,Z={targetTop:j.getScrollTop()},J&&(ce=r.scale||1),oe(o,[u],[p]),J){var i=t.getElementById("skrollr-body")||t.createElement("div"),s=i.style;s.minWidth="1px",s.position="absolute",s.top=s.zIndex="0",i.id||(s.width="1px",s.right="0",a.appendChild(i)),function(e){te=function(){e.apply(this,arguments),s.height=fe+o.clientHeight+"px"}}(te)}return j.refresh(),l.addEvent(e,"resize",te),function e(){S(e),N()}(),j}var o,a,l=e.skrollr={get:function(){return j},init:function(e){return j||new n(e)},VERSION:"0.5.14"},i=Object.prototype.hasOwnProperty,s="rendered",f="un"+s,c="skrollable",u="skrollr",p="no-"+u,m="linear",d=1e3,g=50,h="start",v="end",T="center",y="bottom",b="___has_rendered_class",k="___skrollable_id",S=e.requestAnimationFrame;!function(){var t,r=["ms","moz","webkit","o"];for(t=0;r.length>t&&!S;t++)S=e[r[t]+"RequestAnimationFrame"];var n=0;S||(S=function(t){var r=ie(),o=Math.max(0,30-(r-n));e.setTimeout(function(){t(r+o)},o),n=r+o})}();var w,x,E=/^\s+|\s+$/g,F=/^data(?:-(_\w+))?(?:-?(-?\d+))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,z=/\s*([a-z\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,A=/^([a-z\-]+)\[(\w+)\]$/,M=/-([a-z])/g,_=function(e,t){return t.toUpperCase()},D=/[\-+]?[\d]*\.?[\d]+/g,H=/\{\?\}/g,C=/rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,I=/[a-z\-]+-gradient/g,O=function(){var t=/^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;if(e.getComputedStyle){var r=e.getComputedStyle(a,null);for(var n in r)if(w=n.match(t)||+n==n&&r[n].match(t))break;w&&(w=w[0],"-"===w.slice(0,1)?(x=w,w={"-webkit-":"webkit","-moz-":"Moz","-ms-":"ms","-o-":"O"}[w]):x="-"+w.toLowerCase()+"-")}},V={begin:function(){return 0},end:function(){return 1},linear:function(e){return e},quadratic:function(e){return e*e},cubic:function(e){return e*e*e},swing:function(e){return-Math.cos(e*Math.PI)/2+.5},sqrt:function(e){return Math.sqrt(e)},bounce:function(e){var t;if(.5083>=e)t=3;else if(.8489>=e)t=9;else if(.96208>=e)t=27;else{if(!(.99981>=e))return 1;t=91}return 1-Math.abs(3*Math.cos(1.028*e*t)/t)}};n.prototype.refresh=function(e){var n,o=!1;for(e===r?(o=!0,W=[],de=0,e=t.getElementsByTagName("*")):e=[].concat(e),n=0;e.length>n;n++){var a=e[n],l=a,i=[],u=X;if(a.attributes){for(var p=0;a.attributes.length>p;p++){var m=a.attributes[p];if("data-anchor-target"!==m.name)if("data-smooth-scrolling"!==m.name){var d=m.name.match(F);if(null!==d){var g=d[1];g=g&&K[g.substr(1)]||0;var T=(0|d[2])+g,y=d[3],S=d[4]||y,w={offset:T,props:m.value,element:a};i.push(w),y&&y!==h&&y!==v?(w.mode="relative",w.anchors=[y,S]):(w.mode="absolute",y===v?w.isEnd=!0:(w.frame=T*ce,delete w.offset))}}else u="off"!==m.value;else if(l=t.querySelector(m.value),null===l)throw'Unable to find anchor target "'+m.value+'"'}if(i.length){var x,E,z;!o&&k in a?(z=a[k],x=W[z].styleAttr,E=W[z].classAttr):(z=a[k]=de++,x=a.style.cssText,E=ne(a));var A=W[z]={element:a,styleAttr:x,classAttr:E,anchorTarget:l,keyFrames:i,smoothScrolling:u};oe(a,[c,s],[f]),A[b]=!0}}}for(te(),n=0;e.length>n;n++){var M=W[e[n][k]];M!==r&&(M.keyFrames.sort(se),$(M),L(M))}return j},n.prototype.relativeToAbsolute=function(e,t,r){var n=o.clientHeight,a=e.getBoundingClientRect(),l=a.top,i=a.bottom-a.top;return t===y?l-=n:t===T&&(l-=n/2),r===y?l+=i:r===T&&(l+=i/2),l+=j.getScrollTop(),0|l+.5},n.prototype.animateTo=function(e,t){t=t||{};var n=ie(),o=j.getScrollTop();return Q={startTop:o,topDiff:e-o,targetTop:e,duration:t.duration||d,startTime:n,endTime:n+(t.duration||d),easing:V[t.easing||m],done:t.done},Q.topDiff||(Q.done&&Q.done.call(j,!1),Q=r),j},n.prototype.stopAnimateTo=function(){Q&&Q.done&&Q.done.call(j,!0),Q=r},n.prototype.isAnimatingTo=function(){return!!Q},n.prototype.setScrollTop=function(t,r){return r===!0&&(pe=t,ee=!0),l.iscroll?l.iscroll.scrollTo(0,-t):e.scrollTo(0,t),j},n.prototype.getScrollTop=function(){return l.iscroll?-l.iscroll.y:e.pageYOffset||o.scrollTop||a.scrollTop||0},n.prototype.on=function(e,t){return Y[e]=t,j},n.prototype.off=function(e){return delete Y[e],j};var q=function(){var e,t,r,n,o,a,l,i,s;for(a=0;W.length>a;a++)for(e=W[a],t=e.element,r=e.anchorTarget,n=e.keyFrames,l=0;n.length>l;l++)o=n[l],"relative"===o.mode&&(i=t.style.cssText,s=ne(t),t.style.cssText=e.styleAttr,oe(t,e.classAttr),o.frame=j.relativeToAbsolute(r,o.anchors[0],o.anchors[1])-o.offset,t.style.cssText=i,oe(t,s)),J&&!o.isEnd&&o.frame>fe&&(fe=o.frame);for(fe=Math.max(fe,re()),a=0;W.length>a;a++)for(e=W[a],n=e.keyFrames,l=0;n.length>l;l++)o=n[l],o.isEnd&&(o.frame=fe-o.offset)},G=function(e,t){for(var r=0;W.length>r;r++){var n,o,a=W[r],c=a.smoothScrolling?e:t,u=a.keyFrames,p=u[0].frame,m=u[u.length-1].frame,d=p>=c,g=c>=m;if(d||g){var h=u[d?0:u.length-1].props;for(n in h)i.call(h,n)&&(o=P(h[n].value),l.setStyle(a.element,n,o));a[b]&&(p>c||c>m)&&(oe(a.element,[f],[s]),a[b]=!1)}else{a[b]||(oe(a.element,[s],[f]),a[b]=!0);for(var v=0;u.length-1>v;v++)if(c>=u[v].frame&&u[v+1].frame>=c){var T=u[v],y=u[v+1];for(n in T.props)if(i.call(T.props,n)){var k=(c-T.frame)/(y.frame-T.frame);k=T.props[n].easing(k),o=U(T.props[n].value,y.props[n].value,k),o=P(o),l.setStyle(a.element,n,o)}break}}}},N=function(){var e,t,n=j.getScrollTop(),o=ie();if(Q)o>=Q.endTime?(n=Q.targetTop,e=Q.done,Q=r):(t=Q.easing((o-Q.startTime)/Q.duration),n=0|Q.startTop+t*Q.topDiff),j.setScrollTop(n);else{var a=Z.targetTop-n;a&&(Z={startTop:pe,topDiff:n-pe,targetTop:n,startTime:me,endTime:me+g}),Z.endTime>=o&&(t=V.sqrt((o-Z.startTime)/g),n=0|Z.startTop+t*Z.topDiff)}if(0>n&&(n=0),ee||pe!==n){ue=n>=pe?"down":"up",ee=!1;var l={curTop:n,lastTop:pe,maxTop:fe,direction:ue},i=Y.beforerender&&Y.beforerender.call(j,l);i!==!1&&(G(n,j.getScrollTop()),pe=n,Y.render&&Y.render.call(j,l)),e&&e.call(j,!1)}me=o},$=function(e){for(var t=0;e.keyFrames.length>t;t++){for(var r,n,o,a,l=e.keyFrames[t],i={};null!==(a=z.exec(l.props));)o=a[1],n=a[2],r=o.match(A),null!==r?(o=r[1],r=r[2]):r=m,n=n.indexOf("!")?B(n):[n.slice(1)],i[o]={value:n,easing:V[r]};l.props=i}},B=function(e){var t=[];return C.lastIndex=0,e=e.replace(C,function(e){return e.replace(D,function(e){return 100*(e/255)+"%"})}),x&&(I.lastIndex=0,e=e.replace(I,function(e){return x+e})),e=e.replace(D,function(e){return t.push(+e),"{?}"}),t.unshift(e),t},L=function(e){var t,r={};for(t=0;e.keyFrames.length>t;t++)R(e.keyFrames[t],r);for(r={},t=e.keyFrames.length-1;t>=0;t--)R(e.keyFrames[t],r)},R=function(e,t){var r;for(r in t)i.call(e.props,r)||(e.props[r]=t[r]);for(r in e.props)t[r]=e.props[r]},U=function(e,t,r){if(e.length!==t.length)throw"Can't interpolate between \""+e[0]+'" and "'+t[0]+'"';for(var n=[e[0]],o=1;e.length>o;o++)n[o]=e[o]+(t[o]-e[o])*r;return n},P=function(e){var t=1;return H.lastIndex=0,e[0].replace(H,function(){return e[t++]})};l.setStyle=function(e,t,r){var n=e.style;if(t=t.replace(M,_).replace("-",""),"zIndex"===t)n[t]=""+(0|r);else if("float"===t)n.styleFloat=n.cssFloat=r;else try{w&&(n[w+t.slice(0,1).toUpperCase()+t.slice(1)]=r),n[t]=r}catch(e){}},l.addEvent=function(t,r,n){var o=function(t){return t=t||e.event,t.target||(t.target=t.srcElement),t.preventDefault||(t.preventDefault=function(){t.returnValue=!1}),n.call(this,t)};e.addEventListener?t.addEventListener(r,o,!1):t.attachEvent("on"+r,o)};var j,W,Y,J,K,Q,X,Z,ee,te=function(){fe=0,q(),ee=!0,l.iscroll&&e.setTimeout(function(){l.iscroll.refresh()},0)},re=function(){var e=Math.max(a.scrollHeight,a.offsetHeight,o.scrollHeight,o.offsetHeight,o.clientHeight);return e-o.clientHeight},ne=function(t){var r="className";return e.SVGElement&&t instanceof e.SVGElement&&(t=t[r],r="baseVal"),t[r]},oe=function(t,n,o){var a="className";if(e.SVGElement&&t instanceof e.SVGElement&&(t=t[a],a="baseVal"),o===r)return t[a]=n,r;for(var l=t[a],i=0;n.length>i;i++)-1===le(l).indexOf(le(n[i]))&&(l+=" "+n[i]);for(var s=0;o.length>s;s++)l=le(l).replace(le(o[s])," ");t[a]=ae(l)},ae=function(e){return e.replace(E,"")},le=function(e){return" "+e+" "},ie=Date.now||function(){return+new Date},se=function(e,t){return e.frame-t.frame},fe=0,ce=1,ue="down",pe=-1,me=ie(),de=0}(window,document);