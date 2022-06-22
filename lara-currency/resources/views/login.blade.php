
@extends('layout_external')
@section('content')
<body style="background-color:#99CCFF;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-14 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-4">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Pequeaventuras</h1>
                                    </div>
                                    <form class="user" id="loginForm">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email"  name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required= "Por Favor, introduzca una dirección de correo" validemail= "Introduzca correctamente su correo">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme
                                                </label>
                                            </div>
                                        </div>

                                            <button type="submit" id="submit" class="btn btn-primary btn-block">
                                            Login
                                            </button>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {//clasesin

            $('#loginForm').on('submit',function(event){
                event.preventDefault();

                let email = $('#email').val();
                let password = $('#password').val();

                $.ajax({
                  url: '{{ route('auth.login') }}',
                  type:"POST",
                  data:{
                    email:email,
                    password:password
                  },
                  success:function(response){
                    console.log(response);

                    route_list = '{{ route('inicio') }}';

                    window.location.href = route_list;
                  },
                  error: function(xhr, status, error){
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    alert('Error - ' + errorMessage);
                }
                });
            });

        });


    </script>
