/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/validator-imei
 * @version 2.4.0
 */

define(["exports","@form-validation/core"],(function(e,t){"use strict";var a=t.algorithms.luhn;e.imei=function(){return{validate:function(e){if(""===e.value)return{valid:!0};switch(!0){case/^\d{15}$/.test(e.value):case/^\d{2}-\d{6}-\d{6}-\d{1}$/.test(e.value):case/^\d{2}\s\d{6}\s\d{6}\s\d{1}$/.test(e.value):return{valid:a(e.value.replace(/[^0-9]/g,""))};case/^\d{14}$/.test(e.value):case/^\d{16}$/.test(e.value):case/^\d{2}-\d{6}-\d{6}(|-\d{2})$/.test(e.value):case/^\d{2}\s\d{6}\s\d{6}(|\s\d{2})$/.test(e.value):return{valid:!0};default:return{valid:!1}}}}}}));
