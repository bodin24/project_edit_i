<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <header>
        <div class="container mx-auto px-6 py-4 bg-white shadow-md">
          <div class="flex items-center justify-between">
            <div class="hidden w-full text-gray-500 md:flex md:items-center">
              {{-- ช่องว่างทางซ้าย --}}
            </div>
      
            @yield('name_table')
      
            <div class="flex items-center justify-end w-full space-x-4">
              {{-- ช่องว่างทางขวา --}}
            </div>
          </div>
      
          <nav class="sm:flex sm:justify-center sm:items-center mt-6 border-t border-gray-200 pt-4">
            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-6">
              <a class="text-gray-700 hover:text-blue-600 transition-colors duration-300" href="/">Home</a>
              <a class="text-gray-700 hover:text-blue-600 transition-colors duration-300" href="#">--</a>
              <a class="text-gray-700 hover:text-blue-600 transition-colors duration-300" href="#">--</a>
              <a class="text-gray-700 hover:text-blue-600 transition-colors duration-300" href="#">--</a>
              <a class="text-gray-700 hover:text-blue-600 transition-colors duration-300" href="/form">AddData</a>
            </div>
          </nav>
      
          <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
              <svg class="h-6 w-6 text-gray-400" viewBox="0 0 24 24" fill="none">
                <path
                  d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
      
            <input
              class="w-full border border-gray-300 rounded-lg pl-12 pr-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none"
              type="text" placeholder="Search">
          </div>
        </div>
      </header>
      

    @yield('content')
</body>
</html>