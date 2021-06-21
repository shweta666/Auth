<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
    {{-- <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    
    <title>Users</title>

    <link href="{{ asset('/css/alluser.css') }}" rel="stylesheet">

</head>
<body>

        @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif


  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3>Users</h3>

                    <a href="{{ route('uregister') }}" type="button" class="btn btn-success text-right">
                    Add User &nbsp<i class="fa fa-plus-circle"></i></a>
                </div>
                            
          <div class="card-body">
            <table class="table table-striped table-hover table-bordered mydatatable" style="width: 100; height:100"> 
            <thead>
                <tr>   
                  <th scope="col">S.No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Edit/Delete</th>
                  <th scope="col">Report</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $userdata)
                  <tr>
                    <th>{{ $userdata['id']}}</th>
                    <td>{{ $userdata['name']}}</td>
                    <td>{{ $userdata['email']}}</td>
                    <td>{{ $userdata['role']}}</td>
                    <td>
                      
                      <a href="{{ "edit/".$userdata['id'] }}" class="btn btn-success">EDIT</a>
                          
                      <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $userdata->id }}">Delete</a>
                      @include('delete')

                    </td>
                    <td>
                      <button name="download" id="download" class="btn btn-primary" data-id="{{ $userdata['id'] }}" 
                      onclick="generatePDF(this)">Download</button>
                    </td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <a href="{{ route('/export') }}" class="btn btn-success">Excel Download</a>
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" 
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>

  function generatePDF(e) {
    let userid = $(e).data("id");
    //alert(userid);
    let url = "{{ route("showUser", "_ID_") }}";
    url = url.replace("_ID_",userid);

    $.ajax({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       method: "POST",
       url: url,
       data: {
         'id' : userid,
       },

       success: function(response) {
        //console.log(response);
        let myData = response.data;
     
        let info = `ID: ${myData.id} 
        NAME: ${myData.name}
        EMAIL: ${myData.email}
        ROLE: ${myData.role}
        PHONE: ${myData.phone}`;

        var pdf = new jsPDF();
        //var img = new Image;
        let path = "{{ public_path().'/uploads/data/'}}";
        let image =  path + myData.image;
        console.log(image);
        
        img.onload = function() {
        pdf.addImage(this, 10, 10);
        pdf.save("test.pdf");
        };
        img.crossOrigin = ""; 
        }
    });
  }
  


    
</script>

<script>
  $('.mydatatable').DataTable();

    // $(document).on('click','.delete',function(){
    //      let id = $(this).attr('data');
    //      $('#id').val(id);
    // });   
</script>


</body>
</html>