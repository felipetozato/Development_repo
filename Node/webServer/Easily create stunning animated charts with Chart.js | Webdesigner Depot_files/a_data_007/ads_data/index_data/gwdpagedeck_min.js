-function(){"use strict";function t(t,e,i,a,n,s,r){if(this.h=t,this.f=e,this.m=i,t=a||"none",this.g=n="none"===t?0:n||1e3,this.d=s||"linear",this.e=[],n){if(s=r||"top",r=this.h){if(r.classList.add("gwd-page"),r.classList.add("center"),r="center","push"==t)switch(s){case"top":r="top";break;case"bottom":r="bottom";break;case"left":r="left";break;case"right":r="right"}this.e.push(r),"fade"==t&&this.e.push("transparent")}if(r=this.f,n="center","none"!=t&&"fade"!=t)switch(s){case"top":n="bottom";break;case"bottom":n="top";break;case"left":n="right";break;case"right":n="left"}r.classList.add(n),r.classList.add("gwd-page"),"fade"==t&&r.classList.add("transparent")}}var e=["-ms-","-moz-","-webkit-",""],i=function(t,i){for(var a,n,s=0;s<e.length;++s)a=e[s]+"transition-duration",n=""+i,t.style.setProperty(a,n)};t.prototype.start=function(){if(this.g){var t=this.h,e=this.f;if(r(e,this.r.bind(this)),t&&(i(t,this.g+"ms"),t.classList.add(this.d)),i(e,this.g+"ms"),e.classList.add(this.d),e.setAttribute("gwd-reflow",e.offsetWidth),t)for(var a=0;a<this.e.length;++a)t.classList.add(this.e[a]);s(e)}else this.m()};var a=function(t,e,i,a){return i="transform: matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,"+i+","+a+",0,1);",t+"."+e+"{-webkit-"+i+"-moz-"+i+"-ms-"+i+i+"}"},n="center top bottom left right transparent".split(" "),s=function(t){n.forEach(function(e){t.classList.remove(e)})},r=function(t,e){var i=function(){t.removeEventListener("webkitTransitionEnd",i),t.removeEventListener("transitionend",i),e()};t.addEventListener("webkitTransitionEnd",i),t.addEventListener("transitionend",i)};t.prototype.r=function(){var t=this.h;t&&(s(t),i(t,0),t.classList.remove(this.d)),i(this.f,0),this.f.classList.remove(this.d),this.m()};var o=function(t,e,i){var a;i?(a=document.createEvent("CustomEvent"),a.initCustomEvent(t,!0,!0,i)):(a=document.createEvent("Event"),a.initEvent(t,!0,!0)),e.dispatchEvent(a)};document.registerElement&&document.registerElement("gwd-pagedeck",{prototype:Object.create(HTMLDivElement.prototype,{createdCallback:{value:function(){window.addEventListener("WebComponentsReady",this.handleWebComponentsReadyEvent_.bind(this),!1),this.l=this.forwardDeviceEventsToCurrentPage_.bind(this,"shake"),this.k=this.forwardDeviceEventsToCurrentPage_.bind(this,"rotatetoportrait"),this.j=this.forwardDeviceEventsToCurrentPage_.bind(this,"rotatetolandscape"),this.a=[],this.n=this.handlePageLoaded_.bind(this),this.q=this.endPageTransition_.bind(this),this.c=this.o=null,this.b=-1,this.i=!1,this.classList.add("gwd-pagedeck")},enumerable:!0},handleWebComponentsReadyEvent_:{value:function(){for(this.a=Array.prototype.slice.call(this.querySelectorAll("div[is=gwd-page]")),this.a.forEach(function(t){t.classList.add("gwd-page")}),o("beforepagesdetached",this,{pages:this.a.slice()});this.firstChild;)this.removeChild(this.firstChild);-1==this.b&&void 0!==this.p&&this.goToPage(this.p)},enumerable:!1},attachedCallback:{value:function(){if(!this.o){var t,e=this.id;t=this.offsetWidth;var i=this.offsetHeight,e=(e&&"#")+e+".gwd-pagedeck > .gwd-page";t=a(e,"center",0,0)+a(e,"top",0,i)+a(e,"bottom",0,-i)+a(e,"left",t,0)+a(e,"right",-t,0),i=document.createElement("style"),void 0!==i.cssText?i.cssText=t:i.innerHTML=t,document.head.appendChild(i),this.o=i}this.addEventListener("pageload",this.n,!1),document.body.addEventListener("shake",this.l,!0),document.body.addEventListener("rotatetoportrait",this.k,!0),document.body.addEventListener("rotatetolandscape",this.j,!0)},enumerable:!0},detachedCallback:{value:function(){this.removeEventListener("pageload",this.n,!1),document.body.removeEventListener("shake",this.l,!0),document.body.removeEventListener("rotatetoportrait",this.k,!0),document.body.removeEventListener("rotatetolandscape",this.j,!0)},enumerable:!0},goToPageImpl_:{value:function(e,i,a,n,s){if(!(this.b==e||0>e||e>this.a.length-1||this.c)){var r=this.a[this.b],o=this.a[e];this.b=e,this.c=new t(r,o,this.q,i,a,n,s),this.appendChild(o);var h=o.gwdLoad&&!o.gwdIsLoaded();this.i=h,setTimeout(function(){h?o.gwdLoad():this.startPageTransition_()}.bind(this),0)}},enumerable:!1},handlePageLoaded_:{value:function(t){this.i&&t.target.parentNode==this&&(this.startPageTransition_(),this.i=!1)}},startPageTransition_:{value:function(){o("pagetransitionstart",this),this.c.start()},enumerable:!1},endPageTransition_:{value:function(){this.c&&(this.c=null);var t=this.firstChild,e=this.lastChild,i=t==e;o("pagetransitionend",this,{outgoingPage:i?null:t,incomingPage:e}),i||this.removeChild(t),e.gwdPresent()},enumerable:!1},findPageIndexByAttributeValue:{value:function(t,e){for(var i,a=this.a.length,n=0;a>n;n++)if(i=this.a[n],"boolean"==typeof e){if(i.hasAttribute(t))return n}else if(i.getAttribute(t)==e)return n;return-1},enumerable:!0},goToNextPage:{value:function(t,e,i,a,n){var s=this.b,r=s+1;r>=this.a.length&&(r=t?0:s),this.goToPageImpl_(r,e,i,a,n)},enumerable:!0},goToPreviousPage:{value:function(t,e,i,a,n){var s=this.b,r=this.a.length,o=s-1;0>o&&(o=t?r-1:s),this.goToPageImpl_(o,e,i,a,n)},enumerable:!0},goToPage:{value:function(t,e,i,a,n){this.a.length?(t="number"==typeof t?t:this.findPageIndexByAttributeValue("id",t),t>=0&&this.goToPageImpl_(t,e,i,a,n)):this.p=t},enumerable:!0},currentIndex:{get:function(){return 0<=this.b?this.b:void 0},enumerable:!0},getPages:{value:function(){return this.a}},getPage:{value:function(t){if("number"!=typeof t){if(!t)return null;t=this.findPageIndexByAttributeValue("id",t)}return 0>t||t>this.a.length-1?null:this.a[t]},enumerable:!0},getDefaultPage:{value:function(){var t=this.getAttribute("default-page");return this.getPage(t?this.findPageIndexByAttributeValue("id",t):0)},enumerable:!0},getOrientationSpecificPage:{value:function(t,e){var i=this.getPage(e),a=i.getAttribute("alt-orientation-page");if(!a)return i;var n=i.isPortrait(),s=1==t,a=this.getPage(a);return s==n?i:a},enumerable:!0},forwardDeviceEventsToCurrentPage_:{value:function(t,e){if(e.target==document.body){var i=this.getPage(this.b);o(t,i)}},enumerable:!1},getElementById:{value:function(t){for(var e=this.a.length,i=0;e>i;i++){var a=this.a[i].querySelector("#"+t);if(a)return a}return null},enumerable:!0},getElementsBySelector:{value:function(t){for(var e=this.a.length,i=[],a=0;e>a;a++){var n=this.a[a].querySelectorAll(t);n&&(i=i.concat(Array.prototype.slice.call(n)))}return i},enumerable:!0}}),"extends":"div"})}();