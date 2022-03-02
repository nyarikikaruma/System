<x-layout>
    
    <div class="flex bg-blue-200 content-center m-auto">
        <div>
            <x-sidebar/>
  
        </div>
      
            <div class="w-full max-w-lg py-8 px-8">
  
              
              <div class="flex mt-8 mx-auto justified-center mb-8 p-4">
  
                  <h1 class=" font-bold underline  text-cyan-800 text-4xl">Add Altar</h1>
  
              </div>
  

              <form method="POST" action="/altar/update/{{ $altars->id }}" enctype="multipart/form-data" class="w-full max-w-lg">
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
                      value="{{ $altars->name }}">
                
                  </div>
                  <div class="w-full px-3">
                    <label 
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                    for="region_id">
                         Region
                      </label>
                      <select name="region_id" class="appearance-none block w-full bg-gray-200 text-gray-700 
                    border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="" selected disabled hidden class="px-2 py-2">Choose here</option>
                    @foreach ( $lists as $list )
                    <option value="{{ $list->id }}" class="mt-1 px-1 py-1">{{ $list->name }}</option>
                  @endforeach
                  </select>
                      {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                      py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      id="region_id" 
                      name="region_id"
                      type="text" 
                      placeholder="Region Id"> --}}
                
                  </div>
                </div>
                <div>
                    <button 
                    type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent
                    text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Eidt Altar
                    </button>
                  </div>
               
              </form>
              
       
      
  
                  
                      
      </div>
  </div>
  </x-layout>