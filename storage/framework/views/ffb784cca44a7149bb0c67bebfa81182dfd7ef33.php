<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="healthy-food-1_bizwebvietnam_default.html">Trang chủ</a></li>
			
			<li class='active'>Liên hệ</li>
			
		</ol>
	</div>
</section>
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap page_contact">

		<div class="container clearfix">
			<!-- Google Map
============================================= -->
			
			<section class='' style='margin-bottom: 15px;'>
				<div class='google-maps'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6596238653683!2d105.93168531530273!3d21.00627698601059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a8d21aac84df%3A0x85721531e9d9bf67!2zU2nDqnUgdGjhu4sgbmjDoCBuw7RuZyAtIE5oYW5vbmcyNGg!5e0!3m2!1svi!2s!4v1474109560000" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</section>
			
			<!-- Google Map End -->

			<!-- Postcontent
============================================= -->
			<div class="col-md-8 postcontent nobottommargin">

				<h3>LIÊN HỆ</h3>
				<hr>
				<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=fa fa-check-circle></i> Message Sent Successfully!"></div>

				<!--<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">-->
				
<input name='FormType' type='hidden' value='contact' />
<input name='utf8' type='hidden' value='true' />
				
				<div class="form-process"></div>
				<input type="hidden" name="_token" value="csrf_token()">
				<div class="col_one_third">
					<label for="template-contactform-name">Tên <small class='require_symbol'>*</small></label>
					<input required type="text" id="template-contactform-name" name="hoten" value="" placeholder='Họ tên của bạn' class="sm-form-control required NormalTextBox" />
				</div>

				<div class="col_one_third">
					<label for="template-contactform-email">Email <small class='require_symbol'>*</small></label>
					<input required type="email" id="template-contactform-email" name="email" value="" placeholder='Nhập email của bạn' class="required email sm-form-control NormalTextBox" />
				</div>

				<div class="col_one_third col_last">
					<label for="template-contactform-phone">Số điện thoại<small class='require_symbol'>*</small></label>
					<input required type="text" id="template-contactform-phone" name="phone" value="" placeholder='Nhập số điện thoại của bạn' class="sm-form-control NormalTextBox" />
				</div>

				<div class="clear"></div>

				<div class="col_full" style="margin:30px 0">
					<label for="template-contactform-message">Viết bình luận <small class='require_symbol'>*</small></label>
					<textarea required class="required sm-form-control NormalTextBox" id="template-contactform-message" name="noidung" rows="4" cols="30"></textarea>
				</div>
				<div class="clear"></div>

				<div class="col_one_third col_last">
					<input required type="text" id="template-contactform-phone" name="xacnhan" value="" placeholder='Nhập mã xác nhận' class="sm-form-control NormalTextBox" />
				</div>
				<img src="" id="capcha">
				<img src="<?php echo e(asset('assets/frontend/img/refesh7.png')); ?>" id="resetCapcha">
				<img src="<?php echo e(asset('assets/frontend/img/loading.gif')); ?>" id="loadding" style="display:none">

				<div class="col_full nobottommargin">

					<button class="button nomargin fright" id="template-contactform-submit" name="sendmail">Gửi liên hệ</button>
				

				</div>
				
				<!-- </form>-->

			</div><!-- .postcontent end -->

			<!-- Sidebar
============================================= -->
			<div class="col-md-4 sidebar col_last nobottommargin">
				<h3>CHÚNG TÔI Ở ĐÂY</h3>
				<hr>
				<h3>Siêu Thị Nhà Nông</h3>
				  
				<p>CÔNG TY CỔ PHẦN HỆ SINH THÁI CÔNG NGHỆ VIỆT NAM.</p>
				
				<ul class="info-address">
					  
					<li>
						<i class="fa fa-map-marker"></i>
						<span>Khuôn viên Nhà hành chính, Học viện Nông nghiệp Việt Nam 
TT. Trâu Quỳ - Gia Lâm - Hà Nội</span>
					</li>
					
					 
					<li>
						<i class="fa fa-phone"></i>
						<span>0903.220.995</span>
					</li>
					 
					  
					<li>
						<i class="fa fa-envelope"></i>
						<span>hotro@nhanong24h.com</span>
					</li>
					
					 
					<!-- <li>
						<i class="fa fa-globe"></i>
						<span>egany.com</span>
					</li> -->
					 
				</ul>
			</div><!-- .sidebar end -->

		</div>

	</div>

</section><!-- #content end -->
<script>

    
		change_captcha();



        $("#resetCapcha").click(function(){

            change_captcha();

        });



        function change_captcha(){

            $.ajax({

                type: "GET",

                url: "<?php echo e(route('capcha')); ?>",

                success:function(captcha)

                {

                    //console();

                    

                    $("#capcha").attr("src",captcha);

                }

            });

        }



        var ajax_sendding = false;

        $("button[name='sendmail']").click(function(e){
        	//alert(123);

            // kiểm tra trạng thái có đang gửi ajax không

            // Nếu đang gửi thì dừng

            if (ajax_sendding == true){

                return false;

            }

             

            // Ngược lại thì bắt đầu gửi ajax

            // Nhưng trước hết gán biến ajax_sendding = true để khi người dùng click tiếp 

            // se không có tác dụng

            ajax_sendding = true;

            // Bật span loaddding lên

            $('#loadding').show();

            $.ajax({

                type: "GET",

                url: "<?php echo e(route('danhgia')); ?>",

                data: { 

                        _token : $('input[name="_token"]').val(),

                        phone : $('input[name="phone"]').val() , 

                        noidung : $('textarea[name="noidung"]').val() , 

                        hoten : $('input[name="hoten"]').val() , 

                        email : $('input[name="email"]').val() , 

                        xacnhan : $('input[name="xacnhan"]').val()

                    },

                success:function(x)

                {

                	// alert('ok');

                    var arr = x.split('-');

                    if(arr[1] == 'success'){

                        $('.NormalTextBox').val('');

                    }



                    

                    change_captcha();

                    alert(arr[0]);



                    

                },
                error:function()
                {
                	alert('Gửi mail không thành công');
                }

            }).always(function(){

                ajax_sendding = false;

                $('#loadding').hide();

            });

        });

    

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>