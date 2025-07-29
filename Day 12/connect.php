<?php
function dbconnect(){
$conn = new mysqli("localhost", "root","","training system");
    if($conn -> connect_error){
        die ("Connection failed".$conn -> connect_error);
    }
        return $conn;
}
?>  
<?php
/*
class Database {
  
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "training system";
    private $port = 3306;
    public $conn;

    public function connect() {
        $this->conn = new mysqli(
        $this->host, $this->username,
        $this->password, $this->dbname,
        $this->port
        );

        if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
        }
}
*/
?>