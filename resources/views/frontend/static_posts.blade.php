@extends('frontend.master')
@section('content')
<link href="{{ asset('assets/frontend/css/AwardDetail.css') }}" type="text/css" rel="stylesheet" />
@if(file_exists($index->image))
<section class="Banner">
    <div id="dnn_BannerPane">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-570">
            <a name="570"></a>
            <div id="dnn_ctr570_ContentPane">
                <!-- Start_Module_570 -->
                <div id="dnn_ctr570_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                    <div id="dnn_ctr570_HtmlModule_lblContent" class="Normal">
                        <img alt="Giải thưởng MISA" style="width:100%; height:281px" src="{{ asset($index->image) }}" class="img-responsive">
                    </div>
                </div>
                <!-- End_Module_570 -->
            </div>
        </div>
        <div class="DnnModule DnnModule-MISACompany DnnModule-557">
            <a name="557"></a>
            <div id="dnn_ctr557_ContentPane">
                <!-- Start_Module_557 -->
                <div id="dnn_ctr557_ModuleContent" class="DNNModuleContent ModMISACompanyC">
                    <div class="misa-award">
                        <h1 class="header" style="padding:0">
                            <div class="container">
                                {{ $index->name }}
                            </div>
                        </h1>
                        <div class="misa-award-list container">
                            <div class="row  desc">
                                <div class="col-md-24">
                                    <div style="text-align: justify;">
                                        {!! $index->content !!}
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="misa-award-content">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="album_detai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel"></h4>
                                </div>
                                <div class="modal-body">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var baseUrl;
                        jQuery(document).ready(function ($) {
                            baseUrl = '/DesktopModules/MISACompany';
                            InitEventViewAlbumAward(baseUrl);
                        });
                        
                    </script>
                </div>
                <!-- End_Module_557 -->
            </div>
        </div>
    </div>
</section>
@endif
<section class="Content">
    <div class="FullWidthBgOne">
        <div class="container">
            <div class="row">
                <div class="col-md-24">
                    <div id="dnn_FullWidthBgOne" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="TopContent">
        <div class="container">
            <div class="row">
                <div class="col-md-24">
                    <div id="dnn_RowOne12" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-18 border-column">
                    <div id="dnn_RowTwo9" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowTwo3" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-16">
                    <div id="dnn_RowThree8" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-8">
                    <div id="dnn_RowThree4" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-14">
                    <div id="dnn_RowFour7" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-10">
                    <div id="dnn_RowFour5" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="dnn_RowFiveLeft6" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-12">
                    <div id="dnn_RowFiveRight6" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="dnn_RowSixLeft4" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-8">
                    <div id="dnn_RowSixMiddle4" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-8">
                    <div id="dnn_RowSixRight4" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="dnn_RowSevenLeftOuter3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowSevenLeftInner3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowSevenRightInner3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowSevenRightOuter3" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-24">
                    <div id="dnn_ContentPane" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="FullWidthBgTwo">
        <div id="dnn_FullWidthBgTwo" class="ContentPadding DNNEmptyPane"></div>
    </div>
    <div class="BottomContent">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="dnn_RowEightLeftOuter3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowEightLeftInner3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowEightRightInner3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-6">
                    <div id="dnn_RowEightRightOuter3" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="dnn_RowNineLeft4" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-8">
                    <div id="dnn_RowNineMiddle4" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-8">
                    <div id="dnn_RowNineRight4" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="dnn_RowTenLeft6" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-12">
                    <div id="dnn_RowTenRight6" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div id="dnn_RowEleven5" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-14">
                    <div id="dnn_RowEleven7" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="dnn_RowTwelve4" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-16">
                    <div id="dnn_RowTwelve8" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="dnn_RowThirteen3" class="ContentPadding DNNEmptyPane"></div>
                </div>
                <div class="col-md-18">
                    <div id="dnn_RowThirteen9" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-24">
                    <div id="dnn_RowFourteen12" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="FullWidthBgThree">
        <div class="container">
            <div class="row">
                <div class="col-md-24">
                    <div id="dnn_FullWidthBgThree" class="ContentPadding DNNEmptyPane"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection