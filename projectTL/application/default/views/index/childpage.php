<div class="container-fluid" style="padding-bottom: 200px; margin-left: 10px; margin-right: 10px;">
    <div class="row">
    	<div class="col-md-2" id="filter">
         <h3 class="page-header text-center">Tìm kiếm nhanh:</h3>   
         <p style="color: #ff8b31;">Lọc theo nhãn hiệu:</p>
         <select style="width: 110px; height: 25px;">
             <option>--Nhãn hiệu--</option>
             <option></option>
         </select>
         <p style="color: #ff8b31;margin-top: 15px;">Lọc theo giá tiền:</p>
         <input type="radio" name="price" >3tr-5tr
         <input type="radio" name="price" >5tr-10tr
         <input type="radio" name="price" >10tr trở lên
         <p style="color: #ff8b31;margin-top: 15px;">Lọc theo màn hình:</p>
         <input type="radio" name="price" >3.0"
         <input type="radio" name="price" >3.0"-5.0"
         <input type="radio" name="price" >6.0" trở lên
         <p style="color: #ff8b31;margin-top: 15px;">Lọc theo pin:</p>
         <input type="radio" name="price" >dưới 4000mAh"
         <input type="radio" name="price" >trên 4000mAh
        </div>
    	<div class="col-md-7">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-2">
    					<p style="float: right;"><b>Sắp xếp theo:</b></p>
    				</div>
    				<div class="col-md-10" id="sort">
    					<ul>
    						<li><input type="radio" name="sx">Bán chạy nhất</li>
    						<li><input type="radio" name="sx">Quan tâm nhất</li>
    						<li><input type="radio" name="sx">Giá thấp đến cao</li>
    						<li><input type="radio" name="sx">Giá cao xuống thấp</li>
    					</ul>
    				</div>
    			</div>
    		</div>
            <div class="container-fluid">
    		<?php 				
    							if($this->result != ""){
                                while($row = $this->result->fetch(PDO::FETCH_ASSOC)){
                                    extract($row);
                                ?>
                                <div id="phone">
                                        <div class="col-md-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $id; ?>"><img src="<?php echo URL_BASE;?>templates/default/image/<?php echo $image;?>" alt="img25"/></a>
                                                    <figcaption>
                                                        <p>
                                                        <span style="background: #ff8b31;padding: 5px;border-radius: 5px 5px 0px 0px;"><a href="<?php echo URL_BASE;?>index/view_cart?productID=<?php echo $productID?>">Mua ngay</a></span>
                                                        <span style="background:#ff8b31;padding:5px 1px 5px 1px;border-radius: 5px 5px 0px 0px;"><a href="#">Thêm giỏ hàng</a></span>
                                                    </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="#"><b><?php echo $productName;?></b></a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">$<?php echo $unitPrice;?></span>
                                                <span class="old-price">$<?php echo $ParentPicre;?></span>
                                            </div>
                                        </div>
                                </div>
                                <?php
                            }}else{
                                echo "<div class='alert alert-success'>Không có sản phẩm nào.</div>";
                            }

                        
                            ?>
            </div>
    	</div>
    	<div class="col-md-2" style="margin-top: 5px;">
    		  <div class="container-fluid" id="menu-right">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="menu-right-header">
                                        <i class="fa fa-tags" style="padding-right: 2%;"></i>
                                        Sản phẩm bán chạy nhất
                                    </div>
                                    <div class="menu-right-content">
                                        <a href="#">
                                            <div class="product-seller">
                                                <div class="img-seller">
                                                    <img src="<?php echo URL_BASE;?>templates/default/image/ct_a1.jpg" alt="img25" />
                                                </div>
                                                <div class="name-seller">
                                                    SamSung Galaxy Note3
                                                </div>
                                                <div class="price-seller">
                                                    <span class="new">4769000đ</span>
                                                    <span class="old">570000đ</span>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#">
                                            <div class="product-seller">
                                                <div class="img-seller">
                                                    <img src="<?php echo URL_BASE;?>templates/default/image/sac.png" alt="img25" />
                                                </div>
                                                <div class="name-seller">
                                                   Sạc dự phòng icore
                                                </div>
                                                <div class="price-seller">
                                                    <span class="new">150000 đ</span>
                                                    <span class="old">250.000 đ</span>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#">
                                            <div class="product-seller">
                                                <div class="img-seller">
                                                    <img src="<?php echo URL_BASE;?>templates/default/image/laptop.png" alt="img25" />
                                                </div>
                                                <div class="name-seller">
                                                    ASUS
                                                </div>
                                                <div class="price-seller">
                                                    <span class="new">7800000 đ</span>
                                                    <span class="old">9345000 đ</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
    	</div>
    </div>
</div>