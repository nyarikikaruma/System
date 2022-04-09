<div class="pt-12 lg:flex">
  <div class="flex flex-col w-full px-4 py-8 border-b lg:border-r lg:h-screen lg:w-64">


    <div class="flex flex-col justify-between mt-6">
      <aside class="w-64" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-blue-800">
        <ul class="space-y-2">
            <li>
                <a href="/dashboard" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                 hover:bg-gray-100 dark:hover:bg-blue-700">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900
                     dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" 
                     xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                     <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            @can('is_national_leader')
              <li>
                  <a href="/keyboardist/create" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white 
                  hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" 
                  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0
                     11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                  </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Add Keyboardist</span>
                  </a>
              </li>
              @endcan
              <li>
                    <a href="/keyboardist/list" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                    hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 
                      21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                          <span class="flex-1 ml-3 whitespace-nowrap">Keyboardists List</span>
                    </a>
              </li>
              @can('is_national_leader')
              <li>
                <a href="/region/create" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 
                  9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Add Region</span>
                </a>
              </li>
              @endcan
              <li>
                <a href="/region/list" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white 
                hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Region List</span>
                </a>
              </li>
              @can('is_national_leader')
              <li>
                <a href="/altar/create" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0
                   11-18 0 9 9 0 0118 0z" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Add Altar</span>
                </a>
              </li>
              @endcan
              <li>
                <a href="/altar/list" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white 
                hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Altars List</span>
                </a>
            </li>
            @can('is_national_leader')
              <li>
                <a href="/bishop/create" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white 
                hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 
                  11-18 0 9 9 0 0118 0z" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Add Bishops</span>
                </a>
            </li>
            @endcan
            <li>
                <a href="/bishop/list" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                 hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                 stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">DABs/Bishops List </span>
                </a>
            </li>
            @can('is_national_leader')
            <li>
                <a href="/notifications" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 
                      0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0
                       .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Notifications</span>
                </a>
            </li>
            @endcan
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white
                 hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
                 stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2
                   2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 
                   00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Chats</span>
                </a>
            </li>
        </ul>
        </div>
        </aside>

    </div>
  </div>
 
</div>