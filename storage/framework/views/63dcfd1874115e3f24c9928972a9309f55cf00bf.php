<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>

	<link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>" type="image/png" />
<!-- <meta charset="utf-8" /> -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
<meta http-equiv="content-language" content="vi">

<title>
	<?php if(isset($title)): ?> <?php echo e(ucfirst($title)); ?>  <?php endif; ?>
</title>


<meta name="description" content="<?php if(isset($description)): ?> <?php echo e($description); ?>  <?php endif; ?>">
<meta name="keywords" content="<?php if(isset($keywords)): ?> <?php echo e($keywords); ?>  <?php endif; ?>">
<meta name="robots" content="noodp,index,follow">
<meta name="revisit-after" content="1 days">
<meta name="language" content="vietnamese">
<link rel="canonical" href="healthy-food-1_bizwebvietnam_default.html" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
<meta name="theme-color" content="#fff">
<meta name="msapplication-TileColor" content="#fff">

	<!-- Product meta ================================================== -->
	


  <meta property="og:type" content="website" />
  <meta property="og:title" content="Healthy-Food" />
  
    <meta property="og:image" content="<?php echo e(asset('assets/img/logo.png')); ?>" />
    
  



<meta property="og:url" content="<?php echo e(asset('/')); ?>" />
<meta property="og:site_name" content="Healthy-Food" />
	<!-- shop-asset -->
<!-- Fonts START -->



<!-- Fonts END -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href='<?php echo e(asset("assets/frontend/css/jquery.fancybox.css")); ?>' rel='stylesheet' type='text/css' />



<link rel="stylesheet" href="<?php echo e(asset('assets/frontend/lib/font-awesome-4.6.3/css/font-awesome.min.css')); ?>">


<link href='<?php echo e(asset("assets/frontend/css/jgrowl.css")); ?>' rel='stylesheet' type='text/css' />

<link href='<?php echo e(asset("assets/frontend/css/style.css")); ?>' rel='stylesheet' type='text/css' />
<link href='<?php echo e(asset("assets/frontend/css/healthy-food.css")); ?>' rel='stylesheet' type='text/css' />

<link href='<?php echo e(asset("assets/frontend/css/dark.css")); ?>' rel='stylesheet' type='text/css' />
<link href='<?php echo e(asset("assets/frontend/css/responsive.css")); ?>' rel='stylesheet' type='text/css' />
<!-- Egany custom style -->
<link href='<?php echo e(asset("assets/frontend/css/custom_style.css")); ?>' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/lib/slick-1.6.0/slick/slick.js')); ?>">
<link href='<?php echo e(asset("assets/frontend/lib/slick-1.6.0/slick/slick-theme.css")); ?>' rel='stylesheet' type='text/css' />

<script src='<?php echo e(asset("assets/frontend/js/jquery-2.1.3.min.js")); ?>' type='text/javascript'></script>
<script src='<?php echo e(asset("assets/frontend/js/jssor.slider-21.1.5.mini.js")); ?>' type='text/javascript'></script>
<script>
    jQuery(document).ready(function ($) {
        
        var jssor_1_SlideoTransitions = [
          [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
          [{b:1900,d:2000,x:-379,e:{x:7}}],
          [{b:1900,d:2000,x:-379,e:{x:7}}],
          [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
        ];
        
        var jssor_1_options = {
          $AutoPlay: true,
          $SlideDuration: 800,
          $SlideEasing: $Jease$.$OutQuint,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };
        
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>

<style>
    
    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background: url('assets/frontend/img/b05.png') no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
    .jssorb05 .av { background-position: -67px -7px; }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

    /* jssor slider arrow navigator skin 22 css */
    /*
    .jssora22l                  (normal)
    .jssora22r                  (normal)
    .jssora22l:hover            (normal mouseover)
    .jssora22r:hover            (normal mouseover)
    .jssora22l.jssora22ldn      (mousedown)
    .jssora22r.jssora22rdn      (mousedown)
    */
    .jssora22l, .jssora22r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 58px;
        cursor: pointer;
        background: url('assets/frontend/img/a22.png') center center no-repeat;
        overflow: hidden;
    }
    .jssora22l { background-position: -10px -31px; }
    .jssora22r { background-position: -70px -31px; }
    .jssora22l:hover { background-position: -130px -31px; }
    .jssora22r:hover { background-position: -190px -31px; }
    .jssora22l.jssora22ldn { background-position: -250px -31px; }
    .jssora22r.jssora22rdn { background-position: -310px -31px; }
</style>
	<script>
var Bizweb = Bizweb || {};
Bizweb.store = 'healthy-food-1.bizwebvietnam.net';
Bizweb.theme = {"id":138006,"name":"Healthy_BW_v1.0_20160725","role":"main","previewable":true,"processing":false,"created_on":"2016-07-25T11:32:28Z","modified_on":"2016-07-25T11:32:46Z"}
Bizweb.template = 'index';
</script>

                <script>
                //<![CDATA[
                      (function() {
                        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                        s.src = '//bizweb.dktcdn.net/assets/themes_support/bizweb_stats.js?v=8';
                        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
                      })();

                //]]>
                </script>
<!-- <noscript><iframe height='0' width='0' style='display:none;visibility:hidden' src='https://healthy-food-1.bizwebvietnam.net/visit/record.gif?p=%2f&amp;r=https%3a%2f%2fthemes.bizweb.vn%2fdemo%2fega-healthy-food&amp;s=owduuerhthkiptu4gxvptcxa'></iframe></noscript>
 -->
<script>
(function() {
function asyncLoad() {
var urls = [];
for (var i = 0; i < urls.length; i++) {
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = urls[i];
s.src = urls[i];
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);
}
}
window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
})();
</script>

<script type='text/javascript'>
(function() {
var log = document.createElement('script'); log.type = 'text/javascript'; log.async = true;
log.src = '//stats.bizweb.vn/delivery/93224.js?lang=vi';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(log, s);
})();
</script>

<!-- Google Tag Manager
<!-- <noscript>
<iframe src='https://www.googletagmanager.com/ns.html?id=GTM-MS77Z9' height='0' width='0' style='display:none;visibility:hidden'></iframe>
</noscript> -->
<script>
// (function (w, d, s, l, i) {
// w[l] = w[l] || []; w[l].push({
// 'gtm.start':
// new Date().getTime(), event: 'gtm.js'
// }); var f = d.getElementsByTagName(s)[0],
// j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
// '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
// })(window, document, 'script', 'dataLayer', 'GTM-MS77Z9');
</script>
<!-- End Google Tag Manager -->



</head>

<body class="stretched no-transition body_index tech_store" >
	
	<style>
	@media (max-width: 991px) {
		#menu-toggle {
			top: 15px;
			color: #fff;
			margin-left: 285px;
			border: none;
			font-size: 20px;
			background-color: #3a8c14;
			width: 45px;
			height: 45px;
			line-height: 45px;
			font-size: 30px;
			padding: 0;
			text-align: center;
			border-radius: 0;
		}
		
		#menu-toggle.toggled {
			display: none;	
		}

		#menu_xs,
		#menu-toggle {
			position:fixed;
			z-index: 300;
			left: -275px;
			transition: left 0.4s ease;
		}
		#menu_xs {
			width: 275px;
			height: 100%;
			background: #fff;
		}
		.sidebar-nav {
			width: 100%;
			margin: 0;
			overflow-y: scroll;
			height: 100%;
		}
		.sidebar-nav li {
			padding: 10px 0 10px 10px;
			font-size: 1em;
			border-bottom: 1px solid #f4f4f4;
		}
		.sidebar-nav li a {
			color: #555;
		}
		.sidebar-nav li.current > a {
			color: #3a8c14;
		}

		#menu_xs ul a span {
			/*
			float: right;
			text-align:right;
			padding-right: 15px;
			font-size: 1.1em;
			width:25%;*/
		}
		#menu_xs ul.sidebar-nav li ul {
			display: none;
			list-style: none;
		}
		#top-search-sm form {
			width: 100%;
			padding: 10px 10px 5px 0;
			margin-bottom: 15px;
		}
		#top-search-sm .form-control {
			width: 100%;
			height: 40px;
		}
		.body_overlay {
			position: fixed;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.6);
			z-index: 299;
			visibility: hidden;
			opacity: 0;
			transition: visibility 0.4s ease, opacity 0.4s ease;
		}
		.body_overlay.toggled {
			visibility: visible;
			opacity: 1;
		}
		#menu-toggle.toggled,
		#menu_xs.toggled {
			left: 0;
		}
		#wrapper {
			transition: all 0.4s;
		}
		#wrapper.toggled {
			margin-left: 275px;
		}
		body.toggled{
			overflow-y: hidden;
		}
	}
	@media (max-width: 767px) {
		#menu-toggle {
			left: -275px;
			top: 25px;
			width: 30px;
			height: 30px;
			line-height: 30px;
			font-size: 22px;
		}
	}
