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
                <!-- <p class="alert alert-success">Chào Mừng Bạn Đến Với Trang Quản Trị</p> -->
            <!-- </div> -->
            	<h2 class="page-header">Thêm Nhân Viên Mới</h2>

            	<form action="" method="post" style="display: block;">
            		<table class="table table-hover table-bordered">
            			<tr>
            				<th class="text-center">ID</th>
            				<td>
            					<input type="text" name="txtID" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<th class="text-center">Họ Tên</th>
            				<td>
            					<input type="text" name="txtName" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<th class="text-center">Địa Chỉ</th>
            				<td>
            					<input type="text" name="txtAddress" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<th class="text-center">Email</th>
            				<td>
            					<input type="text" name="txtEmail" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<th class="text-center">Pass</th>
            				<td>
            					<input type="password" name="txtPass" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<th class="text-center">Phone</th>
            				<td>
            					<input type="text" name="txtPhone" class="form-control" />
            				</td>
            			</tr>
            			<tr>
            				<td></td>
            				<td>
            					<input type="submit" name="btnsave" value="Lưu Lại" class="btn btn-success"/>
            					<a href="<?php echo URL_BASE; ?>admin/adminemployee" class="btn btn-danger">Quay lại quản lý nhân viên.</a>
            				</td>
            			</tr>
            		</table>
            	</form>
        </div>
    </div>
</div>