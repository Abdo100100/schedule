<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/e.png') }}" sizes="32x32">
    <title>Futinndve - Pharma</title>

   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body style="background-color: #f1eded;">
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                          @csrf
						<div class="account-logo">
                            <a href="index.html"><img  src="assets/img/flogo.png" alt=""></a>
                        </div>

                        <div class="form-group">
                            <label>Username or Email</label>

                            <input 
                                id="email" 
                                type="email" 
                                name="email"
                                autofocus="" 
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                >


                                @error('email')
                                 <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                 </span>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror"
                                id="password" 
                                required
                                name="password"


                                >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group text-center">
                            <button style="background-color: #a94b5b;" type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
              
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
</body>


</html>