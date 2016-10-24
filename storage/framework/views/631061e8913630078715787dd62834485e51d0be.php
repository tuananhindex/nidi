<div class="head_news"><a href="#" onclick="return false">Tiêu điểm</a></div>
<ul class="list_news_160 list_trend">
    <?php if(count($focus_posts) != 0): ?>
    <?php foreach($focus_posts as $val): ?>
    <li>
        <a href="<?php echo e(route("posts",$val->alias)); ?>" style="width:100% !important ; height:150px !important" class="thumbblock thumb160x100 mar-1 mar_bottom10" title="<?php echo e($val->name); ?>"><img width="100%" class="" src="<?php echo e(asset($val->image)); ?>"  height="100%" alt="<?php echo e($val->name); ?>"></a>        
        <h2><a href="<?php echo e(route("posts",$val->alias)); ?>" class="f14" title="<?php echo e($val->name); ?>"><?php echo e($val->name); ?></a></h2>
    </li>
    
    <?php endforeach; ?>
    <?php else: ?>
    <li>Không có tin nào</li>
    <?php endif; ?>
</ul>