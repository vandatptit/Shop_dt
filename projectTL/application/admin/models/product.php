<?php
class Admin_Models_Product{
    //Khai báo các thuộc tính của bảng 'products'
    public $productID;
    public $productName;
    public $unitPrice;
    public $description;
    public $image;
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
        if ($rowCount>0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return null;
        }
    }
    
    public function addProduct()
    {
        $query = "INSERT INTO products SET productName=:productName, unitPrice=:unitPrice, description=:desctiption, image=:image, categoryID=:categoryID";
        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        $this->productName = htmlspecialchars(strip_tags($this->productName));
        $this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));

        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam(":productName",$this->productName);
        $stmt->bindParam(":unitPrice", $this->unitPrice);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":categoryID", $this->categoryID);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateProduct()
    {
        $query = "UPDATE products SET productName=:productName, unitPrice=:unitPrice, description=:description, 
                   categoryID =:categoryID WHERE productID=:productID";

        $stmt = $this->con->prepare($query);

        //Làm sạch dữ liệu
        $this->productName = htmlspecialchars(strip_tags($this->productName));
        $this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));
        $this->productID = htmlspecialchars(strip_tags($this->productID));


        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam(":productName",$this->productName);
        $stmt->bindParam(":unitPrice", $this->unitPrice);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":categoryID", $this->categoryID);
        $stmt->bindParam(":productID", $this->productID);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function deleteProduct()
    {
        $query = "DELETE FROM products WHERE productID = ?";
        $stmt = $this->con->prepare($query);
        $this->productID = htmlspecialchars(strip_tags($this->product_id));
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    
}

 ?>