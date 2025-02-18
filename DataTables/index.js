// ajax:{
//       url:'fetch_data.php/fetchData',
//       method: 'GET',
//       dataType: 'json',
//       success: function(response){
//         var tableBody = $("#userTable tbody");
//         tableBody.empty();
//         response.forEach(row => {
//           newRow = "<tr>" +
//           "<td>" + row.student_id + "</td>" +
//           "<td>" + row.fullName + "</td>" +
//           "<td>" + row.rollNo + "</td>" +
//           "<td>" + row.gender + "</td>";
//           console("inside");
//           tableBody.append(newRow);
//         console.log(response);
//         });
//       },
//       error:function(){
//         alert("Error fetching data.");
//       }
//     },
// }
// $( document ).ready(function() {
    // console.log("hi");


    // var editor = new $.fn.dataTable.Editor({
    //     ajax: "your-server-side-script.php",
    //     table: "#example", // Make sure the table ID matches your HTML
    //     fields: [
    //         { label: "Name", name: "name" },
    //         { label: "Position", name: "position" },
    //         { label: "Office", name: "office" }
    //     ]
    // });

    // const editor = new DataTable.Editor({
    //     ajax: '../php/staff.php',
    //     fields: [
    //         {
    //             label: 'Name:',
    //             name: 'fullName'
    //         },
    //         {
    //             label: 'Roll No::',
    //             name: 'rollNo'
    //         },
    //         {
    //             label: 'Subjects:',
    //             name: 'subjects'
    //         },
    //         {
    //             label: 'Gender:',
    //             name: 'gender'
    //         },
    //         {
    //             label: 'Hobbies:',
    //             name: 'hobbies'
    //         }
    //     ],
    //     table: '#myTable'
    // });





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
        

        
//     //     layout: {
//     //         topStart: {
//     //             buttons: [
//     //                 { extend: 'create', editor: editor },
//     //                 { extend: 'edit', editor: editor },
//     //                 { extend: 'remove', editor: editor }
//     //             ]
//     //         }
//     //     },
//     //     order: [[1, 'asc']],
//     //     select: {
//     //         style: 'os',
//     //         selector: 'td:first-child'
//     //     }
//     });



    // $("#myTable").Tabledit({
    //     url: "http://localhost/update_data.php", // Your update endpoint
    //     editButton: true,
    //     deleteButton: false,
    //     hideIdentifier: true,
    //     columns: {
    //         identifier: [0, "student_id"], // Primary key column
    //         editable: [
    //             [1, "fullName"],
    //             [2, "rollNo"],
    //             [3, "subjects"],  // Make subjects editable
    //             [4, "gender", '{"Male": "Male", "Female": "Female"}'],
    //             [5, "hobbies"], // Make hobbies editable
    //         ],
    //     },
    //     onSuccess: function (data, textStatus, jqXHR) {
    //         console.log("Data updated successfully:", data);
    //         table.ajax.reload(); // Reload table after editing
    //     },
    // });



    // $('#myTable').on('draw.dt', function(){
    //     $('#myTable'). Tabledit({
    //         url: 'http://localhost/editDatabase.php',
    //         dataType: 'json',
    //         type: 'POST',
    //         columns: {
    //             identifier: [0, 'id'],
    //             editable: [[1, 'fullName'], [2, 'rollNo'], [4, 'gender', '{"1": "Male", "2":"Female"}' ]],
    //         },
    //         restoreButton: false,
    //         onSuccess: function(data, textstatus, jqXHR)
    //         {
    //             if(data.action = 'delete')
    //             {
    //                 $('#' + data.id).remove();
    //                 $('#myTable').DataTable().ajax.reload();
    //             }
    //         }
    //     });
    // });
    // // Activate an inline edit on click of a table cell
    // table.on('click', 'tbody td:not(:first-child)', function (e) {
    //     editor.inline(this);
    // });
    
    //     select: {
    //         style: 'os',
    //         selector: 'td:first-child'
    //     },
    //     buttons: [
    //         // { extend: "create", editor: editor },
    //         { extend: "edit", editor: editor },
    //         { extend: "remove", editor: editor }
    //     ]
    // });

    // // Enable inline editing on cell click
    // table.on('click', 'tbody td:not(:first-child)', function(e) {
    //     editor.inline(this);
    // });


        
    //     language: {
    //     emptyTable: "No data available in table" // Custom message for empty tables
    // }
    // } );
    
    // $( "#target" ).on( "click", function() {
    //     alert( "Handler for `click` called." );
    //   } );


    // $("#myTable").Tabledit({
    //     url: "http://localhost/update_data.php", // Endpoint to handle updates
    //     editButton: true,
    //     deleteButton: false,
    //     hideIdentifier: true,
    //     columns: {
    //         identifier: [0, "student_id"], // The primary key column
    //         editable: [
    //             [1, "fullName"],
    //             [2, "rollNo"],
    //             [3, "gender", '{"Male": "Male", "Female": "Female"}'],
    //         ],
    //     },
    //     onSuccess: function (data, textStatus, jqXHR) {
    //         console.log("Data updated successfully:", data);
    //         table.ajax.reload(); // Reload table after editing
    //     },
    // });


