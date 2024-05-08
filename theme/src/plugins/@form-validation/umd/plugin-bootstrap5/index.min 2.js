/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/plugin-bootstrap5
 * @version 2.4.0
 */

!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t(require("@form-validation/core"),require("@form-validation/plugin-framework")):"function"==typeof define&&define.amd?define(["@form-validation/core","@form-validation/plugin-framework"],t):((e="undefined"!=typeof globalThis?globalThis:e||self).FormValidation=e.FormValidation||{},e.FormValidation.plugins=e.FormValidation.plugins||{},e.FormValidation.plugins.Bootstrap5=t(e.FormValidation,e.FormValidation.plugins))}(this,(function(e,t){"use strict";var n=function(e,t){return n=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])},n(e,t)};var i=e.utils.classSet,o=e.utils.hasClass;return function(e){function t(t){var n=e.call(this,Object.assign({},{eleInvalidClass:"is-invalid",eleValidClass:"is-valid",formClass:"fv-plugins-bootstrap5",rowInvalidClass:"fv-plugins-bootstrap5-row-invalid",rowPattern:/^(.*)(col|offset)(-(sm|md|lg|xl))*-[0-9]+(.*)$/,rowSelector:".row",rowValidClass:"fv-plugins-bootstrap5-row-valid"},t))||this;return n.eleValidatedHandler=n.handleElementValidated.bind(n),n}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Class extends value "+String(t)+" is not a constructor or null");function i(){this.constructor=e}n(e,t),e.prototype=null===t?Object.create(t):(i.prototype=t.prototype,new i)}(t,e),t.prototype.install=function(){e.prototype.install.call(this),this.core.on("core.element.validated",this.eleValidatedHandler)},t.prototype.uninstall=function(){e.prototype.uninstall.call(this),this.core.off("core.element.validated",this.eleValidatedHandler)},t.prototype.handleElementValidated=function(e){var t=e.element.getAttribute("type");if(("checkbox"===t||"radio"===t)&&e.elements.length>1&&o(e.element,"form-check-input")){var n=e.element.parentElement;o(n,"form-check")&&o(n,"form-check-inline")&&i(n,{"is-invalid":!e.valid,"is-valid":e.valid})}},t.prototype.onIconPlaced=function(e){i(e.element,{"fv-plugins-icon-input":!0});var t=e.element.parentElement;o(t,"input-group")&&(t.parentElement.insertBefore(e.iconElement,t.nextSibling),e.element.nextElementSibling&&o(e.element.nextElementSibling,"input-group-text")&&i(e.iconElement,{"fv-plugins-icon-input-group":!0}));var n=e.element.getAttribute("type");if("checkbox"===n||"radio"===n){var l=t.parentElement;o(t,"form-check")?(i(e.iconElement,{"fv-plugins-icon-check":!0}),t.parentElement.insertBefore(e.iconElement,t.nextSibling)):o(t.parentElement,"form-check")&&(i(e.iconElement,{"fv-plugins-icon-check":!0}),l.parentElement.insertBefore(e.iconElement,l.nextSibling))}},t.prototype.onMessagePlaced=function(e){e.messageElement.classList.add("invalid-feedback");var t=e.element.parentElement;if(o(t,"input-group"))return t.appendChild(e.messageElement),void i(t,{"has-validation":!0});var n=e.element.getAttribute("type");"checkbox"!==n&&"radio"!==n||!o(e.element,"form-check-input")||o(t,"form-check")||o(t,"form-check-inline")||e.elements[e.elements.length-1].parentElement.appendChild(e.messageElement)},t}(t.Framework)}));