</style>
<div class='body_overlay'></div>
<!-- /#sidebar-wrapper -->
<a href="javascript:void(0)" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"><i class='fa fa-bars'></i></a>
<!-- Page Content -->
<div id="menu_xs" class='hidden-lg hidden-md'>
	 



	<!-- Mobile Nav -->
	<div class="drawer__header">
		<div class="drawer__title h3">
			<ul>				
				
				<li class="">
					<a href="account/login.htm">Đăng nhập</a>
				</li>
				<li class="">
					<a href="account/register.htm">Đăng ký</a>
				</li>
				
			</ul>
		</div>
		<div class="drawer__close js-drawer-close">
			<button type="button" class="icon-fallback-text">
				<span class="fa fa-close"></span>
				<span class="fallback-text">Thoát</span>
			</button>
		</div>
	</div>
	<!-- begin mobile-nav -->
	<ul class="mobile-nav">
		
				
		<li class="mobile-nav__item current">
			<a href="<?php echo e(route('home')); ?>" class="mobile-nav__link">
				<span>Trang chủ</span>
			</a>
		</li>
		
		
		<?php echo App\Http\Helpers\AdminHelper::menu_mobi($menu_header,0); ?>		
		
		
			<!-- normal sub menu -->
		<!-- <li class="mobile-nav__item ">
			<div class="mobile-nav__has-sublist">
				<a href="tin-tuc.htm" class="mobile-nav__link">
					<span>Chuyên mục khỏe đẹp</span>
				</a>
				<div class="mobile-nav__toggle">
					<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
						<span class="fa fa-angle-right fa-lg"></span>
					</button>
					<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
						<span class="fa fa-angle-right fa-lg fa-rotate-90"></span>
					</button>
				</div>
			</div>

			<ul class="mobile-nav__sublist">
				
				
				<li class="mobile-nav__item ">
					<a href="healthy-food-1_bizwebvietnam_default.html#" class="mobile-nav__link">
						<span>Làm đẹp</span>
					</a>
				</li>
				
				
				
				<li class="mobile-nav__item ">
					<a href="healthy-food-1_bizwebvietnam_default.html#" class="mobile-nav__link">
						<span>Kiến thức khỏe đẹp</span>
					</a>
				</li>
				
				
				
				<li class="mobile-nav__item ">
					<a href="healthy-food-1_bizwebvietnam_default.html#" class="mobile-nav__link">
						<span>Mẹo hay sức khỏe</span>
					</a>
				</li>
				
				
				
				<li class="mobile-nav__item ">
					<a href="healthy-food-1_bizwebvietnam_default.html#" class="mobile-nav__link">
						<span>Bài tập Yoga</span>
					</a>
				</li>
				
				
			</ul>
		</li> -->
		<!-- end normal sub menu -->
		
		
		
				
		
			
		
		
				
		<li class="mobile-nav__item ">
			<a href="<?php echo e(route('contact')); ?>" class="mobile-nav__link">
				<span>Liên hệ</span>
			</a>
		</li>
		
		
		<li class="mobile-nav__item phone-mobile">
			<a href="tel:19000000 ">
				<p>Hotline: <strong>0462.971.971 </strong></p>
			</a>
		</li>
	</ul>
	<!-- End Mobile Nav -->
</div>



	<!-- Document Wrapper
============================================= -->
	<div id="wrapper" class="clearfix">
		
<div id="top-bar" class="">
	<div class="container clearfix">

		<div class="col-md-5 noleftpadding nobottommargin hidden-xs hidden-sm">
			<p class="nobottommargin">
				<strong><i class='fa fa-phone'></i>
					<a href='tel:123456789'>0462.971.971</a>
				</strong>
				<strong><i class='fa fa-envelope'></i> 
					<a href='mailto:hotro@nhanong24h.com'>hotro@nhanong24h.com</a>
				</strong>
			</p>
		</div>

		<div class="col-md-7 norightpadding nobottommargin top_link_wrapper">

			<!-- Top Links
============================================= -->
			<div class="top-links pull-right">
				<ul>

					<?php foreach($menu_top as $val): ?>
					<li><a href="<?php if(empty($val->cursor)): ?> javascript:void(0) <?php else: ?> <?php echo e(route('menu',$val->alias)); ?> <?php endif; ?>"><?php echo e(ucfirst($val->name)); ?></a></li>
					<?php endforeach; ?>
					
					
					
					
					

				</ul>
			</div><!-- .top-links end -->

		</div>

	</div>

</div>
 
		<!-- Header
============================================= -->
		<header id="header" class="style_1">
	<div id="header-wrap">
		<div class="container clearfix">
			<div class="col-sm-3 col-sm-push-1 col-md-push-0 col-xs-12 header_item">
				<!-- Logo
============================================= -->

<div id="logo">
	<a href="<?php echo e(route('home')); ?>" class="standard-logo" data-dark-logo="//bizweb.dktcdn.net/100/093/224/themes/138006/assets/logo.png?1473844469738"><img src="<?php echo e(asset('assets/frontend/img/logo.png')); ?>" alt="Healthy-Food"></a>
	<a href="<?php echo e(route('home')); ?>" class="retina-logo" data-dark-logo="//bizweb.dktcdn.net/100/093/224/themes/138006/assets/logo.png?1473844469738"><img src="<?php echo e(asset('assets/frontend/img/logo.png')); ?>" alt="Healthy-Food"></a>
</div><!-- #logo end -->

				<!-- fix menu -->
				
<div class="grid__item one-quarter shop-by-collections medium-down--hide">
<?php
	$product_category_max = DB::table('product_category')->where(['fk_parentid' => 0,'status' => 1])->orderBy('order','desc')->orderBy('id','desc')->select('id','name','alias')->get();
