  <div class="container-fluid">
        <div class="container" id="slide-show">
            <div class="row">
                <div class="col-sm-9" id="slide-show-hot">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo URL_BASE;?>templates/default/image/banner1.png" alt="Los Angeles" style="width:100%;">
                            </div>
                        
                            <div class="item">
                                <img src="<?php echo URL_BASE;?>templates/default/image/banner2.png" alt="Chicago" style="width:100%;">
                            </div>
                        
                            <div class="item">
                                <img src="<?php echo URL_BASE;?>templates/default/image/banner4.jpg" alt="New york" style="width:100%;">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3" id="service">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="service">
                                <a href="#"><img src="<?php echo URL_BASE;?>templates/default/image/service1.jpg" alt="Ưu đãi màu hè" width="100%"/></a>
                            </div>
                            <div class="service">
                                <a href="#">
                                    <div id="service2">
                                        <i class="fa fa-gift" style="padding-right: 5%;"></i>
                                        MUA TRẢ GÓP
                                        <h4 class="text-center">Ưu đãi khủng</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end Slide show-->

    <div class="container" id="slide-product">
        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>
    </div><!--end Slider product-->
 <div class="container-fluid">
        <div class="container" id="product-header">
            <div class="service_shop">
                <ul class="ht">
                                    <li><a href="#"><i class="fas fa-sync-alt" ></i>Bảo hành 1 đổi 1</a></li>
                                    <li><a href="#"><i class="fa fa-life-ring"></i>Hỗ trợ trả góp 0%</a></li>
                                    <li><a href="#"><i class="fa fa-check"></i>Sản phẩm chính hãng</a></li>
                                    <li><a href="#"><i class="fa fa-truck"></i>Vận chuyển miễn phí</a></li>
                                </ul>
            </div>
        </div>
    </div><!--end Product header-->
    
    <div class="container-fluid" id="product-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-9" id="product">
                    <div class="container-fluid">
                        <div class="row">

                            <h2 class="page-header" >Danh sách sản phẩm</h2>
                            <div id="result">
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-3" id="right">
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
    </div><!--end Product list-->