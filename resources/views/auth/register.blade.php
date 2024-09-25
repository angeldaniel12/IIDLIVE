
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('img/apple-icon.png')}}"> -->
  <link rel="icon" type="image/png" href="{{ asset ('img/IIDLIVE.png')}}">
  <title>
  IIDLIVE - Registro de usuarios
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Nucleo Icons -->
  <link href="{{ asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset ('css/new/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
    
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{route('end')}}">
      <img src="assets/img/IIDLIVE_sin_fondo.png" width="150" height="50">
      </a>
      <!-- <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button> -->
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route ('login') }}">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Iniciar Sesión
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route ('register') }}">
              <i class="fas fa-key opacity-6  me-1"></i>
              Registrarse
            </a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-position: top;">
    
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            
            <h1 class="text-white mb-2 mt-5">Tu red social IIDLIVE!</h1>
            <p class="text-lead text-white">El registro para cada usurio es gratuito.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Registrate con tus datos</h5>
            </div>
            <!-- <div class="row px-xl-5 px-sm-4 px-3"> -->
              <!-- <div class="col-3 ms-auto px-1">
                <a class="btn btn-outline-light w-100" href="javascript:;">
                  <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                        <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                        <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" fill="#FFFFFF"></path>
                      </g>
                    </g>
                  </svg>
                </a>
              </div> -->
              <!-- <div class="col-3 px-1">
                <a class="btn btn-outline-light w-100" href="javascript:;">
                  <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(7.000000, 0.564551)" fill="#000000" fill-rule="nonzero">
                        <path d="M40.9233048,32.8428307 C41.0078713,42.0741676 48.9124247,45.146088 49,45.1851909 C48.9331634,45.4017274 47.7369821,49.5628653 44.835501,53.8610269 C42.3271952,57.5771105 39.7241148,61.2793611 35.6233362,61.356042 C31.5939073,61.431307 30.2982233,58.9340578 25.6914424,58.9340578 C21.0860585,58.9340578 19.6464932,61.27947 15.8321878,61.4314159 C11.8738936,61.5833617 8.85958554,57.4131833 6.33064852,53.7107148 C1.16284874,46.1373849 -2.78641926,32.3103122 2.51645059,22.9768066 C5.15080028,18.3417501 9.85858819,15.4066355 14.9684701,15.3313705 C18.8554146,15.2562145 22.5241194,17.9820905 24.9003639,17.9820905 C27.275104,17.9820905 31.733383,14.7039812 36.4203248,15.1854154 C38.3824403,15.2681959 43.8902255,15.9888223 47.4267616,21.2362369 C47.1417927,21.4153043 40.8549638,25.1251794 40.9233048,32.8428307 M33.3504628,10.1750144 C35.4519466,7.59650964 36.8663676,4.00699306 36.4804992,0.435448578 C33.4513624,0.558856931 29.7884601,2.48154382 27.6157341,5.05863265 C25.6685547,7.34076135 23.9632549,10.9934525 24.4233742,14.4943068 C27.7996959,14.7590956 31.2488715,12.7551531 33.3504628,10.1750144"></path>
                      </g>
                    </g>
                  </svg>
                </a>
              </div> -->
              <!-- <div class="col-3 me-auto px-1">
                <a class="btn btn-outline-light w-100" href="javascript:;">
                  <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                        <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" fill="#4285F4"></path>
                        <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" fill="#34A853"></path>
                        <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" fill="#FBBC05"></path>
                        <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" fill="#EB4335"></path>
                      </g>
                    </g>
                  </svg>
                </a>
              </div> -->
             
              <!-- Error en caso de ingresar los datos incorrectos   -->
              @if ($errors->any())

                <div class="text-center text-muted mb-2">
                <h4>Se encontro el siguiente error.</h4>
                </div>

                <div class="alert alert-danger mb-4" role="alert">
                {{ $errors->first() }}
                </div>
              @else
              

            @endif
            <div class="card-body">
         
              <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
               
                <!-- Nombre -->
                <div class="mb-3">
                <input class="form-control" placeholder="Nombre completo" type="text" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                </div>
                
                <!-- Fecha de Nacimiento -->
                Fecha de nacimiento 
                <div class="mb-3" style="display: flex;">
              
    <div style="flex: 1;">
        <label for="dia">Día</label>
        <select id="dia" class="form-select" name="dia" required>
            <option value="">Selecciona el día</option>
            <?php for ($i = 1; $i <= 31; $i++) : ?>
                <option value="<?= sprintf('%02d', $i) ?>"><?= sprintf('%02d', $i) ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div style="flex: 1;">
        <label for="mes">Mes</label>
        <select id="mes" class="form-select" name="mes" required>
            <option value="">Selecciona el mes</option>
            <?php
            $meses = array(
                '01' => 'Enero',
                '02' => 'Febrero',
                '03' => 'Marzo',
                '04' => 'Abril',
                '05' => 'Mayo',
                '06' => 'Junio',
                '07' => 'Julio',
                '08' => 'Agosto',
                '09' => 'Septiembre',
                '10' => 'Octubre',
                '11' => 'Noviembre',
                '12' => 'Diciembre'
            );
            ?>
            <?php foreach ($meses as $numeroMes => $nombreMes) : ?>
                <option value="<?= $numeroMes ?>"><?= $nombreMes ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div style="flex: 1;">
        <label for="anio">Año</label>
        <select id="anio" class="form-select" name="anio" required>
            <option value="">Selecciona el año</option>
            <?php
            $anioActual = date('Y');
            for ($anio = $anioActual; $anio >= 1950; $anio--) :
            ?>
                <option value="<?= $anio ?>"><?= $anio ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>