?>
	<div class="sidebar-collections">
		<div class="sdcollections-title sb-title">
			<i class="fa fa-list"></i>
			<span>DANH MỤC SẢN PHẨM </span>
		</div>
		<div class="sdcollections-content">
			<ul class="sdcollections-list">
				<?php foreach($product_category_max as $val): ?>  
				<?php
					$category_child_lv2 = DB::table('product_category')->where(['status' => 1 , 'fk_parentid' => $val->id])->orderBy('order','desc')->orderBy('id','desc')->select('name','alias')->get();
					$ids = App\Http\Helpers\AdminHelper::child_id($product_category_all,$val->id);
							$ids[] = $val->id;
		    
					$product = DB::table('product')->whereIn('fk_catid',$ids)->where('status' , 1)->orderBy('id','desc')->select('name','image','alias')->first();
				?>
				<li class="sdc-element">
					<a href="<?php echo e(route('product_category',$val->alias)); ?>" class="site-nav__link">
						<div class="element-main">
							<div class="collection-icon icons-all">
							</div>
							<div class="collection-area have-icons">
								<div class="collection-name">
									<?php echo e(ucfirst($val->name)); ?>

								</div>
							</div>
						</div>
						<span class="icon icon-arrow-right"></span>
					</a>
					<?php if($category_child_lv2): ?>
					<ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1" style="overflow:inherit; height:auto">
						<li class="nav-links nav-links01 grid__item large--one-half">
							<ul>
								<li class="list-title">Danh mục con</li>
								 
								<?php foreach($category_child_lv2 as $val2): ?>
								<li class="list-unstyled nav-sub-mega">
									<i class="fa fa-angle-right fa-1"> </i> <a href="<?php echo e(route('product_category',$val2->alias)); ?>"><?php echo e(ucfirst($val2->name)); ?></a>
								</li> 
								<?php endforeach; ?> 
								
								
							</ul>
						</li>
						<?php if($product): ?>
						<li class="grid__item large--one-half">
							<ul>
								<li class="list-title">Mới nhất </li>
								<li class="list-product">
									
									<div class="list-product-image">
										<a href="vong-lac-giam-eo-massa-hoop.htm"><img src="<?php echo e(asset($product->image)); ?>"></a>
									</div>
									<div class="list-product-name"><?php echo e(ucfirst($product->name)); ?></div>
									<div class="list-product-link"><a href="<?php echo e(route('product',$product->alias)); ?>">>> Xem chi tiết</a></div>
									 
								</li>
							</ul>
						</li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>
					
				</li>
				<?php endforeach; ?>
				
				
				  
				
				 
				 
				 
				 
				
				 
				
			</ul>
		</div>
	</div>
</div>
 
				
				<!-- end fix menu -->
			</div>
			<div class="pull-right col-sm-6 col-sm-push-1 col-md-push-0 hidden-xs header_item">
				<div class="header_search">

					<form method="post" action="<?php echo e(route('search.post')); ?>">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<input type="search" name="key" value="<?php if(isset($key)): ?><?php echo e($key); ?><?php endif; ?>" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
						<span class="input-group-btn">
							<button class="btn icon-fallback-text">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</form>

					

				</div>
			</div>
			<!-- <div class="col-sm-2 col-sm-push-1 col-md-3 col-md-push-0 header_item">
				<ul class="link-list">
					
					<li class="header-account hidden-xs hidden-sm">    
						<a href="https://healthy-food-1.bizwebvietnam.net/account" id="login_link">
							<i class="fa fa-user"></i>
							<span style="font-size: 11px;">TÀI KHOẢN </span>
						</a>
					</li>
					
					<li class="hidden-lg hidden-md hidden-sm">
						<a id="mb_search" href="healthy-food-1_bizwebvietnam_default.html#">
							<i class="fa fa-search"></i>
						</a>
					</li>
					
					<li>
						<div id="top-cart" class='top-cart-block'>
	<a href="cart.htm" id="top-cart-trigger" class=''>
		<img src='//bizweb.dktcdn.net/100/093/224/themes/138006/assets/cart_bg.png?1473844469738' >
		<i class='fa fa-shopping-cart'></i>
		<span class='top_cart_qty'>0</span>
		
	</a>
	<ins class='hidden-xs'>GIỎ HÀNG </ins>
	<div class="top-cart-content">
		<div class="top-cart-title">
			<h4>Giỏ hàng</h4>
		</div>
		<div class="top-cart-items">
			
		</div>
		<div class="top-cart-action clearfix">
			<span class="fleft top-checkout-price">0₫</span>
			<input type="hidden" class="top_cart_total_price_not_format" value="0" />
			<button onclick='window.location.href="/cart"' class="button button-small nomargin fright">Xem giỏ hàng</button>
		</div>

	</div>
</div>
					</li>

				</ul>
			</div> -->
		</div>
		<div class='primary_menu_wrap hidden-xs hidden-sm'>
			<div class='container'>
			
<nav id="primary-menu" class='style_2 tech_store hidden-xs'>
	<ul>
		
		
		
		
		
		
		<li class = 'current'>
			<a href="<?php echo e(route('home')); ?>">
				<span class="menu_title">
					Trang chủ
				</span>
			</a>
		</li>
		
		
		<!-- normal sub menu -->
		<!-- <li class='sub-menu'>
			<a class="menu" href="tin-tuc.htm">
				<span class="menu_title">
					Chuyên mục khỏe đẹp
				</span>
				<i class="fa fa-caret-down"></i>
			</a>
			<ul>
				<div class='submenu_group'>
					<div class='submenu_col'>
						<li class=''><a class='sub-menu' href="healthy-food-1_bizwebvietnam_default.html#"><div>Làm đẹp</div></a></li>
						<li class=''><a class='sub-menu' href="healthy-food-1_bizwebvietnam_default.html#"><div>Kiến thức khỏe đẹp</div></a></li>
						<li class=''><a class='sub-menu' href="healthy-food-1_bizwebvietnam_default.html#"><div>Mẹo hay sức khỏe</div></a></li>
						<li class=''><a class='sub-menu' href="healthy-food-1_bizwebvietnam_default.html#"><div>Bài tập Yoga</div></a></li>
					</div>
				</div>
			</ul>
		</li> -->
		<!-- end normal sub menu -->
		<?php echo App\Http\Helpers\AdminHelper::menu($menu_header,0); ?>

		
		
		<li class = 'sub-menu'>
			<a href="<?php echo e(route('contact')); ?>">
				<span class="menu_title">
					Liên hệ
				</span>
			</a>
		</li>
		
		
	</ul>
</nav>

<script>
	$("#sidebar-wrapper ul li a span").click(function( event ) {
		event.preventDefault();
		var li = $(this).parents('li');
		li.children('ul').toggle('slow');
	});
</script>
				<!-- #primary-menu end -->
			</div>
		</div>
	</div>
</header>


<div class="clear"></div>

<!-- mb search -->

<div class="mb_header_search search-xs hidden-lg hidden-md hidden-sm">
	<form action="search.htm" class="input-group search-bar ultimate-search">
		<input type="hidden" name="type" value="product">
		<input type="search" name="q" value="" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text" aria-label="Tìm sản phẩm">
		<span class="input-group-btn">
			<button type="submit" class="btn icon-fallback-text">
				<i class="fa fa-search"></i>
			</button>
		</span>
		<input type="hidden" class="collection_id" value="(collectionid:product>=0)" />
		<input type="hidden" class="collection_handle" value="all" />
		<input type="hidden" class="collection_name" value="all" />
	</form>
</div>

<!-- end mb search -->

<div class="clear"></div>
		<!-- #header end -->

		<!-- Content
============================================= -->
		<?php echo $__env->yieldContent('content'); ?>

		<!-- #content end -->

		<!-- Footer
============================================= -->
		<!-- Footer -->
