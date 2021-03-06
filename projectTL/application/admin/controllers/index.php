<?php

class Admin_Controllers_Index extends Libs_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        /*if(!isset($_SESSION['email'])){
            header("location:login.php");
        }else{
            $empObj=new Default_Models_Employee($db);
            $empObj->email = $_SESSION['email'];
            $emp = $empObj->getEmployeeByInfo();
            echo "<div style='color: white;width: 100px;position: absolute;right: 40px;'>Xin chào: ".$emp['employeeName']."</div>";
    }*/
    $this->view->render("index/index");
}

    public function product() {
        //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
        //Khởi tạo model 'product'
        $product = new Admin_Models_Product($db);
        $this->view->proData = $product->getProductAll();
        $this->view->render("product/index");
    }

    public function category() {
        //Kết nối CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
        //Khởi tạo model 'category'
        $category = new Admin_Models_Category($db);
        $this->view->proCate = $category->getAllCategory();
        $this->view->render("category/index");
    }

    public function adminemployee() {

        // require 'application/admin/models/employee.php';
        // Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
        //Khởi tạo model 'employee'
        $employee = new Admin_Models_Employee($db);
        $this->view->casau = $employee->getAllEmployee();

        $this->view->render("employee/index");
    }

    public function addProduct() {

        require 'libs/model.php';
        require 'application/admin/models/category.php';
        require 'application/admin/models/product.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
        $product = new Admin_Models_Product($db);
        $category = new Admin_Models_Category($db);
        // $all = $product->getProductAll();
        $this->view->all = $category->getAllCategory();

        if (isset($_POST["btnSave"])) {

            //Lấy Dữ Liệu Người Dùng Nhập Vào
            $id = $_POST['txtId'];
            $name = $_POST['txtName'];
            $ctID = $_POST['cbCategory'];
            $price = $_POST['txtPrice'];
            $desc = $_POST['txtDesc'];
            $quantity = $_POST['txtQuantity'];

            //Gán cho biến
            $product->productID = $id;
            $product->productName = $name;
            $product->categoryID = $ctID;
            $product->unitPrice = $price;
            $product->description = $desc;
            $product->quantity = $quantity;

            try {
                if ($product->addProduct()) {
                   echo "<div class='alert alert-success'>Thêm sản phẩm thành công.</div>";
               }else{
                   echo "<div class='alert alert-info'>Quá trình thêm mới thất bại.</div>";
               }    

           }catch (PDOException $ex) {
            die("Lỗi: " . $ex->getMessage());
            }
        }
        $this->view->render("product/add");
    }

    public function addCategory(){
        require 'libs/model.php';
        require 'application/admin/models/category.php';
                // require 'application/admin/models/product.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
                // $product = new Admin_Models_Product($db);
        $category = new Admin_Models_Category($db);
                // $all = $product->getProductAll();
                // $this->view->gom = $category->getAllCategory();

        if (isset($_POST["btnSave"])) {

                    //Lấy Dữ Liệu Người Dùng Nhập Vào
            $id = $_POST['txtId'];
            $name = $_POST['txtName'];
                    // $ctID = $_POST['cbCategory'];
            $desc = $_POST['txtDesc'];

                    //Gán cho biến
            $category->categoryID = $id;
            $category->categoryName = $name;
                    // $product->categoryID = $ctID;
            $category->description = $desc;

            try {
                if ($category->addCategory()) {
                   echo "<div class='alert alert-success'>Thêm danh mục thành công.</div>";
               }else{
                   echo "<div class='alert alert-info'>Quá trình thêm thất bại.</div>";
               }    

           }catch (PDOException $ex) {
            die("Lỗi: " . $ex->getMessage());
            }
        }
    $this->view->render("category/add");
    }

    public function addemployee(){
        require 'libs/model.php';
        require 'application/admin/models/employee.php';
                // require 'application/admin/models/product.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
                // $product = new Admin_Models_Product($db);
        $employee = new Admin_Models_Employee($db);
                // $all = $product->getProductAll();
                // $this->view->gom = $category->getAllCategory();

        if (isset($_POST["btnsave"])) {

                    //Lấy Dữ Liệu Người Dùng Nhập Vào
            $id = $_POST['txtID'];
            $name = $_POST['txtName'];
                    // $ctID = $_POST['cbCategory'];
            $address = $_POST['txtAddress'];
            $email = $_POST['txtEmail'];
            $pass = $_POST['txtPass'];
            $phone = $_POST['txtPhone'];

                    //Gán cho biến
            $employee->employeeID = $id;
            $employee->name = $name;
                    // $product->categoryID = $ctID;
            $employee->address = $address;
            $employee->email = $email;
            $employee->pass = $pass;
            $employee->phone = $phone;

                    // echo "aaskdjhasjkd";

            try {
                if ($employee->addEmployee()) {
                   echo "<div class='alert alert-success'>Thêm nhân viên thành công.</div>";
               }else{
                   echo "<div class='alert alert-info'>Quá trình thêm thất bại.</div>";
               }    
           }catch (PDOException $ex) {
            die("Lỗi: " . $ex->getMessage());
            }
        }
        $this->view->render("employee/add");

    }

    public function productDetail() {
        $id = isset($_GET['id']) ? $_GET['id'] : die("ID không tồn tại");
                //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();
                //Khởi tạo model 'product'
        $product = new Admin_Models_Product($db);
            // $category = new Admin_Models_Category($db);

        $product->productID = $id;
        $this->view->prodata = $product->getProductById();

            // $category->categoryID = $id;
            // $this->view->dm = $category->getCategoryById();
        $this->view->render("product/detail");
    }

    public function categoryDetail() {

        $id = isset($_GET['id']) ? $_GET['id'] : die("ID không tồn tại");

        //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

        $category = new Admin_Models_Category($db);
        $category->categoryID = $id;
        $this->view->procate = $category->getCategoryById();

        $this->view->render("category/detail");
    }

    public function employeeDetail(){

        $id = isset($_GET['id']) ? $_GET['id'] : die("ID không tồn tại");

        //Khởi tạo CSDL
        $database = new Libs_Model();
        $db = $database->getConnection();

        $emp = new Admin_Models_Employee($db);
        $emp->employeeID = $id;
        $this->view->ys = $emp->getEmployeeById();

        $this->view->render("employee/detail");
    }

    public function updateProduct() {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        require 'libs/model.php';
        require 'application/admin/models/product.php';
        require 'application/admin/models/category.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
        $objProduct = new Admin_Models_Product($db);
        $objCategory = new Admin_Models_Category($db);
        $objProduct->productID = $id;
        $this->view->cute = $objProduct->getProductById();

        if (isset($_POST['btnUpdate'])) {
            try {

                $objProduct->productName = $_POST['txtName'];
                $objProduct->unitPrice = $_POST['txtPrice'];
                        // $objProduct->categoryID = $_POST['cbCategory'];
                $objProduct->description = $_POST['txtDesc'];
                $objProduct->quantity = $_POST['txtQuantity'];
                // $objProduct->productID = $id;

                if ($objProduct->updateProduct()) {
                    echo "<div class='alert alert-success'>Cập nhật sản phẩm thành công.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Quá trình cập nhật thất bại.</div>";
                }
            } catch (PDOException $ex) {
                die("Lỗi: " . $ex->getMessage());
            }
        }

        $this->view->render("product/update");
    }

    public function updateCategory() {

        $id = isset($_GET['id']) ? $_GET['id'] : "";
        require 'libs/model.php';
            // require 'application/admin/models/product.php';
        require 'application/admin/models/category.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
            // $objProduct = new Admin_Models_Product($db);
        $objCategory = new Admin_Models_Category($db);
        $objCategory->categoryID = $id;
        $this->view->oppa = $objCategory->getCategoryById();

        if (isset($_POST['btnUpdate'])) {
            try {
                $objCategory->categoryName = $_POST['txtName'];
                    // $objProduct->unitPrice = $_POST['txtPrice'];
                        // $objProduct->categoryID = $_POST['cbCategory'];
                $objCategory->description = $_POST['txtDesc'];
                // $objCategory->categoryID = $id;

                if ($objCategory->updateCategory()) {
                    echo "<div class='alert alert-success'>Cập nhật danh mục thành công.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Quá trình cập nhật thất bại.</div>";
                }
            } catch (PDOException $ex) {
                die("Lỗi: " . $ex->getMessage());
            }
        }
        $this->view->render("category/update");
    }

    public function updateEmployee(){
        $id = isset($_GET['id']) ? $_GET['id'] : "";

        require 'libs/model.php';
        require 'application/admin/models/employee.php';

        $database = new Libs_Model();
        $db = $database->getConnection();
        $objEmp = new Admin_Models_Employee($db);
        // $objEmployee = new Admin_Models_Employee($db);
        $objEmp->employeeID = $id;
        $this->view->tf = $objEmp->getEmployeeById();

        if(isset($_POST['btnUpdate'])) {
            try{
                // $objEmployee->employeeID = $_POST['txtID'];
                $objEmp->name = $_POST['txtName'];
                $objEmp->address = $_POST['txtAddress'];
                $objEmp->email = $_POST['txtEmail'];
                $objEmp->pass = $_POST['txtPass'];
                $objEmp->phone = $_POST['txtPhone'];

                if($objEmp->updateEmployee()){
                    echo "<div class='alert alert-success'>Cập nhật nhân viên thành công.</div>";
                }else{
                    echo "<div class='alert alert-danger'>Quá trình cập nhật thất bại.</div>";
                }
            } catch(PDOException $ex){
                die("Lỗi: " . $ex->getMessage());
            }

        }
        $this->view->render("employee/update");
    }

    public function deleteProduct(){

        $id = isset($_GET['id']) ? $_GET['id'] : "";

        $database = new Libs_Model();
        $db = $database->getConnection();

        $delete = new Admin_Models_Product($db);

        $delete->productID = $id;
        $delete->deleteProductByID();

        $this->view->render('index/index');
    }

    public function deleteCategory(){

        $id = isset($_GET['id']) ? $_GET['id'] : "";

        $database = new Libs_Model();
        $db = $database->getConnection();

        $dlCa = new Admin_Models_Category($db);

        $dlCa->categoryID = $id;
        $dlCa->deleteCategoryByID();

        $this->view->render('index/index');
    }

    public function deleteEmployee(){

        $id = isset($_GET['id']) ? $_GET['id'] : "";

        $database = new Libs_Model();
        $db = $database->getConnection();

        $deleteNV = new Admin_Models_Employee($db);

        $deleteNV->employeeID = $id;
        $deleteNV->deleteEmployeeByID();

        $this->view->render('index/index');
    }
    public function login(){
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
    public function logout(){
       

        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
            session_destroy();
            header("location:login");
        }
        $this->view->render('index/login');
    
    }
}
?>