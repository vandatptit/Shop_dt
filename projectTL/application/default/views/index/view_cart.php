<?php
	if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            case "remove":
                if(!empty($_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["productID"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
    break;
    case "empty":
        unset($_SESSION["cart_item"]);
    break;  
}
}

 ?>
<div id="shopping-cart" class="container" style="padding-top: 50px;padding-bottom: 200px;">
	<?php
		if(isset($_SESSION["cart_item"])){
		    $item_total = 0;
		?>	
		<div style="float: right;"><a class="btn btn-danger" style="margin-bottom: 10px;" id="btnEmpty" href="<?php echo URL_BASE;?>index/view_cart?action=empty">Empty Cart</a></div>
			<table cellpadding="10" cellspacing="1" class="table table-borded table-reposive table-hover">
			<tbody>
			<tr>
			<th style="text-align:left;"><strong>Tên sản phẩm</strong></th>
			<th style="text-align:left;"><strong>Mã sản phẩm</strong></th>
			<th style="text-align:right;"><strong>Số lượng</strong></th>
			<th style="text-align:right;"><strong>Giá</strong></th>
			<th style="text-align:center;"><strong>Delete</strong></th>
			</tr>	
			<?php		
			    foreach ($_SESSION["cart_item"] as $key => $item){
					?>
							<tr>
							<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
							<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["productID"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo number_format($item["price"]); ?></td>
							<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="view_cart?action=remove&productID=<?php echo $item["productID"]; ?>" class="btnRemoveAction">Remove Item</a></td>
							</tr>
							<?php
			        $item_total += ($item["price"]*$item["quantity"]);
					}
					?>

			<tr>
			<td colspan="5" align=right><strong>Total:</strong> <?php echo number_format($item_total); ?></td>
			</tr>
			</tbody>
			</table>		
		<div style="float: right">
			<a href="<?php echo URL_BASE;?>order_pay" class="btn btn-warning">Thanh toán</a>
			<a href="<?php echo URL_BASE;?>" class="btn btn-success">Tiếp tục mua hàng</a>
		</div>
		  <?php
		}else{
			echo "<div class='alert alert-danger'>Giỏ hàng rỗng</div>";
		}
		?>
</div>