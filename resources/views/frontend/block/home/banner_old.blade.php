
<section class="Banner">
    <div id="dnn_BannerPane">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-362">
            
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

    </div>
</section>