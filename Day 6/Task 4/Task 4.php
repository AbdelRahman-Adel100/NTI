<?php

$today = date("Y-m-d");
$path = "logs/$today";
if (file_exists($path)) {
    echo "The file already exist at 'logs folder'. ";
}else{
mkdir($path, 0777, true);
echo "Created folder: $path";
}

?>
