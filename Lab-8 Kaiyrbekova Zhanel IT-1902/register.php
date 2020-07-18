<?php

session_start();
include "config.php";
include "link.php";
include "database.php";
$return = null;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $img = $_POST["img"];
    $birthday = $_POST["birthday"];

    $stmt = $link->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s" , $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();

    if ($row != null) $return = array("message"=>"Account is reserved");
    else {
        $stmt = $link->prepare('INSERT INTO registration ( name, surname, email, password, img, birthday) VALUES (? , ? , ? , ? , ? , ?)');
        $stmt->bind_param('ssssss' , $name, $surname , $email , $password, $img , $birthday);
        $stmt->execute();
        $return = array("message"=>"Account is already created");
        session_reset();
    }

    $stmt->close();
}

echo json_encode($return);
