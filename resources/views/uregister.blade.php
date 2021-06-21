<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register User</title>

    <link href="{{ asset('/css/uregister.css') }}" rel="stylesheet">

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
            <h4>Add New User</h4>
          </div>

          <div class="card-body">
            <form action="uregister" method="POST" onsubmit="return validation()" enctype="multipart/form-data">

              @csrf

              <div class="row">
                 <div class="form-group col-md-6">
                      <label for="name"><b>Name</b></label>
                      <input id="name" type="text" class="form-control"
                      name="name" placeholder="Enter name" required autocomplete="off" autofocus>
                      
                      <span id="username" class="text-danger"></span>
                  </div>

                <div class="form-group col-md-6">
                    <label for="email"><b>Email address</b></label>
                    <input id="email" type="email" class="form-control" 
                    name="email" placeholder="Enter email" required autocomplete="off">

                    <span id="email_id" class="text-danger"></span>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="password"><b>Password</b></label>
                  <input id="password" type="password" class="form-control"
                  name="password" placeholder="Password" required autocomplete="off">

                  <span id="pass" class="text-danger"></span>

                </div>

                <div class="form-group col-md-6">
                  <label for="password-confirm"><b>Confirm Password</b></label>
                  <input id="password_confirm" type="password" class="form-control" 
                  name="password_confirm" placeholder="Confirm Password" required autocomplete="off">

                  <span id="con_pass" class="text-danger"></span>
                </div>
              </div>

          <div class="row">
            <div class="form-group col-md-6">
                <label for="role">Roles</label>
                <select class="form-control" name="role" id="role" required="required">
                    <option disabled selected value="">--Select Role--</option>
                    <option value="Sldc Supervisor">SLDC SUPERVISOR</option>
                    <option value="Forecast Service Provider">FORECAST SERVICE PROVIDER</option>
                    <option value="Plant Operator">PLANT OPERATOR</option>
                    <option value="Qca">QCA</option>
                    <option value="Engineer">ENGINEER</option>
                 </select>
            </div>
                           
               <div class="form-group col-md-6">
                   <label for="phone"><b>Phone Number</b></label>
                   <input id="phone" type="tel" class="form-control" 
                     name="phone" placeholder="Enter phone number" required autocomplete="off" autofocus>

                     <span id="mobile" class="text-danger"></span>

                </div>

                <div class="form-group col-md-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Profile Picture (Choose file)</label><br><br>
                
                        <img src="" id="preview" alt="" style="border-radius: 50%;">

                        {{-- <span id="" class="text-danger"></span> --}}
                     
                </div>
                </div>

          </div>

                <div class="footer">
                  <a type="button" href="{{ route('alluser') }}" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    {{-- <div class="container signin" style="width: 250px; margin: 0.1% 0 0 40%;">
      <p>Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a></p>
    </div> --}}

    <script src="/js/uregister.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>