<?php
class Default_Controllers_Index extends Libs_Controller{
    
    public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }
    
    public function index(){
        //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

       

        if(isset($_SESSION['email'])){
        $empObj=new Default_Models_Employee($db);
            $empObj->email = $_SESSION['email'];
            $emp = $empObj->getEmployeeByInfo();
            echo "<div style='color: white;width: 150px;position: absolute;right: 40px;'>Xin chào: ".$emp['employeeName']."</div>";
        }

        if(!empty($_GET["action"])) {
            switch($_GET["action"]) {
                case "add":
                    if(!empty($_POST["quantity"])) {
                        $product=new Default_Models_Employee($db);
                        $productByID = $product->getProductByproductID();
                        var_dump($productID);
                        $itemArray = array($productByID[0]["productID"]=>array(
                            'productName'=>$productByID[0]["productName"], 
                            'productID'=>$productByID[0]["productID"], 
                            'quantity'=>$_POST["quantity"], 
                            'unitPrice'=>$productByID[0]["unitPrice"]));
                    };
                break;
            }
        }
    

        $this->view->render('index/index');
    }

    public function show(){
        $database = new Libs_Model();
        $db = $database->getConnection();

        //Khoi tao doi tuong Product
        $product = new Default_Models_Product($db);
        $data = $product->getAllProduct();


        //Bieu dien du lieu duoc lay tu Model
        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            if (!empty($row)) { 
                if(!empty($_GET["action"])) {
            switch($_GET["action"]) {
                case "add":
                    if(!empty($_POST["quantity"])) {
                        $product=new Default_Models_Employee($db);
                        $productByID = $product->getProductByproductID();
                        $itemArray = array($productByID[0]["productID"]=>array(
                            'productName'=>$productByID[0]["productName"], 
                            'productID'=>$productByID[0]["productID"], 
                            'quantity'=>$_POST["quantity"], 
                            'unitPrice'=>$productByID[0]["unitPrice"]));

                        if(!empty($_SESSION["cart_item"])) {
                            if(in_array($productByID[0]["productID"],array_keys($_SESSION["cart_item"]))) {
                                foreach($_SESSION["cart_item"] as $k => $v) {
                                        if($productByID[0]["productID"] == $k) {
                                            if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                                            }
                                            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                        }
                                }
                                
                            } else {
                                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                            }
                        } else {
                            $_SESSION["cart_item"] = $itemArray;
                        }
                    }
                break;
            }
        }
        ?>
            <div id="phone">
                <div class="col-sm-3 item-product">
                <form method="post" action="index.php?action=add&productID=<?php echo $row["productID"]; ?>">
                    <div class="grid" class="item-img">
                        <figure class="effect-zoe">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><img src="<?php echo URL_BASE;?>templates/default/image/<?php echo $row['image'];?>" alt="img25"/></a>
                            
                        </figure>
                    </div>
                    <div class="item-name">
                        <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><b><?php echo $row[$key]["productName"];?></b></a>
                    </div>
                    <div class="item-price">
                        <span class="new-price"><?php echo number_format($row['unitPrice']);?>đ</span>
                        <span class="old-price"><?php echo number_format($row['ParentPicre']);?>đ</span>
                    </div>
                    <div style="margin-top: 30px;">
                        <a href="view_cart?productID=<?php echo $row['productID'];?>" class="btn btn-danger">mua ngay</a>
                        <input type="submit" onclick="livesale('<?php echo $row['productID'];?>');" class="btn btn-success" value="Thêm vào giỏ">
                    </div>
                </form>
                </div>
            </div>
        <?php  
    }
}
}
     public function detail(){
         //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

        //Khởi tạo model 'product'
        $product = new Default_Models_Product($db);
        $product->id = isset($_GET['id']) ? $_GET['id'] : "";
        $this->view->result = $product->getProductById();
        
        $this->view->render('index/detail');
    }
    
    public function childpage(){
        //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

        //Khởi tạo model 'product'

        $product = new Default_Models_Product($db);
        $product->categoryID = isset($_GET['categoryID']) ? $_GET['categoryID'] : "";
        $this->view->result = $product->getProductsBycategoryId();
        
        $this->view->render('index/childpage');
    }

    public function contact(){
        $this->view->render('index/contact');
    }

    public function shop_guide(){
        $this->view->render('index/shop_guide');
    }
     public function view_cart(){

         //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

        //Khởi tạo model 'product'

        $this->view->render('index/view_cart');
    }
     public function order_pay(){
        $this->view->render('index/order_pay');
    }
    public function Login(){
        if($_POST){
        $database = new Libs_Model();
        $db = $database->getConnection();

        $empObj=new Default_Models_Employee($db);
        $empObj->email=$_POST['txtuser'];
        $empObj->password=$_POST['txtpass'];
        if($empObj->checkEmployee()){
            //Cấp phiên làm việc với session
            $_SESSION['email']=$empObj->email;
            //điều hướng tới trang chủ
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Tài khoản chưa tồn tại</div>";
    }   
    }
     $this->view->render('index/login');
    }
    public function LogOut(){

        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
            session_destroy();
            header("location:index.php");
        }
        $this->view->render('index/index');
    }
    public function register(){
         $database = new Libs_Model();
        $db = $database->getConnection();

        $empObj=new Default_Models_Employee($db);
        if(isset($_POST["btnSave"])) {
                try{

                     //Lấy dữ liệu trên Form
                    $employeeName = $_POST['txtusername'];
                    $phone = $_POST['txtphone'];
                    $email = $_POST['txtemail'];
                    $password = $_POST['txtpassword'];
                    
                    $empObj->employeeName = $employeeName;
                    $empObj->phone = $phone;
                    $empObj->email = $email;
                    $empObj->password = $password;

                    $empObj->addEmployeess();
                    echo "dang ky thanh cong";
                    header("location:index.php");
                    

                }catch(PDOException $ex){
                    die("Lỗi: ".$ex->getMessage());
                }
            }
        $this->view->render('index/register');
    }
   
        public function search(){

         $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";

        if($name != ""){
        $database = new Libs_Model();
        $db = $database->getConnection();

        //khoi tao doi tuong 'product'
        $product = new Default_Models_Product($db);

        $product->productName = $name;
        $data = $product->getProductsByName();
      
         while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        
        ?>
            <div id="phone">
                <div class="col-sm-3 item-product">
                    <div class="grid" class="item-img">
                        <figure class="effect-zoe">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><img src="<?php echo URL_BASE;?>templates/default/image/<?php echo $row['image'];?>" alt="img25"/></a>
                            
                        </figure>
                    </div>
                    <div class="item-name">
                        <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><b><?php echo $row['productName'];?></b></a>
                    </div>
                    <div class="item-price">
                        <span class="new-price"><?php echo number_format($row['unitPrice']);?>đ</span>
                        <span class="old-price"><?php echo number_format($row['ParentPicre']);?>đ</span>
                    </div>
                    <div style="margin-top: 30px;">
                        <a href="view_cart?productID=<?php echo $row['productID'];?>" class="btn btn-danger">mua ngay</a>
                        <a onclick="livesale('<?php echo $productid;?>');" class="btn btn-success">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
        <?php
        }
           
    }
}
        public function addtocart(){
        $productID = isset($_REQUEST['productID']) ? $_REQUEST['productID'] : "";
        //echo $productID;
        if ($productID != "") {
            //echo $id;
            //Lấy dữ liệu từ bảng 'products' theo 'productid' sản phẩm
            $quantity = $_REQUEST['quantity'];
            $database = new Libs_Model();
            $db = $database->getConnection();

            $product = new Default_Models_Product($db);
            $product->productID = $productID;
            $row = $product->getProductByIdcat();
            //$row[] = $cart;
            $itemArray = array(
                $row[0]['productID'] => array(
                    'name'      =>  $row[0]['productName'],
                    'productID'        =>  $row[0]['productID'],
                    'price'     =>  $row[0]['unitPrice'],
                    'quantity'   =>  $quantity,
                    'image'     =>  $row[0]['image']
            ));

            if(!empty($_SESSION['cart_item'])){
                //Kiểm tra sản phẩm cần thêm vào giỏ hàng đã tồn tại trong $_SESSION['cart_item'] chưa?
                //Nếu đã tồn tại:
                if(in_array($row[0]['productID'], array_keys($_SESSION['cart_item']))){
                    foreach ($_SESSION['cart_item'] as $k => $v){
                        if($row[0]['productID'] == $k){
                            if(empty($_SESSION['cart_item'][$k]['quantity'])){
                                $_SESSION['cart_item'][$k]['quantity']= 0;
                            }
                            $_SESSION['cart_item'][$k]['quantity'] += $quantity;
                        }
                    }
                } else{
                    $_SESSION['cart_item'] = array_merge($_SESSION['cart_item'], $itemArray);
                }
            }else{
                $_SESSION['cart_item'] = $itemArray;
            }
            //echo "<pre>";
            //print_r($_SESSION['cart_item']);
            echo count($_SESSION['cart_item']);
        }
    }
}

?>
