<x-layout>
    
    <div class="flex bg-blue-200 content-center m-auto">
        <div>
            <x-sidebar/>
  
        </div>
      
            <div class="w-full max-w-lg py-8 px-8">
  
              
              <div class="flex mt-8 mx-auto justified-center mb-8 p-4">
  
                  <h1 class=" font-bold underline  text-cyan-800 text-4xl">Add Bishop</h1>
  
              </div>
  

              <form method="POST" action="/bishop/create"  class="w-full max-w-lg">
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
                      placeholder="Bishop Name">
                
                  </div>
                 
                  <div class="w-full px-3">
                    <label 
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                    for="contact">
                         Contact
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                      py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      id="contact" 
                      name="contact"
                      type="text" 
                      placeholder="Bishop's contact">
                
                  </div>
                </div>
                <div>
                    <button 
                    type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent
                    text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Add Bishop
                    </button>
                  </div>
               
              </form>
              
       
      
  
                  
                      
      </div>
  </div>
  </x-layout>