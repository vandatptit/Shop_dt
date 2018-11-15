<?php 
       

?>
<div class="container"> 
 <div class="row vertical-center-row"> 
  <div class="col-md-8 col-center-block login-widget" style="margin-top: 50px;margin-bottom: 100px;"> 
   <h1 class="text-center" style="color: #ff8b31;"><b>ĐĂNG KÝ TẠI TLMOBIlE</b>
   </h1> 
   <div style="margin-top: 60px;"> 
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" style="margin-left: 100px;">
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon" style="width: 150px;">Họ và tên:
          </div> 
            <input class="form-control" id="txtusername" name="txtusername" type="text" style="width: 300px;">
         </div> 
        </div> 
        <span class="msg" id="msg_username" style="color: red;margin-left: 152px;"></span> 
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon" style="width: 150px;">Email:
          </div> 
            <input class="form-control" id="txtemail" name="txtemail" placeholder="" type="text" style="border:1px solid #ff8b31; width: 300px;"> 
         </div> 
        </div> 
        <span class="msg" id="msg_email" style="color: red;margin-left: 152px;"></span> 
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon" style="width: 150px;">Số điện thoại:
          </div> 
            <input class="form-control" id="txtphone" name="txtphone" type="text" style="width: 300px;"> 
         </div> 
        </div> 
        <span class="msg" id="msg_phone" style="color: red;margin-left: 152px;"></span> 
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon" style="width: 150px;">Mật khẩu:
          </div> 
            <input class="form-control" id="txtpassword" name="txtpassword" type="password" style="width: 300px;">  
         </div> 
        </div> 
        <span class="msg" id="msg_pass" style="color: red;margin-left: 152px;"></span>
        </div> 
        <div class="form-group" style="text-align: center;"> 
         <button type="submit" name="btnSave" class="btn btn-primary" name="LogIn"  style="width: 100px;">Đăng ký</button> 
         <button type="reset" class="btn btn-danger" name="LogIn" style="width: 100px;">Reset</button> 
         <hr> 
        </div> 
    </form>
   </div> 
  </div> 
 </div>
</div>