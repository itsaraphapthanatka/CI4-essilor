/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/validator-hex
 * @version 2.4.0
 */

function t(){return{validate:function(t){return{valid:""===t.value||/^[0-9a-fA-F]+$/.test(t.value)}}}}export{t as hex};
