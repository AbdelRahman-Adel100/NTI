<?php
 echo "1st way:";
    for($i=0 ; $i<=20 ; $i+=5){
        echo $i." ";
    }

    echo"<br>"."<br>";

 echo "2nd way:";
    for($i=0 ; $i<=20 ; $i++){
        if($i % 5 ==0)
        echo $i." ";
    }

?>