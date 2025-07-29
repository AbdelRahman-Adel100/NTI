<?php

class Database {
  
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "training system";
    public $conn;

    public function connect() {
        $this->conn = new mysqli(
        $this->host,
        $this->username,
        $this->password, 
        $this->dbname
        );

        if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
        }
}

$n = new Database();

$email = "Ahmed_Ali@gmail.com";
$id = 1;

$sql= "SELECT name FROM studentss WHERE email = ? AND id =?";
$n-> connect();

$result = $n->conn->prepare($sql);
$result->bind_param("si", $email , $id);
$result->execute();
$result = $result->get_result();

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
}

?>