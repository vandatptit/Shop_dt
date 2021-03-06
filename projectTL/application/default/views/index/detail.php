<div class="container">
    <h2 class="page-header">Thông tin chi tiết sản phẩm</h2>
    <div class="container" id="detail_product">
		<div class="row">
			<div class="col-md-5" id="detail_img">
				<div id="img_chinh" style="border: 1px solid #ccc;">
					<img data-image="1" style="width: 450px;
	height: 480px;" class="active" src="<?php echo URL_BASE;?>templates/default/image/<?php  print_r($this->result['image']);?> ">
					<!-- <img data-image="2" src="assets/img/ct_a2.jpg">
					<img data-image="3" src="assets/img/ct_a3.jpg">
					<img data-image="4" src="assets/img/ct_a4.jpg"> -->
				</div>
				<!-- <center><ul class="gp">
					<li data-image="1"><img src="assets/img/ct_a1.jpg"></li>
					<li data-image="2"><img src="assets/img/ct_a2.jpg"></li>
					<li data-image="3"><img src="assets/img/ct_a3.jpg"></li>
					<li data-image="4"><img src="assets/img/ct_a4.jpg"></li>
				</ul>
			</center> -->
			<!-- <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
			<div class="owl-next" style=""><i class="fa fa-angle-right"></i></div> -->
			</div>
			<div class="col-md-7" id="detail_sp">
				<h2 class="title_product_detail"><?php  print_r($this->result['productName']);?></h2>
				<div class="item-price">
					Giá bán:<span class="price product-price" style="font-size: 23px;"><?php  print_r(number_format($this->result['unitPrice']));?>đ</span>
					<span id="old-price"><?php  print_r(number_format($this->result['ParentPicre']));?>đ</span>
					<p class="btn btn-warning" style="margin-left: 70px;">Trả góp 0%</p>
				</div>
				<p>Mã sản phẩm: <?php  print_r($this->result['productID']);?></p>
				<p>Nhà sản xuất:SamSung</p>
				<p class="dh"> SẢN PHẨM NHẬN GIAO HÀNG TRONG 1 GIỜ </p>
				<div class="container" id="color">
					<div class="row">
					<div class="col-md-2"><b><p>Chọn màu:</p></b></div>
					<div class="col-md-3" id="mau">
						<button class="btn btn-info">Xanh</button>
						<button class="btn btn-warning">Vàng</button>
						<button class="btn btn-basic" style="">Đen</button>
					</div>
					</div>
				</div>

				<div class="row" id="thanh_toan" style="margin-top: 20px;">
					<div class="col-md-6" ><a href="<?php echo URL_BASE;?>index/view_cart?productID='<?php print_r($this->result['productID']);?>'" class="btn btn-danger" id="mua"><b>MUA NGAY</b><br>Giao hàng tận nơi</a></div>
					<div class="col-md-4"  ><p class="btn btn-warning" id="tg"><b style="font-size: 16px;margin-top: 10px;">Thêm vào giỏ hàng</b></div>
				</div>
				<p class="text-center" style="margin-top: 20px;">Gọi ngay <b><span style="color: red">10801008</span></b> để được tư vấn(miễn phí cuộc gọi)</p>
		</div>
	</div>
</div>
	<div class="container" id="title_mota">
		<div class="group-tabs">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">This is Home content</div>
        <div role="tabpanel" class="tab-pane" id="profile">This is Profile content</div>
        <div role="tabpanel" class="tab-pane" id="messages">This is Messages content</div>
        <div role="tabpanel" class="tab-pane" id="settings">This is Settings content</div>
      </div>
    </div>
	</div>
	<div class="container" id="thong_so">
		<div class="col-md-8">
			<img data-image="1" style="width: 450px; margin-top: 30px;
	height: 480px;" class="active" src="<?php echo URL_BASE;?>templates/default/image/<?php  print_r($this->result['image']);?> ">
		</div>
		<div class="col-md-4">
			<h3 class="title_title">Thông số kỹ thuật</h3>
			<div class="row">
				<div class="col-md-5" id="title_left">
					<p>Model:</p>
					<p>Màu sắc:</p>
					<p>Nhà sản xuất:</p>
					<p>Xuất xứ:</p>
					<p>Thời gian bảo hành:</p>
					<p>Địa điểm bả hành:</p>
					<p>Hệ điều hành:</p>
					<p>Chipset:</p>
					<p>CPU:</p>
					<p>RAM:</p>
				</div>
				<div class="col-md-5" id="title_right">
					<p><?php  print_r($this->result['productName']);?></p>
					<p>Xanh</p>
					<p>SAMSUNG</p>
					<p>Đang cập nhật</p>
					<p>12 tháng</p>
					<p>TL MOBIE</p>
					<p>Android 7</p>
					<p>Exynos 7870 Octa</p>
					<p>1.6 GHz</p>
					<p>3GB</p>
				</div>
			</div>
			<div class="row btn btn-info" style="margin-left: 50px;margin-top: 20px;">
				<p class="text-center">Xem thêm thông số kỹ thuật+</p>
			</div>
		</div>
	</div>
	<div class="container" id="chitiet_sp">
		
		<h2 class="text-center">Thiết kế tinh tế, thu hút mọi ánh nhìn</h2>
		<center><p><?php print_r($this->result['description']); ?> </p></center>
		<div style="margin: 0px auto; width: 450px;">
		<img data-image="1" style="width: 450px;
	height: 480px; " class="active" src="<?php echo URL_BASE;?>templates/default/image/<?php  print_r($this->result['image']);?> ">
		</div>
		<center><a href="#" class="text-center" style=" margin-top: 20px;padding-bottom: 20px;display: block;">Xem thêm các tính năng</a></center>
	
	</div>
	

	<div class="container" id="chitiet_sp">
		<div class="row">
		<div class="col-md-7" style="border:1px solid #ccc;padding-left: 20px; padding-bottom: 30px;">
			<div id="title_danh_gia"><h3>Đánh giá nhận xét về <?php  print_r($this->result['productName']);?></h3></div>
			<div class="container">
				<div class="row"></div>
			</div>
			<div id="nx">
				
				<textarea placeholder="  Viết bình luận của bạn..." name="txtDesc" id="txtDesc"></textarea>
				<script>
                            CKEDITOR.replace('txtDesc');
                </script>
				
			</div>
			<div class="row" id="cnang">
				<input type="text" name="" placeholder="   Họ tên">
				<input type="text" name="" placeholder="   Số điện thoại">
				<button href="" class="btn btn-info" id="button" onclick="comment();">Gửi nhận xét</button>
			</div>
		</div>
		<div class="col-md-4" id="suppost" >
			<center><h3>Chúng tôi luôn sẵn sàng<br> để giúp đỡ bạn</h3></center>
			<img src="<?php echo URL_BASE?>templates/default/image/suppost.jpg" >
			<center><h3>Để được hỗ trợ tốt nhất hãy gọi</h3></center>
			<center><b><h2 style="color: green;">19001006</h2></b></center>
		</div>
	</div>
	</div>
	<div class="container" style="padding-bottom: 20px;">
		<div id="titie_product">
					<h2 class="page-header">Các sản phẩm liên quan</h2>
					
					
		</div>
		<div id="ds_dt" class="container">
							<div class="row">
								
							</div>
				</div>
	</div>
</div>