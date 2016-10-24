<?php $__env->startSection('content'); ?>
<style type="text/css">
	.slick-prev:before,
    .slick-next:before {
        color: black;
    }
    .draggable{
    	overflow: hidden;
    }
</style>
<div class='container slide_wrapper'>
	<div class='baner_wrap col-md-3 hidden-xs hidden-sm nopadding'>
		
		
<div class="grid__item one-quarter shop-by-collections medium-down--hide">
	<div class="sidebar-collections">
		<div class="sdcollections-title sb-title">
			<i class="fa fa-list"></i>
			<span>DANH MỤC SẢN PHẨM </span>
		</div>
		<div class="sdcollections-content">
			<ul class="sdcollections-list">
				<?php foreach($product_category as $val): ?>
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
 
	</div>

	

	<div class='slider_wrap norightpadding col-md-9'>
		<!-- Slider -->
		
		<section id="slider" class="nopadding clearfix">
	
	
		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
	        <!-- Loading Screen -->
	        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
	            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
	        </div>
	        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
	            <div data-p="225.00" style="display: none;">
	                <img data-u="image" src="<?php echo e(asset('assets/frontend/img/banner1.jpg')); ?>" />
	                <!-- <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
	                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
	                <div data-u="caption" data-t="0" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
	                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="img/c-phone-horizontal.png" />
	                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
	                        <img data-u="caption" data-t="1" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="img/c-slide-1.jpg" />
	                        <img data-u="caption" data-t="2" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="img/c-slide-3.jpg" />
	                    </div>
	                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="img/c-navigator-horizontal.png" />
	                    <img data-u="caption" data-t="3" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="img/c-finger-pointing.png" />
	                </div> -->
	            </div>
	            <div data-p="225.00" style="display: none;">
	                <img data-u="image" src="<?php echo e(asset('assets/frontend/img/banner2.jpg')); ?>" />
	            </div>
	            <div data-p="225.00" data-po="80% 55%" style="display: none;">
	                <img data-u="image" src="<?php echo e(asset('assets/frontend/img/banner3.jpg')); ?>" />
	            </div>
	            <!-- <a data-u="add" href="http://www.jssor.com/demos/full-width-slider.slider" style="display:none">Full Width Slider</a> -->
	        
	        </div>
	        <!-- Bullet Navigator -->
	        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
	            <!-- bullet navigator item prototype -->
	            <div data-u="prototype" style="width:16px;height:16px;"></div>
	        </div>
	        <!-- Arrow Navigator -->
	        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
	        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
	    </div>

	    <!-- #endregion Jssor Slider End -->
	
	
	
		
		<!-- end slider -->
	</div>
</div>
<div class="clear"></div>

<script>
	/*
	$('#mega-mb .drawer__header .mobile-nav__toggle').click(function(){
		$(this).parents('#mega-mb').find('.mobile-nav').toggle(300);
	});
	*/
	$('#mega-mb .drawer__header').click(function(){
		$(this).toggleClass('mobile-nav--expanded');
		$(this).parent().find('.mobile-nav').toggle(300);
		//$(this).find('.mobile-nav__toggle').unbind('click');
	});
</script>
<section id="content">
	<div class="content-wrap product_group">
		<div class="container clearfix">
			<!-- collection group -->			

<?php foreach($product_category as $val): ?>
<?php
	$product_category_lv_2 = DB::table('product_category')->where(['fk_parentid' => $val->id , 'status' => 1])->orderBy('order','desc')->orderBy('id','desc')->select('name','alias')->get();

	$ids = App\Http\Helpers\AdminHelper::child_id($product_category_all,$val->id);
    $ids[] = $val->id;
    
	$products = DB::table('product')->whereIn('fk_catid',$ids)->where('status' , 1)->limit(10)->select('name','image','alias','price')->get();
