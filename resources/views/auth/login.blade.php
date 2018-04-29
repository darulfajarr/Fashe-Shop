<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login ADMIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/css/util.css">
    <link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form class="login100-form validate-form" method="POST" action="{{ route ('login') }}">
                    {{ csrf_field ()}}
                    <span class="login100-form-title p-b-34">
                         Mausuk Ke Halaman ADMIN 
                     </span>
                    
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                        <input id="first-name" class="input100" type="text" name="email" placeholder="User name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Masuk
                        </button>
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <span class="txt1">
                         
                        </span>

                  
                    </div>

                    <div class="w-full text-center">
                      
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/aa.jpg');"></div>
            </div>
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/bootstrap/js/popper.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="log/vendor/daterangepicker/moment.min.js"></script>
    <script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="log/js/main.js"></script>

</body>
</html>