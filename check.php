<?php

session_start();
if(isset($_POST["email"]) && !isset($_SESSION["email"])){
    $users = [
        "hcitem@gmail.com" => "password",
        "test@test.com" => "test"
    ];

    if(isset($users[$_POST["email"]])){
        if($users[$_POST["email"]] == $_POST["password"]){
            $_SESSION["email"] = $_POST["email"];
        }
    }

    if(!isset($_SESSION["email"])){
        $failed = true;
    }

    if(isset($_SESSION["email"])){
        header("Location: Homepage.html");
        exit();
    }
}