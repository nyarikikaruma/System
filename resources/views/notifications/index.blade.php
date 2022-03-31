<x-layout>

    
    <div  class="flex items-center bg-blue-200">
        <x-sidebar/>

        <div>

            <div class="max-w-sm rounded-md overflow-hidden shadow-lg bg-blue-100">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 font-bold">Uread Notifications</div>
                  @forelse ($notifications as $notification )
                  <p class="text-gray-700 text-base">
                    
                      <li>

                           {{ $notification->data['Message'] }} <a href="/keyboardist/suspend" class="hover:underline hover:text-blue-500">{{ $notification->data['Action'] }}</a>
                           {{ $notification->markAsRead() }}
                      </li>

                @empty
                    
                No new notifications
                @endforelse
                  </p>
                </div>

                <div class="px-6 py-4">
                 <div class="font-bold text-xl mb-2 font-bold">Read Notifications</div>
                  @forelse ($readNotifications as $notificatio )
                  <p class="text-gray-700 text-base">
                    
                      <li>

                           {{ $notificatio->data['Message'] }} <a href="/keyboardist/suspend" class="hover:underline hover:text-blue-500">{{ $notificatio->data['Action'] }}</a>
                      </li>
                @empty
                    
                No notifications
                @endforelse
                  </p>
                </div>
                {{-- <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div> --}}
              </div>
            
                   
                   

        </div>

    </div>
    
     
</div>

</x-layout>