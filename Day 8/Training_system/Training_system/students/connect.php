<?php
function dbconnect(){
$conn = new mysqli("localhost", "root","","training system");
    if($conn -> connect_error){
        die ("Connection failed".$conn -> connect_error);
    }
        return $conn;
}
?>  