<footer class="site-footer">
	
	<div class="grid_item footer_newsletter">
		<div class="container">
			<h3><i class="fa fa-envelope"></i> Cập nhật thông tin khuyến mãi nhanh nhất</h3>
			<form accept-charset="UTF-8" action="https://healthy-food-1.bizwebvietnam.net/account/contact" role="form" method="post" class="input-group">
				<input name="utf8" type="hidden" value="✓">
			<input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng,Bản tin">
			<input type="hidden" id="newsletter-first-name" name="contact[first_name]" value="(Người đăng ký)">
			<input type="hidden" id="newsletter-last-name" name="contact[last_name]" value="Bản tin"> 
				<input type="email" value="" placeholder="Điền email tại đây..." name="contact[email]" id="newsletter-email-3" class="input-group-field" aria-label="email@example.com">
				<span class="input-group-btn">
					<input type="submit" class="btn btnSignup-3" name="subscribe" id="subscribe" value="ĐĂNG KÝ">
				</span>
			</form>

			<script>
				$('.btnSignup-3').click(function(e){
					var regex = /\S+@\S+\.\S+/;
					var $arrEmail = $('#newsletter-email-3').val().split('@');
					//alert($arrEmail[1]);
					$('#newsletter-last-name').val($arrEmail[0]);
					if ($arrEmail[1].indexOf('.')>-1) {
						alert('Đăng ký nhận email thành công');
					}
					else {
						alert('Vui lòng nhập đúng địa chỉ email');
						e.preventDefault();
					}
				});
			</script>
			
			
		</div>
	</div>
	
	  
	<div class="grid_item footer_promotion">
		<div class="container">
			<div class="row">
				<div class="box-apreassurances">
					  
					 
					 
					 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="reassurances-left">
							<span class="icon-name-1 pull-left">
							</span>
							<div class="description media-body">
								<h4>Vận chuyển miễn phí </h4>
								<p>Với các đơn hàng trên 600.000 VND </p>
							</div>
						</div>
					</div>
					  
					 
					 
					 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="reassurances-left">
							<span class="icon-name-2 pull-left">
							</span>
							<div class="description media-body">
								<h4>Cam kết chính hãng </h4>
								<p>Đảm bảo chất lượng 100% </p>
							</div>
						</div>
					</div>
					  
					 
					 
					 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="reassurances-left">
							<span class="icon-name-3 pull-left">
							</span>
							<div class="description media-body">
								<h4>Hỗ trợ tư vấn </h4>
								<p>Thứ 2-Thứ 7 : 08g30 - 17g30 </p>
							</div>
						</div>
					</div>
					  
					 
					 
					 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="reassurances-left">
							<span class="icon-name-4 pull-left">
							</span>
							<div class="description media-body">
								<h4>Đặt hàng trực tuyến </h4>
								<p>Gọi ngay : 08 22 00 2222 </p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	  
	<div class="footer_information">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 footer-left">
					<div class="fi-about-block grid_item footer-new">
						<div class="fi-title1"><img src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/footer_logo.png?1473844469738"></div>
						<div class="fi-content" style="text-align:justify; margin-bottom: 10px;">
							Healthy Food là chuyên trang cung cấp các sản phẩm chính hãng giúp chăm sóc Sức Khoẻ & Làm Đẹp với các thương hiệu nổi tiếng được nhập khẩu từ nhiều nước trên thế giới.
						</div>
						  
						<div class="fi-content inline-list social-icons">
							 
							
							  
							<a href="healthy-food-1_bizwebvietnam_default.html#"><span class="social-icon-1"></span></a>
							  
							<a href="healthy-food-1_bizwebvietnam_default.html#"><span class="social-icon-2"></span></a>
							  
							<a href="healthy-food-1_bizwebvietnam_default.html#"><span class="social-icon-3"></span></a>
							  
							<a href="healthy-food-1_bizwebvietnam_default.html#"><span class="social-icon-4"></span></a>
							
							
						</div>
						
					</div>
				</div>

				<div class="col-md-5 col-sm-5 col-xs-12 footer-right pull-right">
					<div class="row">
						<div class="col-md-9 col-sm-6 col-xs-12 newfooter">
						<div class="widget widget_links clearfix">
							<div class="fi-title">LIÊN HỆ </div>
							<p>CÔNG TY CỔ PHẦN HỆ SINH THÁI CÔNG NGHỆ VIỆT NAM.</p>
							<address>
								 
								<img src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/footer_contact_address_icon.png?1473844469738">
								<span>Khuôn viên Nhà hành chính, Học viện Nông nghiệp Việt Nam 
TT. Trâu Quỳ - Gia Lâm - Hà Nội</span> <br>
								 
								
								
								<img src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/footer_contact_phone_icon.png?1473844469738">
								<a href="tel:123 456 789">0462.971.971</a> <br>
								
								
								 
								<img src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/footer_contact_email_icon.png?1473844469738">
								<a href="mailto:hello@egany.com">hotro@nhanong24h.com </a>
								 
							</address>
						</div>
						</div>

						 
						  
						
						 
						 
						<!-- <div class="col-md-3 col-sm-6 col-xs-12 newfooter">
							<div class="fi-title drop-down">GIỚI THIỆU</div>
							<div class="fi-content">
								<ul class="grid_item one-whole">
									 
									  
									<li>
										<a href="gioi-thieu.htm"><span>Giới thiệu</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Tuyển dụng</span></a>
									</li>
									  
									<li>
										<a href="lien-he.htm"><span>Liên hệ</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Chính sách bảo mật</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Chính sách và quy định</span></a>
									</li>
									
								</ul>
							</div>
						</div> -->
						  
						
						 
						 
						<!-- <div class="col-md-3 col-sm-6 col-xs-12 newfooter">
							<div class="fi-title drop-down">HỖ TRỢ </div>
							<div class="fi-content">
								<ul class="grid_item one-whole">
									 
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Hướng dẫn mua Online</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Hình thức thanh toán</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Giao nhận hàng Online</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Bảo hành & Bảo trì</span></a>
									</li>
									  
									<li>
										<a href="healthy-food-1_bizwebvietnam_default.html#"><span>Đổi trả & Hoàn tiền</span></a>
									</li>
									
								</ul>
							</div>
						</div> -->
						
						 
						
						<!-- <div class="col-md-3 col-sm-6 col-xs-12 newfooter">
							  
							<div class="widget widget_links clearfix" style="margin-bottom: 20px;">
								<div class="fi-title">ĐƯỢC CHỨNG NHẬN </div>
								<a href="healthy-food-1_bizwebvietnam_default.html#"><img data-lazyload="//bizweb.dktcdn.net/100/093/224/themes/138006/assets/register_logo.png?1473844469738" src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/register_logo.png?1473844469738" style="background: none;"></a>
							</div>
							
							
							  
							<div class="widget widget_links clearfix">
								<div class="payment_block">
									<h4>HÌNH THỨC THANH TOÁN </h4>
									<img data-lazyload="//bizweb.dktcdn.net/100/093/224/themes/138006/assets/payment_logo.png?1473844469738" src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/payment_logo.png?1473844469738" style="background: none;">
								</div>
							</div>
							
						</div> -->
						
					</div>
				</div>				
			</div>
		</div>
	</div>
	

	
	
	<div class="clear"></div>
	
		<!-- Copyrights
============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<!-- <div class="col-md-6 nopadding">

				
			</div> -->

			<div class="col-md-12 nopadding hidden-xs">
				  
				<div class="copyright-links">
					
					
					<a href="<?php echo e(route('home')); ?>">Trang chủ</a>
					/ 
					<?php foreach($menu_top as $val): ?>
					<a href="<?php echo e(route('menu',$val->alias)); ?>"><?php echo e(ucfirst($val->name)); ?></a> /
					<?php endforeach; ?>
					<a href="https://healthy-food-1.bizwebvietnam.net/lien-he.htm">Liên hệ</a>
					
					
				</div>
				
			</div>

		</div>
		
	</div><!-- #copyrights end -->
	


