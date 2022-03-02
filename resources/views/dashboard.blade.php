<x-layout>

  <div class="flex bg-blue-200 content-center m-auto">
      

   
 <x-sidebar/>
    
          <div class="flex justify-center">
              @auth
                  <form action="/logout" method="POST">
                    @csrf
            <button type="submit">

                Log out
            </button>
            
            </form>
              @endauth

                <div class="flex mt-8 py-5 px-8 max-w-lg mx-auto grid grid-cols-4 gap-4 w-screen">
                    <h1 class="font-bold">
                       Your Profile
                    </h1>

                    <div class="flex items-center">

                       
                        <img src="/images/profile.png" alt="" class="h-64 w-48 rounded-full p-4">
                        
                        <div >
                          <strong>Andrew Alfred</strong>
                          <span>Technical advisor</span>
                          <span>Technical advisor</span>
                          <span>Technical advisor</span>
                          <span>Technical advisor</span>
                          <span>Technical advisor</span>
                        </div>
                      </div>
                   
                    {{-- <div class="flex items-stretch border border-green-300 rounded-md mt-4 px-3 py-3 ">

                        <div class=" ">
                            <img src="/images/profile.png" alt="" class="h-10 w-10 rounded-full">
                        </div>
                            <div class="grid grid-cols-1 px-5 ">

                            <input type="text" value="{{ $user->name }}" class="bg-blue-200">
                            <input type="text" value="{{ $user->contact }}" class="bg-blue-200">
                            <input type="text" value="{{ $user->altar }}" class="bg-blue-200">
                            <input type="text" value="{{ $user->userId }}: " class="bg-blue-200">
                            <input type="text" value=" Bishop" class="bg-blue-200">
                            <input type="text" value="Bishop Phone" class="bg-blue-200">
                            <input type="text" value="National" class="bg-blue-200">
                        </div>
                    </div> --}}


                    
                </div>
  
    </div>
    
</div>
</x-layout>