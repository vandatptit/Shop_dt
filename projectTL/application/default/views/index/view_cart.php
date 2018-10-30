<?php $productID = $_GET['productID'];
 ?>

<div class="container">
<?php 		
if($_GET['productID'] != ""){
            while($row = $this->result->fetch(PDO::FETCH_ASSOC)){
                extract($row);
            ?>
	<table class="table table-bordered table-hover table-responsive" style="margin-top: 50px;">
		<tr>
			<th class="text-center">Xóa</th>
			<th class="text-center">Sản hẩm</th>
			<th class="text-center">Đơn giá</th>
			<th class="text-center">Số lượng</th>
			<th class="text-center">Thành tiền</th>
		</tr>
		<tr>
			<td class="text-center"><a href="#">Delete</a></td>
			<td class="text-center"><?php echo $productName;?></td>
			<td class="text-center"><?php echo number_format($unitPrice);?>đ</td>
			<td class="text-center">
				<p>1</p>
			</td>
			<td class="text-center"><?php echo number_format($unitPrice);?>đ</td>
		</tr>
		
		<tr>
			<td colspan ="4" class="text-center"><b>Total</b></td>
			<td class="text-center"><?php echo number_format($unitPrice);?>đ</td>
		</tr>

	</table>
	<div style="float: right;">
		<a href="<?php echo URL_BASE;?>index/order_pay" class="btn btn-info">Thanh toán</a>
		<a class="btn btn-success" href="<?php echo URL_BASE;?>index/index">Tiếp tục mua hàng</a>
	</div>
	<?php 
			}}else{
				echo " <p class = 'alert alert-success'>giỏ hàng rỗng</p>";
			}
			?>
</div>