</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
============================================= -->
	<div id="gotoTop" class="fa fa-chevron-up"></div>

	<!-- Footer Scripts
============================================= -->

	<!-- Bizweb plugins BEGIN -->
<script src='<?php echo e(asset("assets/frontend/js/option-selectors.js")); ?>' type='text/javascript'></script>
<script src='<?php echo e(asset("assets/frontend/js/api.jquery.js")); ?>' type='text/javascript'></script>
<!-- Bizweb plugins END -->



<script src='<?php echo e(asset("assets/frontend/js/bootstrap.min.js")); ?>' type='text/javascript'></script>

<script src='<?php echo e(asset("assets/frontend/js/plugins.min.js")); ?>' type='text/javascript'></script>
<!-- BEGIN fancy box -->
<script src='<?php echo e(asset("assets/frontend/js/jquery.fancybox.pack.js")); ?>' type='text/javascript'></script>
<!-- END fancy box -->
<!-- script.js -->
<script>
	// set_vied_items_html
	function set_viewed_items_html($current_product){
		var jsonProducts = sessionStorage.getItem('products_viewed');
		var arrPro = {}; 
		if( jsonProducts != null  ) 
			arrPro = JSON.parse( jsonProducts );  
		else
		{
			sessionStorage.removeItem('products_viewed'); 
			sessionStorage.removeItem('products_viewed_indexing'); // must-have this LOC 
		}
		if($current_product != null && arrPro[$current_product.id] == null) // null / undefined 
		{ 
			arrPro[$current_product.id] = $current_product;   
			sessionStorage.setItem('products_viewed', JSON.stringify( arrPro ));  // 


			// saving current index 
			var jsonProIndex = sessionStorage.getItem('products_viewed_indexing'); 

			var arrProIndex = []; 
			if( jsonProIndex != null )  
				arrProIndex = JSON.parse( jsonProIndex );  
			arrProIndex.unshift($current_product.id);  
			sessionStorage.setItem('products_viewed_indexing', JSON.stringify( arrProIndex ));  // 

		}	


		
		 }

	//get_viewed_items_html
	function get_viewed_items_html($current_product)
	{
		// saving current viewed-item 
		var jsonProducts = sessionStorage.getItem('products_viewed'); 
		var arrPro = {}; 
		if( jsonProducts != null  ) 
			arrPro = JSON.parse( jsonProducts );  
		else
		{
			sessionStorage.removeItem('products_viewed'); 
			sessionStorage.removeItem('products_viewed_indexing'); // must-have this LOC 
		}

		var jsonProIndex = sessionStorage.getItem('products_viewed_indexing'); 
		var jsonProducts = sessionStorage.getItem('products_viewed'); 
		var arrProIndex = []; 
		var $strHTML = ''; 
		var $countViewedItem = 0; 
		var $intMaxViewedItems = ''; 
		if($intMaxViewedItems == '')
			$intMaxViewedItems = 4; 
		else 
			$intMaxViewedItems = parseInt($intMaxViewedItems); 
		if(jsonProIndex != null & jsonProducts != null & $current_product != null )
		{
			//parse indexing, products...  
			arrProIndex = JSON.parse(jsonProIndex);   
			arrPro = JSON.parse( jsonProducts );   

			// assign count_items = 0;
			for (i=0; i<arrProIndex.length; i++ )
			{
				$strProID = arrProIndex[i];  
				if( $current_product.id != $strProID && $strProID != null && $countViewedItem < $intMaxViewedItems)
				{ 

					var product_viewed = arrPro[$strProID];
					var price = Bizweb.formatMoney(product_viewed.price, "") + '</b>'; 
					var compare_price = Bizweb.formatMoney(product_viewed.compare_at_price_max, ") + '</b>'; 
					var old_price = '';
					var sale = '';
					if (product_viewed.price < product_viewed.compare_at_price_max) {
						old_price = '<del>'+compare_price+'</del>';
						sale = '-' + Math.round(100*(product_viewed.compare_at_price_max - product_viewed.price)/product_viewed.compare_at_price_max) + '%';
					}


					$bo_found = true;  


					var pd_img = Bizweb.resizeImage(product_viewed['images'][0].src, 'compact');
					$('.widget-last-view .product-image a').attr("href", product_viewed.alias);
					$('.widget-last-view .product-image img').attr("src", pd_img);
					if(sale != ''){
						$('.widget-last-view .product-image .sale-flash').css('display','block');
						$('.widget-last-view .product-image .sale-flash').text(sale);
					}
					else{
						$('.widget-last-view .product-image .sale-flash').css('display','none');	
					}
					$('.widget-last-view .product-title h4 a').text(product_viewed.name);
					$('.widget-last-view .product-price ins').html(price);
					if(old_price != ''){
						$('.widget-last-view .product-price del').html(old_price);
					}
					else{
						$('.widget-last-view .product-price del').html('');
					}

					$strHTML += $('.widget-last-view').html();


					// console.log($strHTML);

					$countViewedItem = $countViewedItem + 1; 

				} //  
			} // endfor: arrProIndex   
		} // endif: jsonProIndex

		return $strHTML;
	}


	// <<<<<< product BEGIN  
	function refreshProductSelections($tagSelectOption0, $option0, $tagSelectOption1 , $option1, $tagSelectOption2, $option2) 
	{
		if($option0 != null && $option0 != '')
		{ 	
			//change option 0  
			$($tagSelectOption0 + ' option[value="'+$option0+'"]').prop('selected', true); // option-0 => Shape...  okok 
			$($tagSelectOption0).change(); 
		}


		if($option1 != null && $option1 != '')
		{ 
			//change option 1  
			$($tagSelectOption1 + ' option[value="'+$option1+'"]').prop('selected', true); // option-1 => Color...  okok 
			$($tagSelectOption1).change();  
		}
		if($option2 != null && $option2 != '')
		{ 
			//change option 2
			$($tagSelectOption2 + ' option[value="'+$option2+'"]').prop('selected', true); // option-1 => Color...  okok 
			$($tagSelectOption2).change();  
		}
	}

	function update_variant(variant, $tagPrice, $tagPriceCompare, $tagAddToCart, $tagProductSection, $sale) 
	{
		var $unit_price = 0; 
		var $unit_price_compare = 0; 
		if(variant != null && variant.available==true )
		{ 
			$unit_price = variant.price;
			if(variant.price < variant.compare_at_price){
				$unit_price_compare = variant.compare_at_price;  

				//show onsale label
				$($tagProductSection).find('.sticker-sale').removeClass('hidden');  
			} else{

				//hide onsale label... nono: find matching ids: ('[id^="ProductDetails"]')  
				$($tagProductSection).find('.sticker-sale').addClass('hidden');  
			}

			$($tagAddToCart).html('<i class="fa fa-shopping-cart"></i> Thêm vào giỏ'); 
			$($tagAddToCart).removeAttr('disabled');  
		}   
		else{

			$($tagAddToCart).html('Hết hàng'); 
			$($tagAddToCart).prop('disabled', true); 
		}


		var $strUnitPrice = Bizweb.formatMoney($unit_price, "");  
		var $strUnitPriceCompare = Bizweb.formatMoney($unit_price_compare, "");
		$($tagPrice).html($strUnitPrice); 
		if($unit_price_compare > 0)
		{
			$($tagPriceCompare).html($strUnitPriceCompare);   
		}
		else 
			$($tagPriceCompare).html('');   

		$($tagProductSection).find('.unit_price_not_formated').val($unit_price);    
		// update_total();

		if(variant.price < variant.compare_at_price){
			$unit_price_compare = variant.compare_at_price;  

			var $percent = Math.round(100*($unit_price_compare - $unit_price)/$unit_price_compare);
			//$percent = Math.ceil($percent);

			//show onsale label
			$($sale).removeClass('hidden');  
			$($sale).html('- '+$percent+'%');  

		} else{

			//hide onsale label... nono: find matching ids: ('[id^="ProductDetails"]')  
			$($sale).addClass('hidden');  
		}
	}

	//ajax: add to cart 
	function addItem(form_id) {
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			dataType: 'json',
			data: $('#'+form_id).serialize(),
			success: function(data) {
				Bizweb.onSuccess(data, '#'+form_id)
			},
			error: Bizweb.onError
		});
	}

	Bizweb.onSuccess = function(data, form_id) {
		addToCartPopup(data);
		//update top cart: qty, total price
		var $product_page = $(form_id).parents('[class^="product-page"]'); 
		var quantity = parseInt($product_page.find('[name="quantity"]').val(), 10) || 1;
		var $item_qty_new = 0; 
		var $item_price_new = 0; 
		var $item_price_increase = 0; 
		var $boUpdated = false; 

		//insert "no_item" html  
		if($('.top-cart-block .top-cart-content .top-cart-item').size() <= 0) 
		{
			$('.top-cart-block .top-cart-content').html(top_cart_no_item);  
		} 
		//update items 
		$('.top-cart-block .top-cart-content .top-cart-item').each(function(){	
			if($(this).find('.item_id').val() == $product_page.find('[name="variantId"]').val() ){
				$item_qty_new = parseInt($(this).find('.item_qty').val()) + quantity ;
				$item_price_single = parseFloat($(this).find('.item_unit_price_not_formated').val());
				$item_price_new = $item_qty_new * $item_price_single;   

				$item_price_increase = quantity * parseFloat($(this).find('.item_unit_price_not_formated').val());   
				$(this).find('.item_qty').val($item_qty_new);  // !!!
				$(this).find('.top-cart-item-quantity').html('x ' + $item_qty_new); 
				$(this).find('.top-cart-item-price').html(Bizweb.formatMoney($item_price_new, ""));  // ''  shop.money_format
				$boUpdated = true; // updated item 
			} 
		});

		if($boUpdated == false){ // current item is not existed!!!  
			var $proURL = $product_page.find('.product_url').val();
			var $proTitle = $product_page.find('.product_title_hd').val();
			var $proUnitPrice = parseFloat($product_page.find('.unit_price_not_formated').val());
			var $strNewItem = '<div class="top-cart-item clearfix">'
			+ ' <input type="hidden" class="item_id" value="'+ $product_page.find('[name="variantId"]').val() +'"></input>'  
			+ ' <input type="hidden" class="item_qty" value="'+ quantity +'"></input>' 
			+ ' <input type="hidden" class="item_unit_price_not_formated" value="'+ $proUnitPrice +'"></input>' 

			+ '<div class="top-cart-item-image">'
			+ ' <a href="https://healthy-food-1.bizwebvietnam.net/'+%20$proURL%20+'"><img src="https://healthy-food-1.bizwebvietnam.net/'+%20$product_page.find('.product_img_small').val()%20+'" alt="'+ $proTitle +'" ></a>'
			+ '</div>'
			+ '<div class="top-cart-item-desc">'
			+ '<a href="https://healthy-food-1.bizwebvietnam.net/'+%20$proURL%20+'">' + $proTitle + '</a>'
			+ '<span class="top-cart-item-price">'+ Bizweb.formatMoney($proUnitPrice * quantity, "") +'</span>' 
			+ '<span class="top-cart-item-quantity">x '+ quantity +'</span>'
			+'<a class="top_cart_item_remove" onclick = "deleteCart('+ $product_page.find('[name="variantId"]').val() +');"><i class="fa fa-times-circle"></i></a>'
			+ ' </div>'
			+ '</div>';
			$('.top-cart-block .top-cart-content .top-cart-items').append($strNewItem); 
			$item_price_increase = $proUnitPrice * quantity; 

		}  
		//check is emptiness...   
		check_topcart_empty();  

		//update total 
		var $quantity_new = parseInt($('.top-cart-block #top-cart-trigger span').text()) + quantity;  
		var $price_new = parseFloat($('.top-cart-block .top_cart_total_price_not_format').val()) + $item_price_increase;  
		$('.top-cart-block .top_cart_total_price_not_format').val($price_new);  // !!!
		$('.top-cart-block #top-cart-trigger span').html($quantity_new);
		$('.top-cart-block .top-checkout-price').html(Bizweb.formatMoney($price_new, "")); 	
		$('.cart_qty').html($quantity_new);
		$('.scroll_cart span').html($quantity_new);

	};

	var top_cart_empty = '<div class="minicart-header">Chưa có sản phẩm nào trong giỏ!</div>'
	+ '<div class="minicart-footer">'
	+ '<div class="minicart-actions clearfix">'
	+ '<a class="button" href="https://healthy-food-1.bizwebvietnam.net/collections/all.htm"><span class="text">VÀO CỬA HÀNG</span></a>'
	+ '</div></div>';

	var top_cart_no_item = ''; 
	function check_topcart_empty(){  

		//Bạn chưa mua sản phẩm nào! 
		if($('.top-cart-block .top-cart-content .top-cart-item').size() <= 0) 
		{		
			top_cart_no_item = $('.top-cart-block .top-cart-content').html();   
			$('.top-cart-block .top-cart-content').html(top_cart_empty); 
			$('.top-cart-block .top-cart-content').css('width', '200px'); 
		}
		else{
			//remove width, okok!!! 
			$('.top-cart-block .top-cart-content').css('width', '');
		}
	}
	jQuery(document).ready(function($){

		//select first size&color. 
		//second item: $($("#colorPicker option").get(1))...  
		$("#sizePicker option:first").attr('selected', 'selected'); 
		$("#colorPicker option:first").attr('selected', 'selected'); 

		// function: choose size  
		$('#option-0 select').change(function(){
			var $size = $(this).val(); 
			var $color = $('#option-1 select').val();
			var $material	= $('#option-2 select').val();
			var $tagSelectOption0 = '#product-select-option-0'; 
			var $tagSelectOption1 = '#product-select-option-1'; 
			var $tagSelectOption2 = '#product-select-option-2'; 

			refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
		});

		// function: choose color  
		$('#option-1 select').change(function(){
			var $size = $('#option-0 select').val(); 
			var $color = $(this).val();
			var $material	= $('#option-2 select').val();  
			var $tagSelectOption0 = '#product-select-option-0'; 
			var $tagSelectOption1 = '#product-select-option-1'; 
			var $tagSelectOption2 = '#product-select-option-2'; 

			refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
		});

		// function: choose material
		$('#option-2 select').change(function(){
			var $size = $('#option-0 select').val(); 
			var $color = $('#option-1 select').val();
			var $material = $(this).val();  
			var $tagSelectOption0 = '#product-select-option-0'; 
			var $tagSelectOption1 = '#product-select-option-1'; 
			var $tagSelectOption2 = '#product-select-option-2'; 

			refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
		});

		$("#option-0 select option:first").attr('selected', 'selected'); 
		$("#option-1 select option:first").attr('selected', 'selected'); 
		$("#option-2 select option:first").attr('selected', 'selected'); 
		var $size = $("#option-0 select option:first").val(); 
		var $color = $("#option-1 select option:first").val();
		var $material	= $("#option-2 select option:first").val();
		var $tagSelectOption0 = '#product-select-option-0'; 
		var $tagSelectOption1 = '#product-select-option-1'; 
		var $tagSelectOption2 = '#product-select-option-2'; 

		refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);


		//add to cart 
		$(".add-to-cart").on('click', function(e) {  //.click(function(e){ // 
			e.preventDefault();
			addItem('ProductDetailsForm');

		}); 

		//add to cart for QuickView
		$("#addtocartQV").on('click', function(e) {  //.click(function(e){ // 
			e.preventDefault();
			addItem('ProductDetailsFormQV');

		});

		//check empty for top-cart... 
		check_topcart_empty(); 

		//change qty... 
		$('.product-quantity input.quantity').on('change', function(){
			var $qty = parseInt($(this).val()); 
			if($qty <= 0){
				$(this).parents('[class^="product-page"]').find('[id^="addtocart"]').addClass('disabled'); 
			}
			else{
				$(this).parents('[class^="product-page"]').find('[id^="addtocart"]').removeClass('disabled'); 
			}
		});
		// buy now
		$('.buynow').on('click', function(e) {
			var form = $(this).closest('form').attr('id');
			e.preventDefault();
			buyNow(form);
		});
		// end buy now

	});  


	function buyNow(form){
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			data: jQuery('#'+form).serialize(),
			dataType: 'json',
			success: function() {
				window.location = '/checkout';
			},
			error: function(XMLHttpRequest, textStatus) {
				Bizweb.onError(XMLHttpRequest, textStatus);
			}
		};
		jQuery.ajax(params);	
	}

	// >>>>>> product END

	// quick delete cart

	function getCartAjax(){
		var cart = null;
		jQuery.getJSON('/cart.js', function(cart, textStatus) {
			if(cart)
			{
				var html = '';
				// update item for top cart
				$.each(cart.items,function(i,item) {
					html += '<div class="top-cart-item clearfix"> '
						+'<input type="hidden" class="item_id" value="'+ item.variant_id +'">'
						+'<input type="hidden" class="item_qty" value="'+ item.quantity +'">'
						+'<input type="hidden" class="item_unit_price_not_formated" value="' + item.price + '">'
						+'<div class="top-cart-item-image">'
						+'<a href="https://healthy-food-1.bizwebvietnam.net/'+%20item.url%20+'">'
						+'<img src="https://healthy-food-1.bizwebvietnam.net/'+%20Bizweb.resizeImage(item.image,'small')%20+'" alt="' + item.name + '"></a>'
						+'</div>'
						+'<div class="top-cart-item-desc">'
						+'<a href="https://healthy-food-1.bizwebvietnam.net/'+%20item.url%20+'">' + item.name + '</a>';
					if ( typeof(formatMoney) != 'undefined' ){
						html += '<span class="top-cart-item-price">' + Bizweb.formatMoney(cart.total_price, formatMoney) + '</span>';
					}
					else {
						html += '<span class="top-cart-item-price">' + Bizweb.formatMoney(cart.total_price, "") + '</span>';
					}
					html +='<span class="top-cart-item-quantity">x '+ item.quantity +'</span>'
						+'<a class="top_cart_item_remove" onclick = "deleteCart('+ item.variant_id +');"><i class="fa fa-times-circle"></i></a>'
						+'</div></div>';
				});
				if(cart.item_count > 0){
					$('.top-cart-items').html(html);
					$('.top-cart-block #top-cart-trigger span').html(cart.item_count);
					$('.top-cart-block .top-checkout-price').html(Bizweb.formatMoney(cart.total_price, "") + 'đ'); 	
				}
				else {
					$('.top-cart-block #top-cart-trigger span').html(cart.item_count);
					$('.top-cart-block .top-cart-content').html(top_cart_empty); 
					$('.top-cart-block .top-cart-content').css('width', '200px'); 
				}
			}
			else {
				$('.top-cart-block .top-cart-content').html(top_cart_empty);
				$('.top-cart-block .top-cart-content').html(top_cart_empty); 
				$('.top-cart-block .top-cart-content').css('width', '200px'); 
			}
		});

	}

	// delete cart
	function deleteCart(variant_id) {
		Bizweb.removeItem(variant_id,getCartAjax);
	}

	// add to cart popup
	/**
 * Popup notify add-to-cart
 */
	function notifyProduct($info){
		var wait = setTimeout(function(){
			$.jGrowl($info,{
				life: 5000
			});	
		});
	}

	function addToCartPopup(jqXHR, textStatus, errorThrown) {
		$.ajax({
			type: 'GET',
			url: '/cart.js',
			async: false,
			cache: false,
			dataType: 'json',
			//success: updateCartDesc
		});

		var $info = '<div class="row"><div class="col-md-4"><a href="https://healthy-food-1.bizwebvietnam.net/'+%20jqXHR['url']%20+'"><img width="70px" src="https://healthy-food-1.bizwebvietnam.net/'+%20Bizweb.resizeImage(jqXHR['image'],%20'small')%20+'" alt="'+ jqXHR['name'] +'"/></a></div><div class="col-md-8"><div class="addtocart_popup_notify">Đã thêm sản phẩm</div><div class="jGrowl-note"><a class="jGrowl-title" href="https://healthy-food-1.bizwebvietnam.net/'+%20jqXHR['url']%20+'">'+ jqXHR['title'] +'</a><ins>'+ Bizweb.formatMoney(jqXHR['price'], "") +'</ins></div></div></div>';
		notifyProduct($info);
	}

