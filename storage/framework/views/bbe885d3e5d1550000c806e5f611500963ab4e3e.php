<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li><a href="<?php echo e(route('backend.home')); ?>"><i class="fa fa-dashboard"></i> <span>Trang chủ</span></a></li>

    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.account')) > 0): ?> active <?php endif; ?> treeview">
        <a href="#"><i class="fa fa-user"></i> Quản lý tài khoản <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.account.add.get')) > 0): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('backend.account.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                
            </li>
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.account.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.account.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
        </ul>
    </li>

    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product')) > 0): ?> active <?php endif; ?> treeview">
        <a href="#">
            <i class="fa fa-product-hunt"></i> <span>Module Sản Phẩm</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product_category')) > 0): ?> active <?php endif; ?> treeview">
                <a href="#"><i class="fa fa-tags"></i> Danh Mục <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product_category.add.get')) > 0): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('backend.product_category.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                        
                    </li>
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product_category.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.product_category.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
                </ul>
            </li>
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product.product')) > 0): ?> active <?php endif; ?> treeview">
                <a href="#"><i class="fa fa-tags"></i> Sản Phẩm <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product.product.add.get')) > 0): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('backend.product.product.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                        
                    </li>
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.product.product.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.product.product.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts')) > 0): ?> active <?php endif; ?> treeview">
        <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Module Bài Viết</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.category')) > 0): ?> active <?php endif; ?> treeview">
                <a href="#"><i class="fa fa-tags"></i> Danh Mục <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.category.add.get')) > 0): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('backend.posts.category.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                        
                    </li>
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.category.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.posts.category.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
                </ul>
            </li>
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.posts')) > 0): ?> active <?php endif; ?> treeview">
                <a href="#"><i class="fa fa-tags"></i> Bài Viết <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.posts.add.get')) > 0): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('backend.posts.posts.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                        
                    </li>
                    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.posts.posts.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.posts.posts.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
                </ul>
            </li>
        </ul>
    </li>


    <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.menu')) > 0): ?> active <?php endif; ?> treeview">
        <a href="#"><i class="fa fa-bars"></i> Module Menu <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.menu.add.get')) > 0): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('backend.menu.add.get')); ?>"><i class="fa fa-plus"></i> Thêm</a>
                
            </li>
            <li class="<?php if(strlen(strstr(Route::currentRouteName(), 'backend.menu.list.get')) > 0): ?> active <?php endif; ?>"><a href="<?php echo e(route('backend.menu.list.get')); ?>"><i class="fa fa-list"></i> Danh Sách</a></li>
        </ul>
    </li>
    
</ul>