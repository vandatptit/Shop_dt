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
        <div class="col-md-10" style="border-left: 1px solid #ccc;">
            <!-- <div class="container-fluid"> -->
                <h2 class="page-header">Thêm danh mục</h2>
                <?php

                ?>
                <form action="" method="post" style="display: block;">
                    <table class="table table-bordered table-hover">
                        <tr> 
                            <th class="text-center">ID Danh Mục</th>
                            <td>
                                <input type="text" name="txtId" class="form-control"/>
                            </td>
                            <!-- class="text-center">ID danh mục -->
                        </tr>
                        <tr>
                            <th class="text-center">Tên danh mục</th>
                            <td>
                                <input type="text" name="txtName" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">Mô Tả</th>
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
                                <input type="submit" value="Thêm Danh Mục" name="btnSave" class="btn btn-success"/>
                                <a href="<?php echo URL_BASE; ?>admin/category" class="btn btn-danger">Quay Lại Trang Danh Mục!!</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
    </div>
</div>

<!--<div class="container">
    <h2 class="page-header">Thêm mới SP</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" name="txtName" class="form-control"/>
            </td>
        </tr>
    </table>
</div>-->