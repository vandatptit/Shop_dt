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
                <h2 class="page-header">Danh Mục Sản Phẩm</h2>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" name="search"  style="width: 200px;
                               height: 32px;
                               border-radius: 5px;
                               border: 1px solid #ccc;
                               /* height: 190px; */
                               margin-left: 16px;">
                        <input type="submit" name="" value="Search" class="btn btn-info">
                    </div>
                    <div class="col-md-2">
                        <a href="<?php URL_BASE; ?>index/addcategory" class="btn btn-success">Thêm danh mục mới</a>
                    </div>
                </div>
                <br>
                    <?php
                    echo "<table class='table table-bordered table-hover table-responsive'>";
                    echo "<tr>";
                    echo "<th class='text-center'>ID</th>";
                    echo "<th class='text-center'>Danh mục</th>";
                    echo "<th class='text-center' style='width:650px;'>Mô tả</th>";
                    echo "<th class='text-center'>Chức năng</th>";
                    echo "</tr>";
                    while ($row = $this->proCate->fetch(PDO::FETCH_ASSOC)) {
                        extract($rows);
                        echo "<tr >";
                        echo "<td class='text-center'>" . $row['categoryID'] . "</td>";
                        echo "<td class='text-center'>" . $row['categoryName'] . "</td>";
                        echo "<td class='text-center'>" . $row['description'] . "</td>";
                        echo "<td class='text-center'> ";
                            echo "<a href='updateCategory/?id=" . $row['categoryID'] . "' class='btn btn-primary'>Sửa</a>&nbsp;";
                            echo "<a href='categoryDetail/?id=" . $row['categoryID'] . "' class='btn btn-info'>Chi tiết</a>&nbsp;";
                            echo "<a href='deleteCategory/?id=" . $row['categoryID'] . "' class='btn btn-danger'>Xoá</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>  
        </div>
    </div>
</div>