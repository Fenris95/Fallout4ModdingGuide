mw.loader.implement("jquery.ui.core",function(){(function($,undefined){$.ui=$.ui||{};if($.ui.version){return;}$.extend($.ui,{version:"1.8.24",keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91}});$.fn.extend({propAttr:$.fn.prop||$.fn.attr,_focus:$.fn.focus,focus:function(delay,fn){return typeof delay==="number"?this.each(function(){var elem=this;setTimeout(function(){$(elem).focus();if(fn){fn.call(elem);}},delay);}):this._focus.apply(this,arguments);},scrollParent:function(){var scrollParent;if(($.browser.msie&&(/(static|relative)/).test(this.css('position')))||(/absolute/).test(this.css('position'))){scrollParent=this.parents().filter(function(){return(
/(relative|absolute|fixed)/).test($.curCSS(this,'position',1))&&(/(auto|scroll)/).test($.curCSS(this,'overflow',1)+$.curCSS(this,'overflow-y',1)+$.curCSS(this,'overflow-x',1));}).eq(0);}else{scrollParent=this.parents().filter(function(){return(/(auto|scroll)/).test($.curCSS(this,'overflow',1)+$.curCSS(this,'overflow-y',1)+$.curCSS(this,'overflow-x',1));}).eq(0);}return(/fixed/).test(this.css('position'))||!scrollParent.length?$(document):scrollParent;},zIndex:function(zIndex){if(zIndex!==undefined){return this.css("zIndex",zIndex);}if(this.length){var elem=$(this[0]),position,value;while(elem.length&&elem[0]!==document){position=elem.css("position");if(position==="absolute"||position==="relative"||position==="fixed"){value=parseInt(elem.css("zIndex"),10);if(!isNaN(value)&&value!==0){return value;}}elem=elem.parent();}}return 0;},disableSelection:function(){return this.bind(($.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(event){event.preventDefault();})
;},enableSelection:function(){return this.unbind(".ui-disableSelection");}});if(!$("<a>").outerWidth(1).jquery){$.each(["Width","Height"],function(i,name){var side=name==="Width"?["Left","Right"]:["Top","Bottom"],type=name.toLowerCase(),orig={innerWidth:$.fn.innerWidth,innerHeight:$.fn.innerHeight,outerWidth:$.fn.outerWidth,outerHeight:$.fn.outerHeight};function reduce(elem,size,border,margin){$.each(side,function(){size-=parseFloat($.curCSS(elem,"padding"+this,true))||0;if(border){size-=parseFloat($.curCSS(elem,"border"+this+"Width",true))||0;}if(margin){size-=parseFloat($.curCSS(elem,"margin"+this,true))||0;}});return size;}$.fn["inner"+name]=function(size){if(size===undefined){return orig["inner"+name].call(this);}return this.each(function(){$(this).css(type,reduce(this,size)+"px");});};$.fn["outer"+name]=function(size,margin){if(typeof size!=="number"){return orig["outer"+name].call(this,size);}return this.each(function(){$(this).css(type,reduce(this,size,true,margin)+"px");});};})
;}function focusable(element,isTabIndexNotNaN){var nodeName=element.nodeName.toLowerCase();if("area"===nodeName){var map=element.parentNode,mapName=map.name,img;if(!element.href||!mapName||map.nodeName.toLowerCase()!=="map"){return false;}img=$("img[usemap=#"+mapName+"]")[0];return!!img&&visible(img);}return(/input|select|textarea|button|object/.test(nodeName)?!element.disabled:"a"==nodeName?element.href||isTabIndexNotNaN:isTabIndexNotNaN)&&visible(element);}function visible(element){return!$(element).parents().andSelf().filter(function(){return $.curCSS(this,"visibility")==="hidden"||$.expr.filters.hidden(this);}).length;}$.extend($.expr[":"],{data:$.expr.createPseudo?$.expr.createPseudo(function(dataName){return function(elem){return!!$.data(elem,dataName);};}):function(elem,i,match){return!!$.data(elem,match[3]);},focusable:function(element){return focusable(element,!isNaN($.attr(element,"tabindex")));},tabbable:function(element){var tabIndex=$.attr(element,"tabindex"),isTabIndexNaN
=isNaN(tabIndex);return(isTabIndexNaN||tabIndex>=0)&&focusable(element,!isTabIndexNaN);}});$(function(){var body=document.body,div=body.appendChild(div=document.createElement("div"));div.offsetHeight;$.extend(div.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0});$.support.minHeight=div.offsetHeight===100;$.support.selectstart="onselectstart"in div;body.removeChild(div).style.display="none";});if(!$.curCSS){$.curCSS=$.css;}$.extend($.ui,{plugin:{add:function(module,option,set){var proto=$.ui[module].prototype;for(var i in set){proto.plugins[i]=proto.plugins[i]||[];proto.plugins[i].push([option,set[i]]);}},call:function(instance,name,args){var set=instance.plugins[name];if(!set||!instance.element[0].parentNode){return;}for(var i=0;i<set.length;i++){if(instance.options[set[i][0]]){set[i][1].apply(instance.element,args);}}}},contains:function(a,b){return document.compareDocumentPosition?a.compareDocumentPosition(b)&16:a!==b&&a.contains(b);},hasScroll:function(el,a){if($(el).
css("overflow")==="hidden"){return false;}var scroll=(a&&a==="left")?"scrollLeft":"scrollTop",has=false;if(el[scroll]>0){return true;}el[scroll]=1;has=(el[scroll]>0);el[scroll]=0;return has;},isOverAxis:function(x,reference,size){return(x>reference)&&(x<(reference+size));},isOver:function(y,x,top,left,height,width){return $.ui.isOverAxis(y,top,height)&&$.ui.isOverAxis(x,left,width);}});})(jQuery);;},{"css":[
".ui-helper-hidden{display:none}.ui-helper-hidden-accessible{position:absolute !important;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px)}.ui-helper-reset{margin:0;padding:0;border:0;outline:0;line-height:1.3;text-decoration:none;font-size:100%;list-style:none}.ui-helper-clearfix:before,.ui-helper-clearfix:after{content:\"\";display:table}.ui-helper-clearfix:after{clear:both}.ui-helper-clearfix{zoom:1}.ui-helper-zfix{width:100%;height:100%;top:0;left:0;position:absolute;opacity:0;filter:Alpha(Opacity=0)} .ui-state-disabled{cursor:default !important}  .ui-icon{display:block;text-indent:-99999px;overflow:hidden;background-repeat:no-repeat}  .ui-widget-overlay{position:absolute;top:0;left:0;width:100%;height:100%}  .ui-widget{font-family:Verdana,Arial,sans-serif;font-size:1.1em}.ui-widget .ui-widget{font-size:1em}.ui-widget input,.ui-widget select,.ui-widget textarea,.ui-widget button{font-family:Verdana,Arial,sans-serif;font-size:1em}.ui-widget-content{border:1px solid #aaaaaa;background:#ffffff url(/resources/jquery.ui/themes/default/images/ui-bg_flat_75_ffffff_40x100.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;color:#222222}.ui-widget-content a{color:#222222}.ui-widget-header{border:1px solid #aaaaaa;background:#cccccc url(/resources/jquery.ui/themes/default/images/ui-bg_highlight-soft_75_cccccc_1x100.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;color:#222222;font-weight:bold}.ui-widget-header a{color:#222222} .ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default{border:1px solid #d3d3d3;background:#e6e6e6 url(/resources/jquery.ui/themes/default/images/ui-bg_glass_75_e6e6e6_1x400.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;font-weight:normal;color:#555555}.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited{color:#555555;text-decoration:none}.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus{border:1px solid #999999;background:#dadada url(/resources/jquery.ui/themes/default/images/ui-bg_glass_75_dadada_1x400.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;font-weight:normal;color:#212121}.ui-state-hover a,.ui-state-hover a:hover{color:#212121;text-decoration:none}.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active{border:1px solid #aaaaaa;background:#ffffff url(/resources/jquery.ui/themes/default/images/ui-bg_glass_65_ffffff_1x400.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;font-weight:normal;color:#212121}.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited{color:#212121;text-decoration:none}.ui-widget :active{outline:none} .ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight{border:1px solid #fcefa1;background:#fbf9ee url(/resources/jquery.ui/themes/default/images/ui-bg_glass_55_fbf9ee_1x400.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;color:#363636}.ui-state-highlight a,.ui-widget-content .ui-state-highlight a,.ui-widget-header .ui-state-highlight a{color:#363636}.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error{border:1px solid #cd0a0a;background:#fef1ec url(/resources/jquery.ui/themes/default/images/ui-bg_glass_95_fef1ec_1x400.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;color:#cd0a0a}.ui-state-error a,.ui-widget-content .ui-state-error a,.ui-widget-header .ui-state-error a{color:#cd0a0a}.ui-state-error-text,.ui-widget-content .ui-state-error-text,.ui-widget-header .ui-state-error-text{color:#cd0a0a}.ui-priority-primary,.ui-widget-content .ui-priority-primary,.ui-widget-header .ui-priority-primary{font-weight:bold}.ui-priority-secondary,.ui-widget-content .ui-priority-secondary,.ui-widget-header .ui-priority-secondary{opacity:.7;filter:Alpha(Opacity=70);font-weight:normal}.ui-state-disabled,.ui-widget-content .ui-state-disabled,.ui-widget-header .ui-state-disabled{opacity:.35;filter:Alpha(Opacity=35);background-image:none}  .ui-icon{width:16px;height:16px;background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_222222_256x240.png?2018-09-27T23:03:20Z)}.ui-widget-content .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_222222_256x240.png?2018-09-27T23:03:20Z)}.ui-widget-header .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_222222_256x240.png?2018-09-27T23:03:20Z)}.ui-state-default .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_888888_256x240.png?2018-09-27T23:03:20Z)}.ui-state-hover .ui-icon,.ui-state-focus .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_454545_256x240.png?2018-09-27T23:03:20Z)}.ui-state-active .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_454545_256x240.png?2018-09-27T23:03:20Z)}.ui-state-highlight .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_2e83ff_256x240.png?2018-09-27T23:03:20Z)}.ui-state-error .ui-icon,.ui-state-error-text .ui-icon{background-image:url(/resources/jquery.ui/themes/default/images/ui-icons_cd0a0a_256x240.png?2018-09-27T23:03:20Z)} .ui-icon-carat-1-n{background-position:0 0}.ui-icon-carat-1-ne{background-position:-16px 0}.ui-icon-carat-1-e{background-position:-32px 0}.ui-icon-carat-1-se{background-position:-48px 0}.ui-icon-carat-1-s{background-position:-64px 0}.ui-icon-carat-1-sw{background-position:-80px 0}.ui-icon-carat-1-w{background-position:-96px 0}.ui-icon-carat-1-nw{background-position:-112px 0}.ui-icon-carat-2-n-s{background-position:-128px 0}.ui-icon-carat-2-e-w{background-position:-144px 0}.ui-icon-triangle-1-n{background-position:0 -16px}.ui-icon-triangle-1-ne{background-position:-16px -16px}.ui-icon-triangle-1-e{background-position:-32px -16px}.ui-icon-triangle-1-se{background-position:-48px -16px}.ui-icon-triangle-1-s{background-position:-64px -16px}.ui-icon-triangle-1-sw{background-position:-80px -16px}.ui-icon-triangle-1-w{background-position:-96px -16px}.ui-icon-triangle-1-nw{background-position:-112px -16px}.ui-icon-triangle-2-n-s{background-position:-128px -16px}.ui-icon-triangle-2-e-w{background-position:-144px -16px}.ui-icon-arrow-1-n{background-position:0 -32px}.ui-icon-arrow-1-ne{background-position:-16px -32px}.ui-icon-arrow-1-e{background-position:-32px -32px}.ui-icon-arrow-1-se{background-position:-48px -32px}.ui-icon-arrow-1-s{background-position:-64px -32px}.ui-icon-arrow-1-sw{background-position:-80px -32px}.ui-icon-arrow-1-w{background-position:-96px -32px}.ui-icon-arrow-1-nw{background-position:-112px -32px}.ui-icon-arrow-2-n-s{background-position:-128px -32px}.ui-icon-arrow-2-ne-sw{background-position:-144px -32px}.ui-icon-arrow-2-e-w{background-position:-160px -32px}.ui-icon-arrow-2-se-nw{background-position:-176px -32px}.ui-icon-arrowstop-1-n{background-position:-192px -32px}.ui-icon-arrowstop-1-e{background-position:-208px -32px}.ui-icon-arrowstop-1-s{background-position:-224px -32px}.ui-icon-arrowstop-1-w{background-position:-240px -32px}.ui-icon-arrowthick-1-n{background-position:0 -48px}.ui-icon-arrowthick-1-ne{background-position:-16px -48px}.ui-icon-arrowthick-1-e{background-position:-32px -48px}.ui-icon-arrowthick-1-se{background-position:-48px -48px}.ui-icon-arrowthick-1-s{background-position:-64px -48px}.ui-icon-arrowthick-1-sw{background-position:-80px -48px}.ui-icon-arrowthick-1-w{background-position:-96px -48px}.ui-icon-arrowthick-1-nw{background-position:-112px -48px}.ui-icon-arrowthick-2-n-s{background-position:-128px -48px}.ui-icon-arrowthick-2-ne-sw{background-position:-144px -48px}.ui-icon-arrowthick-2-e-w{background-position:-160px -48px}.ui-icon-arrowthick-2-se-nw{background-position:-176px -48px}.ui-icon-arrowthickstop-1-n{background-position:-192px -48px}.ui-icon-arrowthickstop-1-e{background-position:-208px -48px}.ui-icon-arrowthickstop-1-s{background-position:-224px -48px}.ui-icon-arrowthickstop-1-w{background-position:-240px -48px}.ui-icon-arrowreturnthick-1-w{background-position:0 -64px}.ui-icon-arrowreturnthick-1-n{background-position:-16px -64px}.ui-icon-arrowreturnthick-1-e{background-position:-32px -64px}.ui-icon-arrowreturnthick-1-s{background-position:-48px -64px}.ui-icon-arrowreturn-1-w{background-position:-64px -64px}.ui-icon-arrowreturn-1-n{background-position:-80px -64px}.ui-icon-arrowreturn-1-e{background-position:-96px -64px}.ui-icon-arrowreturn-1-s{background-position:-112px -64px}.ui-icon-arrowrefresh-1-w{background-position:-128px -64px}.ui-icon-arrowrefresh-1-n{background-position:-144px -64px}.ui-icon-arrowrefresh-1-e{background-position:-160px -64px}.ui-icon-arrowrefresh-1-s{background-position:-176px -64px}.ui-icon-arrow-4{background-position:0 -80px}.ui-icon-arrow-4-diag{background-position:-16px -80px}.ui-icon-extlink{background-position:-32px -80px}.ui-icon-newwin{background-position:-48px -80px}.ui-icon-refresh{background-position:-64px -80px}.ui-icon-shuffle{background-position:-80px -80px}.ui-icon-transfer-e-w{background-position:-96px -80px}.ui-icon-transferthick-e-w{background-position:-112px -80px}.ui-icon-folder-collapsed{background-position:0 -96px}.ui-icon-folder-open{background-position:-16px -96px}.ui-icon-document{background-position:-32px -96px}.ui-icon-document-b{background-position:-48px -96px}.ui-icon-note{background-position:-64px -96px}.ui-icon-mail-closed{background-position:-80px -96px}.ui-icon-mail-open{background-position:-96px -96px}.ui-icon-suitcase{background-position:-112px -96px}.ui-icon-comment{background-position:-128px -96px}.ui-icon-person{background-position:-144px -96px}.ui-icon-print{background-position:-160px -96px}.ui-icon-trash{background-position:-176px -96px}.ui-icon-locked{background-position:-192px -96px}.ui-icon-unlocked{background-position:-208px -96px}.ui-icon-bookmark{background-position:-224px -96px}.ui-icon-tag{background-position:-240px -96px}.ui-icon-home{background-position:0 -112px}.ui-icon-flag{background-position:-16px -112px}.ui-icon-calendar{background-position:-32px -112px}.ui-icon-cart{background-position:-48px -112px}.ui-icon-pencil{background-position:-64px -112px}.ui-icon-clock{background-position:-80px -112px}.ui-icon-disk{background-position:-96px -112px}.ui-icon-calculator{background-position:-112px -112px}.ui-icon-zoomin{background-position:-128px -112px}.ui-icon-zoomout{background-position:-144px -112px}.ui-icon-search{background-position:-160px -112px}.ui-icon-wrench{background-position:-176px -112px}.ui-icon-gear{background-position:-192px -112px}.ui-icon-heart{background-position:-208px -112px}.ui-icon-star{background-position:-224px -112px}.ui-icon-link{background-position:-240px -112px}.ui-icon-cancel{background-position:0 -128px}.ui-icon-plus{background-position:-16px -128px}.ui-icon-plusthick{background-position:-32px -128px}.ui-icon-minus{background-position:-48px -128px}.ui-icon-minusthick{background-position:-64px -128px}.ui-icon-close{background-position:-80px -128px}.ui-icon-closethick{background-position:-96px -128px}.ui-icon-key{background-position:-112px -128px}.ui-icon-lightbulb{background-position:-128px -128px}.ui-icon-scissors{background-position:-144px -128px}.ui-icon-clipboard{background-position:-160px -128px}.ui-icon-copy{background-position:-176px -128px}.ui-icon-contact{background-position:-192px -128px}.ui-icon-image{background-position:-208px -128px}.ui-icon-video{background-position:-224px -128px}.ui-icon-script{background-position:-240px -128px}.ui-icon-alert{background-position:0 -144px}.ui-icon-info{background-position:-16px -144px}.ui-icon-notice{background-position:-32px -144px}.ui-icon-help{background-position:-48px -144px}.ui-icon-check{background-position:-64px -144px}.ui-icon-bullet{background-position:-80px -144px}.ui-icon-radio-off{background-position:-96px -144px}.ui-icon-radio-on{background-position:-112px -144px}.ui-icon-pin-w{background-position:-128px -144px}.ui-icon-pin-s{background-position:-144px -144px}.ui-icon-play{background-position:0 -160px}.ui-icon-pause{background-position:-16px -160px}.ui-icon-seek-next{background-position:-32px -160px}.ui-icon-seek-prev{background-position:-48px -160px}.ui-icon-seek-end{background-position:-64px -160px}.ui-icon-seek-start{background-position:-80px -160px} .ui-icon-seek-first{background-position:-80px -160px}.ui-icon-stop{background-position:-96px -160px}.ui-icon-eject{background-position:-112px -160px}.ui-icon-volume-off{background-position:-128px -160px}.ui-icon-volume-on{background-position:-144px -160px}.ui-icon-power{background-position:0 -176px}.ui-icon-signal-diag{background-position:-16px -176px}.ui-icon-signal{background-position:-32px -176px}.ui-icon-battery-0{background-position:-48px -176px}.ui-icon-battery-1{background-position:-64px -176px}.ui-icon-battery-2{background-position:-80px -176px}.ui-icon-battery-3{background-position:-96px -176px}.ui-icon-circle-plus{background-position:0 -192px}.ui-icon-circle-minus{background-position:-16px -192px}.ui-icon-circle-close{background-position:-32px -192px}.ui-icon-circle-triangle-e{background-position:-48px -192px}.ui-icon-circle-triangle-s{background-position:-64px -192px}.ui-icon-circle-triangle-w{background-position:-80px -192px}.ui-icon-circle-triangle-n{background-position:-96px -192px}.ui-icon-circle-arrow-e{background-position:-112px -192px}.ui-icon-circle-arrow-s{background-position:-128px -192px}.ui-icon-circle-arrow-w{background-position:-144px -192px}.ui-icon-circle-arrow-n{background-position:-160px -192px}.ui-icon-circle-zoomin{background-position:-176px -192px}.ui-icon-circle-zoomout{background-position:-192px -192px}.ui-icon-circle-check{background-position:-208px -192px}.ui-icon-circlesmall-plus{background-position:0 -208px}.ui-icon-circlesmall-minus{background-position:-16px -208px}.ui-icon-circlesmall-close{background-position:-32px -208px}.ui-icon-squaresmall-plus{background-position:-48px -208px}.ui-icon-squaresmall-minus{background-position:-64px -208px}.ui-icon-squaresmall-close{background-position:-80px -208px}.ui-icon-grip-dotted-vertical{background-position:0 -224px}.ui-icon-grip-dotted-horizontal{background-position:-16px -224px}.ui-icon-grip-solid-vertical{background-position:-32px -224px}.ui-icon-grip-solid-horizontal{background-position:-48px -224px}.ui-icon-gripsmall-diagonal-se{background-position:-64px -224px}.ui-icon-grip-diagonal-se{background-position:-80px -224px}  .ui-corner-all,.ui-corner-top,.ui-corner-left,.ui-corner-tl{-moz-border-radius-topleft:4px;-webkit-border-top-left-radius:4px;-khtml-border-top-left-radius:4px;border-top-left-radius:4px}.ui-corner-all,.ui-corner-top,.ui-corner-right,.ui-corner-tr{-moz-border-radius-topright:4px;-webkit-border-top-right-radius:4px;-khtml-border-top-right-radius:4px;border-top-right-radius:4px}.ui-corner-all,.ui-corner-bottom,.ui-corner-left,.ui-corner-bl{-moz-border-radius-bottomleft:4px;-webkit-border-bottom-left-radius:4px;-khtml-border-bottom-left-radius:4px;border-bottom-left-radius:4px}.ui-corner-all,.ui-corner-bottom,.ui-corner-right,.ui-corner-br{-moz-border-radius-bottomright:4px;-webkit-border-bottom-right-radius:4px;-khtml-border-bottom-right-radius:4px;border-bottom-right-radius:4px} .ui-widget-overlay{background:#aaaaaa url(/resources/jquery.ui/themes/default/images/ui-bg_flat_0_aaaaaa_40x100.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;opacity:.3;filter:Alpha(Opacity=30)}.ui-widget-shadow{margin:-8px 0 0 -8px;padding:8px;background:#aaaaaa url(/resources/jquery.ui/themes/default/images/ui-bg_flat_0_aaaaaa_40x100.png?2018-09-27T23:03:20Z) 50% 50% repeat-x;opacity:.3;filter:Alpha(Opacity=30);-moz-border-radius:8px;-khtml-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}\n/* cache key: mwiki-765_:resourceloader:filter:minify-css:7:4787a72c7d833d033dcd708335d49c23 */"
]},{});mw.loader.implement("jquery.ui.tabs",function(){(function($,undefined){var tabId=0,listId=0;function getNextTabId(){return++tabId;}function getNextListId(){return++listId;}$.widget("ui.tabs",{options:{add:null,ajaxOptions:null,cache:false,cookie:null,collapsible:false,disable:null,disabled:[],enable:null,event:"click",fx:null,idPrefix:"ui-tabs-",load:null,panelTemplate:"<div></div>",remove:null,select:null,show:null,spinner:"<em>Loading&#8230;</em>",tabTemplate:"<li><a href='#{href}'><span>#{label}</span></a></li>"},_create:function(){this._tabify(true);},_setOption:function(key,value){if(key=="selected"){if(this.options.collapsible&&value==this.options.selected){return;}this.select(value);}else{this.options[key]=value;this._tabify();}},_tabId:function(a){return a.title&&a.title.replace(/\s/g,"_").replace(/[^\w\u00c0-\uFFFF-]/g,"")||this.options.idPrefix+getNextTabId();},_sanitizeSelector:function(hash){return hash.replace(/:/g,"\\:");},_cookie:function(){var cookie=this.cookie
||(this.cookie=this.options.cookie.name||"ui-tabs-"+getNextListId());return $.cookie.apply(null,[cookie].concat($.makeArray(arguments)));},_ui:function(tab,panel){return{tab:tab,panel:panel,index:this.anchors.index(tab)};},_cleanup:function(){this.lis.filter(".ui-state-processing").removeClass("ui-state-processing").find("span:data(label.tabs)").each(function(){var el=$(this);el.html(el.data("label.tabs")).removeData("label.tabs");});},_tabify:function(init){var self=this,o=this.options,fragmentId=/^#.+/;this.list=this.element.find("ol,ul").eq(0);this.lis=$(" > li:has(a[href])",this.list);this.anchors=this.lis.map(function(){return $("a",this)[0];});this.panels=$([]);this.anchors.each(function(i,a){var href=$(a).attr("href");var hrefBase=href.split("#")[0],baseEl;if(hrefBase&&(hrefBase===location.toString().split("#")[0]||(baseEl=$("base")[0])&&hrefBase===baseEl.href)){href=a.hash;a.href=href;}if(fragmentId.test(href)){self.panels=self.panels.add(self.element.find(self.
_sanitizeSelector(href)));}else if(href&&href!=="#"){$.data(a,"href.tabs",href);$.data(a,"load.tabs",href.replace(/#.*$/,""));var id=self._tabId(a);a.href="#"+id;var $panel=self.element.find("#"+id);if(!$panel.length){$panel=$(o.panelTemplate).attr("id",id).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").insertAfter(self.panels[i-1]||self.list);$panel.data("destroy.tabs",true);}self.panels=self.panels.add($panel);}else{o.disabled.push(i);}});if(init){this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all");this.list.addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.lis.addClass("ui-state-default ui-corner-top");this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom");if(o.selected===undefined){if(location.hash){this.anchors.each(function(i,a){if(a.hash==location.hash){o.selected=i;return false;}});}if(typeof o.selected!=="number"&&o.cookie){o.selected=parseInt(self._cookie(),10);}if(typeof o.
selected!=="number"&&this.lis.filter(".ui-tabs-selected").length){o.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"));}o.selected=o.selected||(this.lis.length?0:-1);}else if(o.selected===null){o.selected=-1;}o.selected=((o.selected>=0&&this.anchors[o.selected])||o.selected<0)?o.selected:0;o.disabled=$.unique(o.disabled.concat($.map(this.lis.filter(".ui-state-disabled"),function(n,i){return self.lis.index(n);}))).sort();if($.inArray(o.selected,o.disabled)!=-1){o.disabled.splice($.inArray(o.selected,o.disabled),1);}this.panels.addClass("ui-tabs-hide");this.lis.removeClass("ui-tabs-selected ui-state-active");if(o.selected>=0&&this.anchors.length){self.element.find(self._sanitizeSelector(self.anchors[o.selected].hash)).removeClass("ui-tabs-hide");this.lis.eq(o.selected).addClass("ui-tabs-selected ui-state-active");self.element.queue("tabs",function(){self._trigger("show",null,self._ui(self.anchors[o.selected],self.element.find(self._sanitizeSelector(self.anchors[o.selected].
hash))[0]));});this.load(o.selected);}$(window).bind("unload",function(){self.lis.add(self.anchors).unbind(".tabs");self.lis=self.anchors=self.panels=null;});}else{o.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"));}this.element[o.collapsible?"addClass":"removeClass"]("ui-tabs-collapsible");if(o.cookie){this._cookie(o.selected,o.cookie);}for(var i=0,li;(li=this.lis[i]);i++){$(li)[$.inArray(i,o.disabled)!=-1&&!$(li).hasClass("ui-tabs-selected")?"addClass":"removeClass"]("ui-state-disabled");}if(o.cache===false){this.anchors.removeData("cache.tabs");}this.lis.add(this.anchors).unbind(".tabs");if(o.event!=="mouseover"){var addState=function(state,el){if(el.is(":not(.ui-state-disabled)")){el.addClass("ui-state-"+state);}};var removeState=function(state,el){el.removeClass("ui-state-"+state);};this.lis.bind("mouseover.tabs",function(){addState("hover",$(this));});this.lis.bind("mouseout.tabs",function(){removeState("hover",$(this));});this.anchors.bind("focus.tabs",function(){
addState("focus",$(this).closest("li"));});this.anchors.bind("blur.tabs",function(){removeState("focus",$(this).closest("li"));});}var hideFx,showFx;if(o.fx){if($.isArray(o.fx)){hideFx=o.fx[0];showFx=o.fx[1];}else{hideFx=showFx=o.fx;}}function resetStyle($el,fx){$el.css("display","");if(!$.support.opacity&&fx.opacity){$el[0].style.removeAttribute("filter");}}var showTab=showFx?function(clicked,$show){$(clicked).closest("li").addClass("ui-tabs-selected ui-state-active");$show.hide().removeClass("ui-tabs-hide").animate(showFx,showFx.duration||"normal",function(){resetStyle($show,showFx);self._trigger("show",null,self._ui(clicked,$show[0]));});}:function(clicked,$show){$(clicked).closest("li").addClass("ui-tabs-selected ui-state-active");$show.removeClass("ui-tabs-hide");self._trigger("show",null,self._ui(clicked,$show[0]));};var hideTab=hideFx?function(clicked,$hide){$hide.animate(hideFx,hideFx.duration||"normal",function(){self.lis.removeClass("ui-tabs-selected ui-state-active");$hide.
addClass("ui-tabs-hide");resetStyle($hide,hideFx);self.element.dequeue("tabs");});}:function(clicked,$hide,$show){self.lis.removeClass("ui-tabs-selected ui-state-active");$hide.addClass("ui-tabs-hide");self.element.dequeue("tabs");};this.anchors.bind(o.event+".tabs",function(){var el=this,$li=$(el).closest("li"),$hide=self.panels.filter(":not(.ui-tabs-hide)"),$show=self.element.find(self._sanitizeSelector(el.hash));if(($li.hasClass("ui-tabs-selected")&&!o.collapsible)||$li.hasClass("ui-state-disabled")||$li.hasClass("ui-state-processing")||self.panels.filter(":animated").length||self._trigger("select",null,self._ui(this,$show[0]))===false){this.blur();return false;}o.selected=self.anchors.index(this);self.abort();if(o.collapsible){if($li.hasClass("ui-tabs-selected")){o.selected=-1;if(o.cookie){self._cookie(o.selected,o.cookie);}self.element.queue("tabs",function(){hideTab(el,$hide);}).dequeue("tabs");this.blur();return false;}else if(!$hide.length){if(o.cookie){self._cookie(o.selected,
o.cookie);}self.element.queue("tabs",function(){showTab(el,$show);});self.load(self.anchors.index(this));this.blur();return false;}}if(o.cookie){self._cookie(o.selected,o.cookie);}if($show.length){if($hide.length){self.element.queue("tabs",function(){hideTab(el,$hide);});}self.element.queue("tabs",function(){showTab(el,$show);});self.load(self.anchors.index(this));}else{throw"jQuery UI Tabs: Mismatching fragment identifier.";}if($.browser.msie){this.blur();}});this.anchors.bind("click.tabs",function(){return false;});},_getIndex:function(index){if(typeof index=="string"){index=this.anchors.index(this.anchors.filter("[href$='"+index+"']"));}return index;},destroy:function(){var o=this.options;this.abort();this.element.unbind(".tabs").removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible").removeData("tabs");this.list.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.anchors.each(function(){var href=$.data(this,
"href.tabs");if(href){this.href=href;}var $this=$(this).unbind(".tabs");$.each(["href","load","cache"],function(i,prefix){$this.removeData(prefix+".tabs");});});this.lis.unbind(".tabs").add(this.panels).each(function(){if($.data(this,"destroy.tabs")){$(this).remove();}else{$(this).removeClass(["ui-state-default","ui-corner-top","ui-tabs-selected","ui-state-active","ui-state-hover","ui-state-focus","ui-state-disabled","ui-tabs-panel","ui-widget-content","ui-corner-bottom","ui-tabs-hide"].join(" "));}});if(o.cookie){this._cookie(null,o.cookie);}return this;},add:function(url,label,index){if(index===undefined){index=this.anchors.length;}var self=this,o=this.options,$li=$(o.tabTemplate.replace(/#\{href\}/g,url).replace(/#\{label\}/g,label)),id=!url.indexOf("#")?url.replace("#",""):this._tabId($("a",$li)[0]);$li.addClass("ui-state-default ui-corner-top").data("destroy.tabs",true);var $panel=self.element.find("#"+id);if(!$panel.length){$panel=$(o.panelTemplate).attr("id",id).data(
"destroy.tabs",true);}$panel.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide");if(index>=this.lis.length){$li.appendTo(this.list);$panel.appendTo(this.list[0].parentNode);}else{$li.insertBefore(this.lis[index]);$panel.insertBefore(this.panels[index]);}o.disabled=$.map(o.disabled,function(n,i){return n>=index?++n:n;});this._tabify();if(this.anchors.length==1){o.selected=0;$li.addClass("ui-tabs-selected ui-state-active");$panel.removeClass("ui-tabs-hide");this.element.queue("tabs",function(){self._trigger("show",null,self._ui(self.anchors[0],self.panels[0]));});this.load(0);}this._trigger("add",null,this._ui(this.anchors[index],this.panels[index]));return this;},remove:function(index){index=this._getIndex(index);var o=this.options,$li=this.lis.eq(index).remove(),$panel=this.panels.eq(index).remove();if($li.hasClass("ui-tabs-selected")&&this.anchors.length>1){this.select(index+(index+1<this.anchors.length?1:-1));}o.disabled=$.map($.grep(o.disabled,function(n,i){
return n!=index;}),function(n,i){return n>=index?--n:n;});this._tabify();this._trigger("remove",null,this._ui($li.find("a")[0],$panel[0]));return this;},enable:function(index){index=this._getIndex(index);var o=this.options;if($.inArray(index,o.disabled)==-1){return;}this.lis.eq(index).removeClass("ui-state-disabled");o.disabled=$.grep(o.disabled,function(n,i){return n!=index;});this._trigger("enable",null,this._ui(this.anchors[index],this.panels[index]));return this;},disable:function(index){index=this._getIndex(index);var self=this,o=this.options;if(index!=o.selected){this.lis.eq(index).addClass("ui-state-disabled");o.disabled.push(index);o.disabled.sort();this._trigger("disable",null,this._ui(this.anchors[index],this.panels[index]));}return this;},select:function(index){index=this._getIndex(index);if(index==-1){if(this.options.collapsible&&this.options.selected!=-1){index=this.options.selected;}else{return this;}}this.anchors.eq(index).trigger(this.options.event+".tabs");return this;
},load:function(index){index=this._getIndex(index);var self=this,o=this.options,a=this.anchors.eq(index)[0],url=$.data(a,"load.tabs");this.abort();if(!url||this.element.queue("tabs").length!==0&&$.data(a,"cache.tabs")){this.element.dequeue("tabs");return;}this.lis.eq(index).addClass("ui-state-processing");if(o.spinner){var span=$("span",a);span.data("label.tabs",span.html()).html(o.spinner);}this.xhr=$.ajax($.extend({},o.ajaxOptions,{url:url,success:function(r,s){self.element.find(self._sanitizeSelector(a.hash)).html(r);self._cleanup();if(o.cache){$.data(a,"cache.tabs",true);}self._trigger("load",null,self._ui(self.anchors[index],self.panels[index]));try{o.ajaxOptions.success(r,s);}catch(e){}},error:function(xhr,s,e){self._cleanup();self._trigger("load",null,self._ui(self.anchors[index],self.panels[index]));try{o.ajaxOptions.error(xhr,s,index,a);}catch(e){}}}));self.element.dequeue("tabs");return this;},abort:function(){this.element.queue([]);this.panels.stop(false,true);this.element.
queue("tabs",this.element.queue("tabs").splice(-2,2));if(this.xhr){this.xhr.abort();delete this.xhr;}this._cleanup();return this;},url:function(index,url){this.anchors.eq(index).removeData("cache.tabs").data("load.tabs",url);return this;},length:function(){return this.anchors.length;}});$.extend($.ui.tabs,{version:"1.8.24"});$.extend($.ui.tabs.prototype,{rotation:null,rotate:function(ms,continuing){var self=this,o=this.options;var rotate=self._rotate||(self._rotate=function(e){clearTimeout(self.rotation);self.rotation=setTimeout(function(){var t=o.selected;self.select(++t<self.anchors.length?t:0);},ms);if(e){e.stopPropagation();}});var stop=self._unrotate||(self._unrotate=!continuing?function(e){if(e.clientX){self.rotate(null);}}:function(e){rotate();});if(ms){this.element.bind("tabsshow",rotate);this.anchors.bind(o.event+".tabs",stop);rotate();}else{clearTimeout(self.rotation);this.element.unbind("tabsshow",rotate);this.anchors.unbind(o.event+".tabs",stop);delete this._rotate;delete
this._unrotate;}return this;}});})(jQuery);;},{"css":[".ui-tabs{position:relative;padding:.2em;zoom:1} .ui-tabs .ui-tabs-nav{margin:0;padding:.2em .2em 0}.ui-tabs .ui-tabs-nav li{list-style:none;float:left;position:relative;top:1px;margin:0 .2em 1px 0;border-bottom:0 !important;padding:0;white-space:nowrap}.ui-tabs .ui-tabs-nav li a{float:left;padding:.5em 1em;text-decoration:none}.ui-tabs .ui-tabs-nav li.ui-tabs-selected{margin-bottom:0;padding-bottom:1px}.ui-tabs .ui-tabs-nav li.ui-tabs-selected a,.ui-tabs .ui-tabs-nav li.ui-state-disabled a,.ui-tabs .ui-tabs-nav li.ui-state-processing a{cursor:text}.ui-tabs .ui-tabs-nav li a,.ui-tabs.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-selected a{cursor:pointer} .ui-tabs .ui-tabs-panel{display:block;border-width:0;padding:1em 1.4em;background:none}.ui-tabs .ui-tabs-hide{display:none !important}\n/* cache key: mwiki-765_:resourceloader:filter:minify-css:7:20fb64404f61afb1bdaf2e8ff9fc570d */"]},{});mw.loader.implement("jquery.ui.widget",
function(){(function($,undefined){if($.cleanData){var _cleanData=$.cleanData;$.cleanData=function(elems){for(var i=0,elem;(elem=elems[i])!=null;i++){try{$(elem).triggerHandler("remove");}catch(e){}}_cleanData(elems);};}else{var _remove=$.fn.remove;$.fn.remove=function(selector,keepData){return this.each(function(){if(!keepData){if(!selector||$.filter(selector,[this]).length){$("*",this).add([this]).each(function(){try{$(this).triggerHandler("remove");}catch(e){}});}}return _remove.call($(this),selector,keepData);});};}$.widget=function(name,base,prototype){var namespace=name.split(".")[0],fullName;name=name.split(".")[1];fullName=namespace+"-"+name;if(!prototype){prototype=base;base=$.Widget;}$.expr[":"][fullName]=function(elem){return!!$.data(elem,name);};$[namespace]=$[namespace]||{};$[namespace][name]=function(options,element){if(arguments.length){this._createWidget(options,element);}};var basePrototype=new base();basePrototype.options=$.extend(true,{},basePrototype.options);$[
namespace][name].prototype=$.extend(true,basePrototype,{namespace:namespace,widgetName:name,widgetEventPrefix:$[namespace][name].prototype.widgetEventPrefix||name,widgetBaseClass:fullName},prototype);$.widget.bridge(name,$[namespace][name]);};$.widget.bridge=function(name,object){$.fn[name]=function(options){var isMethodCall=typeof options==="string",args=Array.prototype.slice.call(arguments,1),returnValue=this;options=!isMethodCall&&args.length?$.extend.apply(null,[true,options].concat(args)):options;if(isMethodCall&&options.charAt(0)==="_"){return returnValue;}if(isMethodCall){this.each(function(){var instance=$.data(this,name),methodValue=instance&&$.isFunction(instance[options])?instance[options].apply(instance,args):instance;if(methodValue!==instance&&methodValue!==undefined){returnValue=methodValue;return false;}});}else{this.each(function(){var instance=$.data(this,name);if(instance){instance.option(options||{})._init();}else{$.data(this,name,new object(options,this));}});}
return returnValue;};};$.Widget=function(options,element){if(arguments.length){this._createWidget(options,element);}};$.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:false},_createWidget:function(options,element){$.data(element,this.widgetName,this);this.element=$(element);this.options=$.extend(true,{},this.options,this._getCreateOptions(),options);var self=this;this.element.bind("remove."+this.widgetName,function(){self.destroy();});this._create();this._trigger("create");this._init();},_getCreateOptions:function(){return $.metadata&&$.metadata.get(this.element[0])[this.widgetName];},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName);this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled "+"ui-state-disabled");},widget:function(){return this.element;},option:function(key,value){var options=key;if(arguments.length===0){
return $.extend({},this.options);}if(typeof key==="string"){if(value===undefined){return this.options[key];}options={};options[key]=value;}this._setOptions(options);return this;},_setOptions:function(options){var self=this;$.each(options,function(key,value){self._setOption(key,value);});return this;},_setOption:function(key,value){this.options[key]=value;if(key==="disabled"){this.widget()[value?"addClass":"removeClass"](this.widgetBaseClass+"-disabled"+" "+"ui-state-disabled").attr("aria-disabled",value);}return this;},enable:function(){return this._setOption("disabled",false);},disable:function(){return this._setOption("disabled",true);},_trigger:function(type,event,data){var prop,orig,callback=this.options[type];data=data||{};event=$.Event(event);event.type=(type===this.widgetEventPrefix?type:this.widgetEventPrefix+type).toLowerCase();event.target=this.element[0];orig=event.originalEvent;if(orig){for(prop in orig){if(!(prop in event)){event[prop]=orig[prop];}}}this.element.trigger(
event,data);return!($.isFunction(callback)&&callback.call(this.element[0],event,data)===false||event.isDefaultPrevented());}};})(jQuery);;},{},{});
/* cache key: mwiki-765_:resourceloader:filter:minify-js:7:ca5f45be02f6739ff346130d33897b79 */