<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="{{ asset('/js/code.jquery.com_jquery-3.7.1.js') }}"></script>
</head>

<body class="h-screen flex flex-col main-bg">
  <main class="my-auto relative w-11/12 sm:w-[500px] mx-auto main-bg shadow-lg">
    {{-- user icon --}}
    <div class="bg-secondary shadow-lg text-white w-20 h-20 rounded-full mx-auto flex items-center place-content-center absolute top-3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
      <i class="fa-solid fa-user text-3xl"></i>
    </div>


    <div class="border p-10 rounded-md flex flex-col bg-white">
      <div class="py-8">
        <h1 class="text-center font-black text-2xl text-gray-700">Selamat Datang</h1>
        <p class="text-center text-sm text-dark-secondary">Masuk Akun Monitoring</p>

      </div>


      @error('email')
      <div class="mb-7 text-red-500 flex gap-2 justify-center items-center">
        <i class="fa-solid fa-triangle-exclamation text-xl"></i>
        <p class=" text-sm">{{ $message }}</p>
      </div>
      @enderror

      {{-- input form --}}
      <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5">
        {{-- email --}}
        @csrf
        <div class="flex items-center justify-center shadow-sm w-full">
          <label for="email" class="rounded-l-md text-gray-400 border-y border-l py-2 px-3 text-base">
            <i class="fa-solid fa-envelope"></i>
          </label>
          <input id="email" type="text" class="rounded-r-md border-r border-y border-gray-300 p-2 focus:ring-0 focus:outline-none w-10/12" name="email" autocomplete="off" autofocus placeholder="Email" value="{{ old('email') }}">
        </div>

        {{-- password --}}
        <div class="flex items-center justify-center shadow-sm relative w-full">
          <label for="password" class="rounded-l-md text-gray-400 border-y border-l py-2 px-3 text-base">
            <i class="fa-solid fa-lock"></i>
          </label>
          <input id="password" type="password" class="rounded-r-md border-r border-y border-gray-300 p-2 focus:ring-0 focus:outline-none w-10/12" name="password" autocomplete="off" autofocus placeholder="*********" value="{{ old('password') }}">

          <button type="button" class="absolute right-6 text-base text-gray-400" onclick="showPassword()">
            <i class="fa-regular fa-eye-slash" id="showPasswordIcon"></i>
          </button>
        </div>

        <button type="submit" class="main-bg-reverse py-3 mx-1 sm:mx-3 md:mx-5 rounded-md text-white font-bold flex items-center justify-center gap-2">
          <i class="fa-solid fa-arrow-right-long"></i>
          Login
        </button>

      </form>

    </div>
  </main>




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
