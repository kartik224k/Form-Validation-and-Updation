<?php


// $array = array("my", "litte", "array", 2);

// $serialized_array = serialize($array); 
// $unserialized_array = unserialize($serialized_array); 

// var_dump($serialized_array); // gives back a string, perfectly for db saving!
// var_dump($unserialized_array);


$fullNameErr = $rollNoErr = $genderErr = $subjectErr = $hobbiesErr= $serialized_subject= $serialized_hobbies= "";
$fullName = $rollNo = $gender= $subject = $hobbies = "";
// $gender = true;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // $gender = test_input($_POST["gender"]);
  // $gender = test_input($_POST["radio1"]);


  if (empty($_POST["fullName"])) {
    $fullNameErr = "Name is required *";
  }
  //  else{
  //   // if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fullName"])) {
  //   //   $fullNameErr = "Only letters and white space allowed *";
  //   // }
  //   // else{
  //      $fullName = test_input($_POST["fullName"]);
  //   // }
  // }


  if (empty($_POST["rollNo"])) {
    $rollNoErr = "rollNo is required *";
  } 
  // else {
  //   // if (!filter_var($_POST["rollNo"], FILTER_VALIDATE_EMAIL)) {
  //   //   $rollNoErr = "Invalid rollNo format *";
  //   // }
  //   // else{
  //     $rollNo = test_input($_POST["rollNo"]);
  //   // }
  // }
  

  if (empty($_POST["subject"])) {
    $subjectErr = "subject is require *";
  } 
  // else {
  //   // if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["subject"])) {
  //   //   $subjectErr = "Invalid URL *";
  //   // }
  //   // else{
  //     $subject = $_POST["subject"];
  //     // $serialized_subject = base64_encode(serialize($subject));

  //   // }
    
  // }
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required *";
  } 
  // else {
  //   $gender = test_input($_POST["gender"]);
  // }


  if (empty($_POST["hobbies"])) {
    $hobbiesErr = "Hobbies Require *";
  }
  // } else {
  //   $hobbies = $_POST['hobbies'];
    // $serialized_subject = base64_encode(serialize($subject));
    // $hobbies = test_input($_POST["hobbies"]);
    // print_r( $hobbies );
  // }
  
  
}




?>





<html>
  <head>




  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<!-- Tabledit Plugin for Inline Editing -->
<script src="https://cdn.jsdelivr.net/gh/markcell/jquery-tabledit/jquery.tabledit.min.js"></script>


  <link rel="stylesheet" href="/DataTables/style.css">
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
    <!-- <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- <script src="https://editor.datatables.net/js/editor.dataTables.js"></script> -->

    <!-- <script src="https://editor.datatables.net/js/dataTables.editor.js"></script> -->

    <!-- <script src="https://cdn.datatables.net/datetime/1.5.5/js/dataTables.dateTime.min.js"></script> -->

    <!-- <script src="https://cdn.datatables.net/select/3.0.0/js/select.dataTables.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/select/3.0.0/js/dataTables.select.js"></script> -->

    <!-- <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.dataTables.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<!-- <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script> -->











    <!-- <style>

      span{
        color: red;
      }
      
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" /> -->
  </head>
<body>
<h1>PHP Validation Form</h1>

<!-- <a href="create_request.php?subject=PHP&web=W3schools.com">Test GET</a> -->
<form id="myForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <span> 
    * for Required Field
  </span>
  <br>
  <br>

  Full Name 
  <sup>
    <span>*</span>
  </sup>: 
  <input type="text" name="fullName" id="field1">
  <span name="error"> 
    <?php echo $fullNameErr;?>
  </span>
  <br>
  <br>

  Roll No 
  <sup>
    <span>*</span>
  </sup>:
  <input type="text" name="rollNo" id="field2">
  <span name="error"> 
    <?php echo $rollNoErr;?>
  </span>
  <br>
  <br>

  Subject
  <sup>
    <span>*</span>
  </sup>:
  <select name="subject[]" id="subject" multiple>
    <option value="Math">Math</option>
    <option value="Social Science">Social Science</option>
    <option value="Physics">Physics</option>
    <option value="Chemistry">Chemistry</option>
  </select>
  <span name="error">
    <?php echo $subjectErr;?>
  </span>
  <br>
  <br>
  
  Gender 
  <sup>
    <span>*</span>
  </sup>: 
  <input type="radio"  class="gender" name="gender" value="Male"> Male 
  <input type="radio"  class="gender" name="gender" value="Female"> Female  
  <span name="error"> 
    <?php echo $genderErr;?>
  </span>
  <br>
  <br>
  
  Hobbies
  <sup>
    <span>*</span>
  </sup>: 
  <br>
  <br>
  <input type="checkbox" id="hobbies1" name="hobbies[]" value="Chess">
  <label for="hobbies1"> Chess </label><br>
  <input type="checkbox" id="hobbies2" name="hobbies[]" value="Football">
  <label for="hobbies2"> Foot Ball </label><br>
  <input type="checkbox" id="hobbies3" name="hobbies[]" value="Cricket">
  <label for="hobbies3"> Cricket </label><br>
  <input type="checkbox" id="hobbies4" name="hobbies[]" value="Kabaddi">
  <label for="hobbies3"> Kabaddi </label><br>
  <span name="error"> 
    <?php echo $hobbiesErr;?>
  </span>
  <br>
  <br>

  <input type="submit">
  <br>
  <br>

  <!-- <button onclick='toSubmitSql()' value='To Submit SQL'> To Submit SQL </button> -->
  