// });

$(document).ready(function () {


    // $("#myForm").submit(function() {
    //     setTimeout(
    //         function() 
    //         {
                
    //         }, 5000);
        


    // });

    var table = $('#myTable').DataTable();

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

    

    
    $("#myTable tbody").on("click", ".edit-btn", function () {
        var row = $(this).closest("tr");

        row.find("td:eq(1), td:eq(2)").each(function () {
            var text = $(this).text();
            $(this).html(`<input type='text' value='${text}'>`);
        });

        var currentGender = row.find("td:eq(4)").text().trim();
        var genderOptions = `
            <select>
                <option value="Male" ${currentGender === "Male" ? "selected" : ""}>Male</option>
                <option value="Female" ${currentGender === "Female" ? "selected" : ""}>Female</option>
            </select>`;
        row.find("td:eq(4)").html(genderOptions);


        var currentSubject = row.find("td:eq(3)").text();
        var subjectOptions = `
            <select multiple>
                <option value="Math"  selected>Math</option>
                <option value="Social Science" ${currentSubject === "Social Science" ? "selected" : ""}>Social Science</option>
                <option value="Physics" ${currentSubject === "Physics" ? "selected" : ""}>Physics</option>
                <option value="Chemistry" ${currentSubject === "Chemistry" ? "selected" : ""}>Chemistry</option>
            </select>`;
        row.find("td:eq(3)").html(subjectOptions);


        var currentHobby = row.find("td:eq(5)").text();
        var hobbyOptions = `
            <select multiple>
                <option value="Chess" selected>Chess</option>
                <option value="Football" ${currentHobby === "Football" ? "selected" : ""}>Football</option>
                <option value="Cricket" ${currentHobby === "Cricket" ? "selected" : ""}>Cricket</option>
                <option value="Kabaddi" ${currentHobby === "Kabaddi" ? "selected" : ""}>Kabaddi</option>
            </select>`;
        row.find("td:eq(5)").html(hobbyOptions);



        row.find(".edit-btn").hide();
        row.find(".save-btn").show();
    });

    
    $("#myTable tbody").on("click", ".save-btn", function () {
        var row = $(this).closest("tr");
        var studentId = $(this).data("id");
        console.log(studentId);
        var updatedData = {
            student_id: studentId,
            fullName: row.find("td:eq(1) input").val(),
            rollNo: row.find("td:eq(2) input").val(),
            subjects: row.find("td:eq(3) select").val(),
            gender: row.find("td:eq(4) select").val(),
            hobbies: row.find("td:eq(5) select").val()
        };

        $.ajax({
            url: "http://localhost/update_data.php",
            type: "POST",
            data: updatedData,
            success: function (response) {

    
                console.log(response);   
                row.find("td:eq(1)").text(updatedData.fullName);
                row.find("td:eq(2)").text(updatedData.rollNo);
                row.find("td:eq(3)").text(updatedData.subjects);
                row.find("td:eq(4)").text(updatedData.gender);
                row.find("td:eq(5)").text(updatedData.hobbies);

                row.find(".edit-btn").show();
                row.find(".save-btn").hide();
            },
            error: function () {
                alert("Error updating data.");
            }
        });
    });

    
    $("#myTable tbody").on("click", ".delete-btn", function () {
        var row = $(this).closest("tr");

        
        row.find(".delete-btn").hide();
        row.find(".confirm-delete-btn").show();
    });

    
    $("#myTable tbody").on("click", ".confirm-delete-btn", function () {
        var row = $(this).closest("tr");
        var studentId = $(this).data("id");

        $.ajax({
            url: "http://localhost/delete_data.php",
            type: "POST",
            data: { student_id: studentId },
            success: function (response) {
                console.log(response);
                table.row(row).remove().draw(false); 
            },
            error: function () {
                alert("Error deleting record.");
            }
        });
    });
});

