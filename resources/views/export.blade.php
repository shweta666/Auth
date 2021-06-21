<table class="table table-striped table-hover table-bordered" style="width: 100; height:100"> 
    <thead>
        <tr>   
          <th scope="col">S.No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Phone</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
          @foreach($data as $userdata)
          <tr>
            <th>{{ $userdata['id']}}</th>
            <td>{{ $userdata['name']}}</td>
            <td>{{ $userdata['email']}}</td>
            <td>{{ $userdata['role']}}</td>
            <td>{{ $userdata['phone']}}</td>
            <td>{{ $userdata['image']}}</td>
          </tr>        
          @endforeach
      </tbody>
    </table>