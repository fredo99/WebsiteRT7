<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
  <header class="max-w-lg mx-auto">
      <a href="/">
          <h1 class="text-4xl font-bold text-center">SISTEM RT 7 RW 9</h1>
      </a>
  </header>

  <div class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
      <section>
          <h3 class="font-bold text-2xl">Welcome to Website RT 7</h3>
          <p class="text-gray-600 pt-2">Sign in to your account.</p>
      </section>

      <section class="mt-10">
          <form class="flex flex-col" method="POST" action="/register">
            @csrf
              <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nama">Nama</label>
                  <input type="text" name="name" id="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" value="{{ old('name') }}" required>
                  @error('name') 
                    <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                  @enderror
                </div>
              <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                  <input type="text" name="email" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" value="{{ old('email') }}" required>
                  @error('email')
                  <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                  @enderror 
                </div>
              <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                  <input type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required>
                  @error('password')    
                  <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                  @enderror
                </div>
              <div class="flex justify-end mb-3">
                  <p href="/login" class="text-sm">Have an Account? <a href="/login" class="font-bold hover:underline">Sign In</a></p>
              </div>
              <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Register</button>
          </form>
      </section>
  </div>
</body>
</html>