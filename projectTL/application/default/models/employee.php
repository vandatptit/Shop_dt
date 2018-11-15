<?php
class Default_Models_Employee{
	public $employee_id;
	public $employeeName;
	public $email;
	public $password;
    public $phone;

	private $con;

	 public function __construct($db){
        $this->con = $db;
    }

    public function checkEmployee(){
    	$query = "SELECT * FROM employees WHERE email = :email
    			  AND password = :password";
    	$stmt = $this->con->prepare($query);
    	$this->password = htmlspecialchars(strip_tags($this->password));

    	$stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);

    	$stmt->execute();
    	$numRow = $stmt->rowCount();
    	if($numRow>=1){
    		return true;
    	}
    	else{
    		return false;
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
    public function addEmployeess(){
        $query = "INSERT INTO employees SET employeeName=:employeeName, email=:email, password=:password, phone=:phone";

        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu đầu vào
        $this->employeeName = htmlspecialchars(strip_tags($this->employeeName));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password  = htmlspecialchars(strip_tags($this->password));
        $this->phone  = htmlspecialchars(strip_tags($this->phone));

        //Gắn dữ liệu cho câu truy vấn
        $stmt->bindParam(":employeeName",$this->employeeName);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":password",$this->password);
        $stmt->bindParam(":phone",$this->phone);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>