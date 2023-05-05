<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Lock Screen</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <!--<img class="img-fluid" src="asset/img/profiles/" alt="Logo">-->
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <div class="lock-user">
                                <img class="rounded-circle" src="{{asset('images')}}/{{\App\Models\Doctor::where('doctor_id', session('doctorid'))->first()->doc_image }}" alt="User Image">
                                <h4>{{ \App\Models\Doctor::where('doctor_id', session('doctorid'))->first()->name }}</h4>
                            </div>

                            <!-- Form -->
                            <form action="/lockscreensubmit">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Password" name="password">
                                    <input   type="hidden"   name="doctor_id"  value= "{{ \App\Models\Doctor::where('doctor_id', 1)->first()->doctor_id }}">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Enter</button>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('invaild_password'))
                            <div class="alert alert-danger">
                                {{ Session::get('invaild_password') }}
                            </div>
                            @endif
                            <!-- /Form -->

                            {{-- <div class="text-center dont-have">Sign in as a different user? <a href="loginDoctor.html">Login</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="../asset/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../asset/js/script.js"></script>

</body>


</html>
