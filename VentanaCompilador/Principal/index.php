<!DOCTYPE html><html lang="en">
<?php 
	require '../../validator.php';
	require_once '../../admin/conn.php'
?>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8"/>
    <script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>var __ez=__ez||{};__ez.stms=Date.now();__ez.evt={};__ez.script={};__ez.ck=__ez.ck||{};__ez.template={};__ez.template.isOrig=true;__ez.queue=function(){var e=0,i=0,t=[],n=!1,o=[],s=[],r=!0,a=function(e,i,n,o,s,r,a){var l=arguments.length>7&&void 0!==arguments[7]?arguments[7]:window,c=this;this.name=e,this.funcName=i,this.parameters=null===n?null:p(n)?n:[n],this.isBlock=o,this.blockedBy=s,this.deleteWhenComplete=r,this.isError=!1,this.isComplete=!1,this.isInitialized=!1,this.proceedIfError=a,this.fWindow=l,this.isTimeDelay=!1,this.process=function(){f("... func = "+e),c.isInitialized=!0,c.isComplete=!0,f("... func.apply: "+e);var i=c.funcName.split("."),n=null,o=this.fWindow||window;i.length>3||(n=3===i.length?o[i[0]][i[1]][i[2]]:2===i.length?o[i[0]][i[1]]:o[c.funcName]),null!=n&&n.apply(null,this.parameters),!0===c.deleteWhenComplete&&delete t[e],!0===c.isBlock&&(f("----- F'D: "+c.name),u())}},l=function(e,i,t,n,o,s,r){var a=arguments.length>7&&void 0!==arguments[7]?arguments[7]:window,l=this;this.name=e,this.path=i,this.async=o,this.defer=s,this.isBlock=t,this.blockedBy=n,this.isInitialized=!1,this.isError=!1,this.isComplete=!1,this.proceedIfError=r,this.fWindow=a,this.isTimeDelay=!1,this.isPath=function(e){return"/"===e[0]&&"/"!==e[1]},this.getSrc=function(e){return void 0!==window.__ezScriptHost&&this.isPath(e)?window.__ezScriptHost+e:e},this.process=function(){l.isInitialized=!0,f("... file = "+e);var i=this.fWindow?this.fWindow.document:document,t=i.createElement("script");t.src=this.getSrc(this.path),!0===o?t.async=!0:!0===s&&(t.defer=!0),t.onerror=function(){f("----- ERR'D: "+l.name),l.isError=!0,!0===l.isBlock&&u()},t.onreadystatechange=t.onload=function(){var e=t.readyState;f("----- F'D: "+l.name),e&&!/loaded|complete/.test(e)||(l.isComplete=!0,!0===l.isBlock&&u())},i.getElementsByTagName("head")[0].appendChild(t)}},c=function(e,i){this.name=e,this.path="",this.async=!1,this.defer=!1,this.isBlock=!1,this.blockedBy=[],this.isInitialized=!0,this.isError=!1,this.isComplete=i,this.proceedIfError=!1,this.isTimeDelay=!1,this.process=function(){}};function d(e){!0!==h(e)&&0!=r&&e.process()}function h(e){if(!0===e.isTimeDelay&&!1===n)return f(e.name+" blocked = TIME DELAY!"),!0;if(p(e.blockedBy))for(var i=0;i<e.blockedBy.length;i++){var o=e.blockedBy[i];if(!1===t.hasOwnProperty(o))return f(e.name+" blocked = "+o),!0;if(!0===e.proceedIfError&&!0===t[o].isError)return!1;if(!1===t[o].isComplete)return f(e.name+" blocked = "+o),!0}return!1}function f(e){var i=window.location.href,t=new RegExp("[?&]ezq=([^&#]*)","i").exec(i);"1"===(t?t[1]:null)&&console.debug(e)}function u(){++e>200||(f("let's go"),m(o),m(s))}function m(e){for(var i in e)if(!1!==e.hasOwnProperty(i)){var t=e[i];!0===t.isComplete||h(t)||!0===t.isInitialized||!0===t.isError?!0===t.isError?f(t.name+": error"):!0===t.isComplete?f(t.name+": complete already"):!0===t.isInitialized&&f(t.name+": initialized already"):t.process()}}function p(e){return"[object Array]"==Object.prototype.toString.call(e)}return window.addEventListener("load",(function(){setTimeout((function(){n=!0,f("TDELAY -----"),u()}),5e3)}),!1),{addFile:function(e,i,n,r,a,c,h,f,u){var m=new l(e,i,n,r,a,c,h,u);!0===f?o[e]=m:s[e]=m,t[e]=m,d(m)},addDelayFile:function(e,i){var n=new l(e,i,!1,[],!1,!1,!0);n.isTimeDelay=!0,f(e+" ...  FILE! TDELAY"),s[e]=n,t[e]=n,d(n)},addFunc:function(e,n,r,l,c,h,f,u,m,p){!0===h&&(e=e+"_"+i++);var y=new a(e,n,r,l,c,f,u,p);!0===m?o[e]=y:s[e]=y,t[e]=y,d(y)},addDelayFunc:function(e,i,n){var o=new a(e,i,n,!1,[],!0,!0);o.isTimeDelay=!0,f(e+" ...  FUNCTION! TDELAY"),s[e]=o,t[e]=o,d(o)},items:t,processAll:u,setallowLoad:function(e){r=e},markLoaded:function(e){if(e&&0!==e.length){if(e in t){var i=t[e];!0===i.isComplete?f(i.name+" "+e+": error loaded duplicate"):(i.isComplete=!0,i.isInitialized=!0)}else t[e]=new c(e,!0);f("markLoaded dummyfile: "+t[e].name)}},logWhatsBlocked:function(){for(var e in t)!1!==t.hasOwnProperty(e)&&h(t[e])}}}();__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.script.add=function(e){var t=document.createElement("script");t.src=e,t.async=!0,t.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(t)};__ez.dot={};__ez.queue.addFile('detroitchicago/boise.js', 'detroitchicago/boise420f.js?gcb=195-0&amp;cb=2', true, [], true, false, true, false);__ez.queue.addFile('detroitchicago/memphis.js', 'detroitchicago/memphisd472.js?gcb=195-0&amp;cb=23', true, [], true, false, true, false);__ez.queue.addFile('detroitchicago/minneapolis.js', 'detroitchicago/minneapolis453e.js?gcb=195-0&amp;cb=4', true, [], true, false, true, false);__ez.queue.addFile('detroitchicago/rochester.js', 'detroitchicago/rochester9620.js?gcb=195-0&amp;cb=13', false, ['/detroitchicago/memphis.js','/detroitchicago/minneapolis.js'], true, false, true, false);!function(){var e;__ez.vep=(e=[],{Add:function(i,t){__ez.dot.isDefined(i)&&__ez.dot.isValid(t)&&e.push({type:"video",video_impression_id:i,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(t)})},Fire:function(){if(void 0===document.visibilityState||"prerender"!==document.visibilityState){if(__ez.dot.isDefined(e)&&e.length>0)for(;e.length>0;){var i=5;i>e.length&&(i=e.length);var t=e.splice(0,i),o=__ez.dot.getURL("detroitchicago/grapefruit.html")+"?orig="+(!0===__ez.template.isOrig?1:0)+"&v="+btoa(JSON.stringify(t));__ez.dot.Fire(o)}e=[]}}})}();</script><script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>!function(){function e(i){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(i)}__ez.pel=function(){var i=[];function t(t,o,d,_,n,r,a,s){if(__ez.dot.isDefined(t)&&0!=__ez.dot.isAnyDefined(t.getSlotElementId,t.ElementId)){void 0===s&&(s=!1);var p=parseInt(__ez.dot.getTargeting(t,"ap")),f=__ez.dot.getSlotIID(t),u=__ez.dot.getAdUnit(t,s),z=parseInt(__ez.dot.getTargeting(t,"compid")),g=0,c=0,l=function(i){if("undefined"==typeof _ezim_d)return!1;var t=__ez.dot.getAdUnitPath(i).split("index.html").pop();if("object"===("undefined"==typeof _ezim_d?"undefined":e(_ezim_d))&&_ezim_d.hasOwnProperty(t))return _ezim_d[t];for(var o in _ezim_d)if(o.split("index.html").pop()===t)return _ezim_d[o];return!1}(t);"object"==e(l)&&(void 0!==l.creative_id&&(c=l.creative_id),void 0!==l.line_item_id&&(g=l.line_item_id)),__ez.dot.isDefined(f,u)&&__ez.dot.isValid(o)&&("0"===f&&!0!==s||""===u||i.push({type:"impression",impression_id:f,domain_id:__ez.dot.getDID(),unit:u,t_epoch:__ez.dot.getEpoch(0),revenue:d,est_revenue:_,ad_position:p,ad_size:"",bid_floor_filled:n,bid_floor_prev:r,stat_source_id:a,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:z,line_item_id:g,creative_id:c,data:__ez.dot.dataToStr(o),is_orig:s||__ez.template.isOrig}))}}function o(){void 0!==document.visibilityState&&"prerender"===document.visibilityState||(__ez.dot.isDefined(i)&&i.length>0&&[i.filter((function(e){return e.is_orig})),i.filter((function(e){return!e.is_orig}))].forEach((function(e){for(;e.length>0;){var i=e[0].is_orig||!1,t=5;t>e.length&&(t=e.length);var o=e.splice(0,t),d=__ez.dot.getURL("porpoiseant/army.html")+"?orig="+(!0===i?1:0)+"&sts="+btoa(JSON.stringify(o));(void 0!==window.isAmp&&isAmp||void 0!==window.ezWp&&ezWp)&&void 0!==window._ezaq&&_ezaq.hasOwnProperty("domain_id")&&(d+="&visit_uuid="+_ezaq.visit_uuid),__ez.dot.Fire(d)}})),i=[])}return{Add:t,AddAndFire:function(e,i){t(e,i,0,0,0,0,0),o()},AddAndFireOrig:function(e,i){t(e,i,0,0,0,0,0,!0),o()},AddById:function(e,t,o,d){var _=e.split("index.html");if(__ez.dot.isDefined(e)&&3===_.length&&__ez.dot.isValid(t)){var n=_[0],r={type:"impression",impression_id:_[2],domain_id:__ez.dot.getDID(),unit:n,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(t),is_orig:o||__ez.template.isOrig};void 0!==d&&(r.revenue=d),i.push(r)}},Fire:o,GetPixels:function(){return i}}}()}();__ez.queue.addFile('detroitchicago/raleigh.js', 'detroitchicago/raleigh2693.js?gcb=195-0&amp;cb=6', false, [], true, false, true, false);__ez.queue.addFile('detroitchicago/tampa.js', 'detroitchicago/tampa45f7.js?gcb=195-0&amp;cb=5', false, [], true, false, true, false);</script>
    <script data-ezscrex="false" data-cfasync="false">(function(){if("function"===typeof window.CustomEvent)return!1;window.CustomEvent=function(c,a){a=a||{bubbles:!1,cancelable:!1,detail:null};var b=document.createEvent("CustomEvent");b.initCustomEvent(c,a.bubbles,a.cancelable,a.detail);return b}})();</script><script data-ezscrex="false" data-cfasync="false">__ez.queue.addFile('detroitchicago/tulsa.js', 'detroitchicago/tulsa1fee.js?gcb=195-0&amp;cb=7', false, [], true, false, true, false);</script>
    <title>Rookiex Compilator</title>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-touch-fullscreen" content="yes"/>

    <link rel="icon" type="image/png" href="rookiex.png"/>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/dist/css/idebbfd.css?v=b79"/>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"/>

    <!-- jQuery 3 -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/dist/js/ide4358.js?v=b7"></script>

    <!-- Ace Editor -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/ace/1.4.8/ace.js" type="text/javascript" charset="utf-8"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/ace/1.4.8/ext-language_tools.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/ace/1.4.8/ext-settings_menu.min.js" type="text/javascript" charset="utf-8"></script>
    <script async="" src="../cdnjs.cloudflare.com/ajax/libs/ace/1.4.8/ext-keybinding_menu.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Split JS -->
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/split.js/1.6.2/split.min.js"></script>

    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>

    <script src="../cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script async="" src="../cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-161735093-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-161735093-1');
    </script>

    <script data-ad-client="ca-pub-8595466052839863" async="" src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>

    <link rel='canonical' href='index.html' />
    <script type="text/javascript">var ezouid = "1";</script><base ><script type='text/javascript'>
        var ezoTemplate = 'old_site_gc';
        if(typeof ezouid == 'undefined')
        {
            var ezouid = 'none';
        }
        var ezoFormfactor = '1';
        var ezo_elements_to_check = Array();
    </script><!-- START EZHEAD -->
    <script data-ezscrex="false" type='text/javascript'>
        var soc_app_id = '0';
        var did = 214055;
        var ezdomain = 'online-python.com';
        var ezoicSearchable = 1;
    </script>
    <!--{jquery}-->
    <!-- END EZHEAD -->
    <script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ab_test_id":"mod1-c","ad_cache_level":0,"ad_lazyload_version":0,"ad_load_version":0,"city":"Maracaibo","country":"VE","days_since_last_visit":-1,"domain_id":214055,"domain_test_group":20230807,"engaged_time_visit":0,"ezcache_level":2,"ezcache_skip_code":0,"form_factor_id":1,"framework_id":1,"is_return_visitor":false,"is_sitespeed":0,"last_page_load":"","last_pageview_id":"","lt_cache_level":0,"metro_code":0,"page_ad_positions":"","page_view_count":0,"page_view_id":"01957d0d-0919-474a-455d-5b84bc0cdf08","position_selection_id":0,"postal_code":"","pv_event_count":0,"response_size_orig":35678,"response_time_orig":4,"serverid":"i-0b94bb012a02b42b1","state":"V","t_epoch":1684317913,"template_id":126,"time_on_site_visit":0,"url":"https://www.online-python.com/","user_id":0,"weather_precipitation":0,"weather_summary":"","weather_temperature":0,"word_count":877,"worst_bad_word_level":0};var _ezExtraQueries = "&ez_orig=1";</script>
    <script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false'>
        function create_ezolpl(pvID, rv) {
            var d = new Date();
            d.setTime(d.getTime() + (365*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            __ez.ck.setByCat("ezux_lpl_214055=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);
        }
        function attach_ezolpl(pvID, rv) {
            if (document.readyState === "complete") {
                create_ezolpl(pvID, rv);
            }
            if(window.attachEvent) {
                window.attachEvent("onload", create_ezolpl, pvID, rv);
            } else {
                if(window.onload) {
                    var curronload = window.onload;
                    var newonload = function(evt) {
                        curronload(evt);
                        create_ezolpl(pvID, rv);
                    };
                    window.onload = newonload;
                } else {
                    window.onload = create_ezolpl.bind(null, pvID, rv);
                }
            }
        }

        __ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["01957d0d-0919-474a-455d-5b84bc0cdf08", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);
    </script>
</head>
<body>
<div>
    <nav class="nav navbar-top">
        <h2 class="nav_logo">
            <!-- <i class="fab fa-product-hunt"></i> -->
            <a href="../../student_profile.php"><img src="rookiex.png" alt="IDE" width="160" height="136" style="margin-top: -58px"/></a>

            <!-- <span>Rookiex Compilator </span> -->
        </h2>
        <div class="addthis_inline_share_toolbox_28pb"></div> 
    </nav>
<div class="main-content d-flex">
<div id="sidebar-left-ad">
    <!-- Ezoic - sidebar_left - sidebar -->
    <div id="ezoic-pub-ad-placeholder-119"> </div>
    <!-- End Ezoic - sidebar_left - sidebar -->
</div>
<div class="container" id="container">
    <!-- Ezoic - top_of_page - top_of_page -->
    <div id="ezoic-pub-ad-placeholder-127"> </div>
    <!-- End Ezoic - top_of_page - top_of_page -->
    <div id="header-control">
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-custom" id="open_file" onclick="openFile(dispFile)" data-toggle="tooltip" data-container="body" data-placement="right" title="Open File from Disk"><i class="fas fa-folder-open"></i></button>
            <button type="button" class="btn btn-default btn-custom" onclick="save_code_modal()" id="save_file" data-toggle="tooltip" data-container="body" data-placement="right" title="Save File to Disk - F9"><i class="fas fa-save"></i></button>
            <!-- <button type="button" class="btn btn-default btn-custom" onclick="share_code_modal()" data-toggle="tooltip" data-container="body" data-placement="right" title="Share Code - F10"><i class="fas fa-share-alt"></i></button> -->
            <button type="button" class="btn btn-default btn-custom" id="undo-editor" data-toggle="tooltip" data-container="body" data-placement="right" title="Undo / Crtl+z"><i class="fas fa-undo-alt"></i></button>
            <button type="button" class="btn btn-default btn-custom" id="redo-editor" data-toggle="tooltip" data-container="body" data-placement="right" title="Redo / Crtl+y"><i class="fas fa-redo-alt"></i></button>
        </div>

        <div class="btn-group setting-btn" role="group">
            <button type="button" class="btn btn-default" id="toggle-theme" data-toggle="tooltip" data-container="body" data-placement="left" title="Change Theme"><i class="fas fa-moon fa-lg"></i></button>
            <button type="button" class="btn btn-default" onclick="about_modal()" id="info" data-toggle="tooltip" data-container="body" data-placement="left" title="About Site"><i class="fas fa-info-circle"></i></button>
            <button type="button" class="btn btn-default" onclick="ace_setting()" id="setting" data-toggle="tooltip" data-container="body" data-placement="left" title="Settings"><i class="fas fa-cogs"></i></button>
        </div>
    </div>
    <div id="mi" class="split">
        <div id="editor-main">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active" id="editor-1"><a data-toggle="tab">main.py</a></li>
            <li id="new_file_btn"><button type="button" class="btn btn-default btn-sm add-editor" id="create_tab" data-title="New File"><i class="fas fa-plus"></i></button></li>
        </ul>

        <div id="editor"></div>
        <div class="boxed" id="editor_footer"></div>
        </div>

        <div class="control-bar">
            <div id="control-btn">
            <button type="button" class="btn btn-success btn-sm" id="run-btn" onclick="run_python()" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="F8"><i class="fa fa-play"></i> <strong>Run</strong></button>
            </div>
            <a tabindex="0" type="button" class="btn btn-default btn-sm" id="share-btn" onclick="share_code_modal()" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Share the code to your friends and colleagues"><i class="fa fa-share"></i> <strong>Share</strong></a>
            <input class="textbox" type="text" id="input_arguments" placeholder=" Command Line Arguments"/>
        </div>

    </div>

    <div id="d" class="split">
        <div class="boxed1" id="output_header">
            <div id="hint-section"></div>
            <div class="btn-group status" id="tool-btn">
                <button type="button" data-toggle="tooltip" data-container="body" data-placement="right" title="Copy to Clipboard" class="btn btn-default btn-sm status" onclick="copy_output()"><i class="fas fa-copy"></i></button>
                <button type="button" data-toggle="tooltip" data-container="body" data-placement="right" title="Download" class="btn btn-default btn-sm status" onclick="download_modal()"><i class="fas fa-download"></i></button>
                <button type="button" data-toggle="tooltip" data-container="body" data-placement="right" title="Clear" class="btn btn-default btn-sm status" onclick="clear_output()"><i class="fas fa-eraser"></i></button>
            </div>
            <button type="button" data-toggle="tooltip" data-container="body" data-placement="right" title="Start Terminal" class="btn btn-default btn-sm status" id="start-term" onclick="start_terminal()"><i class="fas fa-terminal"></i></button>
            <button type="button" data-toggle="tooltip" data-container="body" data-placement="right" title="Expand/Collapse" class="btn btn-default btn-sm status" id="term-expand" onclick="term_expand()"><i class="fas fa-expand-alt fa-lg"></i></button>
             
            <div id="output-status"></div>
        </div>

        <div id="terminal">
            <div id="progress-status"></div>
            <div class="boxed2" id="output">
                <div class="wrapper" id="wrap"></div>
                <form id="term-form">
                    <input id="term-input" autocomplete="off"/>
                </form>
            </div>
            <div id="terminal-ad">
                <!-- Ezoic - terminal_ad - under_page_title -->
                <div id="ezoic-pub-ad-placeholder-123"> </div>
                <!-- End Ezoic - terminal_ad - under_page_title -->
            </div>
        </div>
    </div>

    <!-- Ezoic - below_terminal - under_page_title -->
    <div id="ezoic-pub-ad-placeholder-114"> </div>
    <!-- End Ezoic - below_terminal - under_page_title -->

    
<p id="footer">© 2023 Rookiex Compilator | <a href="../../student_profile.php">Volver al Perfil</a>
</div>
<div id="sidebar-right-ad">
    <!-- Ezoic - sidebar_right - sidebar -->
    <div id="ezoic-pub-ad-placeholder-136"> </div>
    <!-- End Ezoic - sidebar_right - sidebar -->
    <!-- Ezoic - sidebar_right_bottom - sidebar_bottom -->
    <div id="ezoic-pub-ad-placeholder-137"> </div>
    <!-- End Ezoic - sidebar_right_bottom - sidebar_bottom -->
</div>
</div>




<!-- Save Result modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="downloadResult">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h3 class="modal-title">Resultado Descarga</h3>
            </div>

            <div class="modal-body">
              <form>
              <div class="form-group">
                  <label for="name">Nombre Archivo:</label>
                  <input type="text" class="form-control" id="download_file_name" value="main_output.html"/>
              </div>
              </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="download_output()" data-dismiss="modal">Download</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Delete Editor Tab modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="closeEditorTab">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title" id="close_file_title">Cerrar</h3>
      </div>

        <div class="modal-body">
        <p>Tus cambios se perderan, estas seguro que quieres cerrar el archivo?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" onclick="close_editor_tab()" data-dismiss="modal">Yes</button>
        </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Delete Editor Tab modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="saveEditorTab">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="save_file_title">Guardar</h3>
        </div>

        <div class="modal-body">
            <p>Quieres Guardar el Archivo?</p>
            <form>
            <div class="form-group">
                <label for="name">Nombre Archivo:</label>
                <input type="text" class="form-control" id="code_file_name" value="main.py"/>
            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" onclick="download_code()" data-dismiss="modal">Si</button>
        </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Share modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="shareModal">
  <div class="modal-dialog" role="document" id="share-dialog">
    <div class="modal-content" id="share-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="share_code">Comparte el Codigo</h3>
        </div>

        <div class="modal-body">
            <!-- <p>Do you want to save the file ?</p> -->
            <form>
            <div class="form-group">
                <label for="name">Periodo de Expiracion</label>
                <select class="form-control" id="expiry_select">
                    <option value="1">24 horas</option>
                    <option value="30">1 mes</option>
                    <option selected="" value="180">6 meses</option>
                    <option value="-1">Nunca</option>
                </select>
            </div>
            </form>
        <br/>
        <button type="submit" class="btn btn-primary" onclick="share_code()" data-dismiss="modal" id="share-btn-modal">Share</button>
        </div>
        
        <!-- <div class="modal-footer">
        </div> -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Share modal After -->
<div class="modal fade" tabindex="-1" role="dialog" id="shareModalAfter">
  <div class="modal-dialog" role="document" id="share-dialog-after">
    <div class="modal-content" id="share-content-after">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="share_code">Share the Code</h3>
        </div>

        <div class="modal-body">
            <!-- <p>Do you want to save the file ?</p> -->
            <form>
            <div class="form-group">
                <label for="name">URL:</label><span id="share-copy" onclick="copy_share_url()"><i class="far fa-copy"></i></span>
                <input type="text" class="form-control" id="share_url_box" value="http://localhost:8888/onlineide/code/HoiJqp9nQT" readonly=""/>
            </div>
            </form>
            <div class="addthis_inline_share_toolbox_7qby" id="addthis_share_modal"></div> 
        </div>
        <!-- <div class="modal-footer">
        </div> -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- About Site modal -->
<div class="modal" tabindex="-1" role="dialog" id="aboutSiteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h2 class="modal-title"><strong>Acerca de Rookiex Compilator</strong></h2>
        </div>

        <div class="modal-body abountModalBody">
          <p><a href="index.html" target="_blank">Rookiex Compilator</a> es una herramienta con la puedes practicar tu codigo de Python.</b></p>

          <h3><strong>Atajos de Teclado</strong></h3>
          <ul style="font-size: larger;">
          <li>Correr Codigo - F8</li>
          <li>Compartir Codigo - F9</li>
          <li>Guardar Codigo - F10</li>
          <li>Abrir Paleta de Comandos - F1</li>
          </ul>
          
        </div>
        
        <div class="modal-footer">
          <p> Copyright © Rookiex Compilator 2023</p>
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="col-md-4"></div>
<div class="col-md-4">
    <?php
        $query = mysqli_query($conn, "SELECT * FROM `student` WHERE `stud_id` = '$_SESSION[student]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
    ?>
    <div class="panel panel-default" style="background-color:#000066;" id="panel-margin">
        <div class="panel-heading" style="background-color:#000066;">
            <center><h1 class="panel-title" style="color:#fff;">Perfil del Usuario</h1></center>
        </div>
        <div class="panel-body">
            <h4 style="color:#fff;">Usuario: <label class="pull-right"><?php echo $fetch['stud_no']?></label></h4>
            <h4 style="color:#fff;">Correo: <label class="pull-right"><?php echo $fetch['firstname']?></label></h4>
            <h3 style="color:#fff;">Carga de Archivo</h3>
            <form method="POST" enctype="multipart/form-data" action="../../save_file.php">
                <input type="file" name="file" size="4" style="background-color:#fff;" required="required" />
                <br />
                <input type="hidden" name="stud_no" value="<?php echo $fetch['stud_no']?>"/>
                <button class="btn btn-success btn-sm" name="save"><span class="glyphicon glyphicon-plus"></span> Agregar Archivo</button>
            </form>
            <br style="clear:both;"/>
            <hr style="border-top:1px solid #fff;"/>
            <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal_confirm"><span class="glyphicon glyphicon-log-out"></span> Salir</button>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Sistema</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">¿Estás seguro de que quieres cerrar sesión?</h4></center>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-success" data-dismiss="modal">Cancelar</a>
					<a href="../../logout.php" class="btn btn-danger">Continuar</a>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    ace.require('ace/ext/settings_menu').init(editor);
    var editor_cnt = 1, editor_index = 1, active_editor = 1, editor_session = [];
    var request, init_ts, open_file_name;
    var lang = 'python3';
    default_content = "\
\n\
# Rookiex Compilator\n\
\n\
def sum(a, b):\n\
    return (a + b)\n\
\n\
a = int(input('Enter 1st number: '))\n\
b = int(input('Enter 2nd number: '))\n\
\n\
print(f'Sum of {a} and {b} is {sum(a, b)}')\n\
";
    var prev_result = 'in'; 
    var site_url = "index.html"
    var base_url = "index.html"
    var share_url = base_url;
    var exe_cnt = 0;
    var addthis_share = {
        url: share_url,
        // title: "THE TITLE",
        // description: "THE DESCRIPTION",
        // media: "THE IMAGE"
    }
    var csrf_token_name = 'ci_csrf_token'
    var csrf_token = ''


    var isMobile = window.orientation > -1;
    
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "preventOpenDuplicates": true,
        "maxOpened": 1,
        "onclick": null,
        "showDuration": "100",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        // "showMethod": "show",
        // "hideMethod": "hide"
    };
    
    var instance = Split(['#mi', '#d'], {
        direction: 'vertical',
        sizes: [66, 28],
        gutterSize: 5,
        cursor: 'row-resize',
        minSize: [0, 180],
        onDrag: function() {
            editor.resize();
        },
    });

    function term_expand() {
        var element = document.getElementById('term-expand').innerHTML;
        if (element === '<i class="fas fa-expand-alt fa-lg"></i>' ) {
            instance.setSizes([0, 94]);
            editor.resize();
            document.getElementById('term-expand').innerHTML = '<i class="fas fa-compress-alt fa-lg"></i>'
        } else {
            instance.setSizes([66, 28]);
            editor.resize();
            document.getElementById('term-expand').innerHTML = '<i class="fas fa-expand-alt fa-lg"></i>'
        }
        $('#term-expand').blur();
        $('[data-toggle="tooltip"]').tooltip('hide');
    }

    editor.setOptions({
        enableBasicAutocompletion: true, // the editor completes the statement when you hit Ctrl + Space
        enableLiveAutocompletion: true, // the editor completes the statement while you are typing
        enableSnippets: true,
        showPrintMargin: false, // hides the vertical limiting strip
        fixedWidthGutter: true,
        autoScrollEditorIntoView: true,
        copyWithEmptySelection: true,
        highlightActiveLine: false,
    });

    editor.setTheme("ace/theme/textmate");
    // editor.setTheme("ace/theme/tomorrow_night_bright");
    editor.container.style.lineHeight = 1.5;

    editor_session[0] = ace.createEditSession(default_content, "ace/mode/python");
    editor.setSession(editor_session[0]);
    var active_editor_id = $('#editor-1').children('a');
    var active_file_name = 'main.py';
    var repl_host = get_host();
    var command_list = [];
    var command_index = 0;
    var cur_cmd;
    var hint_glow;

    var y = document.getElementById('editor_footer');
    var output = document.getElementById('output');
    var exec_detail = document.getElementById('output-status');
    var progress_status = document.getElementById('progress-status');
    var display_flag = true;

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
        delay: {show: 750, hide: 50}
    })
    });

    $(function () {
        $('[data-toggle="popover"]').popover({
            delay: { "show": 0, hide: 0 }
        })
    });

    $('.popover-dismiss').popover({
        trigger: 'hover'
    });


    $(".nav-tabs").on("click", "a", function(e) {
        // e.stopPropagation();
        e.preventDefault();
        detail_chk = (e.detail === undefined) ? 1 : e.detail;
        if (!$(this).hasClass('add-editor') && !$(this).children('input').hasClass('thVal') && detail_chk == 1) {
            active_editor = parseInt($(this).parent().attr('id').split('-')[1]);
            active_editor_id = $(this);

            editor.setSession(editor_session[active_editor - 1]);
            active_file_name = $(this).html();
            $(this).tab('show');
            editor.focus();
            update_editor_footer();
            undo_redo_update();
        }
    })
    .on("click", "span", function() {
        close_tab = $(this).parent();
        close_tab.children('a').click();
        $('#close_file_title').text('Close - ' + active_file_name);
        if (editor.getValue() === "") {
            close_editor_tab();
        }
        else {
            $("#closeEditorTab").modal('show');
        }
    });

    $('#redo-editor').attr('disabled', 'disabled');
    $('#undo-editor').attr('disabled', 'disabled');

    $('#rename_file').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        active_editor_id.dblclick();
    });

    $('#undo-editor').click(function(e) {
        editor.session.getUndoManager().undo();
        undo_redo_update();

    });

    $('#redo-editor').click(function(e) {
        editor.session.getUndoManager().redo();
        undo_redo_update();
    });

    editor.getSession().on('change', function() {
        undo_redo_update();
    });

    let theme = localStorage.getItem('theme') !== undefined && localStorage.getItem('theme') !== null ? localStorage.getItem('theme') : 'light'

    if ( theme === 'dark') {
        $('body').addClass('dark');
        document.getElementById('toggle-theme').innerHTML = '<i class="fas fa-sun fa-lg"></i>';
        editor.setTheme("ace/theme/tomorrow_night_bright");
    } else {
        $('body').removeClass('dark');
        document.getElementById('toggle-theme').innerHTML = '<i class="fas fa-moon fa-lg"></i>';
        editor.setTheme("ace/theme/textmate");
    }

    $('#toggle-theme').click(function(e) {
        document.body.classList.toggle('dark');
        if ($('body').hasClass("dark")) {
            editor.setTheme("ace/theme/tomorrow_night_bright");
            document.getElementById('toggle-theme').innerHTML = '<i class="fas fa-sun fa-lg"></i>';
            localStorage.setItem('theme', 'dark');
        } else {
            editor.setTheme("ace/theme/textmate");
            document.getElementById('toggle-theme').innerHTML = '<i class="fas fa-moon fa-lg"></i>';
            localStorage.setItem('theme', 'light');
        }
        $('#toggle-theme').blur();
        $('[data-toggle="tooltip"]').tooltip('hide');
    });

    $('.add-editor').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        editor_cnt += 1;
        editor_index += 1;
        var id = editor_cnt;
        
        active_editor = id;
        editor_session[active_editor - 1] = ace.createEditSession('', "ace/mode/python");
        editor.setSession(editor_session[active_editor - 1]);

        $(this).closest('li').before('<li id="editor-' + id + '"><a data-toggle="tab">Untitled' + id + '.py</a> <span> <i class="fa fa-times"></i></span></li>');
        // $('.nav-tabs li:nth-child(' + id + ') a').click();

        active_editor_id = $(".nav-tabs li").children('a').last();
        active_editor_id.tab('show');
        active_editor_id.dblclick();
        update_editor_footer();
        undo_redo_update();

        editor.selection.on('changeCursor', function(e) {
            update_editor_footer();
        });

        editor.selection.on('changeSelection', function(e) {
            update_editor_footer();
        });

        editor.getSession().on('change', function() {
            undo_redo_update();
        });

    });

    $(document).on('dblclick', '.nav-tabs > li > a', function (event) {
        if($(event.target).attr('class')!="thVal")
            {
                event.stopPropagation();
                event.preventDefault();
                var currentEle = $(this);
                var value = $(this).html();
                if (value.search('<input') === -1) updateVal(currentEle, value);
        }
    });

    editor.focus();
    editor.navigateFileEnd();

    update_editor_footer();

    editor.selection.on('changeCursor', function(e) {
        update_editor_footer();
    });

    editor.selection.on('changeSelection', function(e) {
        update_editor_footer();
    });

    $('.status button').attr('disabled','disabled');
    $('#stop-btn').attr('disabled', 'disabled');

    socket_options = { 
        transports: ["websocket"], 
        'timeout': 3000, 
        'connect timeout': 3000,
        'reconnection': true,
        'reconnectionDelay': 1000,
        'reconnectionDelayMax' : 5000,
        'reconnectionAttempts': 5
    };

    socket_options['query'] = { type : "shell"};

    // ace.config.loadModule("ace/ext/keybinding_menu", function(module) {
    //     module.init(editor);
    // });

    $(document).keyup(function (e) {
        IsCtrl = false;
        IsShift = false;
    }).keydown(function (e) {

        // first capture Ctrl 
        if (e.which == 17) { IsCtrl = true; }

        // now capture Shift 
        if (e.which == 16) { IsShift = true; }

        switch (e.which) {

            // now capture S and if Ctrl is pressed                                                                                                                                                                                          
            // case 75: 
            //     if (IsCtrl) { alert("Ctrl K pressed"); editor.showKeyboardShortcuts();} 
            //     if (IsShift) { alert("Shift R pressed");  } 
            //     e.preventDefault(); 
            //     break;

            // capture F8
            case 119: run_python(); e.preventDefault(); break;
            //F9
            case 120: share_code_modal(); e.preventDefault(); break;
            //F10
            case 121: save_code_modal(); e.preventDefault(); break;

            // capture ESC
            // case 27: stop_python(); e.preventDefault(); break;
        }
    });

    $('#output').on('click', function() {
        $('#term-input').focus();
    });

    window.onbeforeunload=goodbye;

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.html#pubid=ra-5e908e7d111adc12"></script> 


