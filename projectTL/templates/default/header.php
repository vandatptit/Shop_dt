<div class="container-fluid" style="background: #ff8b31; height: 20px;">
    <div class="container">
        <div class="col-md-10" ><p style="color: white">HotLine:0332155830</p></div>
        
        </div>
</div>
 <div class="container-fluid" id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3" id="logo">
                   <a href="<?php echo URL_BASE;?>"> <img src="<?php echo URL_BASE;?>templates/default/image/logotl.png" alt="logo" width="110px" height="40px"></a>
                </div>
                <div class="col-xs-5  col-sm-5">
                    <div class="container-fluid">
                        <div class="row" id="search">
                            <div class="col-sm-9" style="padding-right: 1px;">
                                <input style="margin-left: -12px;margin-top: 2px;" type="search" name="txtSearch" id="txtSearch">
                            </div>
                                
                            <div class="col-sm-3" style="padding: 0px;">
                                <input onclick="showdata()" type="button" id="btnSearch" name="btnSearch"  class="btn btn-info" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3  col-sm-3" id="cart">
                    <a type="button" href="<?php echo URL_BASE;?>index/view_cart">
                        <i class="fa fa-cart-arrow-down" style="font-size: 24px; color:#ff8b31;"></i>
                        <div class="badge" style="background: #ff8b31;" id="cat">
                            
                        </div>
                    </a>
                </div>
                <div class="col-xs-2">
                    <div id="dnhap" class="user-area dropdown float-right" style="margin-left: 400px;margin-top: -24px;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo URL_BASE;?>templates/default/image/icon_cus.jpg" style="width: 35px;height: 25px;">
                        </a>

                        <div class="user-menu dropdown-menu" style="position: absolute;will-change: transform;">
                                <a class="nav-link" href="<?php URL_BASE;?>Login" style="color: #272c33;display: block;font-size: 14px;line-height: 22px;margin-left: 20px;padding: 5px 0;"><i class="fa fa- user"></i>Đăng nhập</a>

                                <a class="nav-link" href="register" style="color: #272c33;display: block;font-size: 14px;line-height: 22px;margin-left: 20px;padding: 5px 0;"><i class="fa fa- user"></i>Đăng ký </a>

                                <a class="nav-link" href="<?php echo URL_BASE;?>LogOut" style="color: #272c33;display: block;font-size: 14px;margin-left: 20px;line-height: 22px;padding: 5px 0;"><i class="fa fa -cog"></i>Thoát</a>
                        </div>
                    </div>
        </div>
            </div>
        </div>

    </div><!--end Header-->
    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display --> 
           <div class="container" id="nav_con">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL_BASE;?>">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <?php
                        $database = new Libs_Model();
                        $db = $database->getConnection();
                        $category = new Default_Models_Category($db);
                        $catObj = $category->getAllParentCategory();
                        while($rowCat = $catObj->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <li>
                            <a href="<?php echo URL_BASE;?>index/childpage?categoryID=<?php echo $rowCat['categoryID'];?>"><?php echo $rowCat['categoryName'] ;?></a>
                        </li>
                        <?php
                         }
                          ?>
                        <li>
                            <a href="<?php echo URL_BASE;?>index/contact" onclick="contact();">LIÊN HỆ</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_BASE;?>index/shop_guide" onclick="shop_guide();">HƯỚNG DẪN MUA HÀNG</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!--end Navigation bar-->