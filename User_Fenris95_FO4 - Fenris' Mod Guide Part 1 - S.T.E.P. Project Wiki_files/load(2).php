function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1539747819",[],"site"],["noscript","1539361879",[],"noscript"],["startup","1597591057",[],"startup"],["filepage","1539361879"],["user.groups","1539361879",[],"user"],["user","1539361879",[],"user"],["user.cssprefs","1539361879",["mediawiki.user"],"private"],["user.options","1539361879",[],"private"],["user.tokens","1539361879",[],"private"],["mediawiki.language.data","1597591057",["mediawiki.language.init"]],["skins.chick","1539361879"],["skins.cologneblue","1539361879"],["skins.modern","1539361879"],["skins.monobook","1539361879"],["skins.nostalgia","1539361879"],["skins.simple","1539361879"],["skins.standard","1539361879"],["skins.vector","1539361879"],["skins.vector.js",
"1539361879"],["jquery","1539361879"],["jquery.appear","1539361879"],["jquery.arrowSteps","1539361879"],["jquery.async","1539361879"],["jquery.autoEllipsis","1539361879",["jquery.highlightText"]],["jquery.badge","1539361879",["mediawiki.language"]],["jquery.byteLength","1539361879"],["jquery.byteLimit","1539361879",["jquery.byteLength"]],["jquery.checkboxShiftClick","1539361879"],["jquery.client","1539361879"],["jquery.color","1539361879",["jquery.colorUtil"]],["jquery.colorUtil","1539361879"],["jquery.cookie","1539361879"],["jquery.delayedBind","1539361879"],["jquery.expandableField","1539361879",["jquery.delayedBind"]],["jquery.farbtastic","1539361879",["jquery.colorUtil"]],["jquery.footHovzer","1539361879"],["jquery.form","1539361879"],["jquery.getAttrs","1539361879"],["jquery.hidpi","1539361879"],["jquery.highlightText","1539361879",["jquery.mwExtension"]],["jquery.hoverIntent","1539361879"],["jquery.json","1539361879"],["jquery.localize","1539361879"],["jquery.makeCollapsible",
"1580408632"],["jquery.mockjax","1539361879"],["jquery.mw-jump","1539361879"],["jquery.mwExtension","1539361879"],["jquery.placeholder","1539361879"],["jquery.qunit","1539361879"],["jquery.qunit.completenessTest","1539361879",["jquery.qunit"]],["jquery.spinner","1539361879"],["jquery.jStorage","1539361879",["jquery.json"]],["jquery.suggestions","1539361879",["jquery.autoEllipsis"]],["jquery.tabIndex","1539361879"],["jquery.tablesorter","1580698771",["jquery.mwExtension"]],["jquery.textSelection","1539361879",["jquery.client"]],["jquery.validate","1539361879"],["jquery.xmldom","1539361879"],["jquery.tipsy","1539361879"],["jquery.ui.core","1539361879",["jquery"],"jquery.ui"],["jquery.ui.widget","1539361879",[],"jquery.ui"],["jquery.ui.mouse","1539361879",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1539361879",[],"jquery.ui"],["jquery.ui.draggable","1539361879",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1539361879",[
"jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1539361879",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1539361879",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1539361879",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1539361879",["jquery.ui.core",
"jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1539361879",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1539361879",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1539361879",["jquery"],"jquery.ui"],["jquery.effects.blind","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1539361879",[
"jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1539361879",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1539361879",["jquery.effects.core"],"jquery.ui"],["mediawiki","1539361879"],["mediawiki.api","1539361879",["mediawiki.util"]],["mediawiki.api.category","1539361879",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1539361879",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1539361879",["mediawiki.api"]],["mediawiki.api.watch","1539361879",["mediawiki.api","user.tokens"]],["mediawiki.debug","1539361879",["jquery.footHovzer"]],["mediawiki.debug.init","1539361879",["mediawiki.debug"]],["mediawiki.feedback","1539361879",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1539361879",["jquery.hidpi"]],["mediawiki.htmlform","1539361879"],["mediawiki.notification","1539361879",["mediawiki.page.startup"]],[
"mediawiki.notify","1539361879"],["mediawiki.searchSuggest","1580408632",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1539361879",["mediawiki.util"]],["mediawiki.Uri","1539361879"],["mediawiki.user","1539361879",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1580408631",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1539361879",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1539361879",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1539361879",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1539361879",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1539361879",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1580410807"],["mediawiki.action.view.postEdit","1539361879",["jquery.cookie"]],[
"mediawiki.action.view.rightClickEdit","1539361879"],["mediawiki.action.watch.ajax","1539361879",["mediawiki.page.watch.ajax"]],["mediawiki.language","1539361879",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1539361879",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1539361879"],["mediawiki.language.init","1539361879"],["mediawiki.jqueryMsg","1539361879",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1539361879"],["mediawiki.page.ready","1539361879",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1539361879",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1539361879",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1580414967",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util",
"mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1539361879"],["mediawiki.special.block","1539361879",["mediawiki.util"]],["mediawiki.special.changeemail","1539361879",["mediawiki.util"]],["mediawiki.special.changeslist","1539361879",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1539361879",["jquery.byteLimit"]],["mediawiki.special.preferences","1539361879"],["mediawiki.special.recentchanges","1539361879",["mediawiki.special"]],["mediawiki.special.search","1580416685"],["mediawiki.special.undelete","1539361879"],["mediawiki.special.upload","1580851589",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.signup","1539361879"],["mediawiki.special.javaScriptTest","1539361879",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1539361879",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1539361879",["mediawiki.util","mediawiki.legacy.wikibits"
]],["mediawiki.legacy.commonPrint","1539361879"],["mediawiki.legacy.config","1539361879",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1539361879",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1539361879",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1539361879"],["mediawiki.legacy.oldshared","1539361879"],["mediawiki.legacy.upload","1539361879",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1539361879",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1539361879"],["skins.step.css","1539361879"],["skins.step.js","1539361879"],["ext.abuseFilter","1539361879"],["ext.abuseFilter.edit","1539361879",["mediawiki.util","jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools","1539361879",["mediawiki.util","jquery.spinner"]],["ext.abuseFilter.examine","1539361879",["mediawiki.util"]],["ext.CSS","1539361879"],["ext.checkUser","1539361879",["mediawiki.util"]],["ext.headertabs","1539361879",
["jquery.ui.tabs"]],["ext.highslideGallery","1539361879"],["ext.MsUpload","1580423334",["jquery.ui.progressbar"]],["ext.nuke","1539361879"],["ext.smw","1539361879",[],"ext.smw"],["ext.smw.style","1539361879",[],"ext.smw"],["ext.smw.query.ui","1539361879",[],"ext.smw"],["ext.jquery.qtip","1539361879",[],"ext.smw"],["ext.smw.tooltip","1580426302",["ext.smw","ext.jquery.qtip"],"ext.smw"],["ext.smw.tooltips","1539361879",["ext.smw.tooltip"],"ext.smw"],["ext.smw.autocomplete","1539361879",["jquery.ui.autocomplete"],"ext.smw"],["ext.smw.ask","1587307203",["ext.smw.tooltip","ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.browse","1539361879",["ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.property","1539361879",["ext.smw.autocomplete"],"ext.smw"],["ext.semanticdrilldown.main","1539361879",["jquery.ui.autocomplete","jquery.ui.button"]],["ext.pageschemas.main","1539361879",["jquery"]],["ext.pageschemas.generatepages","1539361879",["jquery"]],["ext.semanticforms.main",
"1580436759",["jquery.ui.core","jquery.ui.autocomplete","jquery.ui.button","jquery.ui.sortable","jquery.ui.widget","ext.semanticforms.fancybox","ext.semanticforms.autogrow","mediawiki.util"]],["ext.semanticforms.fancybox","1539361879"],["ext.semanticforms.dynatree","1539361879",["jquery.ui.core"]],["ext.semanticforms.autogrow","1539361879"],["ext.semanticforms.popupformedit","1539361879",["jquery"]],["ext.semanticforms.autoedit","1589807715",["jquery"]],["ext.semanticforms.submit","1580436759",["jquery"]],["ext.semanticforms.collapsible","1539361879",["jquery"]],["ext.semanticforms.wikieditor","1539361879",["ext.semanticforms.main","jquery.wikiEditor"]],["ext.semanticforms.imagepreview","1539361879"],["ext.semanticformsinputs.datepicker","1539361879",["jquery.ui.datepicker","ext.semanticforms.main"]],["ext.semanticformsinputs.timepicker","1539361879",["ext.semanticforms.main"]],["ext.semanticformsinputs.datetimepicker","1539361879",["ext.semanticformsinputs.timepicker",
"ext.semanticformsinputs.datepicker"]],["ext.semanticformsinputs.menuselect","1539361879",["ext.semanticforms.main"]],["ext.semanticformsinputs.regexp","1539361879",["ext.semanticforms.main"]],["ext.semanticformsinputs.twolistboxes","1539361879",["ext.semanticforms.main"]],["sii.image","1539361879"],["ext.jquery.easing","1539361879"],["ext.jquery.fancybox","1539361879",["ext.jquery.easing"]],["ext.jquery.jqgrid","1539361879",["jquery.ui.core"]],["ext.jquery.flot","1539361879"],["ext.jquery.jStorage","1539361879",["jquery.json"]],["ext.srf","1539361879",[],"ext.srf"],["ext.srf.util","1539361879",["ext.srf","ext.jquery.jStorage"],"ext.srf"],["ext.srf.util.grid","1539361879",["jquery.ui.tabs","ext.srf.util","ext.jquery.jqgrid"],"ext.srf"],["ext.jquery.sparkline","1539361879"],["ext.srf.sparkline","1539361879",["ext.srf.util","ext.jquery.sparkline"],"ext.srf"],["ext.dygraphs.combined","1539361879"],["ext.srf.dygraphs","1539361879",["jquery.client","jquery.async","ext.srf.util",
"ext.smw.tooltip","ext.dygraphs.combined"]],["ext.jquery.listnav","1539361879"],["ext.jquery.listmenu","1539361879"],["ext.jquery.pajinate","1539361879"],["ext.srf.listwidget","1596567119",["ext.srf.util"]],["ext.srf.listwidget.alphabet","1539361879",["ext.srf.listwidget","ext.jquery.listnav"]],["ext.srf.listwidget.menu","1539361879",["ext.srf.listwidget","ext.jquery.listmenu"]],["ext.srf.listwidget.pagination","1539361879",["ext.srf.listwidget","ext.jquery.pajinate"]],["ext.jquery.dynamiccarousel","1539361879"],["ext.srf.pagewidget.carousel","1539361879",["ext.jquery.dynamiccarousel","ext.srf.util"]],["ext.jquery.jqplot.core","1539361879"],["ext.jquery.jqplot.excanvas","1539361879"],["ext.jquery.jqplot.json","1539361879"],["ext.jquery.jqplot.cursor","1539361879"],["ext.jquery.jqplot.logaxisrenderer","1539361879"],["ext.jquery.jqplot.mekko","1539361879"],["ext.jquery.jqplot.bar","1539361879",["ext.jquery.jqplot.core"]],["ext.jquery.jqplot.pie","1539361879",["ext.jquery.jqplot.core"]],[
"ext.jquery.jqplot.bubble","1539361879",["ext.jquery.jqplot.core"]],["ext.jquery.jqplot.donut","1539361879",["ext.jquery.jqplot.pie"]],["ext.jquery.jqplot.pointlabels","1539361879"],["ext.jquery.jqplot.highlighter","1539361879"],["ext.jquery.jqplot.enhancedlegend","1539361879"],["ext.jquery.jqplot.trendline","1539361879"],["ext.srf.jqplot.themes","1539361879",["jquery.client"]],["ext.srf.jqplot.cursor","1539361879",["ext.srf.jqplot.bar","ext.jquery.jqplot.cursor"]],["ext.srf.jqplot.enhancedlegend","1539361879",["ext.srf.jqplot.bar","ext.jquery.jqplot.enhancedlegend"]],["ext.srf.jqplot.pointlabels","1539361879",["ext.srf.jqplot.bar","ext.jquery.jqplot.pointlabels"]],["ext.srf.jqplot.highlighter","1539361879",["ext.srf.jqplot.bar","ext.jquery.jqplot.highlighter"]],["ext.srf.jqplot.trendline","1539361879",["ext.srf.jqplot.bar","ext.jquery.jqplot.trendline"]],["ext.srf.jqplot.chart","1539361879",["jquery.async","ext.srf.util","ext.srf.jqplot.themes"]],["ext.srf.jqplot.bar","1539361879",[
"ext.jquery.jqplot.bar","ext.srf.jqplot.chart"]],["ext.srf.jqplot.pie","1539361879",["ext.jquery.jqplot.pie","ext.srf.jqplot.chart"]],["ext.srf.jqplot.bubble","1539361879",["ext.jquery.jqplot.bubble","ext.srf.jqplot.chart"]],["ext.srf.jqplot.donut","1539361879",["ext.jquery.jqplot.donut","ext.srf.jqplot.chart"]],["ext.smile.timeline","1539361879"],["ext.srf.timeline","1539361879",["ext.smile.timeline","mediawiki.legacy.wikibits"]],["ext.d3.core","1539361879"],["ext.d3.layout.cloud","1539361879",["ext.d3.core"]],["ext.srf.d3.common","1539361879",["ext.srf.util"]],["ext.srf.d3.chart.treemap","1539361879",["ext.d3.core","ext.srf.d3.common"]],["ext.srf.d3.chart.bubble","1539361879",["ext.d3.core","ext.srf.d3.common"]],["ext.srf.jquery.progressbar","1539361879"],["ext.srf.jit","1539361879"],["ext.srf.jitgraph","1539361879",["mediawiki.legacy.wikibits","ext.srf.jquery.progressbar","ext.srf.jit"]],["ext.jquery.jcarousel","1539361879"],["ext.jquery.responsiveslides","1539361879"],[
"ext.srf.gallery.carousel","1539361879",["ext.srf.util","ext.jquery.jcarousel"]],["ext.srf.gallery.slideshow","1539361879",["ext.srf.util","ext.jquery.responsiveslides"]],["ext.srf.gallery.overlay","1539361879",["ext.srf.util","ext.jquery.fancybox"]],["ext.srf.gallery.redirect","1539361879",["ext.srf.util"]],["ext.jquery.fullcalendar","1539361879"],["ext.jquery.gcal","1539361879"],["ext.srf.eventcalendar","1539361879",["jquery.ui.core","jquery.ui.widget","ext.smw.tooltip","ext.srf.util","ext.jquery.fullcalendar"]],["ext.srf.eventcalendar.gcal","1539361879",["ext.srf.eventcalendar","ext.jquery.gcal"]],["ext.srf.filtered","1539361879"],["ext.srf.filtered.list-view","1539361879",["ext.srf.filtered"]],["ext.srf.filtered.calendar-view","1539361879",["ext.srf.filtered","ext.jquery.fullcalendar"]],["ext.srf.filtered.value-filter","1539361879",["ext.srf.filtered"]],["ext.srf.filtered.distance-filter","1539361879",["ext.srf.filtered","jquery.ui.slider"]],["ext.srf.slideshow","1539361879",[
"mediawiki.legacy.ajax"]],["ext.jquery.tagcanvas.excanvas","1539361879"],["ext.jquery.tagcanvas","1539361879"],["ext.srf.tagcloud.sphere","1539361879",["jquery.async","jquery.client","ext.srf.util","ext.jquery.tagcanvas"]],["ext.srf.tagcloud.wordcloud","1539361879",["jquery.async","ext.d3.layout.cloud","ext.srf.d3.common"]],["ext.srf.flot.core","1539361879"],["ext.srf.timeseries.flot","1539361879",["jquery.async","ext.jquery.flot","ext.srf.util","ext.srf.flot.core"]],["ext.swl.watchlist","1539361879"],["ext.swl.watchlistconditions","1539361879"],["contentCollector","1539361879",[],"ext.wikiEditor"],["jquery.wikiEditor","1580423334",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1539361879",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1539361879",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable",
"jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1580423334",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1539361879",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1539361879",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1539361879",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1539361879",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1539361879",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1539361879",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1539361879",["jquery.wikiEditor",
"jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1539361879",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1539361879",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1539361879",[],"ext.wikiEditor"],["ext.wikiEditor","1539361879",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1539361879",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1539361879",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1580423334",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1539361879",["ext.wikiEditor"
,"jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1539361879",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1539361879",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1539361879",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1580493892",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1539361879",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1539361879",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1539361879",[],"ext.wikiEditor"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"step","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://wiki.step-project.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.21.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Project","5":"Project talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","102":"Guide","103":"Guide talk","106":"Property","107":"Property talk","110":"Form","111":"Form talk","112":"Concept","113":"Concept talk","120":"STEP","121":"STEP talk","122":
"Dev","123":"Dev talk","124":"Pack","125":"Pack talk","126":"NMS","127":"NMS talk","170":"Filter","171":"Filter talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"guide":102,"guide_talk":103,"property":106,"property_talk":107,"form":110,"form_talk":111,"concept":112,"concept_talk":113,"step":120,"step_talk":121,"dev":122,"dev_talk":123,"pack":124,"pack_talk":125,"nms":126,"nms_talk":127,"filter":170,"filter_talk":171,"image":6,"image_talk":7},"wgSiteName":"STEP Modding Wiki","wgFileExtensions":["png","gif","jpg","jpeg","7z"],"wgDBname":"mwiki","wgFileCanRotate":true,"wgAvailableSkins":{"step":"STEP","nostalgia":"Nostalgia","simple":"Simple","myskin":"MySkin","cologneblue":"CologneBlue","monobook":"MonoBook","standard":"Standard","modern":"Modern","chick":"Chick","vector":
"Vector"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"mwiki_765_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"htUseHistory":true,"htEditTabLink":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=step\x26amp;version=20180927T230233Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: mwiki-765_:resourceloader:filter:minify-js:7:c2a022096d0b7ad7936f7ca89f24c8e5 */