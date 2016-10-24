<!DOCTYPE html>
<html  lang="vi-VN">
    <head id="Head">
        <!--*********************************************-->
        <!-- DNN Platform - http://www.dnnsoftware.com   -->
        <!-- Copyright (c) 2002-2015, by DNN Corporation -->
        <!--*********************************************-->
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <title>
            <?php if(isset($title)): ?><?php echo e(ucfirst($title)); ?><?php endif; ?>
        </title>
        <meta id="MetaDescription" name="DESCRIPTION" content="<?php if(isset($description)): ?><?php echo e(ucfirst($description)); ?><?php endif; ?>" />
        <meta id="MetaKeywords" name="KEYWORDS" content="<?php if(isset($keywords)): ?><?php echo e($keywords); ?><?php endif; ?>" />
        <meta id="MetaGenerator" name="GENERATOR" content="DotNetNuke " />
        <meta id="MetaRobots" name="ROBOTS" content="INDEX, FOLLOW" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php if(isset($title)): ?><?php echo e(ucfirst($title)); ?><?php endif; ?>"/>
        <meta property="og:image" content="<?php if(isset($image)): ?><?php echo e(asset($image)); ?><?php endif; ?>"/>
        <meta property="og:site_name" content="David Walsh Blog"/>
        <meta property="og:description" content="<?php if(isset($description)): ?><?php echo e(ucfirst($description)); ?><?php endif; ?>" graph=" objects, allowing a certain level of customization over how information is carried over from a non-Facebook website to Facebook when a page is 'recommended', 'liked', or just generally shared."/>
        
        <link href="<?php echo e(asset('assets/frontend/css/default.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/ie.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/skin.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/container.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/portal.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/dnnStandardMenu.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/dnnMegaMenu.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/dnnMobileMenu.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/home.css')); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo e(asset('assets/frontend/css/NewsModule.css')); ?>" type="text/css" rel="stylesheet"/>
        <script src="<?php echo e(asset('assets/frontend/js/jquery.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery-ui.js')); ?>" type="text/javascript"></script>     
        <link href="<?php echo e(asset('assets/frontend/lib/font-awesome-4.6.3/css/font-awesome.min.css')); ?>" type="text/css" rel="stylesheet"/>
        <link id="ProductHomeTab.css" href="<?php echo e(asset('assets/frontend/css/ProductHomeTab.css')); ?>" rel="stylesheet" type="text/css" />
        <script id="responsive-tabs.js" src="<?php echo e(asset('assets/frontend/js/responsive-tabs.js')); ?>" type="text/javascript"></script><script id="jssor.js" src="<?php echo e(asset('assets/frontend/js/jssor.js')); ?>" type="text/javascript"></script><script id="jssor.slider.js" src="<?php echo e(asset('assets/frontend/js/jssor.slider.js')); ?>" type="text/javascript"></script><script id="ProductHomeTab.js" src="<?php echo e(asset('assets/frontend/js/ProductHomeTab.js')); ?>" type="text/javascript"></script>
        <link id="ShoppingCart.css" href="<?php echo e(asset('assets/frontend/css/ShoppingCart.css')); ?>" rel="stylesheet" type="text/css" />
        <link id="Testimonial.css" href="<?php echo e(asset('assets/frontend/css/Testimonial.css')); ?>" rel="stylesheet" type="text/css" />
        <link id="ConferenceSideBar" href="<?php echo e(asset('assets/frontend/css/ConferenceSideBar.css')); ?>" rel="stylesheet" type="text/css" />
        <link id="GoogleSearch" href="<?php echo e(asset('assets/frontend/css/Documentation.css')); ?>" rel="stylesheet" type="text/css" />
        <link rel='SHORTCUT ICON' href="<?php echo e(asset('assets/frontend/img/favicon.ico')); ?>" type='image/x-icon' />
        <meta name="viewport" content="width=width=device-width, initial-scale=1" />
        <link href="<?php echo e(asset('assets/frontend/css/Telerik.Web.UI.WebResource.css')); ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/frontend/css/style.css')); ?>" type="text/css" rel="stylesheet" />
    </head>
    <body id="Body">
            <div class="aspNetHidden">
                <input type="hidden" name="StylesheetManager_TSSM" id="StylesheetManager_TSSM" value="" />
                <input type="hidden" name="ScriptManager_TSM" id="ScriptManager_TSM" value="" />
                <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="I8zhpbUzP5eqrvm6OhzwzDuIWY+3+X1rDGCAamuc0ATaAYR6Q+siUJhS/blxkYJomGDUIKEgXBrojAqgFUPDNQ8PFWytakpvE5ahiqwk0R/50lhI+XaedoIDRqvM/dnwuck4/PhAz4BJKYzcGeSlJiKmpVhddDzDPUxRLhj+SFFhVdR9IYhsPWp8b7G0/o9sv8QhOqdPhV5oSv/jLOp0n2yxQ1QfgnMxkPp9j6MmADfCdNbXl295ZbNdB6cpFZWLohWKsEjGlGUNUhx8wiqUcOz8hLmbqWlJca7y5pk942VWI19vlSs+7SJWrP/NEieNPKZZ0iv3Ox+QOupiqkkdY2+jbVTi7UgHE1x3TIGPDfgxQnn5fZFi3MyKbhXThW1NMAPf94rHZ7wGAO1qBWbgrNO4okCxC58Igp6ld4VSI5uPgDDUt40wldkT+UU6/MbqVF1bnb6QZDAhu8vZqnpPdqoEnNfkPo/GtBGPzRZj1PQUIJkWdsgF7fAdO2IYOc5nnvW/QMkeK5KQs41nDSsJu98uLAzSNJeWXUMb8SMjz6qQt86TngDbVAvI/aF3TCEo2ocUwQCSlOHHW0zDxNk0YVDZykERfDejLZiArxkup/69b2C4vjVEBLZLL21SMfnMphhZXN3NPT6VlBNdYDTTzeSTH2IkFP6ICJ24eUiK01n98R69SiPMiA1ov3CM5TJbpEiXGOedufnNvcUKH+K5DwN3rDv2ov2JF0upWlLbHY8SJ4AmgjMvFcmUjBw9dC8tOPZMWldSK9v029W0jV26Z8dsOc0SotInEDCiHl6vK3AqscbaUCPN6Er8m57VSaH0L/g7Z3Ngp019Soe8c1ABFxjW7zh/elPo3dI4lV6rR+oaSmiDmxJwW+LcrOnHVfAyA+FhK94rs++LyfUCsxlfORusBFRyKEgU2iabYd6gr4iiVtH120wpUicx++WwIrCB3+MqcyOB6dRu+Ck1gL1xHsS10wtfZkYIv/m36sHEI0421y1nxlTCC/FdoyANz5grBLmsevlAIVyB6+nL4fKxpEgpGjkj17xYRMBhCXWhdFjLIT5A/ba8J3nG++GIt96msKjmAGw6xMVJq8DQz8wPgmT6Ya97kjvY1mTjUx6oBdh0wrx9xMp/mOIzHnKwPN6lx8g0Eaays5NIvhbDw7ONvNe78ImSeOw1FVUzCAlbxRoIDXoC/8Co/JBztbUjuy5xc9URUwq9QD6S2mdFPgjmAD1y7/uJ8v37S6+FzOPqOasX1I8/bXVEjbM8K4RDie7zUtzxIIEoKKPiP07rGaqcM2HLNvwTdWOrieJzBFBOhq2DldiJj8sLH/MJ55CGrU1Qx92QC/Gys1SA7ibmTGKwPu9bVQNQ08FfV6lBZnjzcAa4w6TQ6ije+OIKcqIjJxVtLxM4m//kbDA0X+UWx1DEp9ccv9s64rgUxYNbECVovvoD6hZGMoHBaJX7BnghlHgGSbOqWydZv78hwgubvyeBfsTJLQrVHpHdiCDrXKkPA9hWGdMetWT0U7fXHw9kk2EOEro+UWZz2BDEjEICRJdApPBLW5xV7cKhWNx3d2+E3W1rdAlwJc/Sua73zVeoCvWa5roHQqDnD8vPJGpG" />
            </div>
            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['Form'];
                if (!theForm) {
                    theForm = document.Form;
                }
                function __doPostBack(eventTarget, eventArgument) {
                    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                        theForm.__EVENTTARGET.value = eventTarget;
                        theForm.__EVENTARGUMENT.value = eventArgument;
                        theForm.submit();
                    }
                }
                //]]>
            </script>
            <script src="<?php echo e(asset('assets/frontend/js/WebResource.JS')); ?>" type="text/javascript"></script>
            <script type="text/javascript">
                //<![CDATA[
                var __cultureInfo = {"name":"vi-VN","numberFormat":{"CurrencyDecimalDigits":2,"CurrencyDecimalSeparator":",","IsReadOnly":false,"CurrencyGroupSizes":[3],"NumberGroupSizes":[3],"PercentGroupSizes":[3],"CurrencyGroupSeparator":".","CurrencySymbol":"₫","NaNSymbol":"NaN","CurrencyNegativePattern":8,"NumberNegativePattern":1,"PercentPositivePattern":0,"PercentNegativePattern":0,"NegativeInfinitySymbol":"-Infinity","NegativeSign":"-","NumberDecimalDigits":2,"NumberDecimalSeparator":",","NumberGroupSeparator":".","CurrencyPositivePattern":3,"PositiveInfinitySymbol":"Infinity","PositiveSign":"+","PercentDecimalDigits":2,"PercentDecimalSeparator":",","PercentGroupSeparator":".","PercentSymbol":"%","PerMilleSymbol":"‰","NativeDigits":["0","1","2","3","4","5","6","7","8","9"],"DigitSubstitution":1},"dateTimeFormat":{"AMDesignator":"SA","Calendar":{"MinSupportedDateTime":"\/Date(-62135596800000)\/","MaxSupportedDateTime":"\/Date(253402275599999)\/","AlgorithmType":1,"CalendarType":1,"Eras":[1],"TwoDigitYearMax":2029,"IsReadOnly":false},"DateSeparator":"/","FirstDayOfWeek":1,"CalendarWeekRule":0,"FullDateTimePattern":"dd MMMM yyyy h:mm:ss tt","LongDatePattern":"dd MMMM yyyy","LongTimePattern":"h:mm:ss tt","MonthDayPattern":"dd MMMM","PMDesignator":"CH","RFC1123Pattern":"ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","ShortDatePattern":"dd/MM/yyyy","ShortTimePattern":"h:mm tt","SortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","TimeSeparator":":","UniversalSortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","YearMonthPattern":"MMMM yyyy","AbbreviatedDayNames":["CN","Hai","Ba","Tư","Năm","Sáu","Bảy"],"ShortestDayNames":["C","H","B","T","N","S","B"],"DayNames":["Chủ Nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy"],"AbbreviatedMonthNames":["Thg1","Thg2","Thg3","Thg4","Thg5","Thg6","Thg7","Thg8","Thg9","Thg10","Thg11","Thg12",""],"MonthNames":["Tháng Giêng","Tháng Hai","Tháng Ba","Tháng Tư","Tháng Năm","Tháng Sáu","Tháng Bảy","Tháng Tám","Tháng Chín","Tháng Mười","Tháng Mười Một","Tháng Mười Hai",""],"IsReadOnly":false,"NativeCalendarName":"Dương Lịch","AbbreviatedMonthGenitiveNames":["Thg1","Thg2","Thg3","Thg4","Thg5","Thg6","Thg7","Thg8","Thg9","Thg10","Thg11","Thg12",""],"MonthGenitiveNames":["Tháng Giêng","Tháng Hai","Tháng Ba","Tháng Tư","Tháng Năm","Tháng Sáu","Tháng Bảy","Tháng Tám","Tháng Chín","Tháng Mười","Tháng Mười Một","Tháng Mười Hai",""]},"eras":[1,"A.D.",null,0]};//]]>
            </script>
            <script src="<?php echo e(asset('assets/frontend/js/Telerik.Web.UI.WebResource.JS')); ?>" type="text/javascript"></script>
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
                <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
                <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="vc0jkp4vl2D1eKnW8gnfJnO4Ter/awhIzNBoQb27yQNRpwh9oT+CA+Zw92xnxQSxwpY4cPBGS7fknqPnT9OV5FhOdSdUh49pLiPzIhXynkMZwUdbzMUREKHCw5mKJUnwF5nZDnYjM2P2gdSEo/f7WS8J+X4=" />
            </div>
            <script src="<?php echo e(asset('assets/frontend/js/dnn.modalpopup.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/bootstrap.min.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.hoverIntent.min.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/dnnStandardMenu.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/dnnMegaMenu.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/dnnMobileMenu.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.nivo.slider.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.flexslider.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/unslider.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/lightbox-2.6.min.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/isotope.min.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.quovolver.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.visible.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/owl.carousel.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.scrolltofixed.min.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/jquery.fittext.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/custom.js')); ?>" type="text/javascript"></script><script src="<?php echo e(asset('assets/frontend/js/dnncore.js')); ?>" type="text/javascript"></script><script type="text/javascript">
                //<![CDATA[
                Sys.WebForms.PageRequestManager._initialize('ScriptManager', 'Form', ['tdnn$ctr653$ViewMISA.GoolgeSearch$dnn$ctr653$ViewMISA.GoolgeSearch$ctl00Panel',''], [], [], 90, '');
                //]]>
            </script>
            <div id="ControlPanelWrapper">
            </div>
            <?php echo App\Http\Controllers\frontend\BlockController::header_body(); ?>

            <?php echo $__env->yieldContent('content'); ?>
            <?php echo App\Http\Controllers\frontend\BlockController::footer(); ?>

            <script type="text/javascript">
                $(".resize-text").fitText();
            </script>
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//bootstrap/js/bootstrap.min.js?cdv=313)-->
            <!--CDF(Javascript|/Resources/Shared/Scripts/jquery/jquery.hoverIntent.min.js?cdv=313)-->
            <!--CDF(Css|/Portals/_default/Skins/Creative-BleuDeFrance//dnnStandardMenu/dnnStandardMenu.css?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//dnnStandardMenu/dnnStandardMenu.js?cdv=313)-->
            <!--CDF(Css|/Portals/_default/Skins/Creative-BleuDeFrance//dnnMegaMenu/dnnMegaMenu.css?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//dnnMegaMenu/dnnMegaMenu.js?cdv=313)-->
            <!--CDF(Css|/Portals/_default/Skins/Creative-BleuDeFrance//dnnMobileMenu/dnnMobileMenu.css?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//dnnMobileMenu/dnnMobileMenu.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.nivo.slider.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.flexslider.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/unslider.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/lightbox-2.6.min.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/isotope.min.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.quovolver.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.visible.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/owl.carousel.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.scrolltofixed.min.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/jquery.fittext.js?cdv=313)-->
            <!--CDF(Javascript|/Portals/_default/Skins/Creative-BleuDeFrance//js/custom.js?cdv=313)-->
            <input name="ScrollTop" type="hidden" id="ScrollTop" />
            <input name="__dnnVariable" type="hidden" id="__dnnVariable" autocomplete="off" />
            <script type="text/javascript">
                //<![CDATA[
                ;(function() {
                                        function loadHandler() {
                                            var hf = $get('StylesheetManager_TSSM');
                                            if (!hf._RSSM_init) { hf._RSSM_init = true; hf.value = ''; }
                                            hf.value += ';Telerik.Web.UI, Version=2013.2.717.40, Culture=neutral, PublicKeyToken=121fae78165ba3d4:vi-VN:a713c6a1-0827-4380-88eb-63855ca4c2d9:aac1aeb7:c73cf106';
                                            Sys.Application.remove_load(loadHandler);
                                        };
                                        Sys.Application.add_load(loadHandler);
                                    })();Sys.Application.add_init(function() {
                    $create(Telerik.Web.UI.RadTextBox, {"_displayText":"Tìm kiếm...","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027dnn$ctr653$ViewMISA.GoolgeSearch$txtSearch\\\u0027,\\\u0027\\\u0027)\", 0)","_skin":"Default","_validationText":"","clientStateFieldID":"dnn_ctr653_ViewMISA.GoolgeSearch_txtSearch_ClientState","emptyMessage":"Tìm kiếm...","enabled":true,"styles":{HoveredStyle: ["width:260px;", "riTextBox riHover NormalTextBox"],InvalidStyle: ["width:260px;", "riTextBox riError NormalTextBox"],DisabledStyle: ["width:260px;", "riTextBox riDisabled NormalTextBox"],FocusedStyle: ["width:260px;", "riTextBox riFocused NormalTextBox"],EmptyMessageStyle: ["width:260px;", "riTextBox riEmpty NormalTextBox"],ReadOnlyStyle: ["width:260px;", "riTextBox riRead NormalTextBox"],EnabledStyle: ["width:260px;", "riTextBox riEnabled NormalTextBox"]}}, {"keyPress":GoogleSearch.KeyPressSearch}, null, $get("dnn_ctr653_ViewMISA.GoolgeSearch_txtSearch"));
                });
                Sys.Application.add_init(function() {
                    $create(Telerik.Web.UI.RadAjaxPanel, {"clientEvents":{OnRequestStart:"",OnResponseEnd:""},"enableAJAX":true,"enableHistory":false,"links":[],"loadingPanelID":"","styles":[],"uniqueID":"dnn$ctr653$ViewMISA.GoolgeSearch$ctl00"}, null, null, $get("dnn_ctr653_ViewMISA.GoolgeSearch_ctl00"));
                });
                //]]>
            </script>
        
        <!--CDF(Javascript|/js/dnncore.js?cdv=313)--><!--CDF(Css|/Portals/0/home.css?cdv=313)--><!--CDF(Javascript|/js/dnn.modalpopup.js?cdv=313)--><!--CDF(Css|/Resources/Shared/stylesheets/dnndefault/7.0.0/default.css?cdv=313)--><!--CDF(Css|/Portals/_default/ie.css?cdv=313)--><!--CDF(Css|/Portals/_default/Skins/Creative-BleuDeFrance/skin.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/DesktopModules/MISACMS/Contents/NewsModule.css?cdv=313)--><!--CDF(Css|/Portals/_default/Containers/Creative-BleuDeFrance/container.css?cdv=313)--><!--CDF(Css|/Portals/0/portal.css?cdv=313)--><!--CDF(Javascript|/Resources/libraries/jQuery-UI/01_11_03/jquery-ui.js?cdv=313)--><!--CDF(Javascript|/Resources/libraries/jQuery/01_09_01/jquery.js?cdv=313)-->
        <div class="master-contact">
            <!-- <div class="box-contact-purchase">
                <div class="contact-purchase"></div>
            </div> -->
            <!-- <div class="box-online-purchase">
                <a href="http://www.misa.com.vn/Mua-hang-truc-tuyen">
                <div class="online-purchase"></div>
                
                    </a>
                </div> -->
            <div class="box-contact-detail" style="display:none">
                <div class="bg"></div>
                <div class="content-cls">
                    <h3>CÔNG TY CP GIẢI PHÁP CÔNG NGHỆ NIDI</h3>
                    <p>Trung tâm Kinh doanh và Dịch vụ khách hàng</p>
                    <p>CT10 , Khu Đô Thị Việt Hưng , phương Giang Biên , Quận Long Biên , Hà Nội</p>
                    <p><span>Điện thoại</span> : 04.66757396 - Fax: 04.36830717</p>
                    <p><span>Hotline</span> : 1900 0033</p>
                    <p><span>Email</span> : contact@nidi.com.vn</p>
                    <p><span>Website</span> : <a href="http://www.nidi.com.vn">http://www.nidi.com.vn </a></p>
                <style type="text/css">
                    .content-cls p span{
                        font-weight: bold;
                    }
                    .content-cls h3{
                        color: #009DCC;
                    }
                </style>

                </div>
            </div>
        </div>
        <div class="mobile-contact">
            <div class="contact-icon"></div>
        </div>
        <div class="mobile-contact-modal modal fade" id="album_detai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Liên hệ mua hàng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-contact-detail-mobile"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Facebook Pixel Code --> 
        <!-- <script type="text/javascript" src="www.googleadservices.com/pagead/conversion.js">
            </script> -->
        <script type="text/javascript" src="<?php echo e(asset('assets/frontend/js/MISAContact.js')); ?>"></script>
    </body>
</html>