<x-layout>
<section class="px-6 py-8">

    <main class="max-w-lg mx-auto mt-10 bg-blue-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Register</h1>
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-6">
        <label 
        for="name" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
        
        <input 
        type="text" 
        class="border border-gray-400 p-2 w-full rounded"
        name="name"
        id="name"
        placeholder="Enter name"
        required>
        @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror


    </div>
    <div class="mb-6">
        <label 
        for="email" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
        
        <input 
        type="text" 
        class="border border-gray-400 p-2 w-full rounded"
        name="email"
        placeholder="Enter your Email"
        id="email"
        required>
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label 
        for="role" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700">Role</label>
        
        <input 
        type="number" 
        class="border border-gray-400 p-2 w-full rounded"
        name="role"
        placeholder="Enter your Role 1 or 0"
        id="role"
        required>
        @error('role')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label 
        for="username" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
        
        <input 
        type="text" 
        class="border border-gray-400 p-2 w-full rounded"
        name="username"
        placeholder="Enter your Username"
        id="username"
        required>
        @error('role')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label 
        for="password" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700 l">Password</label>
        
        <input 
        type="password" 
        class="border border-gray-400 p-2 w-full  rounded"
        name="password"
        id="password"
        required>
        @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

    </div>
    <div class="text-sm">
        <p>
         Already a member? Click

          <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">here</a>
          to login
        </p>
      </div>
    <div class="mb-6">
        {{-- <button 
        for="submit" 
        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</label>
     --}}
     <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
          <!-- Heroicon name: solid/lock-closed -->
          <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
          </svg>
        </span>
        Sign up
      </button>

    </div>

    {{-- @if ($errors->any())
        
        @endif
            @foreach ($errors as $error)
                <li class="text-red-500 text-xs">{{ $error }}</li>
            @endforeach
        @endif --}}
    </form>
</main>
</section>
</x-layout>