<?php
class Default_Models_Customers{
	public $id;
	public $username;
	public $password;
	public $email;
	public $phone;
	public $address;
	public $status;
	public $fullName;
	public $birthDate;
	public $avatar;

	private $conn = null;
    //Hàm khởi tạo
    public function __construct($db){
        $this->conn = $db;
    }
    public function checkEmployee(){
    	$query = "SELECT * FROM customers WHERE email = :email
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
}
?>