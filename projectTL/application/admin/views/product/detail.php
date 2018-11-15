<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" >
            <ul style="border:1px solid #ccc;">
                <li><a href="<?php echo URL_BASE; ?>admin/product">Quản Lý Sản Phẩm</a></li>
                <li><a href="<?php echo URL_BASE; ?>admin/category">Quản Lý Danh Mục</a></li>
                <li><a href="#">Quản Lý Khách Hàng</a></li>
                <li><a href="<?php echo URL_BASE; ?>admin/adminemployee">Quản Lý Nhân Viên</a></li>
                <li><a href="#">Quản Lý Hóa Đơn</a></li>
                <li><a href="#">Quản Lý Thư Phản Hồi</a></li>
            </ul>
        </div>
        <div class="col-md-10" style="border-left: 1px solid #ccc;">
            <!-- <div class="container-fluid"> -->
                <h2 class="page-header">Chi Tiết Sản Phẩm</h2>
                <br>
               
<!--//                    require 'libs/model.php';
//                    require 'application/admin/models/product.php';
//                    require 'application/admin/models/category.php';
//                    
//                    //Kết Nối CSDL
//                    $database = new Libs_Model();
//                    $db = $database->getConnection();
//                    
//                    $product = new Admin_Models_Product($db);
//                    $category = new Admin_Models_Category($db);
//                    $pro = $product->getProductAll();
//                    $cate = $category->getAllCategory();-->

                <!-- <div class="container-fluid"> -->
                    <table class="table table-bordered table-hover table-responsive">
                        <tr>
                            <th class="text-center">Tên SP</th>
<!--                            <td class="text-center"></td>-->
                            <td class=""><?php echo $this->prodata['productName']; ?></td>
<!--                            <td class="text-center"></td>-->
                        </tr>
                        <!-- <tr>
                            <th class="text-center">Danh Mục</th>
                            <td class="">
                                <!-- <select class="form-control" name="cbCategory">
                                    <?php
                                    {
                                        ?>
                                        <option value=""></option>
                                        <?php
                                    }
                                    ?>
                                </select> -->
                            </td>
                        </tr> -->
                        <tr>
                            <th class="text-center">Số Lượng</th>
                            <td class=""><?php echo $this->prodata['quantity']; ?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Giá</th>
                            <td class=""><?php echo $this->prodata['unitPrice']; ?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Hình Ảnh</th>
                            <td class=""><img src="<?php echo URL_BASE . "templates/default/image/" . $this->prodata['image']; ?>" alt="" class="img-fluid img-thumbnail"/></td>
                        </tr>
                        <tr>
                            <th class="text-center" style='width:50%px;'>Mô tả</th>
                            <td class=""><?php echo $this->prodata['description']; ?></td>
<!--                        <script>
                            CKEDITOR.replace('txtDesc');
                        </script>-->
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="<?php echo URL_BASE; ?>admin/product" class="btn btn-danger">Quay lại danh sách sản phẩm</a>
                            </td>
                        </tr>
                    </table>
                            <!--<td class='form-control'>
                        </tr>
                        <tr>
                    -->
<!--                            <th class='form-control'>Tên SP</th>-->
<!--                        <tr>
                    <th class='form-control' style='width:100%px;'>Mô tả</th>
                    <td class=''></td>
                </tr>-->
<!--                        <tr>
                <td class='text-center'></td>
                <td class='text-center'></td>
                <td class='text-center'></td>
            </tr>-->
        </div>
    </div>
</div>