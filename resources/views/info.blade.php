<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">

        <table class="table table-striped table-light" id="userDetails">
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Phone</th>
            <th>Image</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td> {{ $data->id }} </td>
                <td> {{ $data->name }} </td>
                <td> {{ $data->email }} </td>
                <td> {{ $data->role }} </td>
                <td> {{ $data->phone }} </td>
                <td> <img src="{{ asset('uploads/data/'. $data->image) }}" style="width: 100px; height: 100px;"> </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <button id="button" class="btn btn-primary">Download PDF</button>


<script>

    $(document).ready(function () {

        $("#button").click(function (e) {
        const element = document.getElementById("userDetails");

        html2pdf()
        .from(element)
        .save();
    });
    });    

</script>
</body>
</html>