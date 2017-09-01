<?php
    $con = mysqli_connect("localhost", "id2766054_loginregister", "6718arcel", "id2766054_loginregister");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $age = $_POST["emailaddress"];
    $age = $_POST["contactnumber"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, email address, contact number, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $name, $username, $emailaddress, $contactnumber, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
