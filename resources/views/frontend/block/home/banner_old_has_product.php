
<section class="Banner">
    <div id="dnn_BannerPane">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-362">
            <a name="362"></a>
            <div id="dnn_ctr362_ContentPane">
                <!-- Start_Module_362 -->
                <div id="dnn_ctr362_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                    <div id="dnn_ctr362_HtmlModule_lblContent" class="Normal">
                        <div class="FlexSlider">
                            <ul class="slides">
                            @foreach($banners as $val)
                                <li class="clearfix" style="background: transparent url('{{ asset($val->image) }}') no-repeat; background-size:100% 100%">
                                    <!-- <div class="container">
                                        <div class="row">
                                            <div style="min-height: 400px;" class="col-md-24">
                                                <div style="position: absolute; bottom: 30px; left: 0px; z-index: 1;">
                                                    <a href="http://www.cukcuk.vn/">
                                                    <img class="img-responsive" src="assets/frontend/img/BANNER_WEBSITE_MISA-CUKCUK.png" alt="phần mềm quản lý nhà hàng" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </li>
                            @endforeach   
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End_Module_362 -->
            </div>
        </div>
        @if(count($product_category) > 0)
         <style type="text/css">
            .product-home-tab .nav-tabs > li{
                width: {{ 100 / count($product_category) }}% !important;
            }
        </style>
        <div class="DnnModule DnnModule-MISAProduct DnnModule-462">
            <a name="462"></a>
            <div id="dnn_ctr462_ContentPane">
                <!-- Start_Module_462 -->
                <div id="dnn_ctr462_ModuleContent" class="DNNModuleContent ModMISAProductC">
                    <div class="product-home-tab">
                        <div class="header">
                        </div>
                        <div class="tabs">
                            <div class="container">
                                <div class="row">
                                   
                                    <ul class="nav nav-tabs responsive" id="myTab">
                                    @foreach($product_category as $key => $val)
                                        <li @if($key == 0) class='active' @endif><a href='#tab{{ $key }}'>{{ ucwords($val->name) }}</a></li>
                                    @endforeach
                                       <!--  <li><a href='www_misa_com_default_2.html#tab1'>Sản phẩm hành chính sự nghiệp</a></li>
                                        <li><a href='www_misa_com_default_2.html#tab2'>Sản phẩm hộ kinh doanh cá thể, cá nhân</a></li> -->
                                    </ul>
                                    <div class="tab-content responsive">
                                    @foreach($product_category as $key => $val)
                                    <?php
                                        $products = DB::table('product')->where(['status' => 1,'fk_catid' => $val->id])->select('id','name','image','description')->orderBy('order','desc')->orderBy('id','desc')->get();
                                    ?>
                                        <div class="tab-pane @if($key == 0) active @endif" id="tab{{ $key }}">
                                            <div id="slider_container{{ $key }}" style="position: relative; top: 0px; left: 0px; width: 1170px; height: 255px; overflow: hidden;" class="slider-container">
                                                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
                                                    </div>
                                                    <div style="position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;" class="loadding-icon">
                                                    </div>
                                                </div>
                                                <div u="slides" style="cursor: move; position: absolute; left: 30px; right: 30px; top: 30px; width: 938px; height: 200px; overflow: hidden;" class="slide-container">
                                                @foreach($products as $key2 => $val2)
                                                    <div>
                                                        <div  class="row">
                                                            <div class="col-md-8">
                                                                <div class="product-image">
                                                                    <a href="san-pham/plid/2/Phan-mem-quan-tri-doanh-nghiep-hop-nhat_3.htm"> <img src="{{ asset($val2->image) }}" alt="{{ ucwords($val2->name) }}" class="img-responsive" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-16">
                                                                <h2 class="product-title"><a href="javascript:void(0)">{{ ucwords($val2->name) }}</a></h2>
                                                                <div class="description">
                                                                    {{ $val2->description }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="function-area">
                                                            <ul>
                                                                <li><a href="san-pham/Danh-sach-goi-SP-DV/pid/126_2.htm" class="buy-btn">Mua ngay</a></li>
                                                                <li><a href="https://register.amis.vn/">Dùng thử</a></li>
                                                                <li><a href="san-pham/plid/2/Phan-mem-quan-tri-doanh-nghiep-hop-nhat_3.htm">Chi tiết</a></li>
                                                            </ul>
                                                        </div> -->
                                                    </div>
                                                @endforeach    
                                                </div>
                                                <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: -18px;"></span>
                                                <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: -18px"></span>
                                            </div>
                                        </div>
                                    @endforeach   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#myTab a').click(function (e) {
                                e.preventDefault();
                                $(this).tab('show');
                            });
                        
                            (function ($) {
                        
                                fakewaffle.responsiveTabs(['xs', 'sm']);
                            })(jQuery);
                            InitSlider();
                        })
                        
                        
                    </script>
                </div>
                <!-- End_Module_462 -->
            </div>
        </div>
        @endif
    </div>
</section>