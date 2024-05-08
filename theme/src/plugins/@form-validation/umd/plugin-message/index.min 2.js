/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/plugin-message
 * @version 2.4.0
 */

!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t(require("@form-validation/core")):"function"==typeof define&&define.amd?define(["@form-validation/core"],t):((e="undefined"!=typeof globalThis?globalThis:e||self).FormValidation=e.FormValidation||{},e.FormValidation.plugins=e.FormValidation.plugins||{},e.FormValidation.plugins.Message=t(e.FormValidation))}(this,(function(e){"use strict";var t=function(e,a){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var a in t)Object.prototype.hasOwnProperty.call(t,a)&&(e[a]=t[a])},t(e,a)};var a=e.utils.classSet;return function(e){function n(t){var a=e.call(this,t)||this;return a.useDefaultContainer=!1,a.messages=new Map,a.defaultContainer=document.createElement("div"),a.useDefaultContainer=!t||!t.container,a.opts=Object.assign({},{container:function(e,t){return a.defaultContainer}},t),a.elementIgnoredHandler=a.onElementIgnored.bind(a),a.fieldAddedHandler=a.onFieldAdded.bind(a),a.fieldRemovedHandler=a.onFieldRemoved.bind(a),a.validatorValidatedHandler=a.onValidatorValidated.bind(a),a.validatorNotValidatedHandler=a.onValidatorNotValidated.bind(a),a}return function(e,a){if("function"!=typeof a&&null!==a)throw new TypeError("Class extends value "+String(a)+" is not a constructor or null");function n(){this.constructor=e}t(e,a),e.prototype=null===a?Object.create(a):(n.prototype=a.prototype,new n)}(n,e),n.getClosestContainer=function(e,t,a){for(var n=e;n&&n!==t&&(n=n.parentElement,!a.test(n.className)););return n},n.prototype.install=function(){this.useDefaultContainer&&this.core.getFormElement().appendChild(this.defaultContainer),this.core.on("core.element.ignored",this.elementIgnoredHandler).on("core.field.added",this.fieldAddedHandler).on("core.field.removed",this.fieldRemovedHandler).on("core.validator.validated",this.validatorValidatedHandler).on("core.validator.notvalidated",this.validatorNotValidatedHandler)},n.prototype.uninstall=function(){this.useDefaultContainer&&this.core.getFormElement().removeChild(this.defaultContainer),this.messages.forEach((function(e){return e.parentNode.removeChild(e)})),this.messages.clear(),this.core.off("core.element.ignored",this.elementIgnoredHandler).off("core.field.added",this.fieldAddedHandler).off("core.field.removed",this.fieldRemovedHandler).off("core.validator.validated",this.validatorValidatedHandler).off("core.validator.notvalidated",this.validatorNotValidatedHandler)},n.prototype.onEnabled=function(){this.messages.forEach((function(e,t,n){a(t,{"fv-plugins-message-container--enabled":!0,"fv-plugins-message-container--disabled":!1})}))},n.prototype.onDisabled=function(){this.messages.forEach((function(e,t,n){a(t,{"fv-plugins-message-container--enabled":!1,"fv-plugins-message-container--disabled":!0})}))},n.prototype.onFieldAdded=function(e){var t=this,a=e.elements;a&&(a.forEach((function(e){var a=t.messages.get(e);a&&(a.parentNode.removeChild(a),t.messages.delete(e))})),this.prepareFieldContainer(e.field,a))},n.prototype.onFieldRemoved=function(e){var t=this;if(e.elements.length&&e.field){var a=e.elements[0].getAttribute("type");("radio"===a||"checkbox"===a?[e.elements[0]]:e.elements).forEach((function(e){if(t.messages.has(e)){var a=t.messages.get(e);a.parentNode.removeChild(a),t.messages.delete(e)}}))}},n.prototype.prepareFieldContainer=function(e,t){var a=this;if(t.length){var n=t[0].getAttribute("type");"radio"===n||"checkbox"===n?this.prepareElementContainer(e,t[0],t):t.forEach((function(n){return a.prepareElementContainer(e,n,t)}))}},n.prototype.prepareElementContainer=function(e,t,n){var i;if("string"==typeof this.opts.container){var o="#"===this.opts.container.charAt(0)?'[id="'.concat(this.opts.container.substring(1),'"]'):this.opts.container;i=this.core.getFormElement().querySelector(o)}else i=this.opts.container(e,t);var r=document.createElement("div");i.appendChild(r),a(r,{"fv-plugins-message-container":!0,"fv-plugins-message-container--enabled":this.isEnabled,"fv-plugins-message-container--disabled":!this.isEnabled}),this.core.emit("plugins.message.placed",{element:t,elements:n,field:e,messageElement:r}),this.messages.set(t,r)},n.prototype.getMessage=function(e){return"string"==typeof e.message?e.message:e.message[this.core.getLocale()]},n.prototype.onValidatorValidated=function(e){var t,n=e.elements,i=e.element.getAttribute("type"),o=("radio"===i||"checkbox"===i)&&n.length>0?n[0]:e.element;if(this.messages.has(o)){var r=this.messages.get(o),s=r.querySelector('[data-field="'.concat(e.field.replace(/"/g,'\\"'),'"][data-validator="').concat(e.validator.replace(/"/g,'\\"'),'"]'));if(s||e.result.valid)s&&!e.result.valid?(s.innerHTML=this.getMessage(e.result),this.core.emit("plugins.message.displayed",{element:e.element,field:e.field,message:e.result.message,messageElement:s,meta:e.result.meta,validator:e.validator})):s&&e.result.valid&&r.removeChild(s);else{var l=document.createElement("div");l.innerHTML=this.getMessage(e.result),l.setAttribute("data-field",e.field),l.setAttribute("data-validator",e.validator),this.opts.clazz&&a(l,((t={})[this.opts.clazz]=!0,t)),r.appendChild(l),this.core.emit("plugins.message.displayed",{element:e.element,field:e.field,message:e.result.message,messageElement:l,meta:e.result.meta,validator:e.validator})}}},n.prototype.onValidatorNotValidated=function(e){var t=e.elements,a=e.element.getAttribute("type"),n="radio"===a||"checkbox"===a?t[0]:e.element;if(this.messages.has(n)){var i=this.messages.get(n),o=i.querySelector('[data-field="'.concat(e.field.replace(/"/g,'\\"'),'"][data-validator="').concat(e.validator.replace(/"/g,'\\"'),'"]'));o&&i.removeChild(o)}},n.prototype.onElementIgnored=function(e){var t=e.elements,a=e.element.getAttribute("type"),n="radio"===a||"checkbox"===a?t[0]:e.element;if(this.messages.has(n)){var i=this.messages.get(n);[].slice.call(i.querySelectorAll('[data-field="'.concat(e.field.replace(/"/g,'\\"'),'"]'))).forEach((function(e){i.removeChild(e)}))}},n}(e.Plugin)}));
