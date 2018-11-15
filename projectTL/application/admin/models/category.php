<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_Models_Category{
    public $categoryID;
    public $categoryName;
    public $description;
    
    //Khai báo đối tượng CSDL
    private $con;
    
    /**
     * Hàm khởi tạo đối tượng CSDL
     */
    public function __construct($db){
        $this->con = $db;
    }
    /*
     * Phương thức lấy tất cả CSD: trong bảng category
     * 
     */
    
    public function getAllCategory(){
        $query = "SELECT * FROM categories";
        //Chạy câu lệnh SQL
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $row = $stmt->rowCount();
        if($row > 0){
            return $stmt;
        }else{
            return null;
        }  
    }
    
    public function getCategoryById(){
        $query = "SELECT * FROM categories WHERE categoryID = ? LIMIT 0,1";
        $stmt = $this->con->prepare($query);
        
        //Làm sạch dữ liệu
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));
        $stmt->bindParam(1, $this->categoryID);
        
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if($rowCount > 0){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return null;
        }
    }

    public function addCategory()
    {
        $query = "INSERT INTO categories(categoryID, categoryName, description) values('$this->categoryID', '$this->categoryName', '$this->description')";

        $stmt = $this->con->prepare($query);
        
        //Làm sạch dữ liệu
        $this->categoryName = htmlspecialchars(strip_tags($this->categoryName));
        //$this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        $this->description = htmlspecialchars(strip_tags($this->description));
        //$this->image = htmlspecialchars(strip_tags($this->image));
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));

        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam('$this->categoryName',$this->categoryName);
        //$stmt->bindParam(":unitPrice", $this->unitPrice);
        $stmt->bindParam('$this->description', $this->description);
        //$stmt->bindParam(":image", $this->image);
        $stmt->bindParam('$this->categoryID', $this->categoryID);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateCategory()
    {
        $query = "UPDATE categories SET categoryName='$this->categoryName', description='$this->description' WHERE categoryID='$this->categoryID' ";

        $stmt = $this->con->prepare($query);

        //Làm sạch dữ liệu
        $this->categoryName = htmlspecialchars(strip_tags($this->categoryName));
        // $this->unitPrice = htmlspecialchars(strip_tags($this->unitPrice));
        $this->categoryID = htmlspecialchars(strip_tags($this->categoryID));
        //$this->productID = htmlspecialchars(strip_tags($this->productID));
        $this->description = htmlspecialchars(strip_tags($this->description));

        //Tiến hành bind các giá trị cho truy vấn
        $stmt->bindParam('$this->categoryName',$this->productName);
        // $stmt->bindParam(":unitPrice", $this->unitPrice);
        $stmt->bindParam('$this->description', $this->description);

        //$stmt->bindParam(":categoryID", $this->categoryID);
        //$stmt->bindParam(":productID", $this->productID);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteCategoryByID()
    {
        // echo $this->productID;
       $query = "DELETE FROM categories WHERE categoryID='$this->categoryID'";

       $stmt = $this->con->prepare($query);

       $stmt->bindParam('$this->categoryID',htmlspecialchars(strip_tags($this->categoryID)));

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Xóa danh mục thành công.</div>";
            // header("location:index.php");
        }
        else{
            echo "<div class='alert alert-danger'>Xóa danh mục thất bại.</div>";
        }
    }   

}


?>

