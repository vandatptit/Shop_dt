<?php
class Admin_Controllers_Index extends Libs_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("index/index");
    }

    public function product(){
    	 //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
        //Khởi tạo model 'product'
        $product = new Admin_Models_Product($db);
        $this->view->proData = $product->getProductAll();

        $this->view->render("product/index");
    }
     public function productDetail(){

        $id = isset($_GET['id'])? $_GET['id'] : die("ID không tồn tại");

         //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
        //Khởi tạo model 'product'
        $product = new Admin_Models_Product($db);
        $product->productID = $id;
        $this->view->$row = $product->getProductById($id);

        $this->view->render("product/detail");

    }
    
}
?>