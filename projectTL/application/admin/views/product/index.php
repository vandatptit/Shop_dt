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
                <h2 class="page-header">Danh Sách Sản Phẩm</h2>
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
                        <a href="<?php echo URL_BASE; ?>admin/index/addproduct" class="btn btn-success">Thêm Sản Phẩm Mới</a>
                    </div>
                </div>
                <br>
                <?php
                    // $action = isset($_GET['action']) ? $_GET['action'] : "";
                    // if ($action == "deleted"){
                    //     echo "<div class='alert alert-success'>Xoá dữ liệu thành công</div>";
                    // }
                ?>
                
                <!-- <div class="container-fluid"> -->
                    <?php
                    echo "<table class='table table-bordered table-hover table-responsive'>";
                    echo "<tr>";
                    echo "<th class='text-center'>ID</th>";
                    echo "<th class='text-center'>Tên SP</th>";
//                    echo "<th class='text-center'>Danh Mục</th>";
                    // echo "<th class='text-center' style='width:700px;'>Mô Tả</th>";
                   echo "<th class='text-center'>Số Lượng</th>";
                   echo "<th class='text-center'>Giá</th>";
                    echo "<th class='text-center'>Chức Năng</th>";
                    echo "</tr>";
                    while ($row = $this->proData->fetch(PDO::FETCH_ASSOC)) {
                        extract($rows);
                        echo "<tr>";
                        echo "<td class='text-center'>" . $row['productID'] . "</td>";
                        echo "<td class='text-center'>" . $row['productName'] . "</td>";
//                        echo "<td class='text-center'>" . $row['categoryID']. "</td>";
                        // echo "<td class='text-center'>" . $row['description'] . "</td>";
                       echo "<td class='text-center'>" . $row['quantity'] . "</td>";
                       echo "<td class='text-center'>" . $row['unitPrice'] . "</td>";
                        echo "<td class='text-center'>";
                            echo "<a href='updateProduct/?id=" . $row['productID'] . "' class='btn btn-primary'>Sửa</a>&nbsp;";
                            echo "<a href='productDetail/?id=" . $row['productID'] . "' class='btn btn-info'>Chi Tiết</a>&nbsp;";
                            echo "<a href='deleteProduct/?id=" . $row['productID'] . "' class='btn btn-danger'>Xóa</a>";
                        echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                    ?>  
                </div>
            </div>
    <!-- Mã JS thực hiện xoá bản ghi-->
            <!-- <script>
                function delete_product(id) {
                    var response = confirm("Bạn có chắc muốn xoá SP?");
                    if (response == true) {
                        window.location = "delete.php?id=" + id;
                    }
                }
            </script> -->
</div>