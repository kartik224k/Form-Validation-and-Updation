<?php
$connection = new mysqli("localhost", "root", "", "mydb");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$student_id = $_POST['student_id'];

$sql = "DELETE FROM student_table WHERE student_id='$student_id'";

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $connection->error;
}

// $subjectTable = $conn->query($stmt1);
            // if ($subjectTable->num_rows > 0) {
            //     // output data of each row
            //     while($subjectCol = $subjectTable->fetch_assoc()) {
            //         $subject_data[]=$subjectCol["subject_name"];
            //     }}
            // // $id = $row["student_id"];
            // // mysqli_stmt_bind_param($stmt,'i',$id);
            // // $subject_my = mysqli_stmt_execute($stmt);
            // // print_r( $subject_data);
            // foreach($subject_data as $item) {
            //      $onlySubject[] = $item;
            // }
            // $subjectList = implode(', ', $onlySubject);


$stmt2 = "DELETE FROM subject_table 
        WHERE student_id = '$student_id'";

if ($connection->query($stmt2) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $connection->error;
}


$stmt3 = "DELETE FROM hobbies_table 
        WHERE student_id = '$student_id'";

if ($connection->query($stmt3) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $connection->error;
}


$connection->close();
?>