</script>

<!-- slick slider -->


<script src='<?php echo e(asset("assets/frontend/js/master_script.js")); ?>' type='text/javascript'></script>



<script src='<?php echo e(asset("assets/frontend/js/addition_scripts.js")); ?>' type='text/javascript'></script>
	<!-- quick add cart -->
	<div id='product-pop-up' style="display:none;" class="single-product shop-quick-view-ajax clearfix">

	<div class="product-page product modal-padding clearfix">
		<div class="col-md-6 nobottommargin">
			<div class="product-image">
				<div class="product-main-image">
					<div class="pd_slide_qv">
						<img data-lazy="">
					</div>
					<div class='pd_slide_thumb_qv'>

					</div>
				</div>
				<div class="sale-flash">Sale!</div>
			</div>
		</div>
		<div class="col-md-6 nobottommargin product-desc">
			<div class = "product-title">
				<a href='https://healthy-food-1.bizwebvietnam.net/healthy-food-1_bizwebvietnam_default.html'><h2>Pink Printed Dress</h2></a>
			</div>
			<div class="product-price"> <ins style='margin-right: 5px;'>$24.99</ins> <del>$39.99</del></div>

			<p class="description">Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>

			<div class="clear"></div>
			<div class="line"></div>
			<!-- variants -->
			<div class="product-page-options ">
				<div class="sizePicker">
					<label class="control-label options-title">Kích thước:</label>
					<div class='options-selection'>
						<select class="form-control input-sm size"></select>
					</div>
				</div>
				<div class="sizePicker">
					<label class="control-label options-title">Màu sắc:</label>
					<div class='options-selection'>
						<select class="form-control input-sm color" style='color:#555!important;'></select>
					</div>
				</div>
				<div class="sizePicker">
					<label class="control-label options-title">Chất liệu:</label>
					<div class='options-selection'>
						<select class="form-control input-sm material"></select>
					</div>
				</div>
			</div>
			<!-- end variant -->
			<!-- Product Single - Quantity & Cart Button
