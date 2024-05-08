/** 
 * FormValidation (https://formvalidation.io)
 * The best validation library for JavaScript
 * (c) 2013 - 2023 Nguyen Huu Phuoc <me@phuoc.ng>
 *
 * @license https://formvalidation.io/license
 * @package @form-validation/validator-date
 * @version 2.4.0
 */

define(["exports","@form-validation/core"],(function(e,t){"use strict";var n=t.utils.format,a=t.utils.isValidDate,r=t.utils.removeUndefined,l=function(e,t,n){var a=t.indexOf("YYYY"),r=t.indexOf("MM"),l=t.indexOf("DD");if(-1===a||-1===r||-1===l)return null;var s=e.split(" "),i=s[0].split(n);if(i.length<3)return null;var c=new Date(parseInt(i[a],10),parseInt(i[r],10)-1,parseInt(i[l],10)),o=s.length>2?s[2]:null;if(s.length>1){var g=s[1].split(":"),u=g.length>0?parseInt(g[0],10):0;c.setHours(o&&"PM"===o.toUpperCase()&&u<12?u+12:u),c.setMinutes(g.length>1?parseInt(g[1],10):0),c.setSeconds(g.length>2?parseInt(g[2],10):0)}return c},s=function(e,t){var n=t.replace(/Y/g,"y").replace(/M/g,"m").replace(/D/g,"d").replace(/:m/g,":M").replace(/:mm/g,":MM").replace(/:S/,":s").replace(/:SS/,":ss"),a=e.getDate(),r=a<10?"0".concat(a):a,l=e.getMonth()+1,s=l<10?"0".concat(l):l,i="".concat(e.getFullYear()).substr(2),c=e.getFullYear(),o=e.getHours()%12||12,g=o<10?"0".concat(o):o,u=e.getHours(),d=u<10?"0".concat(u):u,f=e.getMinutes(),m=f<10?"0".concat(f):f,p=e.getSeconds(),h=p<10?"0".concat(p):p,v={H:"".concat(u),HH:"".concat(d),M:"".concat(f),MM:"".concat(m),d:"".concat(a),dd:"".concat(r),h:"".concat(o),hh:"".concat(g),m:"".concat(l),mm:"".concat(s),s:"".concat(p),ss:"".concat(h),yy:"".concat(i),yyyy:"".concat(c)};return n.replace(/d{1,4}|m{1,4}|yy(?:yy)?|([HhMs])\1?|"[^"]*"|'[^']*'/g,(function(e){return v[e]?v[e]:e.slice(1,e.length-1)}))};e.date=function(){return{validate:function(e){if(""===e.value)return{meta:{date:null},valid:!0};var t=Object.assign({},{format:e.element&&"date"===e.element.getAttribute("type")?"YYYY-MM-DD":"MM/DD/YYYY",message:""},r(e.options)),i=e.l10n?e.l10n.date.default:t.message,c={message:"".concat(i),meta:{date:null},valid:!1},o=t.format.split(" "),g=o.length>1?o[1]:null,u=o.length>2?o[2]:null,d=e.value.split(" "),f=d[0],m=d.length>1?d[1]:null,p=d.length>2?d[2]:null;if(o.length!==d.length)return c;var h=t.separator||(-1!==f.indexOf("/")?"/":-1!==f.indexOf("-")?"-":-1!==f.indexOf(".")?".":"/");if(null===h||-1===f.indexOf(h))return c;var v=f.split(h),M=o[0].split(h);if(v.length!==M.length)return c;var Y=v[M.indexOf("YYYY")],D=v[M.indexOf("MM")],x=v[M.indexOf("DD")];if(!/^\d+$/.test(Y)||!/^\d+$/.test(D)||!/^\d+$/.test(x)||Y.length>4||D.length>2||x.length>2)return c;var y=parseInt(Y,10),I=parseInt(D,10),O=parseInt(x,10);if(!a(y,I,O))return c;var H=new Date(y,I-1,O);if(g){var T=m.split(":");if(g.split(":").length!==T.length)return c;var S=T.length>0?T[0].length<=2&&/^\d+$/.test(T[0])?parseInt(T[0],10):-1:0,$=T.length>1?T[1].length<=2&&/^\d+$/.test(T[1])?parseInt(T[1],10):-1:0,b=T.length>2?T[2].length<=2&&/^\d+$/.test(T[2])?parseInt(T[2],10):-1:0;if(-1===S||-1===$||-1===b)return c;if(b<0||b>60)return c;if(S<0||S>=24||u&&S>12)return c;if($<0||$>59)return c;H.setHours(p&&"PM"===p.toUpperCase()&&S<12?S+12:S),H.setMinutes($),H.setSeconds(b)}var w="function"==typeof t.min?t.min():t.min,U=w instanceof Date?w:w?l(w,M,h):H,C="function"==typeof t.max?t.max():t.max,F=C instanceof Date?C:C?l(C,M,h):H,P=w instanceof Date?s(U,t.format):w,j=C instanceof Date?s(F,t.format):C;switch(!0){case!!P&&!j:return{message:n(e.l10n?e.l10n.date.min:i,P),meta:{date:H},valid:H.getTime()>=U.getTime()};case!!j&&!P:return{message:n(e.l10n?e.l10n.date.max:i,j),meta:{date:H},valid:H.getTime()<=F.getTime()};case!!j&&!!P:return{message:n(e.l10n?e.l10n.date.range:i,[P,j]),meta:{date:H},valid:H.getTime()<=F.getTime()&&H.getTime()>=U.getTime()};default:return{message:"".concat(i),meta:{date:H},valid:!0}}}}}}));