</form>
 



<script>

  // $("form").attr('action', 'mysql.html');
  // $('form').get(0).setAttribute('action', 'mysql.html');
  
  $(document).ready(function() 
  {
    $("#myForm").submit(function(e) {
        console.log("Form submitting...");
        // Prevent default form submission
        // e.preventDefault(); 
        let isEmpty = false;

        // if($("#field1").val() == '' ){
        //   isEmpty = true;
        // }else if($("#field2").val() == ''){
        //   isEmpty = true;
        // }else if($("#subject").filter(":selected").val())
        // {
        //   isEmpty = true;
        //   console.log($("#subject").filter(":selected").val() );
        // }else if($("input[type='radio'][name=gender]:checked", '#myForm').val() == ''){
        //   isEmpty = true;
        //   console.log($("input[type='radio'][name=gender]:checked", '#myForm').val() );
        // }  

        if ($("#field1").val() == '') {
          isEmpty = true;
          alert("Type Name First.....");
        }
        else if($("#field2").val() == '') {
          isEmpty = true;
          alert("Type Name Roll No.....");
        }
        else if($("#subject").val() == '') {
          isEmpty = true;
          alert("Select Your Subjects.....");
        }
        else if($(".gender:checked").val() == undefined) {
          isEmpty = true;
          alert("Select Gender.....");
        } else {
            for(let i=1 ; i<5 ; i++)
              {
                if($('#hobbies'+ i).is(':checked')){
                    // console.log(i + 'th item Selected');
                    break;
                  }
                    else if((i+1) == 5){
                        isEmpty = true;
                        alert("Select your Hobbies.....");
                        break;
                    }
                    else{
                      
                    }
                        // console.log('going to check'+ i + 'th item');
                    
        
            
    
              }
        }
          // console.log($(".gender:checked").val());

        console.log(isEmpty);
        // console.log($("input[type='radio'][name=gender]:checked", '#myForm').val() );


        // console.log($("input[name='gender']:checked").val() );

        // console.log($("#subject").filter(":selected").val() );


        // $("#field1").each(function() {
        //     if ($(this).val().trim() == "") {
        //         isEmpty = true; // If any required field is empty, set flag
        //     }
        // });

        // Set form action based on validation
        if (isEmpty) {
            // $("#myForm").attr("action", "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>");
            // alert("Please fill all required fields.");
            console.log("on this page");

        } else {
          e.preventDefault(); 
          var hobbiesCollection = [];
          $('input[name="hobbies[]"]:checked').each(function() {
            hobbiesCollection.push(this.value);
          });
          // console.log(typeof hobbiesCollection);
          // console.log(hobbiesCollection);

          // $("myForm").submit(function (event) {
          var formData = {
            fullName: $("#field1").val(),
            rollNo: $("#field2").val(),
            subject: $("#subject").val(),
            gender : $(".gender:checked").val(),
            hobbies: hobbiesCollection,            
          };

          // console.log(formData.subject);
          console.log(formData);
          
          $.ajax({
            url: "http://localhost/create_request.php",
            type: "POST",
            data: formData,
            // dataType: "json",
            success: function (response) {
                console.log(response);
            },
            error: function (e) {
                alert("Error in uploading data." + e);
            }
        });

        setTimeout(function() {
           // Store DataTable instance
           var table = $('#myTable').DataTable();
        // function loadTableData() {
          if ($.fn.DataTable.isDataTable('#myTable')) {
              table.destroy(); // Destroy existing table
          }

                    console.log("call heppen");
                    var table = $('#myTable').DataTable({
                    ajax: {
                        url: "http://localhost/fetch_data.php",
                        type: "GET",
                        dataType: "json",
                        dataSrc: "",
                    },
                    columns: [
                        { data: "student_id" },
                        { data: "fullName" },
                        { data: "rollNo" },
                        { data: "subjects" },
                        { data: "gender" },
                        { data: "hobbies" },
                        { 
                            data: null,
                            render: function (data, type, row) {
                                return `
                                    <button class="edit-btn" data-id="${row.student_id}">Edit</button>
                                    <button class="save-btn" data-id="${row.student_id}" style="display:none;">Save</button>
                                    <button class="delete-btn" data-id="${row.student_id}">Delete</button>
                                    <button class="confirm-delete-btn" data-id="${row.student_id}" style="display:none; color:red;">Confirm</button>
                                `;
                            }
                        }
                        //     var table = $('#myTable').DataTable( {
            // //         // dom: "Bfrltip",
                    
                    
            //         ajax: {
            //             url: 'http://localhost/fetch_data.php',
            //             type: 'GET',
            //             dataType: 'JSON',
            //             dataSrc: '', // Ensures the response is used directly
                        
            //         },
            //         columns: [
            //             { data: 'student_id' },
            //             { data: 'fullName' },
            //             { data: 'rollNo' },
            //             { data: 'subjects' },
            //             { data: 'gender' },
            //             // { data: 'hobbies' }
            //             { 
            //                 data: 'hobbies',
            //                 render: function(data, type, row) {
            //                     return Array.isArray(data) ? data.join(', ') : 'No subjects';
            //                 } 
            //             }
                        
            //         ]
                    ],
                });
          // Your task here
        }, 150);





        
        // }
        

        // loadTableData();




          // ajax:{
          //   type: "POST",
          //   url: "http://localhost/create_request.php",
          //   data: formData,
          //   dataType: "json",
          //   encode: true,
          // }
          // .done(function (data) {
          //   console.log(data);
          // });

















            // $("#myForm").attr("action", "create_request.php");
            // $("#myForm").unbind("submit").submit(); // Manually submit the form
        }
    });
    
  
  });
  // alert("Form Action is Changed to 'mysql.html'n Press Submit to Confirm");


