<?php

trait Timestampable {
    public function currentTimestamp() {
        return date("Y-m-d H:i:s"); 
    }
}

class Order  {
    use Timestampable;
    public function createOrder() {
        echo"Ordered at: ". $this->currentTimestamp();
    }
}
class Invoice  {
    use Timestampable;
     public function generateInvoice() {
        echo"Invoice generated at: ". $this->currentTimestamp();
    }
}

 $o = new Order();
 $o->createOrder();
 echo"<br>";
 $inv = new Invoice();
 $inv->generateInvoice();
 
 ?>