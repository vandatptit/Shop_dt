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
				<h2 class="page-header">Danh sách sản phẩm </h2>
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
						<a href="#" class="btn btn-success">Thêm sản phẩm</a>
					</div>
				</div><br>
				<div class="container-fluid">
					<?php

	       			echo "<table class='table table-bordered table-hover table-responsive'>";
	                echo "<tr>";
	                    echo "<th class='text-center'>ID</th>";
	                    echo "<th class='text-center'>Tên SP</th>";
	                    echo "<th class='text-center' style='width:850px;'>Mô tả</th>";
	                    echo "<th class='text-center'>Chức năng</th>";
	                echo "</tr>";
                 while($row = $this->proData->fetch(PDO::FETCH_ASSOC)){
            	 extract($rows);
	                echo "<tr >";
	                    echo "<td class='text-center'>".$row['productID']."</td>";
	                    echo "<td class='text-center'>".$row['productName']."</td>";
	                    echo "<td class='text-center'".$row['description']."</td>";
	                    echo "<td class='text-center'> ";
		                    echo "<a href='productDetail?id=".$row['productID']."' class='btn btn-info'>Chi tiết</a>&nbsp;";
		                    echo "<a href='' class='btn btn-primary'>Sửa</a>&nbsp;";
		                    echo "<a href='#' onclick='delete_product($product_id);' class='btn btn-danger'>Xoá</a>";
						echo "</td>";
	                echo "</tr>";
	            }
            	echo "</table>";
            ?>  
				</div>
			</div>
		</div>
	</div>
</div>