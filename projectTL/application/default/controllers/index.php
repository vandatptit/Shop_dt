<?php
class Default_Controllers_Index extends Libs_Controller{
    
    public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }
    
    public function index(){
        $this->view->render('index/index');
    }

    public function search(){
        $this->view->render('index/search');
        $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
        echo $_REQUEST['name'];

        /*if($name != ""){
        $database = new Libs_Model();
        $db = $database->getConnection();

        //khoi tao doi tuong 'product'
        $product = new Default_Models_Product($db);
        $product->categoryID = $id;
        $data = $product->getProductsByName();
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div id="phone">
                <div class="col-sm-3 item-product">
                    <div class="grid" class="item-img">
                        <figure class="effect-zoe">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><img src="<?php echo URL_BASE;?>templates/default/image/<?php echo $row['image'];?>" alt="img25"/></a>
                            <figcaption>
                                <p>
                                    <span style="background: #ff8b31;padding: 5px;border-radius: 5px 5px 0px 0px;"><a href="<?php echo URL_BASE;?>index/view_cart?productID=<?php echo $row['productID'];?>">Mua ngay</a></span>
                                    <span style="background:#ff8b31;padding:6px 11px 13px 11px;border-radius: 5px 5px 0px 0px;"><a href="#"><i class="fa fa-cart-arrow-down" style="font-size: 24px; color:white;"></i></a></span>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item-name">
                        <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><b><?php echo $row['productName'];?></b></a>
                    </div>
                    <div class="item-price">
                        <span class="new-price"><?php echo number_format($row['unitPrice']);?>đ</span>
                        <span class="old-price"><?php echo number_format($row['ParentPicre']);?>đ</span>
                    </div>
                </div>
            </div>
        <?php
        }
    }*/
    }
    public function showData(){
        $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";

        if($name != ""){
        $database = new Libs_Model();
        $db = $database->getConnection();

        //khoi tao doi tuong 'product'
        $product = new Default_Models_Product($db);
        $product->categoryID = $id;
        $data = $product->getProductsByName();
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div id="phone">
                <div class="col-sm-3 item-product">
                    <div class="grid" class="item-img">
                        <figure class="effect-zoe">
                            <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><img src="<?php echo URL_BASE;?>templates/default/image/<?php echo $row['image'];?>" alt="img25"/></a>
                            <figcaption>
                                <p>
                                    <span style="background: #ff8b31;padding: 5px;border-radius: 5px 5px 0px 0px;"><a href="<?php echo URL_BASE;?>index/view_cart?productID=<?php echo $row['productID'];?>">Mua ngay</a></span>
                                    <span style="background:#ff8b31;padding:6px 11px 13px 11px;border-radius: 5px 5px 0px 0px;"><a href="#"><i class="fa fa-cart-arrow-down" style="font-size: 24px; color:white;"></i></a></span>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item-name">
                        <a href="<?php echo URL_BASE;?>index/detail?id=<?php echo $row['id']; ?>"><b><?php echo $row['productName'];?></b></a>
                    </div>
                    <div class="item-price">
                        <span class="new-price"><?php echo number_format($row['unitPrice']);?>đ</span>
                        <span class="old-price"><?php echo number_format($row['ParentPicre']);?>đ</span>
                    </div>
                </div>
            </div>
        <?php
        }
    }
    }
    public function show(){
        $database = new Libs_Model();
        $db = $database->getConnection();

        //Khoi tao doi tuong Product
        $product = new Default_Models_Product($db);
        $data = $product->getAllProduct();

        //Bieu dien du lieu duoc lay tu Model
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

        $product = new Default_Models_Product($db);
        $product->productID = isset($_GET['productID']) ? $_GET['productID'] : "";
        $this->view->result = $product->getProductByproductID();
        $this->view->render('index/view_cart');
    }
     public function order_pay(){
        $this->view->render('index/order_pay');
    }
    public function Login(){
        $this->view->render('index/login');
    }
    public function register(){
        $this->view->render('index/register');
    }
     public function addtocart(){
        $productid = isset($_REQUEST['productid']) ? $_REQUEST['productid'] : "";
        if ($productid != "") {
            //echo $id;
            //Lấy dữ liệu từ bảng 'products' theo 'productid' sản phẩm
            $quantity = $_REQUEST['quantity'];
            $database = new Libs_Model();
            $db = $database->getConnection();

            $product = new Default_Models_Product($db);
            $product->productId = $productid;
            $row = $product->getProductById();

            $itemArray = array(
                $row[0]['productID'] => array(
                    'name'      =>  $row[0]['productName'],
                    'productId'        =>  $row[0]['productID'],
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
            echo "Giỏ hàng có: ". count($_SESSION['cart_item']). " sản phẩm";
        }
    }

}

?>
