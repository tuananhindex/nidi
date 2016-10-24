@if(isset($posts_category))
@foreach($posts_category as $val)
<?php
    $ids = App\Http\Helpers\AdminHelper::child_id($posts_category_all,$val->id);
    $ids[] = $val->id;
    $posts = DB::table('posts')->whereIn('fk_catid',$ids)->select('id','name','alias','image','description','create_at')->orderBy('order','desc')->orderBy('id','desc');
    $posts_top = $posts->first();
    $posts = $posts->skip(1)->take(3)->get();
?>
@if(isset($posts_top))
<div id="dnn_RowTwo9" class="ContentPadding">
    <div class="DnnModule DnnModule-MISACMS DnnModule-731">
        <a name="731"></a>
        <div class="DNNContainer Container4">
            <h4>
                <span id="dnn_ctr731_dnnTITLE_titleLabel" class="ContainerTitle Title4">
                    <div class='home-cate-title'><a class='news-group-link' href='{{ route("posts.category",$val->alias) }}'>{{ ucwords($val->name) }}</a></div>
                    <?php
                        $posts_category_lv2 = DB::table('posts_category')->select('id','name','alias')->where(['fk_parentid' => $val->id , 'status' => 1])->orderBy('order','desc')->get();
                    ?>
                    @if($posts_category_lv2)
                    <ul>
                        @foreach($posts_category_lv2 as $val2)
                        <li><a class='newsmoduletab_link' href='{{ route("posts.category",$val2->alias) }}'>{{ ucfirst($val2->name) }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </span>
            </h4>
            <div class="ContainerPane ContainerSpace">
                <div id="dnn_ctr731_ContentPane">
                    <!-- Start_Module_731 -->
                    <div id="dnn_ctr731_ModuleContent" class="DNNModuleContent ModMISACMSC">
                        <div id="home_news">
                            <div id="dnn_ctr731_ListHomeNews_panelHomeNews" class="misa-cms-homenews">
                                <div class="tab-border">
                                    
                                    <div class="firstnews row">
                                        <div class="col-md-9">
                                            <a id="dnn_ctr731_ListHomeNews_lnkNewsImage" href="{{ route('posts',$posts_top->alias) }}"><img src="{{ asset($posts_top->image) }}" id="dnn_ctr731_ListHomeNews_imgNews" class="img-subject img-responsive" alt="{{ $posts_top->name }}" /></a>
                                        </div>
                                        <div class="col-md-15">
                                            <h3>
                                                <a id="dnn_ctr731_ListHomeNews_lnkNewsTitle" href="{{ route('posts',$posts_top->alias) }}">{{ $posts_top->name }}</a>
                                            </h3>
                                            <div class="description">
                                                <span id="dnn_ctr731_ListHomeNews_lblNewsSummary">{!! $posts_top->description !!}.</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if(isset($posts))
                                    
                                    <div class="othernews">
                                        <ul class="ul">
                                            @foreach($posts as $val3)
                                            <li>
                                                <a class="link" href="{{ route('posts',$val3->alias) }}">{{ $val3->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="clear">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End_Module_731 -->
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="ContainerSpace2"></div>
    </div>
</div>
@endif
@endforeach
@endif