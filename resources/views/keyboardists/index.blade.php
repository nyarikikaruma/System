<x-layout>

  <div class="flex bg-blue-200 content-center m-auto">
    <x-sidebar/>

  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex">
    <div class="my-5 overflow-x-auto sm:-mx-6 lg:-mx-5">
      
      <div class="py-2 align-middle inline-block  sm:px-6 lg:px-8 mt-8 m-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-blue-300 ">
          <table class=" divide-y divide-gray-200 table-auto">
            
            <thead class="bg-gray-50">
              <tr>
                
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Region Id</th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Altar</th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
                @can('is_national_leader')
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  
                </th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Edit
                </th>
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Promote
                </th>
                @endcan
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($lists as $list )
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="{{asset('images/' . $list->userDetail->thumbnail) }}" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">{{ $list->name }}</div>
                      {{-- <div class="text-sm text-gray-500">jane.cooper@example.com</div> --}}
                    </div>
                  </div>
                </td>
                {{-- <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $list->detail->name }}</div>
                  <div class="text-sm text-gray-500">Optimization</div> --}}
                
                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500">{{ \App\Models\Region::find( $list->userDetail->region )->name }}</td>
                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500">{{ $list->userDetail->contact }}</td>
                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500">{{\App\Models\Altar::find( $list->userDetail->altar)->name }}</td>
                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500">{{ $list->username }}</td>
                
                  
               
                @can('is_national_leader')
                <td class="px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                    <form action="/keyboardist/suspend/{{ $list->id }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-700">Suspend</button>
                  </form>
                </td>
                <td class="px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                  <a href="/keyboardist/edit/{{ $list->id }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                <td class="px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                  <a href="/keyboardist/edit/{{ $list->id }}" class="text-green-300 hover:text-indigo-900">Promote</a>
                </td>
                @endcan
              </tr>
              @endforeach
              
              <!-- More people... -->
            </tbody>
            
          </table>
        </div>
        {{ $lists->links() }}
      </div>
    </div>
  </div>
  
</div>

  

</x-layout>