?>
<div id="home-blocks-3" class="grid-block-full">
	<div class="home-blocks-inner">
		<div class="bh-top home-block-title">
			<div class="collection-name">
				<img class="collection-icon" src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/index_col_icon_1.png?1473844469738"><a href="<?php echo e(route('product_category',$val->alias)); ?>"> <?php echo e(ucfirst($val->name)); ?> </a>
				<div class="visible-xs visible-sm catelogry-xs">
					Danh mục <i class="fa fa-caret-down" aria-hidden="true"></i>
				</div>
			</div>
			
			
			<div class="collection-tags">
				<ul class="bh-tags">
					<?php foreach($product_category_lv_2 as $val2): ?>
					<li><a href="<?php echo e(route('product_category',$val2->alias)); ?>"><?php echo e(ucfirst($val2->name)); ?></a></li>
					<?php endforeach; ?>
					
				</ul>
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="bh-btm">
			<div class="row">
				<div class="col-sm-12">

					<!-- <div style="margin-bottom: 20px;" class="hidden-xs">
						<a href="trang-diem.htm"><img src="https://bizweb.dktcdn.net/100/093/224/themes/138006/assets/index_col_left_banner_1.jpg?1473844469738"></a>	
					</div> -->
					<?php if($products): ?>
					<div class="home-products-block bh-products">
						<div class="home-products-block-content">
							<div class="home-products-slider sl-slider">
							
							<?php foreach($products as $val3): ?>	
								<div class="product_single col-md-2 col-sm-4 col-xs-6">
									



<div class="product style_1 clearfix">
	<div class="product-image">
		<a href="<?php echo e(route('product',$val3->alias)); ?>"><img width='240' height='240' src="<?php echo e(asset($val3->image)); ?>" alt="01 Minute Lip Scrub"></a>
		
		
		<!-- product overlay -->
		<!-- <div product_url='/01-minute-lip-scrub-2' class="product_overlay style_1 hidden-sm hidden-xs" >
		 
		  
		<ul class='unstyled'>
			
			
			
			
			
			
			
			
			
			
			
			
			
						
			<li><strong>Nhà cung cấp: </strong><span>Innisfree</span></li>
			
			
			
			
			
			
			
			
			
						
			<li><strong>Dung tích: </strong><span>150ml</span></li>
			
			
			
			
			
						
			<li><strong>Xuất xứ: </strong><span>Hàn Quốc</span></li>
			
			
		</ul>
		
		
		
		<a href="01-minute-lip-scrub-2.htm" class="product_quick_add button">Thêm vào giỏ</a>
		
		

		<a href="healthy-food-1_bizwebvietnam_default.html#product-pop-up" class="button item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/01-minute-lip-scrub-2">Xem nhanh</a>
	</div> -->
		<!-- end product overlay -->

	</div>
	<div class="product-desc">
		<div class="product-title">
			<!-- <h4><a href="01-minute-lip-scrub-2.htm">01 Minute Lip Scrub</a></h4> -->
			<!--span>INS-0099</span-->
			<span><a href='vendors.htm' title='Innisfree'><?php echo e(ucfirst($val3->name)); ?></a></span>
		</div>
		<div class="product-price">
			<ins> <?php echo e(number_format($val3->price)); ?>₫ </ins>
			
		</div>
	</div>
	<!-- <div class='addtocart_sm hidden-lg hidden-md'>
		
		
		<a href="01-minute-lip-scrub-2.htm" class="product_quick_add col-sm-6 col-sm-push-3 col-xs-12 button noleftmargin norightmargin nopadding">Thêm vào giỏ</a>
		
		
	</div> -->
</div> 
								</div>
								<?php endforeach; ?>

								
								
								
								
								
								
								
								
								 
							</div>
						</div>
					</div>
					  
					<div align="center" style="clear:both;"><a class="button btn-seemore text-center" href="<?php echo e(route('product_category',$val->alias)); ?>">Xem thêm </a></div>
					<?php else: ?>
					<h3>Không có sản phẩm nào</h3>
					<?php endif; ?>
				</div>
				
			</div>
		</div>
	</div>
</div>


<div class='clear'></div>

<?php endforeach; ?>

 




 



 
 
 
 






 





 




 



 
 
 
 






 





 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 






			<!-- end collection group -->
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>