<?php
class Default_Models_Category{
    //Khai báo các thuộc tính biểu diễn dữ liệu của "Product"
    public $id;
    public $categoryID;
    public $SubcategoryID;
    public $description;
    public $categoryName;

    private $conn = null;
    //Hàm khởi tạo
    public function __construct($db){
        $this->conn = $db;
    }

    /**
     * Phương thức lấy tất cả các bản ghi dữ liệu từ bảng "products"
     * return: array
     */
    public function getAllParentCategory(){
        $query = "SELECT id, categoryName, categoryID FROM categories
        WHERE SubcategoryID=''";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount>0) {
            return $stmt;
        }else{
            return null;
        }
    }

    public function getSubCategoryIdByParent(){
        $query = "SELECT id, categoryName * FROM categories WHERE SubcategoryID != '' AND SubcategoryID = categoryID  LIMIT 0,1";
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
     public function getcategoryIDByid(){
        $query = "SELECT id, categoryName * FROM categories WHERE id = ?";
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

}
?>