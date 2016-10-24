<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
			<?php if(isset($category)): ?>
			<li><a href="<?php echo e(route('posts.category',$category->alias)); ?>"><?php echo e(ucfirst($category->name)); ?></a></li>
			<?php endif; ?>
			<li class="active"><?php echo e(ucfirst($index->name)); ?></li>
			
		</ol>
	</div>
</section>
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
============================================= -->
			<div class="postcontent nobottommargin clearfix col-sm-9">

				<div class="single-post nobottommargin">

					<!-- Single Post
============================================= -->
					<div class="entry clearfix">

						<!-- Entry Title
============================================= -->
						<div class="entry-title">
							<h2><?php echo e(ucfirst($index->name)); ?></h2>
						</div><!-- .entry-title end -->

						<!-- Entry Meta
============================================= -->
						<ul class="entry-meta clearfix">
							<li><i class="fa fa-calendar"></i><?php echo e($index->create_at); ?></li>
							
							<!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
						</ul><!-- .entry-meta end -->

						<!-- Entry Content
============================================= -->
						<div class="entry-content notopmargin">


							<?php echo $index->content; ?>



							<!-- Post Single - Content End -->

							<!-- Tag Cloud
============================================= -->
							
							<!-- <div class="tagcloud clearfix bottommargin">
								
								<a href="../../tin-tuc/thuc-pham.htm">thực phẩm</a>
								
								<a href="../../tin-tuc/the-thao.htm">thể thao</a>
								
								<a href="../../tin-tuc/blogs-thuc-pham-the-thao.htm">blogs_Thực phẩm thể thao</a>
								

							</div> --><!-- .tagcloud end -->
							

							<div class="clear"></div>

							<!-- Post Single - Share
============================================= -->
							<div class="si-share noborder clearfix">
	<div class="socical-wrapper">
		<ul class="social-icons">
			<div class="fb-send" data-href="
																			
																			/nhung-thuc-pham-vang-danh-cho-nguoi-choi-the-thao
																			
																			"></div>
			<div class="item"> 
				<div class="fb-like fix_top" data-href="" data-layout="button" data-action="like" data-show-faces="true" data-share="true" style="margin-right: 5px;"></div>
			</div>
			<script>
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = '//apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
			</script>
		</ul>
	</div>
</div>
<!-- Product Single - Share End -->
							<!-- Post Single - Share End -->

						</div>
					</div><!-- .entry end -->

					<!-- related post -->
					<?php if($same): ?>
					<h4>Bài viết cùng danh mục:</h4>
<div class="related-posts clearfix">
	<div class="col_half nobottommargin" style="width:100%">
		
		
		
		
		
		
		<?php foreach($same as $val): ?>
		
		<div class="mpost clearfix col-xs-6">
			<div class="entry-image related-posts-img">
				   
				 
				   
				
				

				
				
				
				<a href="<?php echo e(route('posts',$val->alias)); ?>" alt="<?php echo e(ucfirst($val->name)); ?>"></a>
			</div>
			<div class="entry-c">
				<div class="entry-title">
					<h4><a href="../cach-cham-soc-da-mat-ngay-nang-nong/cach-cham-soc-da-mat-ngay-nang-nong.htm"><?php echo e(ucfirst($val->name)); ?></a></h4>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="fa fa-calendar"></i> <?php echo e($val->create_at); ?></li>
					
				</ul>
				<div class="entry-content"> Để chăm sóc da đúng cách giúp cho làn da trắng sáng trong ngày...</div>
			</div>
		</div>

		<?php endforeach; ?>
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
	</div>
	
</div>
<?php endif; ?>
					<!-- end related post -->

					<!-- Comments
============================================= -->
					
					
					
					<!-- #comments end -->				</div>

			</div><!-- .postcontent end -->

			<!-- Sidebar
============================================= -->
			<?php echo $__env->make('frontend.side_bar_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- .sidebar end -->

		</div>

	</div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>