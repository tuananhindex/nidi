<?php $__env->startSection('content'); ?>
<style type="text/css">
	ul.list-category-child li{
		display: inline;
		margin-right: 10px;
	}

</style>


<section id="page-title">
	<div class="container clearfix">
		
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
			
			
			<li class="active"><a href="<?php echo e(route('product_category',$index->alias)); ?>"><?php echo e(ucfirst($index->name)); ?></a></li>
			
			
		</ol>
	</div>
</section>
<input type="hidden" id="collection_id" value="0">
<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">
			
			
			
			<div class="row collection_wrapper">
				<!-- Sidebar
============================================= -->
				
				<!-- .sidebar end -->

				<!-- Post Content
============================================= -->
				<div class="post_content pull-left nobottommargin norightpadding col-xs-12">

					<!-- Shop
============================================= -->
					<div id="shop" class="product-3 clearfix">
						  
						<!-- collection header -->
						<div class="widget-heading ">
							<h2 class="widget-title" style="padding:5px 0"><?php echo e(ucfirst($index->name)); ?></h2>							
						</div>
						<?php if($categories_parent): ?>
						<div class="cat-sl-slider">
							<ul class="list-category-child">
								<li>Danh mục cha : </li>
								<?php if($categories_parent): ?>
								<?php foreach($categories_parent as $val): ?>
								<li><a href="<?php echo e(route('product_category',$val->alias)); ?>"><?php echo e(ucfirst($val->name)); ?></a></li>
								<?php endforeach; ?>

								<?php endif; ?>
							</ul>
						</div>
						<hr>
						<?php endif; ?>	
						<?php if($categories_child): ?>
						<div class="cat-sl-slider">
							<ul class="list-category-child">
								<li>Danh mục con : </li>
								<?php if($categories_child): ?>
								<?php foreach($categories_child as $val): ?>
								<li><a href="<?php echo e(route('product_category',$val->alias)); ?>"><?php echo e(ucfirst($val->name)); ?></a></li>
								<?php endforeach; ?>

								<?php endif; ?>
							</ul>
						</div>
						<hr>
						<?php endif; ?>	
						
						<!-- end collection header -->
						
						
						<div class="sort-wrapper">
							<div class="browse-tags row" style="margin-bottom:20px;line-height: 30px; overflow:hidden;">
	<div class="col-sm-6 col-md-8">
		<p class="subtext nomargin">
			
			Có <span class="require_symbol pagination-info"><?php echo e($count_product); ?></span> sản phẩm.
			
		</p>
	</div>

	<div class="col-sm-6 col-md-4 noleftpadding text-right">
		<span class="col-sm-5 col-xs-4 nopadding text-left">Sắp xếp theo:</span>
		<span class="select-control-wrapper order-filter__select pull-right col-sm-7 col-xs-8 norightpadding">
			<select class="form-control " class="category_filter" onchange="category_filter(this)">
				<?php
					$current_route = Route::current();
				?>
				<option <?php if($current_route->getParameter('filter') == ''): ?> selected <?php endif; ?> value="">Mặc định</option>
				<option <?php if($current_route->getParameter('filter') == 'price-asc'): ?> selected <?php endif; ?> value="price-asc">Giá tăng dần</option>
				<option <?php if($current_route->getParameter('filter') == 'price-desc'): ?> selected <?php endif; ?> value="price-desc">Giá giảm dần</option>
				<option <?php if($current_route->getParameter('filter') == 'newest'): ?> selected <?php endif; ?> value="newest">Sản phẩm mới</option>
				
			</select>
		</span>
	</div>
	<script type="text/javascript">
		function category_filter(e){
			//var val = e.val();
			//console.log(e.value);
			var rs = 'danh-muc-san-pham/';
			if(e.value == ''){
				rs += '<?php echo e($current_route->getParameter("alias")); ?>';
			}else{
				rs += '<?php echo e($current_route->getParameter("alias")); ?>/' + e.value;
			}
			location.href = '<?php echo e(asset("/")); ?>' + rs;
		}
		
	</script>
</div>

						</div>
						<div id="grid_pagination">
							
<div class="grid">
<div class="product_wrapper">
	<?php foreach($products as $val): ?>
	<div class="col-md-2 col-sm-4 col-xs-6 product_single">
<div class="product style_1 clearfix">
	<div class="product-image">
		<a href="<?php echo e(route('product',$val->alias)); ?>"><img alt="MultiPro 32X 200 viên" src="<?php echo e(asset($val->image)); ?>" style="background: none;"></a>
		<!-- <div class="sale-flash">- 6%</div> -->
		<!-- product overlay -->
		<!-- <div product_url="/multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi" class="product_overlay style_1 hidden-sm hidden-xs">
		<ul class="unstyled">
			<li><strong>Xuất xứ: </strong><span>Hoa Kỳ</span></li>
			<li><strong>Nhà cung cấp: </strong><span>AST</span></li>
		</ul>
		<a href="../multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi.htm" class="product_quick_add button">Thêm vào giỏ</a>
		<a href="all.htm#product-pop-up" class="button item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi">Xem nhanh</a>
	</div> -->
		<!-- end product overlay -->
</div>
	<div class="product-desc">
		<div class="product-title">
			<span><a href="<?php echo e(route('product',$val->alias)); ?>" title="AST Sports"><?php echo e(ucfirst($val->name)); ?></a></span>
		</div>
		<div class="product-price">
			<ins> <?php echo e(number_format($val->price)); ?>₫ </ins>
			<!-- <del>850.000₫</del> -->
		</div>
	</div>
	<!-- <div class="addtocart_sm hidden-lg hidden-md">
		<a href="../multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi.htm" class="product_quick_add col-sm-6 col-sm-push-3 col-xs-12 button noleftmargin norightmargin nopadding">Thêm vào giỏ</a>
	</div> -->
</div>
	</div>
	<?php endforeach; ?>


</div>



</div>
<div class="pagination_wrapper">
	
<div class="page_navi">
	<ul class="pagination ajax-pagination "> 
		<?php echo $products->render(); ?>

	</ul>
</div>

</div>

						</div>
					</div><!-- #shop end -->

				</div><!-- .postcontent end -->
				
			</div>
		</div>

	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>