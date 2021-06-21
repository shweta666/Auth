<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Update User</title>

  <link href="{{ asset('/css/uregister.css') }}" rel="stylesheet">


</head>
<body>


  <nav class="navbar navbar-expand-lg justify-content-center">
    <ul class="navbar-nav">
        <li class="navbar-brand">
            <img src="/img/ts_logo.jpg" alt="remc logo">
        </li>
        <li class="nav-item">
            <h6 style="font-size: 25px;" class="mt-3">Renewable Energy Management Center</h6>
        </li>
        <li id="bell">
            <i class="icon fa fa-bell" style="color: darkblue"></i>
        </li>
        <li>
            <span id ="icon" style="font-size:20px; cursor:pointer" onclick="openNav()">
                <i class="fa fa-indent" style="color: darkblue"></i></span>
        </li>
    </ul>
   
    
    <div id="mySidenav" class="sidenav">
        <ul style="list-style-type: none;">
            <li>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-arrow-right"></i></a>
            </li>
            <li style="margin-top: -50px; margin-left: -10px; padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-user-circle-o"></i>Super Admin</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-fw fa-home"></i>Home</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="{{ route('alluser') }}"><i class="fa fa-user"></i>User</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-user"></i>Pooling Stations</a>
            </li>
            <li>
                <button class="dropdown-btn"><a href="#"><i class="fa fa-users"></i>Plants<i class="fa fa-angle-down"></i></a>
                </button>
                <ul class="dropdown-container" style="list-style-type: none;">
                    <li><a href="#">Plant Info</a></li>
                    <li><a href="#">Technical Spec Doc</a></li>
                    <li><a href="#">QCA Requests</a></li>
                </ul>
            </li>

            <li>
                <button class="dropdown-btn"><a href="#"><i class="fa fa-cloud"></i>Forecasting Tools<i class="fa fa-angle-down"></i></a>
                </button>
                <ul class="dropdown-container" style="list-style-type: none;">
                    <li><a href="#">IFT</a></li>
                    <li><a href="#">FSP</a></li>
                    <li><a href="#">Combiner</a></li>
                    <li><a href="#">Weather</a></li>
                    <li><a href="#">Performance</a></li>
                </ul>
            </li>
            
            <li>
                <button class="dropdown-btn"><a href="#"><i class="fa fa-file-text"></i>Contract<i class="fa fa-angle-down"></i></a>
                </button>
                <ul class="dropdown-container" style="list-style-type: none;">
                    <a href="#">STOA</a>
                    <a href="#">LTA</a>
                    <a href="#">MTOA</a>
                </ul>
            </li>             
            
            <li>
                <button class="dropdown-btn"><a href="#"><i class="fa fa-list-alt"></i>Modules<i class="fa fa-angle-down"></i></a>
                </button>
                <ul class="dropdown-container" style="list-style-type: none;">
                    <li><a href="#">Power Exchange</a></li>
                    <li><a href="#">Transmission Loss</a></li>
                </ul>
            </li>
            
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-folder-open"></i>Curtailment</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-folder-open"></i>Reports</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-bell"></i>Notification</a>
            </li>
            <li>
                <button class="dropdown-btn"><a href="#"><i class="fa fa-gear"></i>Settings<i class="fa fa-angle-down"></i></a>
                </button>
                <ul class="dropdown-container" style="list-style-type: none;">
                    <li><a href="#">System Settings</a></li>
                    <li><a href="#">Configuration</a></li>
                </ul>
            </li>

            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-user"></i>Schedule</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-user"></i>DSM</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a href="#"><i class="fa fa-bolt"></i>Energy Report</a>
            </li>
            <li style="padding: 5px 0 10px 0;">
                <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>            
    </div>
</nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header bg-transparent">
                  <h4>Edit User</h4>
              </div>
              <div class="card-body">
                <form action="/update" method="POST" onsubmit="return validation()">
                  @csrf
                  <input type="hidden" name="id" value="{{ $data['id'] }}">

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" value="{{ $data['name'] }}" class="form-control">
                     </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" name="email" value="{{ $data['email'] }}" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" value="" id="password" class="form-control">
                      <span id="pass" class="text-danger"></span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="password-confirm" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" value="" id="password_confirm" class="form-control">
                      <span id="con_pass" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="role" class="form-label">Roles</label>
                      {{-- <input type="text" class="form-control" id="role" name="role" value="{{ $data->role }}"> --}}
                      <select class="form-control" name ="role" id="role">
                        <option disabled selected>--Select Role--</option>
                        <option value="Sldc Supervisor" {{ $data->role =="Sldc Supervisor" ? 'selected' : '' }}>SLDC SUPERVISOR</option>
                        <option value="Forecast Service Provider" {{ $data->role =="Forecast Service Provider" ? 'selected' : '' }}>FORECAST SERVICE PROVIDER</option>
                        <option value="Plant Operator" {{ $data->role =="Plant Operator" ? 'selected' : '' }}>PLANT OPERATOR</option>
                        <option value="Qca" {{ $data->role =="Qca" ? 'selected' : '' }}>QCA</option>
                        <option value="Engineer" {{ $data->role =="Engineer" ? 'selected' : '' }}>ENGINEER</option>
                       </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="phone" class="form-label">Phone Number</label>
                      <input type="tel" name="phone" value="{{ $data['phone'] }}" class="form-control">
                    </div>
                  </div>

                  <div class="footer">
                    <a type="button" href="{{ route('alluser') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                  </div>

                </form>
              </div>
          </div>
      </div>
    </div>
  </div>



<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
  }

function validation()
{
  var password = document.getElementById('password').value;

  var password_confirm = document.getElementById('password_confirm').value;

  if (password!=password_confirm)
  {
    document.getElementById('con_pass').innerHTML="Passwords are not matching";
    return false;
  }
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>