============================================= -->
			<form id='ProductDetailsFormQV' class="cart nobottommargin clearfix">
				<div class="quantity product-quantity clearfix col-xs-6 noleftpadding">
					<input type="button" value="-" class="minus">
					<input type="text" class='qty' id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
					<input type="button" value="+" class="plus">
				</div>
				<script>


				</script>
				<div class="hidden" style="">   
					<select id="product-select-qw" name="variantId" > 
					</select>

					<input type="hidden" class="unit_price_not_formated"  value="" >
					<input type="hidden" class="product_url" value="">
					<input type="hidden" class="product_title_hd" value="">
					<input type="hidden" class="product_img_small" value="">
				</div> 
				<button type="submit" id='addtocartQV' class="addtocartQV button nomargin col-xs-6">Add to cart</button>
				<button class='buy_btn buynow buynow_qv button col-xs-12 noleftmargin norightmargin' id='buynow'><i class="fa fa-credit-card"></i> MUA NGAY</button>
			</form><!-- Product Single - Quantity & Cart Button End -->

		</div>
	</div>
</div>
<script>
	var callBackQV = function(variant, selector) {  
		// console.log('callBackQV  is functioning...'); 

		var $tagPrice = '#product-pop-up .product-price ins';
		var $tagPriceCompare = '#product-pop-up .product-price del';
		var $tagProductSection = '#ProductDetailsFormQV'; 
		var $sale = '#product-pop-up .sale-flash';
		update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQV', $tagProductSection,$sale);     
	}

	/*
   *  strip_html_js
   * 
   * ref: http://stackoverflow.com/questions/822452/strip-html-from-text-javascript
   * author phong.nguyen 20150806
   */ 
	function strip_html_js(html)
	{
		var tmp = document.createElement("DIV");
		tmp.innerHTML = html;
		return tmp.textContent || tmp.innerText || "";
	}

	function product_tag(tags)
	{
		var tmp = "<ul class = 'product_tags'>";
		for (i = 0; i < tags.length; i++){
			var str = tags[i].split("_");
			var	pre = str[0].replace(/\s+/g, '');

			if (pre == ""){
				str = str[1];
				tmp += "<li>" + str + "</li>";
			}
		}
		tmp += "</ul>";
		return tmp;
	}


	

	jQuery(document).ready(function() {
		ega.init();
	})

