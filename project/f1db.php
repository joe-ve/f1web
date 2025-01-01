<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "#Joel6";
    $database = "f1db";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed");
    }

    $uname = $_POST["una"];
    $email = $_POST["ema"];
    $fdriver = $_POST["driver"];
    $fconstructor = $_POST["const"];

    $sql = "INSERT INTO `users`(`Username`, `Email`, `FavDriver`, `FavConstructor`) 
            VALUES ('$uname','$email','$fdriver','$fconstructor')";

    if($conn->query($sql) == true){
        echo("Record Added Successfully!");
    }
    else{
        echo("Error");
    }
    $conn->close();
?>
</html>