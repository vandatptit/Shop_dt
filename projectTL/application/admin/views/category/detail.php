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
                <h2 class="page-header">Chi Tiết Danh Mục</h2>
                <br>
                <?php
                    //require 'application/admin/controllers/index.php';
//                    
//                    $cate = $category->getCategoryById();
                ?>
                <!-- <div class="container-fluid"> -->
                    
                    <table class="table table-bordered table-hover table-responsive">
<!--                        <tr>-->
<!--                            <th class="text-center">ID</th>
                            <th class="text-center">Tên SP</th>
                            <th class="text-center">Danh Mục</th>
                            <th class="text-center" style='width:50%px;'>Mô tả</th>
                            <td class=""></td>-->
<!--                        <tr>-->
                        <tr>
                            <th class="text-center">ID</th>
                            <td class=""><?php echo $this->procate['categoryID'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Danh Mục</th>
<!--                            <td class="text-center"></td>-->
                            <td class=""><?php echo $this->procate['categoryName']; ?></td>
<!--                            <td class="text-center"></td>-->
                        </tr>
<!--                        <tr>
                            <th class="text-center">Danh Mục</th>
                            <td class=""></td>
                        </tr>-->
                        <tr>
                            <th class="text-center" style='width:50%px;'>Mô tả</th>
                            <td class=""><?php echo $this->procate['description']; ?></td>
<!--                        <script>
                            CKEDITOR.replace('txtDesc');
                        </script>-->
                        </tr>
<!--                        <tr>
                            <th class="text-center">Giá</th>
                            <td class=""></td>
                        </tr>-->
<!--                        <tr>
                            <th class="text-center">Hình Ảnh</th>
                            <td class=""><img src="" alt="" class="img-fluid img-thumbnail"/></td>
                        </tr>-->
                        <tr>
                            <td></td>
                            <td>
                                <a href="<?php echo URL_BASE; ?>admin/category" class="btn btn-danger">Quay lại danh mục sản phẩm</a>
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
           <!--      </div>
            </div> -->
        </div>
    </div>
</div>