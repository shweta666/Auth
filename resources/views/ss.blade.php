  success: function(response) {
    console.log(response);
    var doc = new jsPDF();

    doc.text("a", 10, 10);
    doc.save("C:/xampp/htdocs/Auth/public/pdf/info.pdf");        
   
    const myData = response.data;

    document.getElementById('info').innerHTML = `ID: ${myData.id}
    <br> NAME: ${myData.name}
    <br> EMAIL: ${myData.email}
    <br> ROLE: ${myData.role}
    <br> PHONE: ${myData.phone}
    <br> PROFILE PICTURE: ${myData.image}`;

  }
  




  //console.log(response);
  // let element = document.getElementById("info");
  // html2pdf()
  // .from(element)
  // .save("C:/xampp/htdocs/Auth/public/pdf/info.pdf");





  // var doc = new jsPDF();
  // var specialElementHandlers = {
  //   '#editor': function (element, renderer) {
  //       return true;
  //   }

  //   //$('#download').click(function () {
  //     doc.fromHTML($("#download").html(data), 15, 15, {
  //       'width': 100,
  //       'elementHandlers': specialElementHandlers
  //   });
  //   doc.save('file.pdf');

//       });

//     }

//   });
// }








{{-- // $(document).ready(function() {
    //   $('#download').click(function() {
    //     var id = $('#download').val();
    //     if (id != '')
    //     {
    //       $.ajax({
    //         url: "fetch.php",
    //         method: "POST",
    //         data: {id:id},
    //         dataType: "JSON",
    //         success:function(data)
    //         {
    //           $('#userDetails').css("display", "block");
    //           $('#userId').text(data.id);
    //           $('#userName').text(data.name);
    //           $('#userEmail').text(data.email);
    //           $('#userRole').text(data.role);
    //           $('#userPhone').text(data.phone);
    //           $('#userImage').text(data.image);
    //         }
    //       })
  
    //     }
    //     else
    //     {
    //       alert("No ID");
    //       $('#userDetails').css("display", "none");
    //     }
  
    //   });
    // }); --}}


mid part

 
{{-- // var len = 0;
// $('#userDetails tbody').empty(); // Empty <tbody>
// if(response['data'] != null){
//    len = response['data'].length;
// }
// if(len > 0){
//    for(var i=0; i<len; i++){
//       var id = response['data'][i].id;
//       var name = response['data'][i].name;
//       var email = response['data'][i].email;
//       var role = response['data'][i].role;

//       var tr_str = "<tr>" +
//         "<td align='center'>" + (i+1) + "</td>" +
//         "<td align='center'>" + name + "</td>" +
//         "<td align='center'>" + email + "</td>" +
//         "<td align='center'>" + role + "</td>" +
//       "</tr>";

//       $("#userDetails tbody").append(tr_str);
//    }
// }else{
//    var tr_str = "<tr>" +
//        "<td align='center' colspan='4'>No record found.</td>" +
//    "</tr>";

//    $("#userDetails tbody").append(tr_str);
// }
 --}}



{{-- 
    //  var userId, userName, userEmail, userRole, userPhone, userImage

    //  function UserInfo(data)  
    //  {  
    //      userId = data.id;  
    //      userName = data.name;  
    //      userEmail = data.email;  
    //      userRole = data.role;  
    //      userPhone = data.phone;  
    //      userImage = data.image;  
    //  }

    //  $(document).ready(function () {  
    //      UserInfoDetail();
    //  }); 

    //  function UserInfoDetail() {  
    //      document.getElementById('id').innerHTML = userId;  
    //      document.getElementById('name').innerHTML = userName;  
    //      document.getElementById('email').innerHTML = userEmail;  
    //      document.getElementById('role').innerHTML = userRole;  
    //      document.getElementById('phone').innerHTML = userPhone;  
    //      document.getElementById('image').innerHTML = userImage;
         
    //  }

    //   function generatePDF() {

    //     document.write("User Information <br>");
    //     document.write("ID:" +userId+ "<br>");
    //     document.write("Name:" +userName+ "<br>");
    //     document.write("Email:" +userEmail+ "<br>");
    //     document.write("Role:" +userRole+ "<br>");
    //     document.write("Phone:" +userPhone+ "<br>");
    //     document.write("Profile Picture:" +userImage+ "<br>"); --}}





    {{-- // $(document).ready(function() {

        //   var specialElementHandlers = {
        //     "#editor":function(element, renderer) {
        //       return true;
        //     }
        //   };
    
        //   $('#download').click(function() {
    
        //     var doc = new jsPDF();
    
        //     doc.fromHTML($("#target").html(), 15, 15, {
        //       "width": 160,
        //       "elementHandlers":specialElementHandlers
        //     });
    
        //     doc.save("file.pdf");
    
        //   }); --}}
    




table

    {{-- <table id='userDetails' style='border-collapse: collapse;'>
      <thead>
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Role</th>
       </tr>
      </thead>
      <tbody></tbody>
    </table> --}}

    {{-- <div class="table-responsive" id="userDetails" style="display: none">
      
      <table class="table table-bordered">
      <tr>
        <td style="width: 10%; align: right;"><b>ID</b></td>
        <td style="width: 90%;"><span id="userId"></span></td>
      </tr>
      <tr>
        <td style="width: 10%; align: right;"><b>Name</b></td>
        <td style="width: 90%;"><span id="userName"></span></td>
      </tr>
      <tr>
        <td style="width: 10%; align: right;"><b>Email</b></td>
        <td style="width: 90%;"><span id="userEmail"></span></td>
      </tr>
      <tr>
        <td style="width: 10%; align: right;"><b>Role</b></td>
        <td style="width: 90%;"><span id="userRole"></span></td>
      </tr>
      <tr>
        <td style="width: 10%; align: right;"><b>Phone</b></td>
        <td style="width: 90%;"><span id="userPhone"></span></td>
      </tr>
      <tr>
        <td style="width: 10%; align: right;"><b>Image</b></td>
        <td style="width: 90%;"><span id="userImage"></span></td>
      </tr>
            
    </table>  
  </div>  --}}

  $(document).ready(function () {
     
    $("#search").click(function (e) {
      
      var id = $('#search').val();
      if (id != '')
      {
        $.ajax({
          url: 'getUsers/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response) {
            
            console.log(response);
            e.preventDefault();
            window.location.href = '/ss.doc';

          }
        });
       }
      });

      //     $('#search').on('click', function () {
        //     $.ajax({
        //         url: 'getUsers/'+id,
        //         method: 'GET',
        //         xhrFields: {
        //             responseType: 'blob'
        //         },
        //         success: function (data) {
        //             var a = document.createElement('a');
        //             $('a').click(function(e) {
        //                e.preventDefault();
        //                window.location.href = '/ss.doc';
        
        //             var url = window.URL.createObjectURL(data);
        //             a.href = url;
        //             a.download = '/ss.doc';
        //             document.body.append(a);
        //             a.click();
        //             a.remove();
        //             window.URL.revokeObjectURL(url);
        //     });
        //   }
        // });
        //     });
        //   });







        {{-- 
<script>

var data = {'fsp_type': fsp_type,'fsp':fsp, 'start_date': start_date, 'end_date': end_date, 'type':selectedTab,'pooling_station':pst_id, 'plant':plant_id};
$.ajax({
type: "POST",
dataType: "json",
data: data,
url: "{{url("api/forecast/getFspGraphData")}}",
success: function (response) {
let data = response.data;
if(response.status === 'success' && data.length !== 0)
{
// debugger;
let title = '';
if(pst_id === 'state_level' && plant_id === 'all')
{
title = 'State Level';
}else if(pst_id !== 'state_level' && plant_id === 'all'){
title = pst_name;
}else{
title = plant_name;
}
getDataChart(data,date,selectedTab,title);
showTableData(data);
}else{
$('.graph').each(function () {
$(this).html('No data to display');
});
if ($.fn.DataTable.isDataTable("#accuracy_analysis_table")) {
$("#accuracy_analysis_table").DataTable().destroy();
}
$("#accuracy_analysis_table tbody").html('');
$("#accuracy_analysis_table").DataTable();
}
}
});

</script> --}}


// public function export($type)
// {
//     echo "Hi Shweta";
//     $data = User::all();

//     $spreadsheet = new Spreadsheet();
//     $sheet = $spreadsheet->getActiveSheet();
//     $sheet->setCellValue('A1', 'ID');
//     $sheet->setCellValue('B1', 'NAME');
//     $sheet->setCellValue('C1', 'EMAIL');
//     $sheet->setCellValue('D1', 'ROLE');
//     $sheet->setCellValue('E1', 'PHONE');
//     $sheet->setCellValue('F1', 'IMAGE');
    
//     $rows = 2;
    
//     foreach($data as $dataInfo) {
//         $sheet->setCellValue('A' . $rows, $dataInfo['id']);
//         $sheet->setCellValue('B' . $rows, $dataInfo['name']);
//         $sheet->setCellValue('C' . $rows, $dataInfo['email']);
//         $sheet->setCellValue('D' . $rows, $dataInfo['role']);
//         $sheet->setCellValue('E' . $rows, $dataInfo['phone']);
//         $sheet->setCellValue('F' . $rows, $dataInfo['image']);

//         $rows++;
//     }

//     $filename = "users.".$type;

//     if ($type == 'xlsx') {
//         $writer = new Xlsx($spreadsheet);
//     } else if ($type == 'xls') {
//         $writer = new Xls($spreadsheet);
//     }
//     $writer->save("export/".$filename);
//     header("Content-Type: application/vnd.ms-excel");
//     return redirect(url('/alluser')."/export/".$filename);
//     }