<input id="fechanac" type="hidden" name="fechanac" required autocomplete="off">

<p class="text-danger" id="fechanac-error" style="display: none;">Por favor, selecciona una fecha válida.</p>


                <!-- <div class="mb-3">
    <label for="dia">Día</label>
    <input id="dia" class="form-control" placeholder="DD" type="text" name="dia" required autocomplete="off" maxlength="2" pattern="\d{1,2}">
</div>
<div class="mb-3">
    <label for="mes">Mes</label>
    <input id="mes" class="form-control" placeholder="MM" type="text" name="mes" required autocomplete="off" maxlength="2" pattern="\d{1,2}">
</div>
<div class="mb-3">
    <label for="anio">Año</label>
    <input id="anio" class="form-control" placeholder="AAAA" type="text" name="anio" required autocomplete="off" maxlength="4" pattern="\d{4}">
</div>

<input id="fechanac" type="hidden" name="fechanac" required autocomplete="off">

<p class="text-danger" id="fechanac-error" style="display: none;">Por favor, introduce una fecha válida en el formato DD/MM/AAAA.</p>-->

                <!-- <div class="mb-3"> 
                  Fecha de nacimiento
                <input class="form-control" placeholder="Fecha de nacimiento" type="date" onfocus="(this.type='date')" min="1950-01-01" max="{{date('Y-m-d')}}" name="fechanac" value="{{date('Y-m-d')}}" required autocomplete="fechanac">
                </div> -->
                
                <!-- Nombre de Usuario -->
                <div class="mb-3">
                <input class="form-control" placeholder="Nombre de usuario" type="text" name="nombreusuario" value="{{ old('nombreusuario') }}" required autocomplete="nombreusuario" autofocus>
                </div>

                <!-- Correo Electronico -->
                <div class="mb-3">
                <input class="form-control" placeholder="Correo Electronico" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>

                <!--Tipo de Usuario -->
                <input id="2" type="hidden" value="2"name="tipo" required autocomplete="off">
                <!-- <div class="mb-3">
                <select class="form-control" name="tipo" >
                      <option value="2" id="2">Consumidor</option>
                </select>
                </div> -->

                <!-- Contraseña -->
              
                <div class="mb-3">
                <div class="input-group">
                      <input type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="new-password" id="password" pattern=".{8,}">
                      <button class="from-control" type="button" id="togglePassword">
                          <i class="fas fa-eye-slash"></i> <!-- Icono para ocultar la contraseña -->
                      </button>
                  </div>
                <!-- <input class="form-control" placeholder="Contraseña" type="password" name="password" required autocomplete="new-password" pattern=".{8,}" > -->
                </div>

                <!--Confirma Contraseña -->
                <div class="mb-3">
                  <div class="input-group">
                      <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation" required autocomplete="new-password" id="confirmPassword" pattern=".{8,}">
                      <button class="from-control" type="button" id="toggleConfirmPassword">
                          <i class="fas fa-eye-slash"></i> <!-- Icono para ocultar la contraseña -->
                      </button>
                  </div>
                <!-- <input class="form-control" placeholder="Confirmar Contraseña" type="password" name="password_confirmation" required autocomplete="new-password"  pattern=".{8,}"> -->
                <span class="error-message" id="error-message">La contraseña debe tener al menos 8 caracteres.</span>
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    He leido los <a href="condiciones.html" class="text-dark font-weight-bolder" >términos y condiciones
                    </a>
                    
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Registrarse</button>
                </div>
                <p class="text-sm mt-3 mb-0">Ya tienes una cuenta? <a href="{{ route ('login') }}" class="text-dark font-weight-bolder">Inicia sesión</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- Logos de redes sociales, modificar esta parte ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            <IIDLIVE></IIDLIVE>
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Sobre nosotros 
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Equipo
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Donaciones
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by IIDLIVE.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->

  <script>
    function actualizarFecha() {
        var dia = document.getElementById('dia').value;
        var mes = document.getElementById('mes').value;
        var anio = document.getElementById('anio').value;

        if (dia && mes && anio) {
            var fecha = anio + '-' + mes + '-' + dia;
            document.getElementById('fechanac').value = fecha;
        } else {
            document.getElementById('fechanac').value = '';
        }
    }

    document.getElementById('dia').addEventListener('change', actualizarFecha);
    document.getElementById('mes').addEventListener('change', actualizarFecha);
    document.getElementById('anio').addEventListener('change', actualizarFecha);
