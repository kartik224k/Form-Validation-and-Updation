<?php

use CodeIgniter\CLI\Console;

$connection = new mysqli("127.0.0.1", "root", "", "mydb");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$student_id = $_POST['student_id'];
$fullName = $_POST['fullName'];
$rollNo = $_POST['rollNo'];
$subjectArray = $_POST['subjects'];
$gender = $_POST['gender'];
$hobbiesArray = $_POST['hobbies'];



$sql = "UPDATE student_table SET fullName='$fullName', rollNo='$rollNo', gender='$gender' WHERE student_id='$student_id'";

if ($connection->query($sql) === TRUE) {
    // echo "Record updated successfully";
} else {
    echo "Error: " . $connection->error;
}
// $stmt3 = "DELETE FROM hobbies_table 
//         WHERE student_id = '$student_id'";

// if ($connection->query($stmt3) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error: " . $connection->error;
// }
$stmt2 = "DELETE FROM subject_table 
        WHERE student_id = '$student_id'";

if ($connection->query($stmt2) === TRUE) {
    // echo "Record deleted successfully";
} else {
    echo "Error: " . $connection->error;
}

// echo "<table>
// <tr>
// <th>Firstname</th>
// <th>Lastname</th>
// <th>Age</th>
// <th>Hometown</th>
// <th>Job</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";

$stmt = mysqli_prepare($connection,'INSERT INTO subject_table (student_id, subject_name) VALUES (?, ?)');
foreach($subjectArray as $item) {
    mysqli_stmt_bind_param($stmt,'is',$student_id,$item);
    mysqli_stmt_execute($stmt);
}



$stmt3 = "DELETE FROM hobbies_table 
        WHERE student_id = '$student_id'";

if ($connection->query($stmt3) === TRUE) {
    // echo "Record deleted successfully";
} else {
    // echo "Error: " . $connection->error;
}

$stmt4 = mysqli_prepare($connection,'INSERT INTO hobbies_table (student_id, hobbies_name) VALUES (?, ?)');
foreach($hobbiesArray as $item) {
    mysqli_stmt_bind_param($stmt4,'is',$student_id,$item);
    mysqli_stmt_execute($stmt4);
}




$connection->close();
?>
