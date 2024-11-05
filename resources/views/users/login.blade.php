
@vite(['resources/css/app.css','resources/js/app.js'])

{{-- heto binago ko --}}
<x-navbar>
  <video autoplay muted loop class="bg-video">
    <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
</video>
    <div class="min-h-screen flex items-center justify-center mt-10 mb-96 font-sans">
      <div class="blur-bg w-full max-w-md px-6">
          <div class="login-page flex flex-col items-center gap-10">
              <div class="flex flex-col justify-center items-center text-center">
                  <h1>
                      <img src="{{ asset('logo.svg') }}" alt="Icon" class="w-40 h-auto md:w-56" />
                  </h1>
                  <p class="text-gray-700">Discover the latest manga</p>
                  <p class="text-gray-700">Your gateway to endless stories.</p>
              </div>
              <form class="login-form flex flex-col space-y-4 w-full" action="/user/authenticate" method="POST">
                  @csrf
                  <input type="email" name="email" placeholder="Email" required class="border rounded-md p-2 w-full">
                  @error('email')
                      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror
                  <input type="password" name="password" placeholder="Password" required class="border rounded-md p-2 w-full">
                  @error('password')
                      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror
                  <div class="link flex justify-between">
                      <button type="submit" class="loginbtn bg-gray-800 text-white py-2 px-4 rounded-md">Login</button>
                      <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
                  </div>
                  <hr>
                  <div class="button text-center">
                      <a href="/register" class="text-blue-500 hover:underline">Create new account</a>
                  </div>
              </form>
          </div>
      </div>
  </div>
  {{-- heto binago ko --}}
  
  </x-navbar>
