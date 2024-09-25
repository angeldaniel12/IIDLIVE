        
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset ('img/IIDLIVE.png')}}">
  <title>
    IIDLIVE- Inicio de Sesión 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset ('nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-yR3vGIvwz+u7R/RX+7b6D7Um0Jt5qgvkjLssS73/ErSUyM5oqslTpXT6r+pNt6/Ql8K/Y+zdMTIYkX2lJf1rdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset ('css/new/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
          <img src="assets/img/IIDLIVE.png" width="50" height="50">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('end')}}">
              IIDLIVE
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{ route ('register') }}">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Registrarse
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{ route('login') }}" >
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Iniciar Sesión
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="#" class="btn btn-sm mb-0 me-1 btn-primary">Que te diviertas</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                                   
                   <!-- Error en caso de ingresar la contraseña o correo incorrecto   -->
                
                @if ($errors->any())

                    <div class="text-center text-muted mb-2">
                    <h4>Se encontró el siguiente error.</h4>
                    </div>

                    <div class="alert alert-danger mb-4" role="alert">
                      {{ $errors->first() }}
                      </div>
                    @else
                  <h4 class="font-weight-bolder">Inicio de sesión</h4>
                  <p class="mb-0">Ingresa con tu correo electrónico</p>
                </div>
                @endif

                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('login') }}">
                  @csrf  
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="mb-3">
                      <div class="input-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="new-password" id="password">
                        <button class="from-control" type="button" id="togglePasswordlogin" onclick="togglePasswordVisibility()">
                            <i class="fas fa-eye-slash" id="eyeIcon"></i> <!-- Icono para ocultar la contraseña -->
                        </button>
                    </div>
                <!-- <input class="form-control" placeholder="Contraseña" type="password" name="password" required autocomplete="new-password" pattern=".{8,}" > -->
                </div>
                  </div> 
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">Recordar sesión</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    No tienes una cuenta?
                    <a href="{{ route ('register') }}" class="text-primary text-gradient font-weight-bold">Registrate</a>
                  </p>
                  

                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado tu contraseña?') }}
                                    </a>
                                @endif                  
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
             <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"> 
             <img src="{{asset('img/IIDLIVE_F.jpg')}}" alt="">
                <span class="mask  opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Bienvenidos a IIDLIVE"</h4>
                <!-- <p class="text-white position-relative">Tu crearas tu red social solo con IIDLIVE</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset ('js/core/popper.min.js')}}"></script>
  <script src="{{ asset ('js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.getElementById("eyeIcon");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        }
    }
</script>
  <!-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> -->
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('js/new/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>