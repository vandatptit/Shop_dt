<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul style="border:1px solid #ccc;">
                <li><a href="<?php echo URL_BASE; ?>admin/product">Quản Lý Sản Phẩm</a></li>
                <li><a href="<?php echo URL_BASE; ?>admin/category">Quản Lý Danh Mục</a></li>
                <li><a href="#">Quản Lý Khách Hàng</a></li>
                <li><a href="<?php echo URL_BASE; ?>admin/adminemployee">Quản Lý Nhân Viên</a></li>
                <li><a href="#">Quản Lý Hóa Đơn</a></li>
                <li><a href="#">Quản Lý Thư Phản Hồi</a></li>
            </ul>
        </div>
        <div class="col-md-10" style="border: 1px solid #ccc;">
            <!-- <div class="container-fluid"> -->
                <h2 class="page-header">UPDATE Danh Mục</h2>
                <br>
                <?php
//                $id = isset($_GET['id']) ? $_GET['id'] : "";
//                require 'libs/model.php';
//                require 'application/admin/models/product.php';
//                require 'application/admin/models/category.php';
//
//                //Kết nối CSDL
//                $database = new Libs_Model();
//                $db = $database->getConnection();
//                $objProduct = new Admin_Models_Product($db);
//                $objCategory = new Admin_Models_Category($db);
//
//                if (isset($_POST)) {
//                    try {
//                        //                    $objProduct->productID = $_POST['txtID'];
//                        $objProduct->productName = $_POST['txtName'];
//                        //                    $objProduct->price = $_POST['txtPrice'];
//                        $objProduct->categoryID = $_POST['cbCategory'];
//                        $objProduct->description = $_POST['txtDesc'];
//                        $objProduct->productID = $id;
//
//                        if ($objProduct->updateProduct()) {
//                            echo "<div class='alert alert-success'>Cập nhật sản phẩm thành công.</div>";
//                        } else {
//                            echo "<div class='alert alert-danger'>Quá trình cập nhật thất bại.</div>";
//                        }
//                    } catch (PDOException $ex) {
//                        die("Lỗi: " . $ex->getMessage());
//                    }
//                }
                ?>

                <!-- <div class="container-fluid"> -->
                    <form action="" method="post" enctype="" style="display: block;">
                        <table class="table table-bordered table-hover table-responsive">
<!--                            <tr>
                                <th class='text-center'>ID</th>
                                <td class='text-center'><input name="txtID" type="text" value="" class="form-control"/></td>-->
<!--                                <th class='text-center'>Tên SP</th>
                                <th class='text-center'>Danh Mục</th>
                                <th class='text-center' style='width:70%px;'>Mô tả</th>-->
<!--                            <tr>-->
                            <!-- <tr>
                                <th class="text-center">ID</th>
                                <td class="">
                                    <input name="txtID" type="text" value="" class="form-control"/>
                                </td>
                            </tr> -->
                            <tr>
                                <th class="text-center">Tên Danh Mục</th>
<!--                                <td class='text-center'><input name="txtID" type="text" value="" class="form-control"/></td>-->
                                <td class="">
                                    <input name="txtName" type="text" value="<?php echo $this->oppa['categoryName']; ?>" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style='width:500px;'>Mô tả</th>
                                <td class="">
                                    <textarea name="txtDesc" type="text"  value="" class="form-control"/><?php echo $this->oppa['description']; ?></textarea>
                                </td>
                            <script>
                                CKEDITOR.replace('txtDesc');
                            </script>
                            </tr>
<!--                            <tr>
                                <th class="text-center">Giá</th>
                                <td class="text-center"><input name="txtDesc" type="text" value="" class="form-control"/></td>
                            </tr>-->
<!--                            <tr>
                                <th class="text-center">Hình ảnh</th>
                                <td class=""><input type="file" name="file" class="form-control"/></td>
                            </tr>-->
                            <tr>
                                <th></th>
                                <td>
                                    <input type="submit" class="btn btn-success" name="btnUpdate" value="UPDATE"/>
                                    <a href="<?php echo URL_BASE; ?>admin/category" class="btn btn-danger">Quay lại danh sách danh mục</a>
                                </td>
                            </tr>
                        </table>
                    </form>
        </div>
    </div>
</div>