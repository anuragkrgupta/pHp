<?php
    $servername="localhost";
    $username="root";
    $password='';
    $databaseName='computer_application';
    $conn=mysqli_connect($servername,$username, $password);
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
    $sql="CREATE DATABASE IF NOT EXISTS $databaseName";
    if($conn->query($sql)==TRUE)
    {
        echo "Database created";
    }
    else{
        echo "Error creating database: ". $conn->error;
    }
    $conn->select_db($databaseName);
    $sql = "CREATE TABLE bca (
        id INT(6),
        name VARCHAR(30) NOT NULL,
        date_of_birth DATE NOT NULL
    )";
    if (mysqli_query($conn, $sql)) {
        echo "bca table created successfully";
    } else {
        echo "Error creating bca table: ". mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>