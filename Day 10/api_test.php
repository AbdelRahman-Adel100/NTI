<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

    if($_SERVER["SERVER_NAME"] == "127.0.0.1"){

    $data =["data" => [["message"=> "Wrong Try To Get Data"]],"connection" => false,"message"=> "Wrong Domain"];
    echo json_encode($data);
    }else{
            $d =[
                "data" =>[
                    [
                        "name" => "Ali",
                        "age" => 25,
                        "city" => "Alex",
                    ],[
                     
                        "name" => "Salma",
                        "age" => 20,
                        "city" => "Cairo",
                       
                    ]
                ],
                "connection" => true,
                "message"=> "Data Retrieved SuccessfUlly"
            ];
        echo json_encode($d);
    }
?>