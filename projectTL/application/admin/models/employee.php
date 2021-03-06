<?php

class Admin_Models_Employee{

    public $employeeID;
    public $name;
    public $address;
    public $email;
    public $pass;
    public $phone;
    private $con;
    public $db = null;

    public function __construct($db){
        $this->con = $db;
    }

    public function checkEmployee() {
        $query = "SELECT * FROM admin WHERE email = '$this->email'
    			  AND password = '$this->password'";

        $stmt = $this->con->prepare($query);
        $this->password = htmlspecialchars(strip_tags($this->password));
        //Làm sạch dữ liệu
        $stmt->bindParam('$this->email', $this->email);
        $stmt->bindParam('$this->password', $this->password);

        $stmt->execute();
        $numRow = $stmt->rowCount();
        if ($numRow >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllEmployee() {
        $query = "SELECT * FROM employees";

        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        //bind giá trị vào câu truy vấn

        $stmt->execute();
        $num = $stmt->rowCount();
        if($num > 0){
            return $stmt;
        }else{
            require null;
        }
    }
    
     public function getEmployeeByInfo()
    {
        $query = "SELECT * FROM employees WHERE email = :email 
                   LIMIT 0,1";
        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        $stmt->bindParam(":email", $this->email);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function getEmployeeById(){

        $query = "SELECT * FROM employees WHERE employeeID = '$this->employeeID' LIMIT 0,1";
        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        $this->employeeID = htmlspecialchars(strip_tags($this->employeeID));
        $stmt->bindParam(1, $this->productID);

        $stmt->execute();
        $rowX = $stmt->rowCount();
        if ($rowX > 0) {
            $kq = $stmt->fetch(PDO::FETCH_ASSOC);
            return $kq;
        } else{
            return null;
        }

    }

    public function addEmployee(){
        $query = "INSERT INTO employees(employeeID, employeeName, address, email, password, phone) values('$this->employeeID', '$this->name', '$this->address', '$this->email', '$this->pass', '$this->phone')";
        $stmt = $this->con->prepare($query);

        //làm sạch dữ liệu và bind vào câu truy vấn
        $stmt->bindParam('$this->employeeID', htmlspecialchars(strip_tags($this->employeeID)));
        $stmt->bindParam('$this->name', htmlspecialchars(strip_tags($this->employeeName)));
        $stmt->bindParam('$this->address', htmlspecialchars(strip_tags($this->address)));
        $stmt->bindParam('$this->email', htmlspecialchars(strip_tags($this->email)));
        $stmt->bindParam('$this->pass', htmlspecialchars(strip_tags($this->password)));
        $stmt->bindParam('$this->phone', htmlspecialchars(strip_tags($this->phone)));

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateEmployee(){
        $query = "UPDATE employees SET employeeName='$this->name', address='$this->address', email='$this->email', password='$this->pass', phone='$this->phone' WHERE employeeID='$this->employeeID'";

        $stmt = $this->con->prepare($query);

        $stmt->bindParam('$this->employeeID', htmlspecialchars(strip_tags($this->employeeID)));
        $stmt->bindParam('$this->name', htmlspecialchars(strip_tags($this->employeeName)));
        $stmt->bindParam('$this->address', htmlspecialchars(strip_tags($this->address)));
        $stmt->bindParam('$this->email', htmlspecialchars(strip_tags($this->email)));
        $stmt->bindParam('$this->pass', htmlspecialchars(strip_tags($this->password)));
        $stmt->bindParam('$this->phone', htmlspecialchars(strip_tags($this->phone)));

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function deleteEmployeeByID()
    {
        // echo $this->productID;
       $query = "DELETE FROM employees WHERE employeeID='$this->employeeID'";

       $stmt = $this->con->prepare($query);

       $stmt->bindParam('$this->employeeID',htmlspecialchars(strip_tags($this->employeeID)));

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Xóa nhân viên thành công.</div>";
        }
        else{
            echo "<div class='alert alert-danger'>Xóa nhân viên thất bại.</div>";
        }
    }
    
}
?>