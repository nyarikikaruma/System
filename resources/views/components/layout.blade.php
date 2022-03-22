
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #4691f6;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}
</style>
</head>
<body>

  {{-- Navigation Bar --}}
  <nav class="sticky z-10 top-0 flex items-center justify-between bg-blue-500 h-16">

    <div class="flex items center px-4 py-4 font-semibold m-5 text-blue-200 ">
    <ul>
      <a href="#" class="hover:text-gray-100 mr-3">Home</a>
      <a href="#" class="hover:text-gray-100 mr-3">Keyboardists</a>
      <a href="#" class="hover:text-gray-100 mr-3">Leaders</a>
      <a href="#" class="hover:text-gray-100 mr-3">Regions</a>
    </ul>

    </div>

    @auth
    <div class="flex items-center justify-between">
     <div class="flex items-center mr-2">
      {{-- {{ Auth::user()->userDetail->thumbnail }} --}}
       <img src="{{ asset( 'images/' . Auth::user()->userDetail->thumbnail) }}" alt="No image" 
       class="h-10 w-10 rounded-full">
       {{ Auth::user()->name }}
     </div>
      {{-- <input type="text" class="border border-gray-300 rounded h-8 w-48 bg-blue-300 hover:bg-gray-300 mr-5 p-3 text-blue-600" placeholder="Search /"> --}}
      <form action="/logout" method="POST" id="logout-form">
        <button class="px-2 py-1 border border-gray-200 bg-blue-400 rounded-md hover:bg-blue-400 mr-4 text-blue-200">Logout</button>
        @csrf
        </form>
    </div>
      
    @endauth  
  </nav>
   
  {{-- Main Body --}}
  {{ $slot }}
 
    <footer class="bg-blue-400 pt-32 text-center lg:text-left ">
      <div class="text-gray-700 text-center p-4">
        © 2021 Copyright:
        <a class="text-gray-800" href="https://repentanceandholiness.org/">Repentance and Holiness Ministry</a>
      </div>
    </footer>
</body>
</html>