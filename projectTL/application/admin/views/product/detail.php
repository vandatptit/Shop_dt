<div class="container-fluid">
	<div class="row">
		<div class="col-md-2" >
			<ul style="border:1px solid #ccc;">
				<li><a href="<?php echo URL_BASE;?>admin/product">Quản lý sản phẩm</a></li>
				<li><a href="#">Quản lý danh mục</a></li>
				<li><a href="#">Quản lý khách hàng</a></li>
				<li><a href="#">Quản lý nhân viên</a></li>
				<li><a href="#">Quản lý hóa đơn</a></li>
				<li><a href="#">Quản lý thư phản hồi</a></li>
			</ul>
		</div>
		<div class="col-md-10" style="border-left: 1px solid #ccc;">
			<div class="container-fluid">
				<h2 class="page-header">Chi tiết sản phẩm</h2>
				<br>
				<div class="container-fluid">
					<table class="table table-bordered table-hover table-responsive">
			            <tr>
			                <th>Tên</th>
			                <td><?php echo $row['productName'] ?></td>
			            </tr>
			            <tr>
			                <th>Mô tả</th>
			                <td></td>
			            </tr>
			            <tr>
			                <th>Giá</th>
			                <td></td>
			            </tr>
			            <tr>
			                <th>Hình ảnh</th>
			                <td>
			                    
			                    <img src="" alt="" class="img-fluid img-thumbnail"></td>
			            </tr>
			            <tr>
			                <th colspan="2">
			                    <a href="<?php echo URL_BASE;?>admin/product" class="btn btn-danger">Quay lại danh sách SP</a>
			                </th>
			            </tr>
			        </table>
			    
				</div>
			</div>
		</div>
	</div>
</div>