/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/plugin-aria
 * @version 2.4.0
 */

define(["exports","@form-validation/core"],(function(e,t){"use strict";var i=function(e,t){return i=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var i in t)Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i])},i(e,t)};var n=function(e){function t(){var t=e.call(this,{})||this;return t.elementValidatedHandler=t.onElementValidated.bind(t),t.fieldValidHandler=t.onFieldValid.bind(t),t.fieldInvalidHandler=t.onFieldInvalid.bind(t),t.messageDisplayedHandler=t.onMessageDisplayed.bind(t),t}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Class extends value "+String(t)+" is not a constructor or null");function n(){this.constructor=e}i(e,t),e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n)}(t,e),t.prototype.install=function(){this.core.on("core.field.valid",this.fieldValidHandler).on("core.field.invalid",this.fieldInvalidHandler).on("core.element.validated",this.elementValidatedHandler).on("plugins.message.displayed",this.messageDisplayedHandler)},t.prototype.uninstall=function(){this.core.off("core.field.valid",this.fieldValidHandler).off("core.field.invalid",this.fieldInvalidHandler).off("core.element.validated",this.elementValidatedHandler).off("plugins.message.displayed",this.messageDisplayedHandler)},t.prototype.onElementValidated=function(e){e.valid&&(e.element.setAttribute("aria-invalid","false"),e.element.removeAttribute("aria-describedby"))},t.prototype.onFieldValid=function(e){var t=this.core.getElements(e);t&&t.forEach((function(e){e.setAttribute("aria-invalid","false"),e.removeAttribute("aria-describedby")}))},t.prototype.onFieldInvalid=function(e){var t=this.core.getElements(e);t&&t.forEach((function(e){return e.setAttribute("aria-invalid","true")}))},t.prototype.onMessageDisplayed=function(e){e.messageElement.setAttribute("role","alert"),e.messageElement.setAttribute("aria-hidden","false");var t=this.core.getElements(e.field),i=t.indexOf(e.element),n="js-fv-".concat(e.field,"-").concat(i,"-").concat(Date.now(),"-message");e.messageElement.setAttribute("id",n),e.element.setAttribute("aria-describedby",n);var a=e.element.getAttribute("type");"radio"!==a&&"checkbox"!==a||t.forEach((function(e){return e.setAttribute("aria-describedby",n)}))},t}(t.Plugin);e.Aria=n}));
