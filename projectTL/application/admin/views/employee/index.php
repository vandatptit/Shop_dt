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
                <h2 class="page-header">Danh Mục Nhân Viên</h2>
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
                        <a href="<?php URL_BASE; ?>index/addemployee" class="btn btn-success">Thêm Nhân Viên Mới</a>
                    </div>
                </div>
                <br>
                <?php
                echo "<table class='table table-bordered table-hover table-responsive'>";
                echo "<tr>";
                echo "<th class='text-center'>ID</th>";
                echo "<th class='text-center'>Họ Tên</th>";
                echo "<th class='text-center'>Địa Chỉ</th>";
                echo "<th class='text-center'>Số Điện Thoại</th>";
                echo "<th class='text-center'>Chức năng</th>";
                echo "</tr>";
                while ($row = $this->casau->fetch(PDO::FETCH_ASSOC)) {
                    extract($rows);
                    echo "<tr>";
                    echo "<td class='text-center'>" . $row['employeeID'] . "</td>";
                    echo "<td class='text-center'>" . $row['employeeName'] . "</td>";
                    echo "<td class='text-center'>" . $row['address'] . "</td>";
                    echo "<td class='text-center'>" . $row['phone'] . "</td>";
                    echo "<td class='text-center'>";
                    echo "<a href='updateEmployee/?id=" . $row['employeeID'] . "' class='btn btn-primary'>Sửa</a>&nbsp;";
                    echo "<a href='employeeDetail/?id=" . $row['employeeID'] . "' class='btn btn-info'>Chi tiết</a>&nbsp;";
                    echo "<a href='deleteEmployee/?id=" . $row['employeeID'] . "' class='btn btn-danger'>Xoá</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>  
            </div>
        </div>
    </div>