</script>
	<div id="product-quick-add" style="display: none; width: 700px;">
	<div class="product-page ">
		<div class="row">
			<form id="ProductDetailsForm_QuickAdd">

				<div class="hidden" style="">  
					<select id="product-select-qa" name="variantId" >  
					</select>

					<input type="hidden" class="unit_price_not_formated"><!-- </input> -->
					<input type="hidden" class="product_url" value=""> <!--</input>-->
					<input type="hidden" class="product_title_hd" value=""> <!--</input>-->
					<input type="hidden" class="product_img_small" value=""> <!--</input>-->
				</div> 

				<input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm quantity">

				<button id="addtocartQA" class="btn btn-primary" type="submit">Thêm vào giỏ</button>
			</form>
		</div>  <!-- END: row -->
	</div>
</div>

<script>
var currentIMG = '';  
$(document).on('click', '.product_quick_add', function (e) {
		e.stopPropagation();
		e.preventDefault();
		// quick add 
		currentIMG = $(this).parents('.product').find('.product-image img'); 
		quickAddProduct($(this).attr('href')); // make-up "#product-quick-add";
});
var callBackQuickAdd = function(variant, selector) {  
	// console.log('callBackQV  is functioning...'); 

	var $tagPrice = '#product-quick-add .price strong';
	var $tagPriceCompare = '#product-quick-add .price em span';
	var $tagProductSection = '#ProductDetailsForm_QuickAdd'; 
	update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQA', $tagProductSection);     
}
var quickAddProduct = function (purl) { 

	// if ($(window).width() < 680) { window.location = purl; return false; }
	// modal = $('#quick-view-modal'); modal.modal('show');
	$.ajax({
		url: purl + '.js',
		async: false,
		success: function (product) { 

			//make-up "#product-quick-add"   
			// assign hidden values 
			$('#product-quick-add .product_title_hd').val(product.name);  
			$('#product-quick-add .product_url').val(product.url);  
			$('#product-quick-add .product_img_small').val(product.featured_image);  // AAA!!!  

			//render selections (NOT formatted yet)
			$('select#product-select-qa').html('');  
			$('.selector-wrapper').remove(); // remove all selectors by  Bizweb.OptionSelectors  
			// var $arrSize = [];
			// var $arrColor = []; 
			$.each(product.variants, function (i, v) {
				$('select#product-select-qa').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
			});  

			new Bizweb.OptionSelectors("product-select-qa", { product: product, onVariantSelected: callBackQuickAdd });

			// select default variants   
			var $size = $("#product-select-qa-option-0 option:first").attr('selected', 'selected'); 
			var $color = $("#product-select-qa-option-1 option:first").attr('selected', 'selected');  
			var $material = $("#product-select-qa-option-2 option:first").attr('selected', 'selected');  
			var $tagSelectOption0 = '#product-select-qa-option-0'; 
			var $tagSelectOption1 = '#product-select-qa-option-1';  
			var $tagSelectOption2 = '#product-select-qa-option-2'; 
			refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color, $tagSelectOption2, $material);

			//auto add current variant... 
			// $('#ProductDetailsForm_QuickAdd').submit(); 
			$("#addtocartQA").click(); 

		}//end: success 
	});

	//$('.modal-backdrop').css('opacity', '0');
	return false;
}


jQuery(document).ready(function($){
	//add to cart for QuickView
	$("#addtocartQA").on('click', function(e) {  //.click(function(e){ // 
		e.preventDefault();
		addItem('ProductDetailsForm_QuickAdd');
	}); 
}); 
/*** end quick add cart ***/

</script>
	<!-- end quick add cart -->	
	
	<ul class='scroll_group unstyled hidden-xs hidden-sm'>
	
	
	<!-- <li class='scroll_cart'>
		<a href='https://healthy-food-1.bizwebvietnam.net/cart.htm'>
			<span>0</span> Sản phẩm
		</a>
	</li> -->
	
	
	<li class='scroll_hotline'>
		<a href='tel:19000000'>
			Hotline
<b>0462.971.971</b>
		</a>
	</li>
	
	
	<li class='scroll_fb'>
		<a href=''>
			Facebook
		</a>
	</li>
	
</ul>
<script>
$(document).ready(function() {
	var group_height = Number($('.scroll_group').height()) / 2;
	$('.scroll_group').css('top', 'calc(50% - ' + group_height + 'px)');
	if($(window).width() > 991) {
		var el = $('.scroll_group');
		var top = $('.pd_desc_wrapper').height();
		ega.handleScroll({
			el: el,
			cl: 'show',
			top: top
		});
	}
})
</script>

	
	
	<a class='mb_scroll_hotline hidden-lg hidden-md' href='tel:19000000'>
	Hotline 19000000
</a>
<script type="text/javascript" src="<?php echo e(asset('assets/frontend/lib/slick-1.6.0/slick/slick.min.js')); ?>"></script>
<script type="text/javascript">
	$('.sl-slider').slick({
		dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 800,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
	});

	// $('.cat-sl-slider').slick({
	// 	dots: true,
 //        infinite: true,
 //        centerMode: true,
 //        slidesToShow: 2,
 //        slidesToScroll: 2	
	// });
	
</script>	

</body>
</html>