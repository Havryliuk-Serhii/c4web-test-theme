/**
 * h5Validate
 * 
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Developed under the sponsorship of RootMusic, and Zumba Fitness
 */

/*global jQuery, window, console */
!function(a){"use strict";var b=window.console||function(){},c={defaults:{debug:!1,RODom:!1,patternLibrary:{phone:/([\+][0-9]{1,3}([ \.\-])?)?([\(][0-9]{1,6}[\)])?([0-9A-Za-z \.\-]{1,32})(([A-Za-z \:]{1,11})?[0-9]{1,4}?)/,email:/((([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-zA-Z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?/,url:/(https?|ftp):\/\/(((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?/,number:/-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?/,dateISO:/\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}/,alpha:/[a-zA-Z]+/,alphaNumeric:/\w+/,integer:/-?\d+/},classPrefix:"h5-",errorClass:"ui-state-error",validClass:"ui-state-valid",activeClass:"active",requiredClass:"required",requiredAttribute:"required",patternAttribute:"pattern",errorAttribute:"data-h5-errorid",customEvents:{validate:!0},kbSelectors:":input:not(:button):not(:disabled):not(.novalidate)",focusout:!0,focusin:!1,change:!0,keyup:!1,activeKeyup:!0,mSelectors:'[type="range"]:not(:disabled):not(.novalidate), :radio:not(:disabled):not(.novalidate), :checkbox:not(:disabled):not(.novalidate), select:not(:disabled):not(.novalidate), option:not(:disabled):not(.novalidate)',click:!0,requiredVar:"h5-required",patternVar:"h5-pattern",stripMarkup:!0,submit:!0,focusFirstInvalidElementOnSubmit:!0,validateOnSubmit:!0,invalidCallback:function(){},validCallback:function(){},allValidSelectors:":input:not(:button):not(:disabled):not(.novalidate)",markInvalid:function(b){var c=a(b.element),d=a(b.errorID);return c.addClass(b.errorClass).removeClass(b.validClass),c.addClass(b.settings.activeClass),d.length&&(c.attr("title")&&d.text(c.attr("title")),d.css("display","block ")),c.data("valid",!1),b.settings.invalidCallback.call(b.element,b.validity),c},markValid:function(b){var c=a(b.element),d=a(b.errorID);return c.addClass(b.validClass).removeClass(b.errorClass),d.length&&d.css("display","none"),c.data("valid",!0),b.settings.validCallback.call(b.element,b.validity),c},unmark:function(b){var c=a(b.element);return c.removeClass(b.errorClass).removeClass(b.validClass),c.form.find("#"+b.element.id).removeClass(b.errorClass).removeClass(b.validClass),c}}},d=c.defaults,e=d.patternLibrary,f=function(b){return a.extend({customError:b.customError||!1,patternMismatch:b.patternMismatch||!1,rangeOverflow:b.rangeOverflow||!1,rangeUnderflow:b.rangeUnderflow||!1,stepMismatch:b.stepMismatch||!1,tooLong:b.tooLong||!1,typeMismatch:b.typeMismatch||!1,valid:b.valid||!0,valueMissing:b.valueMissing||!1},b)},g={isValid:function(b,c){var d=a(this);return c=b&&c||{},c.revalidate!==!1&&d.trigger("validate"),d.data("valid")},allValid:function(b,c){var d,e,f=!0,g=[],h=a(this),i=[],j=function(a,b){b.e=a,g.push(b)},k=a.extend({},b,c);return c=c||{},h.trigger("formValidate",{settings:a.extend(!0,{},k)}),h.undelegate(k.allValidSelectors,".allValid",j),h.delegate(k.allValidSelectors,"validated.allValid",j),d=h.find(k.allValidSelectors),e=d.filter(function(a){var b;if("INPUT"===this.tagName&&"radio"===this.type){if(b=this.name,i[b]===!0)return!1;i[b]=!0}return!0}),e.each(function(){var b=a(this);f=b.h5Validate("isValid",c)&&f}),h.trigger("formValidated",{valid:f,elements:g}),f},validate:function(c){var d,e=a(this),g=!!e.filter("[pattern]")[0]&&e.attr("pattern"),h=new RegExp("^(?:"+g+")$"),i=null,j=e.is("[type=checkbox]")?e.is(":checked"):e.is("[type=radio]")?(i=e.parents("form").find('input[name="'+e.attr("name")+'"]')).filter(":checked").length>0:e.val(),k=c.errorClass,l=c.validClass,m=e.attr(c.errorAttribute)||!1,n=!!m&&"#"+m.replace(/(:|\.|\[|\])/g,"\\$1"),o=!1,p=f({element:this,valid:!0}),q=a("<input required>");o=q.filter("[required]")&&q.filter("[required]").length?e.filter("[required]").length&&"false"!==e.attr("required"):void 0!==e.attr("required"),c.debug&&window.console&&(b.log('Validate called on "'+j+'" with regex "'+h+'". Required: '+o),b.log("Regex test: "+h.test(j)+", Pattern: "+g)),d=parseInt(e.attr("maxlength"),10),!isNaN(d)&&j.length>d&&(p.valid=!1,p.tooLong=!0),o&&!j?(p.valid=!1,p.valueMissing=!0):g&&!h.test(j)&&j?(p.valid=!1,p.patternMismatch=!0):c.RODom||c.markValid({element:this,validity:p,errorClass:k,validClass:l,errorID:n,settings:c}),p.valid||c.RODom||c.markInvalid({element:this,validity:p,errorClass:k,validClass:l,errorID:n,settings:c}),e.trigger("validated",p),null!==i&&c.alreadyCheckingRelatedRadioButtons!==!0&&(c.alreadyCheckingRelatedRadioButtons=!0,i.not(e).trigger("validate"),c.alreadyCheckingRelatedRadioButtons=!1)},delegateEvents:function(b,c,d,e){var f={},g=0,h=function(){e.validate.call(this,e)};a.each(c,function(a,b){b&&(f[a]=a)});for(g in f)f.hasOwnProperty(g)&&a(d).delegate(b,f[g]+".h5Validate",h);return d},bindDelegation:function(b){var c,d=a(this);return a.each(e,function(c,d){var e=d.toString();e=e.substring(1,e.length-1),a("."+b.classPrefix+c).attr("pattern",e)}),c=d.filter("form").add(d.find("form")).add(d.parents("form")),c.attr("novalidate","novalidate").submit(h),c.find("input[formnovalidate][type='submit']").click(function(){a(this).closest("form").unbind("submit",h)}),this.each(function(){var a={focusout:b.focusout,focusin:b.focusin,change:b.change,keyup:b.keyup},c={click:b.click},d={keyup:b.activeKeyup};b.delegateEvents(":input",b.customEvents,this,b),b.delegateEvents(b.kbSelectors,a,this,b),b.delegateEvents(b.mSelectors,c,this,b),b.delegateEvents(b.activeClassSelector,d,this,b),b.delegateEvents("textarea[maxlength]",{keyup:!0},this,b)})}},h=function(b){var c,d,e=k.call(this);if(e.submit===!0){if(c=a(this),d=c.h5Validate("allValid",{revalidate:e.validateOnSubmit===!0}),d!==!0&&(b.preventDefault(),e.focusFirstInvalidElementOnSubmit===!0)){var f=a(e.allValidSelectors,c).filter(function(b){return a(this).h5Validate("isValid",{revalidate:!1})!==!0});f.first().focus()}return d}},i=[],j=function(b){var c=a.extend({},d,b,g),e=c.classPrefix+c.activeClass;return a.extend(c,{activeClass:e,activeClassSelector:"."+e,requiredClass:c.classPrefix+c.requiredClass,el:this})},k=function(){var b=a(this).closest("[data-h5-instanceId]");return i[b.attr("data-h5-instanceId")]},l=function(b){var c=i.push(b)-1;b.RODom!==!0&&a(this).attr("data-h5-instanceId",c),a(this).trigger("instance",{"data-h5-instanceId":c})};a.h5Validate={addPatterns:function(a){var b,c=d.patternLibrary;for(b in a)a.hasOwnProperty(b)&&(c[b]=a[b]);return c},validValues:function(b,c){var d,e=0,f=c.length,g="";for(e=0;e<f;e+=1)g=g?g+"|"+c[e]:c[e];d=new RegExp("^(?:"+g+")$"),a(b).data("regex",d)}},a.fn.h5Validate=function(b){var c,d,e;return"string"==typeof b&&"function"==typeof g[b]?(e=k.call(this),d=[].slice.call(arguments,0),c=b,d.shift(),d=a.merge([e],d),e[c].apply(this,d)):(e=j.call(this,b),l.call(this,e),g.bindDelegation.call(this,e))}}(jQuery);