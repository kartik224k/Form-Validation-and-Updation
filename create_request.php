

<?php


// $data = [];

// print_r($data);

$servername = "127.0.0.1";
$username = "root"; 
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database selected successfully  ";

// $sql = "CREATE DATABASE mysql";
$retval = mysqli_select_db( $conn, 'mydb' );
  
if(! $retval ) {
    die('Could not select database: ' . mysqli_error($conn));
}
echo "Database MYSQL selected successfully";


    $fullName =  $_REQUEST['fullName'];

    $rollNo = $_REQUEST['rollNo'];

    $subjectArray = $_REQUEST["subject"];
    // $serialized_subject = base64_encode(serialize($subject));
    // $serialized_subject = serialize($subject); 

    $gender =  $_REQUEST['gender'];

    $hobbiesArray = $_REQUEST['hobbies'];

    // print_r($hobbiesArray);
    // $serialized_hobbies = base64_encode(serialize($hobbies));

    // $serialized_hobbies = serialize($hobbies);
    // print_r($subjectArray);

// $sql = "CREATE TABLE dataTables";

    



    $sql = "INSERT INTO student_table (fullName, rollNo, gender)
    VALUES ('$fullName', '$rollNo','$gender')";
    // mysql_stmp =

    

    // throw new Exception("Record Not Created Due To Roll No is Already Exist ");
  
  
//   catch exception
//   catch(Exception $e) {
//     echo 'Message: ' .$e->getMessage();
//   }


try
{
    if (mysqli_query($conn,$sql) === TRUE) 
    {
        $last_id = mysqli_insert_id($conn);
        // echo $last_id;
    } else {
        throw new Exception("Record Not Created Due To Roll No is Already Exist ");
      }
}
    catch(Exception $e) 
    {
        echo 'Error: ' .$e->getMessage();
    }

    $stmt = mysqli_prepare($conn,'INSERT INTO subject_table (student_id, subject_name) VALUES (?, ?)');
    // $stmt2 = mysqli_prepare($stmt);
    // $stmt = $dbh->prepare

    // $query = mysqli_prepare("INSERT INTO `MyTable` (`col1`,`col2`,`col3`)
    // VALUES(?,?,?)");
    // sqlsrv_begin_transaction($conn);
    foreach($subjectArray as $item) {
        // $query->bind_param('sss',$value["prop1"],$value["prop2"],$value["prop3"];
        // $query->execute();
        
        mysqli_stmt_bind_param($stmt,'is',$last_id,$item);
        mysqli_stmt_execute($stmt);
        // Prepare parameters for the query
        // $params = array(&$item['column1'], &$item['column2'], ...);

        // $stmt = sqlsrv_prepare($conn, $query, $params);

        // if (sqlsrv_execute($stmt) === false) {
            // $success = false;
            // break; // Exit the loop on failure
        //   }

    }

    $stmt = mysqli_prepare($conn,'INSERT INTO hobbies_table (student_id, hobbies_name) VALUES (?, ?)');
    foreach($hobbiesArray as $item) {
        // $query->bind_param('sss',$value["prop1"],$value["prop2"],$value["prop3"];
        // $query->execute();
        
        mysqli_stmt_bind_param($stmt,'is',$last_id,$item);
        mysqli_stmt_execute($stmt);
        // Prepare parameters for the query
        // $params = array(&$item['column1'], &$item['column2'], ...);

        // $stmt = sqlsrv_prepare($conn, $query, $params);

        // if (sqlsrv_execute($stmt) === false) {
            // $success = false;
            // break; // Exit the loop on failure
        //   }

    }
    
    // $result = $conn->query("SELECT student_id FROM student_table");
    // echo 




?>


<?php
echo "Input:     Your Name:  ";
echo $fullName;
echo "     Your RollNo:  ";
echo $rollNo;
echo "     Your Subjects:  ";
print_r($subjectArray);
echo "     Gender:  ";
echo $gender;
echo "     Hobbies:  ";
print_r($hobbiesArray);
 ?> 