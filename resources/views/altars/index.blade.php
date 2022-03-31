<x-layout>

    <div class="flex bg-blue-200 content-center m-auto">
      <x-sidebar/>
  
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col ">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        
        <div class="py-2 align-middle inline-block  sm:px-6 lg:px-8 mt-8 m-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-blue-300 ">
            <table class=" divide-y divide-gray-200 ">
              
              <thead class="bg-gray-50">
                <tr>
                  
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Altar Id</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Altar Name</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Altar Region </th>
                  @can('is_national_leader')
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                  @endcan
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($lists as $list )
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $list->id }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $list->name }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ \App\Models\Region::find( $list->region_id )->name }}</td>
                  @can('is_national_leader')
                    
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="/altar/edit/{{ $list->id }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                  @endcan
                </tr>
                @endforeach
    
                <!-- More people... -->
              </tbody>
  
            </table>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
    
  
  </x-layout>