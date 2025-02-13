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


    $data =[];

    $sql = "SELECT student_id, fullName, rollNo, gender FROM student_table";
    $studentTable = $conn->query($sql);


    // $stmt = mysqli_prepare($conn,"SELECT subject_name FROM subject_table
    //         WHERE student_id=?");






    if ($studentTable->num_rows > 0) {
        // output data of each row
        while($row = $studentTable->fetch_assoc()) {
        // $unserialized_subject = unserialize(base64_decode($row["subjects"]));
            $student_id =  $row["student_id"];



            $subject = [];
            $hobbies = [];
            $stmt1 ="SELECT subject_name FROM subject_table
                    WHERE student_id= $student_id";
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


            $subjectTable = $conn->query($stmt1);
            // print_r($subjectTable);
            if ($subjectTable->num_rows > 0) {
                while ($row1 = $subjectTable->fetch_assoc()) {
                    // print_r($row1);
                    $subject[] = $row1["subject_name"];
                    // print_r($subject);
                }
            }




            // $hobbies_data = [];
            $stmt2 ="SELECT hobbies_name FROM hobbies_table
                    WHERE student_id= $student_id";
            // $hobbiesTable = $conn->query($stmt2);
            // if ($hobbiesTable->num_rows > 0) {
            //     // output data of each row
            //     while($hobbiesCol = $hobbiesTable->fetch_assoc()) {
            //         $hobbies_data[]=$hobbiesCol["hobbies_name"];
            //         // $hobbiesCol["hobbies_name"] = array();
            //         // print_r($hobbies_data);
            //     }}
            // // $id = $row["student_id"];
            // // mysqli_stmt_bind_param($stmt,'i',$id);
            // // $subject_my = mysqli_stmt_execute($stmt);
            // // print_r( $subject_data);
            // foreach($hobbies_data as $item) {
            //      $onlyHobbies[] = $item;
            // }
            // // $hobbies_data[] = array();
            // $hobbiesList = implode(', ', $onlyHobbies);
            // // $onlyHobbies[]=array();


        //     $result1 = $conn->query($stmt1);
        
        // if ($result1->num_rows > 0) {
        //     while ($row1 = $result1->fetch_assoc()) {
        //         $subjects[] = $row1["subject_name"];
        //     }
        // }

            $hobbiesTable = $conn->query($stmt2);
        
            if ($hobbiesTable->num_rows > 0) {
                while ($row2 = $hobbiesTable->fetch_assoc()) {
                    $hobbies[] = $row2["hobbies_name"];
                }
            }





            $row["subjects"] = $subject;
            $row["hobbies"] = $hobbies;
            // $hobbiesList = '';
            $data[] = $row;
            // $row["hobbies"] = array();
            
        } 
        // $data["hobbies"] = array();
    }
    header('Content-Type: application/json');
    $result= json_encode($data);
    echo json_encode($data);

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
//   echo "<td>" . $row["student_id"] . "</td>";
//   echo "<td>" . $row['fullName'] . "</td>";
//   echo "<td>" . $row['rollNo'] . "</td>";
//   echo "<td>" . $row['gender'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";

$conn->close();

 





  

?>