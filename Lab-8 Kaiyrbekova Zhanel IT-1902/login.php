<?php
session_start();
require "config.php";
require "database.php";
require "link.php";



if(isset($_POST['request'])) {
    $req = $_POST['request'];

    $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    $link = $conn->connect();
    $email = $_POST["email"];
    if ($req == 'check'){
        $myst = $link->prepare("SELECT * FROM registration WHERE email = ?");
        $myst->bind_param("s" , $email);
        $myst->execute();
        $res = $myst->get_result();
        $rowres = $res->fetch_assoc();

        if ($rowres != null){
            $return = array("result"=>"Account reserved");
        } else {
            $return = array("result"=>"Nice choice");
        }

        $myst->close();
    } else {

        $password = $_POST["password"];
        $stmt = $link->prepare("SELECT * FROM registration WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row != null) {
            $_SESSION['user'] = array(
                'fullname' => $row['name'] . ' ' . $row['surname'],
                'email' => $row['email'],
                'img' => $row['img'],
                'birthdate' => $row['birthday']
            );
            $return = array("result" => "Logged in");
        } else {
            $return = array("result" => "Incorrect login or/and password!");
        }

        $stmt->close();
    }
}
echo json_encode($return);


