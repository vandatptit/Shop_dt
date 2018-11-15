
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo URL_BASE;?>templates/default/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo URL_BASE;?>templates/default/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE;?>templates/default/js/register.js"></script>
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/layout.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/effect.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/detail.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/childpage.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/info.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/hdBuy.css">
    <link rel="stylesheet" href="<?php echo URL_BASE;?>templates/default/css/login.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script src="<?php echo URL_BASE;?>templates/default/ckeditor/ckeditor.js"></script>
    <script src="<?php echo URL_BASE;?>templates/default/js/detaul.js"></script>
    <script src="<?php echo URL_BASE;?>templates/default/js/ajax.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="icon" href="<?php echo URL_BASE;?>templates/default/logotl.png">
    <script>
        $(window).resize(function(){
            if ($(this).width()<1024) {
                //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                $("#right").hide();
                /*$("service_shop").hide();*/
                $("div#product").removeClass("col-sm-9");
                $("div#product").addClass("col-sm-12");
                
                //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                $("#service").hide();
                $("div#slide-show-hot").removeClass("col-sm-9");
                $("div#slide-show-hot").addClass("col-sm-12");
            }
            else
            {
                $("#right").show();
                $("div#product").removeClass("col-sm-12");
                $("div#product").addClass("col-sm-9");

                $("#service").show();
                $("div#slide-show-hot").removeClass("col-sm-12");
                $("div#slide-show-hot").addClass("col-sm-9");
            }
        });
         
    </script>
    <script type="text/javascript">
         function showproduct(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("result").innerHTML = this.responseText;
                        document.getElementById("cat").innerHTML = <?php echo count($_SESSION['cart_item']);?>;
                    }
                };

                xmlhttp.open("GET", "<?php echo URL_BASE;?>show", true);
                xmlhttp.send();
            }
            function showdata(){
                var search = document.getElementById("txtSearch").value;
              /* alert(search);*/
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };

                    xmlhttp.open("GET","<?php echo URL_BASE;?>index/search/?name="+search,true);
                    xmlhttp.send();
            }
            function livesale(productID){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cat").innerHTML = this.responseText;
                    }
                };

                xmlhttp.open("GET", "<?php echo URL_BASE;?>addtocart/?productID="+productID+"&quantity=1", true);
                xmlhttp.send();
                //alert(productID);
            }
    </script>
    <title>Tiến Lợi Mobie</title>
</head>
<body onload="showproduct();">
    <?php 
    require 'templates/default/header.php';
    require TEMPLATE;
    require 'templates/default/footer.php';
    ?>
