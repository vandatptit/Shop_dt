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
        <!--  Lấy dữ liệu người dùng nhập vào rồi xử lý  -->
        <div class="col-md-10" style="border-left: 1px solid #ccc;">
            <!-- <div class="container-fluid"> -->
                <h2 class="page-header">Thêm Sản Phẩm Mới</h2>
                <?php
                ?>
                <form action="" method="post" style="display: block;">
                    <table class="table table-bordered table-hover table-responsive">
                        <tr>
                            <td>ID</td>
                            <td>
                                <input type="text" name="txtId" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Tên Sản Phẩm</td>
                            <td>
                                <input type="text" name="txtName" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td>
                                <input type="text" name="txtPrice" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Số Lượng</td>
                            <td>
                                <input type="text" name="txtQuantity" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Danh Mục</td>
                            <td>
                                <select class="form-control" name="cbCategory">
                                    <?php
                                    while($row = $this->all->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option value="<?php echo $row['categoryID']; ?>"><?php echo $row['categoryName']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mô Tả</td>
                            <td>
                                <textarea type="text" name="txtDesc" class="form-control"></textarea>
                            </td>
                            <script>
                                CKEDITOR.replace('txtDesc');
                            </script>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="btnSave" value="Lưu" class="btn btn-success"/>
                                <a href="<?php echo URL_BASE; ?>admin/product" class="btn btn-danger">Quay lại danh sách sản phẩm</a>
                            </td>
                        </tr>

                    </table>
                </form> 
            </div>
        </div>
    </div>
