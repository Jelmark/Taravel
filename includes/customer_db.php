<?php
class cusDB{
	public $dbhost = "localhost";
	public $dbuser = "root";
	public $dbpass = "";
	public $db = "travelreservation";

public function dbConn(){
	$conn = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->db);

	if($conn->connect_error){
		echo "Cannot Connect to Database. ".$conn->connect_error;
	}else{
		return $conn;
	}
}
public function addUser($cusFname,$cusLname,$cusUname,$cusEmail,$cusPass){
	$conn = $this->dbConn();

	$sql = "INSERT INTO customerDb VALUES
	(NULL,'$cusFname','$cusLname','$cusUname','$cusEmail','$cusPass')";

	$conn->query($sql);
}
}

?>