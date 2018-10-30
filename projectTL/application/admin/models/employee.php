<?php
class Admin_Models_Employee{
	public $email;
	public $password;

	private $con;

	 public function __construct($db){
        $this->con = $db;
    }

    public function checkEmployee(){
    	$query = "SELECT * FROM admin WHERE email = :email
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
        $query = "SELECT * FROM admin WHERE email = :email 
        		   LIMIT 0,1";
        $stmt = $this->con->prepare($query);
        //Làm sạch dữ liệu
        $stmt->bindParam(":email", $this->email);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}

?>