<?php
class Admin_Models_Product{
    //Khai báo các thuộc tính của bảng 'products'
    public $productID;
    public $productName;
    public $unitPrice;
    public $description;
    public $image;
    public $quantity;
    public $categoryID;
    //Khai báo đối tượng CSDL
    private $con;

    /**
     * Hàm khởi tạo đối tượng CSDL
     */
    public function __construct($db){
        $this->con = $db;
    }
    
    /**
     * Phương thức lấy tất cả dữ liệu từ 'products'
     */
    
    public function getProductAll()
    {
        $query = "SELECT * FROM products";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();
        if($num>0){
            return $stmt;
        }else{
            return null;
        }
    }

    public function getProductById()
    {
        $query = "SELECT * FROM products WHERE productID = ? LIMIT 0,1";
        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        $this->productID = htmlspecialchars(strip_tags($this->productID));
        $stmt->bindParam(1, $this->productID);

        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return null;
        }
    }
    
    public function addProduct()
    {
        $query = "INSERT INTO products(productID, productName, categoryID, unitPrice, description, quantity) values('$this->productID', '$this->productName', '$this->categoryID', '$this->unitPrice', '$this->description', '$this->quantity')";

        $stmt = $this->con->prepare($query);
        
        //Làm sạch dữ liệu
        $this->productName = htmlspecialchars(strip_tags($this->productName));
        $this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        $this->description = htmlspecialchars(strip_tags($this->description));
        //$this->image = htmlspecialchars(strip_tags($this->image));
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));

        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam('$this->productName',$this->productName);
        $stmt->bindParam('$this->unitPrice', $this->unitPrice);
        $stmt->bindParam('$this->description', $this->description);
        //$stmt->bindParam(":image", $this->image);
        $stmt->bindParam('$this->categoryID', $this->categoryID);
        $stmt->bindParam('$this->quantity', $this->quantity);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateProduct()
    {
        $query = "UPDATE products SET productName='$this->productName', description='$this->description', unitPrice= '$this->unitPrice', quantity= '$this->quantity' WHERE productID='$this->productID'";

        $stmt = $this->con->prepare($query);

        //Làm sạch dữ liệu
        $this->productName = htmlspecialchars(strip_tags($this->productName));
        $this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        //$this->categoryID = htmlspecialchars(strip_tags($this->categoryID));
        $this->productID = htmlspecialchars(strip_tags($this->productID));

        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam('$this->productName',$this->productName);
        $stmt->bindParam('$this->unitPrice', $this->unitPrice);
        $stmt->bindParam('$this->description', $this->description);
        //$stmt->bindParam(":categoryID", $this->categoryID);
        $stmt->bindParam('$this->productID', $this->productID);
        $stmt->bindParam('$this->quantity', $this->quantity);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteProductByID()
    {
        // echo $this->productID;
       $query = "DELETE FROM products WHERE productID='$this->productID'";

       $stmt = $this->con->prepare($query);

       $stmt->bindParam('$this->productID',htmlspecialchars(strip_tags($this->productID)));

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Xóa sản phẩm thành công.</div>";
            // header("location:index.php");
        }
        else{
            echo "<div class='alert alert-danger'>Xóa sản phẩm thất bại.</div>";
        }
    }   
}
?>