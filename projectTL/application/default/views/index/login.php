<div class="container"> 
 <div class="row vertical-center-row"> 
  <div class="col-md-5 col-center-block login-widget" style="margin-top: 50px;margin-bottom: 100px;"> 
   <h1 class="text-center" style="color: #ff8b31;"><b>ĐĂNG NHẬP TẠI TLMOBIlE</b>
   </h1> 
   <div style="margin-top: 60px;"> 
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
          </div> 
            <input class="form-control" id="user" name="txtuser" placeholder="***@gmail.com" type="text"> 
         </div> 
        </div> 
        <div class="form-group"> 
         <div class="input-group"> 
          <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
          </div> 
            <input class="form-control" id="pass" name="txtpass" placeholder="******" type="password" style="border:1px solid #ff8b31;"> 
         </div> 
        </div> 
        <span class="msg" id="msg_password" style="margin-left: 46px;color: red;"></span>
        <div class="form-group"> 
         <div class="checkbox"> <label for="c1"><input id="c1" name="cc" type="checkbox">Nhớ thông tin</label> 
         </div> 
        </div> 
        <div class="form-group"> 
         <button type="submit" class="btn btn-primary btn-block" onclick="formlogin()" name="LogIn">Đăng nhập</button> 
         <hr> 
         <p class="text-center">Bạn có tài khoản không? <strong><a href="<?php URL_BASE;?>register" class="blue-text">Đăng ký ngay!</a></strong>
         </p> 
        </div> 
    </form>
   </div> 
  </div> 
 </div>
</div>