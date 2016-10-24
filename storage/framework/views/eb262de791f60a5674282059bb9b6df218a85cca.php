<link href="<?php echo e(asset('assets/frontend/css/style.css')); ?>" type="text/css" rel="stylesheet" />
    <div id="dnn_RowTwo9" class="ContentPadding">
    <div class="DnnModule DnnModule-MISACMS DnnModule-579">
    <ul class="breadcrumb news-nav">
        <li>
            <a id="dnn_ctr446_ListNewsByCategory_HyperLink1" href="<?php echo e(route('home')); ?>">Trang chủ</a>
        </li>
        <li class="active">
            <span id="dnn_ctr446_ListNewsByCategory_lblCategoryName"><?php echo e(ucfirst($index->name)); ?></span>
        </li>
    </ul>
    <?php if(isset($top_posts)): ?>
    <a class="expthumb thumb630x330 thumbblock mar_bottom15" href="<?php echo e(route('posts',$top_posts->alias)); ?>" title="<?php echo e($top_posts->name); ?>">
        <div class="content_shadow">
            <h1 style="display: inherit;" class="f26 fontUTM clwhite mar_bottom10"><?php echo e($top_posts->name); ?></h1>
            <div class="time_comment text-left mar_bottom7">
                <span><?php echo e(date('h:i d/m/Y',strtotime($top_posts->create_at))); ?>  </span>
            </div>
            <div class="sapo_news" style="text-align: justify;"><?php echo $top_posts->description; ?></div>
        </div>
        <div class="bg_shadow"></div>
        <img width="100%" src="<?php echo e(asset($top_posts->image)); ?>" data-src="<?php echo e(asset($top_posts->image)); ?>" width="515" height="350" alt="<?php echo e($top_posts->name); ?>" />
    </a>
    <?php endif; ?>
    <ul class="list_top_news list_news_cate">
    <?php if(count($posts) > 0): ?>
    <?php foreach($posts as $val): ?>
        <li>
            <h2><a href="<?php echo e(route('posts',$val->alias)); ?>" class="title_list_top_news" title="<?php echo e($val->name); ?>"><?php echo e($val->name); ?></a></h2>
            <div class="pkg">
                <a href="<?php echo e(route('posts',$val->alias)); ?>" class="thumbblock thumb260x170 fl" title="<?php echo e($val->name); ?>" ><img class="" src="<?php echo e(asset($val->image)); ?>" width="190" height="120" alt="<?php echo e($val->name); ?>" /></a>                    
                <div class="info_list_top_news">
                    <div class="time_comment text-left mar_bottom7">
                        <span><?php echo e(date('h:i d/m/Y',strtotime($val->create_at))); ?>  </span>
                    </div>
                    <div class="sapo_news" style="text-align: justify;"><?php echo $val->description; ?></div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    <?php else: ?>
    Không có bài viết nào
    <?php endif; ?>    
        
    </ul>
    <section>
        <div class="paging">
            <?php echo e($posts->render()); ?>

        </div>
    </section>
</div></div>