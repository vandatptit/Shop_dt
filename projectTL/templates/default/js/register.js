

function validateForm()
{   
    //Khai báo
        var user,email,sdt,password;
        user = document.getElementById('txtusername').value;
        email = document.getElementById('txtemail').value;
        sdt = document.getElementById('txtphone').value;
        password = document.getElementById('txtpassword').value;
    // kiểm tra
        if(user===""){
            document.getElementById('msg_username').innerHTML = "Họ tên không được để trống!";
            document.getElementById('txtusername').setAttribute('style','border:1px solid red;width:300px;');
        }else{
            document.getElementById('msg_username').innerHTML = "";
            document.getElementById('txtusername').setAttribute('style','border:1px solid #ccc;width:300px;');
        }
        if(email === ""){
                    document.getElementById('msg_email').innerHTML = "Email không được để trống";
                    document.getElementById('txtemail').setAttribute('style','border:1px solid red;width:300px;');
                }else{
                      document.getElementById('msg_email').innerHTML = "";
                      document.getElementById('txtemail').setAttribute('style','border:1px solid #ccc;width:300px;');
                      var pattern = /^[A-Za-z0-9\_\.\-]+@[A-Za-z0-9]+\.[A-Za-z0-9]{2,4}$/g;
                    
                      if(pattern.test(email)===false){
                       document.getElementById('msg_email').innerHTML = "Sai định dạng Email";
                       } else{
                       document.getElementById('msg_email').innerHTML = "";
                       document.getElementById('txtemail').setAttribute('style','border:1px solid #ccc;width:300px;');
                        }
                    }
        if(sdt===""){
                    document.getElementById('msg_phone').innerHTML = "SDT không được để trống";
                    document.getElementById('txtphone').setAttribute('style','border:1px solid red;width:300px;');
                }else{
                    document.getElementById('msg_phone').innerHTML = "";
                    document.getElementById('txtphone').setAttribute('style','border:1px solid #ccc;width:300px;');
                    var pattern = /^0[0-9]{9,10}$/g;
                    
                   if(pattern.test(email)===false){
                       document.getElementById('msg_phone').innerHTML = "Sai định dạng Phone";
                   } else{
                       document.getElementById('msg_phone').innerHTML = "";
                       document.getElementById('txtphone').setAttribute('style','border:1px solid #ccc;width:300px;');
                   }
                }
        if(password===""){
            document.getElementById('msg_pass').innerHTML = "password không được để trống!";
            document.getElementById('txtpassword').setAttribute('style','border:1px solid red;width:300px;');
        }else{
            document.getElementById('msg_pass').innerHTML = "";
            document.getElementById('txtpassword').setAttribute('style','border:1px solid #ccc;width:300px;');
        }
}
  
function formlogin(){
   var user,password;
        user = document.getElementById('user').value;
        password = document.getElementById('pass').value;
    if(user===""&& password===""){
      document.getElementById('msg_password').innerHTML = "Sai tài khoản hoặc mật khẩu";
    }
}