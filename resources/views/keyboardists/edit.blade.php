<x-layout>
    
  <div class="flex bg-blue-200 content-center m-auto">
      <div>
          <x-sidebar/>

      </div>
    
          <div class="w-full max-w-lg py-8 px-8">

            
            <div class="flex mt-8 mx-auto justified-center mb-8 p-4">

                <h1 class=" font-bold underline  text-cyan-800 text-4xl">Add Keyboardist</h1>

            </div>


            <form method="POST" action="/keyboardist/update/{{ $user->id }}" enctype="multipart/form-data" class="w-full max-w-lg">
              @csrf
              <div class="w-full max-w-lg py-8 px-8">
                <div class="w-full px-3">
                  <label 
                  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="name">
                       Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                    py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="name" 
                    name="name"
                    type="text" 

                    value="{{ $user->name }}">
              
                </div>
                  <div class="w-full px-3">
                    <label 
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                    for="contact">
                      Contact
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    name="contact"
                    id="contact" 
                    type="text" 
                    value="{{ $user->userDetail->contact }}">
                
                  </div>
                  <div class="w-full px-3">
                    <label 
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                    for="username">
                      UserName
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    name="username"
                    id="username" 
                    type="text" 
                    value="{{ $user->username }}">
                
                  </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="altar_id">
                    Altar ID
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                  border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="altar_id" 
                  name="altar"
                  type="text" 
                  value="{{ $user->userDetail->altar }}">
                </div>
                {{-- <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="user_id">
                    UserID
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                  border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="user_id" 
                  name="user_id"
                  type="text" 
                  placeholder="ID">
              
                </div> --}}
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="region_id">
                    Region ID
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="region_id" 
                  name="region"
                  type="text" 
                  value="{{$user->userDetail->region}}">
              
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="role">
                    Role
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="role" 
                  name="role"
                  type="number" 
                  value="{{ $user->role }}">
              
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="email">
                    Email
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="email" 
                  name="email"
                  type="email" 
                  value="{{ $user->email }}">
              
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="password">
                    Temporary Password
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="password" 
                  name="password"
                  type="password" 
                  placeholder="Temporry Password">
              
                </div>
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="thumbnail">
                    Photo 
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="thumbnail" 
                  name="thumbnail"
                  type="file" 
                  value="{{ $user->thumbnail }}">
              
                </div>
                
              </div>
              <div>
                  <button 
                  type="submit" 
                  class="group relative w-full flex justify-center py-2 px-4 border border-transparent
                  text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update User
                  </button>
                </div>
             
            </form>
            
     
    

                
                    
    </div>
</div>
</x-layout>