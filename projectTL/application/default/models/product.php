<?php
class Default_Models_Product{
    //Khai báo các thuộc tính biểu diễn dữ liệu của "Product"
    public $id;
    public $productID;
    public $productName;
    public $quantity;
    public $unitPrice;
    public $discount;
    public $status;
    public $description;
    public $image;
    public $categoryID;
    public $supplierId;
    public $PrarentPicre;

    private $conn = null;
    //Hàm khởi tạo
    public function __construct($db){
        $this->conn = $db;
    }

    /**
     * Phương thức lấy tất cả các bản ghi dữ liệu từ bảng "products"
     * return: array
     */
    public function getAllProduct(){
        $query = "SELECT * FROM products ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            return $stmt;
        }else{
            return null;
        }
    }

    public function getProductById(){
        $query = "SELECT * FROM products WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, htmlspecialchars(strip_tags($this->id)));
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return null;
        }
    }
    public function getProductByIdcat(){
        $query = "SELECT * FROM products WHERE productID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, htmlspecialchars($this->productID));
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }
            return $result;
        }else{
            return null;
        }
    }

     public function getProductsBycategoryId(){
        $query = "SELECT * FROM products WHERE categoryID = '". $_GET['categoryID'] ."' ";
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(1, htmlspecialchars(strip_tags($_GET['categoryID']);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            //$result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $stmt;
        }else{
            return null;
        }
    }
     public function getProductsByName(){
        $query = "SELECT * FROM products WHERE productName LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->productName."%");
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            return $stmt;
        }else{
            return null;
        }
    }
   public function getProductByproductID(){
          $query = "SELECT * FROM products WHERE productID ='" . $_GET["productID"] . "'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, htmlspecialchars($this->productID));
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }
            return $result;
        }else{
            return null;
        }
    }
    public function getProductByIdsearch(){
        $query = "SELECT productID, productName, unitPrice, image FROM products WHERE productID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, htmlspecialchars($this->productID));
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }
            return $result;
        }else{
            return null;
        }
    }

}
?>