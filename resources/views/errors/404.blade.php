<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Page Not Found</title>
</head>
<body>
    <div class="flex items-center justify-center w-screen h-screen bg-gradient-to-r from-gray-200 to-white">
    <div class="px-40 py-20">
        <div class="flex flex-col items-center">
        <h1 class="font-bold text-black text-9xl">404</h1>

        <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
            <span class="text-red-500">Oops!</span> Page not found
        </h6>

        <p class="mb-8 text-center text-gray-500 md:text-lg">
            The page you’re looking for doesn’t exist.
        </p>

        <a
            href="/"
            class="px-6 py-2 text-sm font-semibold bg-violet-300 hover:bg-violet-600 rounded-md text-white">Go home</a
        >
        </div>
    </div>
</div>
</body>
</html>