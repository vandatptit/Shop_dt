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
							<tr>
								<th class="text-center">ID</th>
								<td>
									<!-- <input type="text" name="txtID" class="form-control" value=""/> -->
									<?php echo $this->ys['employeeID']; ?>
								</td>
							</tr>
							<tr>
								<th class="text-center">Họ Tên</th>
								<td>
									<?php echo $this->ys['employeeName']; ?>
									<!-- <input type="text" name="txName" class="form-control" value="" /> -->
								</td>
							</tr>
							<tr>
								<th class="text-center">Địa Chỉ</th>
								<td>
									<?php echo $this->ys['address']; ?>
									<!-- <input type="text" name="txtAddress" class="form-control" value="" /> -->
								</td>
							</tr>
							<tr>
								<th class="text-center">Email</th>
								<td>
									<?php echo $this->ys['email']; ?>
									<!-- <input type="text" name="txtEmail" class="form-control" value="" /> -->
								</td>
							</tr>
							<tr>
								<th class="text-center">Pass</th>
								<td>
									<?php echo $this->ys['password']; ?>
									<!-- <input type="text" name="txtPass" class="form-control" value="" /> -->
								</td>
							</tr>
							<tr>
								<th class="text-center">Phone</th>
								<td>
									<?php echo $this->ys['phone']; ?>
									<!-- <input type="text" name="txtPhone" class="form-control" value="" /> -->
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<!-- <input type="submit" name="btnSave" value="Lưu Lại" class="btn btn-success"/> -->
									<a href="<?php echo URL_BASE; ?>admin/adminemployee" class="btn btn-danger">Quay lại quản lý nhân viên.</a>
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