</div><script type='text/javascript' style='display:none;' async>
__ez.queue.addFile('/detroitchicago/edmonton.webp', '/detroitchicago/edmonton.webp?a=a&cb=0&shcb=34', true, ['/detroitchicago/minneapolis.js'], true, false, false, false);
__ez.queue.addFile('/porpoiseant/jellyfish.webp', '/porpoiseant/jellyfish.webp?a=a&cb=0&shcb=34', false, [], true, false, false, false);
</script>

<script>__ez.queue.addFile('tardisrocinante/vitals.js', 'tardisrocinante/vitals5038.js?gcb=0&amp;cb=3', false, ['/detroitchicago/minneapolis.js'], true, false, true, false);</script>
<script type="text/javascript" data-cfasync="false"></script>
<script>var _audins_dom="online_python_com",_audins_did=214055;__ez.queue.addDelayFunc("audins.html","__ez.script.add", "../go.ezodn.com/detroitchicago/audins0d9f.js?cb=195-0");</script><noscript><div style="display:none;"><img src="../pixel.quantserve.com/pixel/p-31iz6hfFutd16865b.gif?labels=Domain.online_python_com,DomainId.214055" border="0" height="1" width="1" alt="Quantcast"/></div></noscript>
<script>__ez.queue.addFile('beardeddragon/drake.js', 'beardeddragon/drake6190.js?gcb=0&amp;cb=4', false, [], true, false, true, false);</script></body>
</html>