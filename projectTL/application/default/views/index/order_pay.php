<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="container" style="padding-bottom: 50px;padding-top: 50px;">
                    <h2 style="margin-left: 390px;color: #ff8b31;" id="tt1">Thông tin khách hàng</h2>   
                    <!--                <form method="post" action="#">-->
                    <form method="post" action="#" id="form_contact">
                        <label>Họ và tên *</label><input type="text" name="txtName"/>
                        <br/><br/>
                        <label>Địa chỉ email</label><input type="text" name="txtAddress"/>
                        <br/><br/>
                        <label>Số điện thoại</label><input type="text" name="txtPhone"/>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="lb1">Địa chỉ* </label>
                            </div>
                            <div class="col-md-9">
                                    <textarea placeholder="  Nhập địa chỉ..." name="txtDesc" id="txtDesc" rows="5" cols="45"></textarea>
                            </div>
                        </div>
                            
                        <br/><br/>
                        
                        <br/>
                         <button class="btn btn-warning" style="float: left;
    width: 160px;
    margin-left: 230px;">Xác nhận thanh toán</button>
                    </form>
</div>
        </div>
        <div class="col-md-3">
           
        <?php
        if(isset($_SESSION["cart_item"])){
            $item_total = 0;
        ?>  
            <table cellpadding="10" cellspacing="1" class="table table-borded table-reposive table-hover">
            <tbody>
            <tr>
            <th style="text-align:left;"><strong>Tên sản phẩm</strong></th>
            <th style="text-align:left;"><strong>Mã sản phẩm</strong></th>
            <th style="text-align:right;"><strong>Số lượng</strong></th>
            <th style="text-align:right;"><strong>Giá</strong></th>
            </tr>   
            <?php       
                foreach ($_SESSION["cart_item"] as $key => $item){
                    ?>
                            <tr>
                            <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                            <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["productID"]; ?></td>
                            <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                            <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo number_format($item["price"]); ?></td>
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
          <?php
        }
        ?>
</div>
        </div>
    </div>
</div>
