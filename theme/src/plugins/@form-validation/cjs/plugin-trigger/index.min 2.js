/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/plugin-trigger
 * @version 2.4.0
 */

"use strict";var e=require("@form-validation/core"),t=function(e,n){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])},t(e,n)};var n=function(e){function n(t){var n=e.call(this,t)||this;n.handlers=[],n.timers=new Map;var r=document.createElement("div");return n.defaultEvent="oninput"in r?"input":"keyup",n.opts=Object.assign({},{delay:0,event:n.defaultEvent,threshold:0},t),n.fieldAddedHandler=n.onFieldAdded.bind(n),n.fieldRemovedHandler=n.onFieldRemoved.bind(n),n}return function(e,n){if("function"!=typeof n&&null!==n)throw new TypeError("Class extends value "+String(n)+" is not a constructor or null");function r(){this.constructor=e}t(e,n),e.prototype=null===n?Object.create(n):(r.prototype=n.prototype,new r)}(n,e),n.prototype.install=function(){this.core.on("core.field.added",this.fieldAddedHandler).on("core.field.removed",this.fieldRemovedHandler)},n.prototype.uninstall=function(){this.handlers.forEach((function(e){return e.element.removeEventListener(e.event,e.handler)})),this.handlers=[],this.timers.forEach((function(e){return window.clearTimeout(e)})),this.timers.clear(),this.core.off("core.field.added",this.fieldAddedHandler).off("core.field.removed",this.fieldRemovedHandler)},n.prototype.prepareHandler=function(e,t){var n=this;t.forEach((function(t){var r=[];if(n.opts.event&&!1===n.opts.event[e])r=[];else if(n.opts.event&&n.opts.event[e]&&"function"!=typeof n.opts.event[e])r=n.opts.event[e].split(" ");else if("string"==typeof n.opts.event&&n.opts.event!==n.defaultEvent)r=n.opts.event.split(" ");else{var o=t.getAttribute("type"),i=t.tagName.toLowerCase();r=["radio"===o||"checkbox"===o||"file"===o||"select"===i?"change":n.ieVersion>=10&&t.getAttribute("placeholder")?"keyup":n.defaultEvent]}r.forEach((function(r){var o=function(r){return n.handleEvent(r,e,t)};n.handlers.push({element:t,event:r,field:e,handler:o}),t.addEventListener(r,o)}))}))},n.prototype.handleEvent=function(e,t,n){var r=this;if(this.isEnabled&&this.exceedThreshold(t,n)&&this.core.executeFilter("plugins-trigger-should-validate",!0,[t,n])){var o=function(){return r.core.validateElement(t,n).then((function(o){r.core.emit("plugins.trigger.executed",{element:n,event:e,field:t})}))},i=this.opts.delay[t]||this.opts.delay;if(0===i)o();else{var l=this.timers.get(n);l&&window.clearTimeout(l),this.timers.set(n,window.setTimeout(o,1e3*i))}}},n.prototype.onFieldAdded=function(e){this.handlers.filter((function(t){return t.field===e.field})).forEach((function(e){return e.element.removeEventListener(e.event,e.handler)})),this.prepareHandler(e.field,e.elements)},n.prototype.onFieldRemoved=function(e){this.handlers.filter((function(t){return t.field===e.field&&e.elements.indexOf(t.element)>=0})).forEach((function(e){return e.element.removeEventListener(e.event,e.handler)}))},n.prototype.exceedThreshold=function(e,t){var n=0!==this.opts.threshold[e]&&0!==this.opts.threshold&&(this.opts.threshold[e]||this.opts.threshold);if(!n)return!0;var r=t.getAttribute("type");return-1!==["button","checkbox","file","hidden","image","radio","reset","submit"].indexOf(r)||this.core.getElementValue(e,t).length>=n},n}(e.Plugin);exports.Trigger=n;
