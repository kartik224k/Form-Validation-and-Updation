<?php

    
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


     $data = array(
        $fullName =  $_POST['fullName'],
        ':rollNo' => $_POST['rollNo'],
        ':gender' => $_POST['gender'],
        ':id' => $_POST['id']);
        echo $fullName;
        $query ="UPDATE student_table
                SET fullName = :fullName,
                rollNo = :rollNo,
                gender = :gender
                WHERE id = :id";
                $statement = $conn->prepare($query) ;
                $statement->execute($data);
                echo json_encode($_POST);  
         
    // $stmt = mysqli_prepare($conn,"SELECT subject_name FROM subject_table
    //         WHERE student_id=?");






    

$conn->close();

 





  

?>