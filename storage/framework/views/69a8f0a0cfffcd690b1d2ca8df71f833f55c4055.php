<?php if(isset($posts_category)): ?>
<link href="<?php echo e(asset('assets/frontend/css/style.css')); ?>" type="text/css" rel="stylesheet" />
<?php foreach($posts_category as $val): ?>
<?php
	$ids = App\Http\Helpers\AdminHelper::child_id($posts_category_all,$val->id);
	$ids[] = $val->id;
	$posts = DB::table('posts')->whereIn('fk_catid',$ids)->select('id','name','alias','image','description','create_at')->orderBy('order','desc')->orderBy('id','desc');
	$posts_top = $posts->first();
	$posts = $posts->skip(1)->take(6)->get();
	?>
<?php if(isset($posts_top)): ?>
<div class="col830 fl">
	<section class="box_left_home">
		<div class="head_news">
			<a href="<?php echo e(route('posts.category',$val->alias)); ?>"><?php echo e(ucwords($val->name)); ?></a>
			<?php
				$posts_category_lv2 = DB::table('posts_category')->select('id','name','alias')->where(['fk_parentid' => $val->id , 'status' => 1])->orderBy('order','desc')->get();
			?>
			<ul style="display:inline">
				<ul>
                    <?php foreach($posts_category_lv2 as $val2): ?>
                    <li><a href='<?php echo e(route("posts.category",$val2->alias)); ?>'><?php echo e(ucfirst($val2->name)); ?></a></li>
                    <?php endforeach; ?>
                </ul>
			</ul>
		</div>
		<div class="pkg">
			<div class="col48per fl">
				<a href="<?php echo e(route('posts',$posts_top->alias)); ?>" ><img class="" src="<?php echo e(asset($posts_top->image)); ?>" width="343" height="220" alt="<?php echo e($posts_top->name); ?>" /></a>        
				<h2><a href="<?php echo e(route('posts',$posts_top->alias)); ?>" class="fontOPB f22" title="Phân biệt giới tính, đồng đội Rosicky bị đẩy xuống tập cùng đội nữ"><?php echo e($posts_top->name); ?></a></h2>
				<div class="time_comment mar_top7 mar_bottom7">
					<span><?php echo e(date('h:i d/m/Y',strtotime($posts_top->create_at))); ?>  </span>
				</div>
				<div class="sapo_news"> <?php echo $posts_top->description; ?> </div>
				<!-- <div class="bg_gray mar_top10">
					<ul class="list_news_show_home">
					                <li>
					        <h2><a href="http://www.bongda.com.vn/se-co-phien-ban-sieu-beo-cua-vardy-tren-truyen-hinh-d362130.html" class="" title="Sẽ có phiên bản 'siêu béo' của Vardy trên truyền hình?">Sẽ có phiên bản 'siêu béo' của Vardy trên truyền hình?</a></h2>                    <div class="time_comment mar_top7 text-right">
					            <span>14 phút  </span> 
					                                </div>
					    </li>
					                <li>
					        <h2><a href="http://www.bongda.com.vn/world-cup-tang-len-48-doi-dien-ro-hay-hop-ly-d362128.html" class="" title="World Cup tăng lên 48 đội: Điên rồ hay hợp lý?">World Cup tăng lên 48 đội: Điên rồ hay hợp lý?</a></h2>                    <div class="time_comment mar_top7 text-right">
					            <span>19 phút  </span> 
					                                </div>
					    </li>
					            </ul>
					</div> -->
			</div>
			<div class="col48per fr">
				
				<?php if($posts): ?>
				<ul class="list_news_show_home">
					<?php foreach($posts as $val3): ?>
					<li class="first pkg">
						<a href="<?php echo e(route('posts.category',$val3->alias)); ?>" class="thumbblock thumb140x90 fl" title="<?php echo e(ucfirst($val3->name)); ?>" ><img class="" src="<?php echo e(asset($val3->image)); ?>" width="140" height="90" alt="<?php echo e(ucfirst($val3->name)); ?>" /></a>                
						<h2><a href="<?php echo e(route('posts',$val3->alias)); ?>" class="f18" title="<?php echo e(ucfirst($val3->name)); ?>"><?php echo e(ucfirst($val3->name)); ?></a></h2>
						<div class="time_comment mar_top7 mar_bottom7">
							<span><?php echo e(date('h:i d/m/Y',strtotime($posts_top->create_at))); ?>  </span>
						</div>
					</li>
					<?php endforeach; ?>         
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>