/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/validator-zip-code
 * @version 2.4.0
 */

import{utils as e}from"../core/index.min.js";var a=e.format,t=e.removeUndefined;function s(){var e=["AT","BG","BR","CA","CH","CZ","DE","DK","ES","FR","GB","IE","IN","IT","MA","NL","PL","PT","RO","RU","SE","SG","SK","US"];return{validate:function(s){var c=Object.assign({},{message:""},t(s.options));if(""===s.value||!c.country)return{valid:!0};var r=s.value.substr(0,2);if(!(r="function"==typeof c.country?c.country.call(this):c.country)||-1===e.indexOf(r.toUpperCase()))return{valid:!0};var n=!1;switch(r=r.toUpperCase()){case"AT":case"CH":n=/^([1-9]{1})(\d{3})$/.test(s.value);break;case"BG":n=/^([1-9]{1}[0-9]{3})$/.test(s.value);break;case"BR":n=/^(\d{2})([.]?)(\d{3})([-]?)(\d{3})$/.test(s.value);break;case"CA":n=/^(?:A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|X|Y){1}[0-9]{1}(?:A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|W|X|Y|Z){1}\s?[0-9]{1}(?:A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|W|X|Y|Z){1}[0-9]{1}$/i.test(s.value);break;case"CZ":case"SK":n=/^(\d{3})([ ]?)(\d{2})$/.test(s.value);break;case"DE":n=/^(?!01000|99999)(0[1-9]\d{3}|[1-9]\d{4})$/.test(s.value);break;case"DK":n=/^(DK(-|\s)?)?\d{4}$/i.test(s.value);break;case"ES":n=/^(?:0[1-9]|[1-4][0-9]|5[0-2])\d{3}$/.test(s.value);break;case"FR":n=/^[0-9]{5}$/i.test(s.value);break;case"GB":n=function(e){for(var a="[ABCDEFGHIJKLMNOPRSTUWYZ]",t="[ABCDEFGHKLMNOPQRSTUVWXY]",s="[ABDEFGHJLNPQRSTUWXYZ]",c=0,r=[new RegExp("^(".concat(a,"{1}").concat(t,"?[0-9]{1,2})(\\s*)([0-9]{1}").concat(s,"{2})$"),"i"),new RegExp("^(".concat(a,"{1}[0-9]{1}").concat("[ABCDEFGHJKPMNRSTUVWXY]","{1})(\\s*)([0-9]{1}").concat(s,"{2})$"),"i"),new RegExp("^(".concat(a,"{1}").concat(t,"{1}?[0-9]{1}").concat("[ABEHMNPRVWXY]","{1})(\\s*)([0-9]{1}").concat(s,"{2})$"),"i"),new RegExp("^(BF1)(\\s*)([0-6]{1}[ABDEFGHJLNPQRST]{1}[ABDEFGHJLNPQRSTUWZYZ]{1})$","i"),/^(GIR)(\s*)(0AA)$/i,/^(BFPO)(\s*)([0-9]{1,4})$/i,/^(BFPO)(\s*)(c\/o\s*[0-9]{1,3})$/i,/^([A-Z]{4})(\s*)(1ZZ)$/i,/^(AI-2640)$/i];c<r.length;c++)if(r[c].test(e))return!0;return!1}(s.value);break;case"IN":n=/^\d{3}\s?\d{3}$/.test(s.value);break;case"IE":n=/^(D6W|[ACDEFHKNPRTVWXY]\d{2})\s[0-9ACDEFHKNPRTVWXY]{4}$/.test(s.value);break;case"IT":n=/^(I-|IT-)?\d{5}$/i.test(s.value);break;case"MA":n=/^[1-9][0-9]{4}$/i.test(s.value);break;case"NL":n=/^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$/i.test(s.value);break;case"PL":n=/^[0-9]{2}-[0-9]{3}$/.test(s.value);break;case"PT":n=/^[1-9]\d{3}-\d{3}$/.test(s.value);break;case"RO":n=/^(0[1-8]{1}|[1-9]{1}[0-5]{1})?[0-9]{4}$/i.test(s.value);break;case"RU":n=/^[0-9]{6}$/i.test(s.value);break;case"SE":n=/^(S-)?\d{3}\s?\d{2}$/i.test(s.value);break;case"SG":n=/^([0][1-9]|[1-6][0-9]|[7]([0-3]|[5-9])|[8][0-2])(\d{4})$/i.test(s.value);break;default:n=/^\d{4,5}([-]?\d{4})?$/.test(s.value)}return{message:a(s.l10n&&s.l10n.zipCode?c.message||s.l10n.zipCode.country:c.message,s.l10n&&s.l10n.zipCode&&s.l10n.zipCode.countries?s.l10n.zipCode.countries[r]:r),valid:n}}}}export{s as zipCode};
