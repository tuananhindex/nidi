<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
			
			<li class="active"><?php echo e(ucfirst($index->name)); ?></li>
			
		</ol>
	</div>
</section>
<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">
<div class="row">
			<!-- Post Content
============================================= -->
			
			<div class="postcontent nobottommargin clearfix col-md-9 col-sm-12">

				<!-- Posts
============================================= -->
				<div id="posts" class="small-thumbs">

					<!-- single article -->
					
					
					
					
					
					
					
					<?php if($posts): ?>
					<?php foreach($posts as $val): ?>
					<div class="entry clearfix">
						
						
						
						<div class="entry-image">
							<a href="<?php echo e(route('posts',$val->alias)); ?>" data-lightbox="image"><img class="image_fade" src="<?php if($val->image): ?><?php echo e(asset($val->image)); ?><?php else: ?><?php echo e(asset('assets/frontend/img/No_image_available.svg')); ?><?php endif; ?>" alt="Những 'thực phẩm vàng' dành cho người chơi thể thao" style="opacity: 1;"></a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h2><a href="posts/nhung-thuc-pham-vang-danh-cho-nguoi-choi-the-thao/nhung-thuc-pham-vang-danh-cho-nguoi-choi-the-thao.htm"><?php echo e(ucfirst($val->name)); ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="fa fa-calendar"></i> <?php echo e($val->create_at); ?></li>
							</ul>
							<div class="entry-content">
								 <?php echo e($val->description); ?><a href="<?php echo e(route('posts',$val->alias)); ?>" class="more-link">Xem tiếp</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<?php else: ?>
					<h4>Không có bài viết nào</h4>
					<?php endif; ?>
					
					
					
					
					

					
					
					
					<!-- end single article -->

				</div><!-- #posts end -->

				<!-- Pagination
============================================= -->
				
				<?php echo $posts->render(); ?><!-- .pager end -->
				
			</div><!-- .postcontent end -->
			

			<!-- Sidebar
============================================= -->
			<?php echo $__env->make('frontend.side_bar_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- .sidebar end -->
			</div>
		</div>

	</div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>