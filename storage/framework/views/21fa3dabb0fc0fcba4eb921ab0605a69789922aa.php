<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo e(ucwords($e['module'])); ?>

        
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('backend.home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo route($e['route'].'.list.get') ?>"><?php echo e(ucwords($e['module'])); ?></a></li>
       	<li class="active"><?php echo e(ucwords($e['action'])); ?></li>
        
    </ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<?php if(Session::has('alert')): ?>
				<?php echo Session::get('alert'); ?>

			<?php endif; ?>
			<div class="box box-primary">
				<div class="box-header with-border">
				  	<h3 class="box-title"><?php echo e(ucwords($e['action'])); ?></h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="box-body">
						<div class="form-group">
						  <label>Tên</label>
						  <input type="text" class="form-control" name="name" placeholder="Nhập tên" required="">
						</div>
						<div class="form-group">
						  <label>Đường Dẫn Ảo</label>
						  <input type="text" class="form-control" name="alias" placeholder="Nhập đường dẫn ảo" required="">
						</div>
						<div class="form-group">
						  <label>Ảnh đại diện</label>
						  <input type="file" name="image">
						</div>
						<div class="form-group">
						  	<label>Danh Mục</label>
						  	<select class="form-control" name="fk_catid">
								<option value="0">Không</option>
								<?php echo $MultiLevelSelect; ?>

							</select>
						</div>
						<div class="form-group">
						  <label>Giá</label>
						  <input type="number" class="form-control" name="price" placeholder="Nhập giá tiền">
						</div>
						<div class="form-group">
						  <label>Khuyến mãi (%)</label>
						  <input type="number" class="form-control" name="promotion" placeholder="Nhập khuyến mãi">
						</div>
						<div class="form-group">
						  <label>Thứ Tự</label>
						  <input type="number" class="form-control" name="order" placeholder="Hiển thị theo thứ tự từ lớn đến bé" >
						</div>
						<div class="form-group">
						  <label>Mô tả</label>
						  <textarea class="form-control" name="description" id="description"></textarea>
						  
						</div>

						<div class="form-group">
						  <label>Nội dung</label>
						  <textarea class="form-control" name="content"></textarea>
						  <script type="text/javascript">ckeditor('content')</script>
						</div>
						
						<div class="form-group">
						  <label>Meta Title</label>
						  <input type="text" class="form-control" name="meta_title">
						</div>
						<div class="form-group">
						  <label>Meta Description</label>
						  <textarea class="form-control" name="meta_description"></textarea>
						</div>
						<div class="form-group">
						  <label>Meta Keywords</label>
						  <input type="text" class="form-control" name="meta_keywords" placeholder="eg : abc,xyz,qwe,...">
						</div>
						<div class="form-group">
							<label>Trạng Thái</label>
							<select class="form-control" name="status">
								<option value="1">Hiển Thị</option>
								<option value="0">Không Hiển Thị</option>
							</select>
						</div>
						
					</div><!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" class="btn btn-primary" name="save" value="Lưu">
						<input type="submit" class="btn btn-success" name="save&add" value="Lưu & Thêm Mới">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>