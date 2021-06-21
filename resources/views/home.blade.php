{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Success') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

    <title>Highcharts</title>
    <link rel="stylesheet" href="/css/remc.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg justify-content-center">
        <ul class="navbar-nav">
            <li class="navbar-brand">
                <img src="/img/ts_logo.jpg" alt="remc logo">
            </li>
            <li class="nav-item">
                <h6 style="font-size: 25px;" class="font-weight-bold mt-3">Renewable Energy Management Center</h6>
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

            <div class="card" style="width: 100%; height: 100%;">
            <div class="card-body">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center text-success" style="margin-top: -20px; font-size: 12px; font-weight: bold;">
                        Updated on: <span id="datetime"></span>
                    </div>

                    <div class="row">

                       <div class="col-xs-12 col-sm-2 col-md-2 text-center">

                        <select id="field">
                            <option value="default">select time</option>
                        </select>

                        <!-- <div class="input-group bootstrap-timepicker timepicker">
                        <input id="timepicker" type="text" class="form-control input-small"> -->
                  
                        <h5 <span style="color:orangered">Time Block </span></h5>
                        </div>

                        <div class="vl"></div>


                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <h4>0 MW</h4>
                            <h5 <span style="color:orangered; margin-top: -5px;">Accepted Schedule</span></h5>
                        </div>

                        <div class="vl"></div>
                        
                        <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                            <h4><span id="index1"></span>&nbsp MW</h4>
                            <h5 <span style="color:orangered; margin-top: -5px;">Actual Generation</span></h5>                            
                        </div> 

                        <div class="vl"></div>

                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <h4><span id="index2"></span>&nbsp MW</h4>
                            <h5 <span style="color:orangered; margin-top: -5px;">Total Combiner Forecast</span></h5>
                        </div>

                        <div class="vl"></div>

                        <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                            <h4><span id="index3"></span>&nbsp MW</h4>
                            <h5 <span style="color:orangered; margin-top: -5px;">OI (+)/UI (-)</span></h5>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container-fluid">
        <div class="row" style="margin: -3% -1% 0 -1%;" id="card2">
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="card" id="card3">
                <!-- <div class="card-header" style="border-bottom: unset; padding-top: 0!important;">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group text-center">
                            <select name="type" id="type" class="form-control" style="max-height: 35px; max-width: 120px;">
                                <option value="State">State</option>
                                <option value="Solar">Solar</option>
                                <option value="Wind">Wind</option>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="card-body">
                    <div id="container" class="graph text-center" style="width: auto; height: auto;">
                    </div>
                </div>
                <div class="card-footer" style="color: red; background-color: unset; padding: unset; margin-top: 2%">
                    *The accepted schedule data in the graph is pre-loss data.
                </div>
            </div>
        </div>

    <div class="col-md-3 col-sm-12 col-xs-12" id="card4">
                <div class="card" id="card5" style="height: 485px;">
                <!-- width: 370px; margin-left: -20px;"> -->
                    <table class="table table-condensed text-center table-home" style="margin-left: -1%;" id="table1">
                        <tbody>
                        <tr>
                            <td style="text-align: center; padding: 23px 0 23px 0"> Energy Summary </td>
                        </tr>
                        <tr>
                            <th <span style="color:orangered; text-align: center; padding: 9px 0 9px 0;"></span>Energy Forecasted</th>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding: 9px 0 9px 0;">MWh</td>
                        </tr>
                        <tr>
                            <th <span style="color:orangered; text-align: center; padding: 9px 0 9px 0;"></span>Energy Scheduled</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding: 9px 0 9px 0;">MWh</td>
                        </tr>
                        <tr>
                            <th <span style="color:orangered; text-align: center; padding: 9px 0 9px 0;"></span>Energy Generated</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding: 9px 0 9px 0;">MWh</td>
                        </tr>
                        <tr>
                            <th <span style="color:orangered; text-align: center; padding: 9px 0 9px 0;"></span>Energy Deviation - Forecast</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding: 9px 0 9px 0;">MWh</td>
                        </tr>
                        <tr>
                            <th <span style="color:orangered; text-align: center; padding: 9px 0 9px 0;"></span>Energy Deviation - Schedule</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding: 9px 0 9px 0;">MWh</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

  <div class="container-fluid">
      <div class="card" id="card6">
    <div class="box-body table-responsive sticky-table sticky-headers sticky-ltr-cells">
        <table class="table table-striped table-bordered text-center" id="myTable" style="width:100%">
        
        </table>
      </div>
  </div>
  </div>



    
    <!-- <script>
        $('#timepicker').timepicker({
          showInputs: false,
          showMeridian:false
        });
    </script> -->
{{-- <script>alert("Welcome {{session('user')}}");</script> --}}
    <script src="/js/remc.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
