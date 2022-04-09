<x-layout>
    
  <div class="flex bg-blue-200 content-center m-auto">
          <x-sidebar/>

    
    
          <div class="w-full max-w-lg py-8 px-8">

            
            <div class="flex mt-8 mx-auto justified-center mb-8 p-4">

                <h1 class=" font-bold underline  text-cyan-800 text-4xl">Edit Keyboardist</h1>

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
                  for="region_id">
                  Region
                </label>
                <select name="region" id="region" class="appearance-none block w-full bg-gray-200 text-gray-700 
                    border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="{{ $user->userDetail->region }}">{{ App\Models\Region::find($user->userDetail->region)->name  }}</option>
                    @foreach ( $regions as $region )
                      <option value="{{ $region->id }}">{{ $region->name  }}</option>
                    @endforeach
                    </select>
               
              </div>


              <div class="w-full px-3">
                <select id="altar" class="appearance-none block w-full bg-gray-200 text-gray-700 
                    border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                    focus:bg-white focus:border-gray-500" name="altar" required >
                      
                </select>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

                    <script type="text/javascript">
                      $(document).ready(function () {
                          $('#region').on('change', function () {
                              var regionId = this.value;
                              $('#altar').html('');
                              $.ajax({
                                  url: '{{ url('/getaltar') }}?region_id='+regionId,
                                  type: 'get',
                                  success: function (res) {
                                      $('#altar').html('<option value="">Select altar</option>');
                                      $.each(res, function (key, value) {
                                          $('#altar').append('<option value="' + value
                                              .id + '">' + value.name + '</option>');
                                      });
                                      
                                  }
                              });
                          });
                          
                      });
                  </script>

              </div>

              

                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                  for="role">
                    Role
                  </label>
                  <select name="role" id="cars" class="appearance-none block w-full bg-gray-200 text-gray-700 
                  border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                  {{-- <option value="{{ $user->userDetail->role }}" selected disabled hidden class="px-2 py-2">{{ App\Models\Altar::find($user->userDetail->altar)->name  }}</option> --}}
                  {{-- @foreach ( $altars as $altar ) --}}
                    <option value="{{ $user->role }}"><?php 
                      $role="{{ $user->role }}";
                       if ($role==1) {
                          $role="Admin";
                         }
                         else {
                            $role="Keyboardist";
                          }          
               ?>{{ $role }}</option>
                   <option value="national_leader">National Leader</option>
                   <option value="chief_governor">Chief Governor</option>
                   <option value="governor">Governer</option>
                   <option value="deputy_governor">Deputy Governor</option>
                   <option value="vice_deputy_governor">Vice Deputy Governor</option>
                  {{-- @endforeach --}}
                  </select>
                  {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="role" 
                  name="role"
                  type="number" 
                  value="{{ $user->role }}"> --}}
              
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