</script>

  <!-- <script>
    document.getElementById('fechanac').addEventListener('input', function(event) {
        var fechaInput = event.target.value;
        var regex = /^\d{4}-\d{2}-\d{2}$/;

        if (!regex.test(fechaInput)) {
            document.getElementById('fechanac-error').style.display = 'block';
        } else {
            document.getElementById('fechanac-error').style.display = 'none';
        }
    });

    document.getElementById('fechanac').addEventListener('keydown', function(event) {
        var input = event.target;
        var key = event.key;

        if ((input.selectionStart === 4 || input.selectionStart === 7) && key !== 'Backspace') {
            input.value += '-';
        }
    });
</script> -->

  <script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
            var passwordInput = $('#password');
            var toggleIcon = $(this).find('i');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                toggleIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                passwordInput.attr('type', 'password');
                toggleIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });

        $('#toggleConfirmPassword').click(function() {
            var confirmPasswordInput = $('#confirmPassword');
            var toggleIcon = $(this).find('i');

            if (confirmPasswordInput.attr('type') === 'password') {
                confirmPasswordInput.attr('type', 'text');
                toggleIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                confirmPasswordInput.attr('type', 'password');
                toggleIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
    });
</script>
  <script src="{{ asset ('js/core/popper.min.js')}}"></script>
  <script src="{{ asset ('js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/smooth-scrollbar.min.js')}}"></script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script>
    document.getElementById("password").addEventListener("input", function() {
        var password = this.value;
        var passwordError = document.getElementById("passwordError");

        if (password.length < 8) {
            passwordError.style.display = "block";
        } else {
            passwordError.style.display = "none";
        }
    });
</script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('js/new/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>
