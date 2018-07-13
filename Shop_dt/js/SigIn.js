function validateForm()
{   
    //Khai báo
        var user,email,sdt,password;
        user = document.getElementById('txtuser').value;
        email = document.getElementById('txtemail').value;
        sdt = document.getElementById('txtmobie').value;
        password = document.getElementById('txtpassword').value;
    // kiểm tra
        if(user===""){
            document.getElementById('msg_user').innerHTML = "Họ tên không được để trống!";
            document.getElementById('txtuser').setAttribute('style','border:1px solid red;');
        }else{
            document.getElementById('msg_user').innerHTML = "";
            document.getElementById('txtuser').setAttribute('style','border:1px solid #ccc;');
        }
        if(email === ""){
                    document.getElementById('msg_email').innerHTML = "Email không được để trống";
                    document.getElementById('txtemail').setAttribute('style','border:1px solid red;');
                }else{
                    document.getElementById('msg_email').innerHTML = "";
                    document.getElementById('txtemail').setAttribute('style','border:1px solid #ccc;');
                    var pattern = /^[A-Za-z0-9\_\.\-]+@[A-Za-z0-9]+\.[A-Za-z0-9]{2,4}$/g;
                    
                   if(pattern.test(email)===false){
                       document.getElementById('msg_email').innerHTML = "Sai định dạng Email";
                   } else{
                       document.getElementById('msg_email').innerHTML = "";
                       document.getElementById('txtemail').setAttribute('style','border:1px solid #ccc;');
                   }
                }
        if(sdt===""){
                    document.getElementById('msg_mobie').innerHTML = "SDT không được để trống";
                    document.getElementById('txtmobie').setAttribute('style','border:1px solid red;');
                }else{
                    document.getElementById('msg_mobie').innerHTML = "";
                    document.getElementById('txtmobie').setAttribute('style','border:1px solid #ccc;');
                    var pattern = /^0[0-9]{9,10}$/g;
                    
                   if(pattern.test(email)===false){
                       document.getElementById('msg_mobie').innerHTML = "Sai định dạng Phone";
                   } else{
                       document.getElementById('msg_mobie').innerHTML = "";
                       document.getElementById('txtmobie').setAttribute('style','border:1px solid #ccc;');
                   }
                }
        if(password===""){
            document.getElementById('msg_password').innerHTML = "password không được để trống!";
            document.getElementById('txtpassword').setAttribute('style','border:1px solid red;');
        }else{
            document.getElementById('msg_password').innerHTML = "";
            document.getElementById('txtpassword').setAttribute('style','border:1px solid #ccc;');
        }
}