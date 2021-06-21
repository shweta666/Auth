<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>User Login</title>

    <link href="{{ asset("/css/ulogin.css") }}" rel="stylesheet">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="height: 100%; width: 100%; margin: 20px 0 0 360px;">

                    
                    <div class="card-body" style="padding: 25px 10px 30px 10px;">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" placeholder="username" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" placeholder="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4" style="margin-left:123px;">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
            
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h6 style="font-size: 11px; color: red;">*more than 3 continuous failed login attempts will deactivate account
                                    </h6>
                                    <h6 style="font-size: 12px;">POWERED BY : Climate Connect Technologies.</h6>
                                </div>

                                <img style="height: 40px; width: 150px; margin: 20px 0 0 80px;" src="/img/cc_logo.png" alt="cc logo" class="img-responsive">
            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    
            


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>