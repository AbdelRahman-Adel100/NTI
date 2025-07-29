<?php
class Book{
    public $title;
    public function read(){
        echo "Title of book is: $this->title";
    }
}
$book= new Book();
$book->title="OOP";
$book->read();
?>