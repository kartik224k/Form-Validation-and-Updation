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
$( document ).ready(function() {
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





    var table = $('#myTable').DataTable( {
//         // dom: "Bfrltip",
        
        
        ajax: {
            url: 'http://localhost/fetch_data.php',
            type: 'GET',
            dataType: 'JSON',
            dataSrc: '', // Ensures the response is used directly
            
        },
        columns: [
            { data: 'student_id' },
            { data: 'fullName' },
            { data: 'rollNo' },
            { data: 'subjects' },
            { data: 'gender' },
            // { data: 'hobbies' }
            { 
                data: 'hobbies',
                render: function(data, type, row) {
                    return Array.isArray(data) ? data.join(', ') : 'No subjects';
                } 
            },
            
        ],
    //     layout: {
    //         topStart: {
    //             buttons: [
    //                 { extend: 'create', editor: editor },
    //                 { extend: 'edit', editor: editor },
    //                 { extend: 'remove', editor: editor }
    //             ]
    //         }
    //     },
    //     order: [[1, 'asc']],
    //     select: {
    //         style: 'os',
    //         selector: 'td:first-child'
    //     }
    });
    $('#myTable').on('draw.dt', function(){
        $('#myTable'). Tabledit({
            url: 'http://localhost/editDatabase.php',
            dataType: 'json',
            type: 'POST',
            columns: {
                identifier: [0, 'id'],
                editable: [[1, 'fullName'], [2, 'rollNo'], [4, 'gender', '{"1": "Male", "2":"Female"}' ]],
            },
            restoreButton: false,
            onSuccess: function(data, textstatus, jqXHR)
            {
                if(data.action = 'delete')
                {
                    $('#' + data.id).remove();
                    $('#myTable').DataTable().ajax.reload();
                }
            }
        });
    });
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
});