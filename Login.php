<?php
    $con = mysqli_connect("localhost", "id2766054_loginregister", "6718arcel", "id2766054_loginregister");
    
    $username = $_POST["emailaddress"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE emailaddress = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $emailaddress, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $ID, $name, $username, $emailaddress, $contactnumber, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $name;
        $response["username"] = $username;
        $response["emailaddress"] = $age;
        $response["contactnumber"] = $age;
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>
