<?php

    $grade=60;

    if(!isset($grade))
        echo"Enter your Grade";
  
    elseif($grade>=50)
        echo"Success";
    else
         echo"Failed";


?>