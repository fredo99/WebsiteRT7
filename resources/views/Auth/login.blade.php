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
          @if(session()->has('success'))   
            <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
              <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
              <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">{{ session('success') }}</div>
              <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-collapse-toggle="alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
          @endif
          <form class="flex flex-col" method="POST" action="/login">
            @csrf
              <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                  <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
              </div>
              <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                  <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
              </div>
              <div class="flex justify-end">
                  <a href="#" class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6">Forgot your password?</a>
              </div>
                  <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
          </form>
      </section>
  </div>

  <div class="max-w-lg mx-auto text-center mt-12 mb-6">
      <p class="">Don't have an account? <a href="/register" class="font-bold hover:underline">Sign up</a>.</p>
  </div>

  <footer class="max-w-lg mx-auto flex justify-center ">
      <a href="#" class="hover:underline">Contact</a>
      <span class="mx-3">•</span>
      <a href="#" class="hover:underline">Privacy</a>
  </footer>
</body>
</html>