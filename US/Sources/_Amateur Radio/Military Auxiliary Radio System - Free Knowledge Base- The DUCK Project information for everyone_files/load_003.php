function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1530898418",[],"site"],["noscript","1530898418",[],"noscript"],["startup","1620576161",[],"startup"],["filepage","1530898418"],["user.groups","1530898418",[],"user"],["user","1530898418",[],"user"],["user.cssprefs","1530898418",["mediawiki.user"],"private"],["user.options","1530898418",[],"private"],["user.tokens","1530898418",[],"private"],["mediawiki.language.data","1530898500",["mediawiki.language.init"]],[
"skins.cologneblue","1530898418"],["skins.modern","1530898418"],["skins.monobook","1530898418"],["skins.vector","1530898418"],["skins.vector.beta","1530898418"],["skins.vector.js","1530898418",["jquery.delayedBind"]],["skins.vector.collapsibleNav","1530898418",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1530898418"],["jquery.appear","1530898418"],["jquery.arrowSteps","1530898418"],["jquery.async","1530898418"],["jquery.autoEllipsis","1530898418",["jquery.highlightText"]],["jquery.badge","1530898418",["mediawiki.language"]],["jquery.byteLength","1530898418"],["jquery.byteLimit","1530898418",["jquery.byteLength"]],["jquery.checkboxShiftClick","1530898418"],["jquery.chosen","1530898418"],["jquery.client","1530898418"],["jquery.color","1530898418",["jquery.colorUtil"]],["jquery.colorUtil","1530898418"],["jquery.cookie","1530898418"],["jquery.delayedBind","1530898418"],["jquery.expandableField","1530898418",["jquery.delayedBind"]],["jquery.farbtastic","1530898418",[
"jquery.colorUtil"]],["jquery.footHovzer","1530898418"],["jquery.form","1530898418"],["jquery.getAttrs","1530898418"],["jquery.hidpi","1530898418"],["jquery.highlightText","1530898418",["jquery.mwExtension"]],["jquery.hoverIntent","1530898418"],["jquery.json","1530898418"],["jquery.localize","1530898418"],["jquery.makeCollapsible","1534660194"],["jquery.mockjax","1530898418"],["jquery.mw-jump","1530898418"],["jquery.mwExtension","1530898418"],["jquery.placeholder","1530898418"],["jquery.qunit","1530898418"],["jquery.qunit.completenessTest","1530898418",["jquery.qunit"]],["jquery.spinner","1530898418"],["jquery.jStorage","1530898418",["jquery.json"]],["jquery.suggestions","1530898418",["jquery.autoEllipsis"]],["jquery.tabIndex","1530898418"],["jquery.tablesorter","1534977896",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1530898418",["jquery.client"]],["jquery.validate","1530898418"],["jquery.xmldom","1530898418"],["jquery.tipsy","1530898418"],[
"jquery.ui.core","1530898418",["jquery"],"jquery.ui"],["jquery.ui.widget","1530898418",[],"jquery.ui"],["jquery.ui.mouse","1530898418",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1530898418",[],"jquery.ui"],["jquery.ui.draggable","1530898418",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1530898418",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1530898418",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1530898418",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1530898418",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1530898418",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1530898418",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1530898418",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1530898418",["jquery"],"jquery.ui"],["jquery.effects.blind","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1530898418",["jquery.effects.core"],
"jquery.ui"],["jquery.effects.fade","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1530898418",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1530898418",["jquery.effects.core"],"jquery.ui"],["mediawiki","1530898418"],["mediawiki.api","1530898418",["mediawiki.util"]],["mediawiki.api.category","1530898418",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1530898418",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1530898418",["mediawiki.api"]],["mediawiki.api.parse","1530898418",["mediawiki.api"]],["mediawiki.api.watch","1530898418",["mediawiki.api",
"user.tokens"]],["mediawiki.icon","1530898418"],["mediawiki.debug","1530898418",["jquery.footHovzer"]],["mediawiki.debug.init","1530898418",["mediawiki.debug"]],["mediawiki.inspect","1530898418",["jquery.byteLength","jquery.json"]],["mediawiki.feedback","1530898418",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1530898418",["jquery.hidpi"]],["mediawiki.htmlform","1534660204"],["mediawiki.notification","1530898418",["mediawiki.page.startup"]],["mediawiki.notify","1530898418"],["mediawiki.searchSuggest","1534660194",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1530898418",["jquery.byteLength","mediawiki.util"]],["mediawiki.Uri","1530898418"],["mediawiki.user","1530898418",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1534660194",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],[
"mediawiki.action.edit","1530898418",["mediawiki.action.edit.styles","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.styles","1530898418"],["mediawiki.action.edit.collapsibleFooter","1530898418",["jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1530898418",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1530898418",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1530898418",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1530898418",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1534723356"],["mediawiki.action.view.postEdit","1534660194",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1530898418"],["mediawiki.action.edit.editWarning","1534792519"],["mediawiki.action.watch.ajax","1530898418",["mediawiki.page.watch.ajax"]],["mediawiki.language","1530898418",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1530898418",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1530898418"],["mediawiki.language.init","1530898418"],["mediawiki.jqueryMsg","1530898418",["mediawiki.util","mediawiki.language"]],["mediawiki.language.months","1534977896",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1530898418"],["mediawiki.page.gallery","1530898418"],["mediawiki.page.ready","1530898418",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1530898418",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1620576161",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1534792510",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.page.image.pagination","1530898418",[
"jquery.spinner"]],["mediawiki.special","1530898418"],["mediawiki.special.block","1530898418",["mediawiki.util"]],["mediawiki.special.changeemail","1586052282",["mediawiki.util"]],["mediawiki.special.changeslist","1530898418"],["mediawiki.special.changeslist.enhanced","1530898418"],["mediawiki.special.movePage","1530898418",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1530898418"],["mediawiki.special.preferences","1530898418"],["mediawiki.special.recentchanges","1530898418",["mediawiki.special"]],["mediawiki.special.search","1534818539"],["mediawiki.special.undelete","1530898418"],["mediawiki.special.upload","1537405082",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1530898418"],["mediawiki.special.createaccount","1530898418"],["mediawiki.special.createaccount.js","1534783223",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1530898418",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1530898418",["jquery.getAttrs",
"jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1530898418",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1530898418"],["mediawiki.legacy.config","1530898418",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1530898418",["jquery.byteLimit"]],["mediawiki.legacy.shared","1530898418"],["mediawiki.legacy.oldshared","1530898418"],["mediawiki.legacy.upload","1530898418",["jquery.spinner","mediawiki.api","mediawiki.Title","mediawiki.util"]],["mediawiki.legacy.wikibits","1530898418",["mediawiki.util"]],["mediawiki.ui","1530898418"],["mobile.templates","1530898418"],["mobile.loggingSchemas","1530898418",["mobile.startup"]],["mobile.file.scripts","1530898418",["mobile.startup"]],["mobile.styles.page","1530898418",["mobile.startup"]],["mobile.pagelist.styles","1530898418"],["mobile.styles","1530898418"],["mobile.styles.beta","1530898418"],["mobile.head","1530898418"],[
"mobile.startup","1530898418",["mobile.head","mobile.templates"]],["mobile.editor","1530898418",["mobile.stable","mobile.templates","jquery.cookie"]],["mobile.uploads","1530898418",["mobile.stable","mobile.templates"]],["mobile.beta.common","1530898418",["mobile.stable.common","mobile.loggingSchemas","mobile.templates"]],["mobile.keepgoing","1530898418",["mobile.beta","mobile.templates"]],["mobile.geonotahack","1530898418",["mobile.startup","mobile.loggingSchemas"]],["mobile.beta","1530898418",["mobile.stable","mobile.beta.common"]],["mobile.talk","1530898418",["mobile.beta","mobile.templates"]],["mobile.alpha","1530898418",["mobile.stable","mobile.beta","mobile.templates"]],["mobile.toast.styles","1530898418"],["mobile.stable.styles","1530898418"],["mobile.stable.common","1530898418",["mobile.startup","mobile.toast.styles","mediawiki.jqueryMsg","mediawiki.util","mobile.templates"]],["mobile.stable","1530898418",["mobile.startup","mobile.stable.common","mediawiki.util",
"mobile.stable.styles","mobile.templates","mediawiki.language"]],["mobile.desktop","1530898418",["jquery.cookie"]],["mobile.nearby.styles","1530898418"],["mobile.nearby.beta","1530898418",["mobile.stable.common","mobile.nearby","mobile.beta.common"]],["mobile.nearby","1530898418",["mobile.stable.common","mobile.nearby.styles","jquery.json","mediawiki.language","mobile.templates","mobile.loggingSchemas"]],["mobile.nearby.scripts","1530898418",["mobile.nearby"]],["mobile.notifications.overlay","1530898418",["mobile.stable"]],["mobile.uploads.scripts","1530898418",["mobile.stable.styles","mobile.stable.common","mobile.uploads","mobile.templates"]],["mobile.mobilediff.scripts","1530898418",["mobile.loggingSchemas","mobile.stable.common"]],["mobile.mobilediff.scripts.beta.head","1530898418",["mobile.head"]]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"monobook","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://wiki.robotz.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.22.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Free Knowledge Base- The DUCK Project: information for everyone","5":"Free Knowledge Base- The DUCK Project: information for everyone talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":
"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"free_knowledge_base-_the_duck_project:_information_for_everyone":4,"free_knowledge_base-_the_duck_project:_information_for_everyone_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Free Knowledge Base- The DUCK Project: information for everyone","wgFileExtensions":["gif","png","jpg","jpeg","svg","xls","doc","pdf"],"wgDBname":"robotz_duckwiki","wgFileCanRotate":true,"wgAvailableSkins":{"modern":"Modern","monobook":"MonoBook","vector":"Vector","cologneblue":"CologneBlue"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"robotz_duckwiki_duck","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":
" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgStopMobileRedirectCookie":{"name":"stopMobileRedirect","duration":180,"domain":".robotz.com","path":"/"},"wgMFNearbyEndpoint":"","wgMFNearbyNamespace":0});};if(isCompatible()){document.write("\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=monobook\u0026amp;version=20140128T000634Z\"\u003E\u003C/script\u003E");}delete isCompatible;
/* cache key: robotz_duckwiki-duck:resourceloader:filter:minify-js:7:f0aae5f11b97c86ae63e5908e8a128d0 */