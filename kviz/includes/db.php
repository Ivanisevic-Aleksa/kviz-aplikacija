<?php
//db.php
class DB{
	private $host = "localhost";
	private $hostUsername = "root";
	private $hostPassword = "";
	private $hostName = "kviz";
	private $conn;

	protected function connect(){
		$this->conn = new mysqli($this->host,$this->hostUsername,$this->hostPassword,$this->hostName);
		if (!$this->conn) {
			die("Konekcija sa bazom nije uspela");
		}
		return $this->conn;
	}
}
?>