</script>





<table border="1" id="myTable" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Roll No.</th>
      <th>Subjects</th>
      <th>Gender</th>
      <th>Hobbies</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
</body>
<script src="/DataTables/index.js"></script>
</html>

<!-- <?php
// echo "<h2>Your Input:</h2>";
// echo $fullName;
// echo "<br>";
// echo $rollNo;
// echo "<br>";
// print_r($subject);
// echo "<br>";
// echo $gender;
// echo "<br>";
// print_r($hobbies);
// ?> -->


<!-- <?php 
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "mydb";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
// }
// 
// $sql = "SELECT student_id, fullName, rollNo, gender FROM student_table";
// $result = $conn->query($sql);  


// $data=[];


// echo "<table border="."1"." id="."myTable"." class="."display".">
// <tr>
// <th>ID</th>
// <th>Name</th>
// <th>Roll No.</th>
// <th>Gender</th>
// </tr>";
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     // $unserialized_subject = unserialize(base64_decode($row["subjects"]));
//     // $data[] = $row;
//     echo "<tr>";
//     echo "<td>" . $row["student_id"] . "</td>";
//     echo "<td>" . $row['fullName'] . "</td>";
//     echo "<td>" . $row['rollNo'] . "</td>";
//     echo "<td>" . $row['gender'] . "</td>";
//     echo "</tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }

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



// echo json_encode($data);

// $conn->close();



// </body>

// <script src="/DataTables/index.js"></script>

    
     // ajax:{
    //   url:'fetch_data.php/fetchData',
    //   method: 'GET',
    //   dataType: 'json',
    //   success: function(response){
    //     // var tableBody = $("#userTable tbody");
    //     // tableBody.empty();
    //     // response.forEach(row => {
    //     //   newRow = "<tr>" +
    //     //   "<td>" + row.student_id + "</td>" +
    //     //   "<td>" + row.fullName + "</td>" +
    //     //   "<td>" + row.rollNo + "</td>" +
    //     //   "<td>" + row.gender + "</td>";
    //     //   console("inside");
    //     //   tableBody.append(newRow);
    //     // console.log(response);
    //     // });
    //   },
    //   error:function(){
    //     alert("Error fetching data.");
    //   }
    // },


    // data: data,
    // columns: [
    //     { data: 'name' },
    //     { data: 'position' },
    //     { data: 'salary' },
    //     { data: 'office' }
    // ]




  // new DataTable('#myTable');
  
    
  
  
//   function toSubmitSql() {
//     console.log("hi")
//    $('form').action = 'create_request.php';
//    $('form').submit();
// }






  // new DataTable('#myTable');
//   $('#myTable').DataTable( {
//     columns: [
//         { id: 'name' },
//         { data: 'position' },
//         { data: 'salary' },
//         { data: 'office' }
//     ]
// } ); 

 





// </html>



