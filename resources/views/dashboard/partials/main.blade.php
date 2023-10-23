<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
  <script src="{{ asset('/js/code.jquery.com_jquery-3.7.1.js') }}"></script>
</head>

<body class="h-screen flex flex-col overflow-y-auto bg-slate-200">
  @include('dashboard.partials.navbar')


  @yield('dashboard')




  <script src="{{ asset('/fontawesome/js/all.js') }}"></script>
  <script>
    function showPassword(){
      let password = $('#password');
      console.log('ok');

      if( password.attr("type") == 'password' ){
        password.attr("type", "text");
        $('#showPasswordIcon').removeClass('fa-regular fa-eye-slash');
        $('#showPasswordIcon').addClass('fa-regular fa-eye');
      } else {
          password.attr("type", "password");
          $('#showPasswordIcon').removeClass('fa-regular fa-eye');
          $('#showPasswordIcon').addClass('fa-regular fa-eye-slash');
      }

    }
  </script>
</body>

</html>
