{{-- <x-layout> --}}

  {{-- <div class="flex bg-blue-200 content-center m-auto">
      

   
 <x-sidebar/>
    
 <section class="py-8 px-6">
          <div class="flex justify-center">
              @auth
                  <form action="/logout" method="POST">
                    @csrf
            <button type="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">

                Log out
            </button>
            
            </form>
              @endauth

                <div class="items-center">
                    <h1 class="font-bold px-6 py-4 mt-8 items-center">
                       Your Profile
                    </h1>

                    <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-8 p-0 w-auto">
                      <div class="sm:flex sm:items-center px-6 py-4 ">
                        <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-24 sm:h-48 rounded-full" src="{{ asset('images/' . $user->userDetail->thumbnail) }}" alt="Woman's Face">
                        <div class="mt-4 sm:mt-0 sm:ml-4 text-center sm:text-left">
                          <p class="text-xl leading-tight mt-1">{{ $user->name }}</p>
                          <p class="text-xl leading-tight mt-1">{{ $user->userDetail->contact }}</p>
                          <p class="text-xl leading-tight mt-1">{{ $user->username }}</p>
                          <p class="text-xl leading-tight mt-1">{{ \App\Models\Region::find($user->userDetail->region)->name }} Region</p>
                          <p class="text-xl leading-tight mt-1">{{ \App\Models\Altar::find($user->userDetail->altar)->name }} Altar</p>
                          <p class="text-xl leading-tight mt-1">Product Engineer</p>
                          <p class="text-xl leading-tight mt-1">Product Engineer</p> --}}
                          {{-- <div class="mt-4">
                            <button class="text-purple-500 hover:text-white hover:bg-purple-500 border border-purple-500 text-xs font-semibold rounded-full px-4 py-1 leading-normal">Message</button>
                          </div> --}}
                        {{-- </div>
                      </div>
                    </div>
                </div>
  
    </div>

 </section>
    
</div> --}}
<x-layout>
  <div class="flex bg-blue-300">

  
    <div class="w-1/4 bg-blue-800 items-center rounded">
         
    <div class="pt-12 lg:flex">
      <div class=" px-4 py-8   lg:border-r lg:h-screen lg:w-64">


        {{-- <div class="flex flex-col justify-between mt-6">
          <aside class="h-full">
            <ul>
              <li>
                <a class="flex items-center px-4 py-2 text-gray-700 bg-blue-300 rounded-md " href="/dashboard">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Home</span>
                </a>
              </li>
              @can('is_national_leader')
                
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/keyboardist/create">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Add Keyboardist</span>
                  
                </a>
              </li>
              @endcan
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/keyboardist/list">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Keyboardists</span>
                  
                </a>
              </li>
              @can('is_national_leader')
                
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/region/create">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Add Region</span>
                </a>
              </li>
              @endcan
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/region/list">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Region</span>
                </a>
              </li>
              @can('is_national_leader')
                
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/altar/create">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Add Altar</span>
                </a>
              </li>
              @endcan
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/altar/list">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Altars</span>
                </a>
              </li>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/bishop/list">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Bishops</span>
                </a>
              </li>
              @can('is_national_leader')
                
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/bishop/create">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Add Bishop</span>
                </a>
              </li>
              @endcan
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.453,12.691V7.723 M17.453,12.691V7.723 M1.719,12.691V7.723 M18.281,12.691V7.723 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M16.625,6.066h-1.449V3.168c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.187-0.414,0.414v2.898H3.375c-0.913,0-1.656,0.743-1.656,1.656v4.969c0,0.913,0.743,1.656,1.656,1.656h1.449v2.484c0,0.228,0.187,0.414,0.414,0.414h9.523c0.229,0,0.414-0.187,0.414-0.414v-2.484h1.449c0.912,0,1.656-0.743,1.656-1.656V7.723C18.281,6.81,17.537,6.066,16.625,6.066 M5.652,3.582h8.695v2.484H5.652V3.582zM14.348,16.418H5.652v-4.969h8.695V16.418z M17.453,12.691c0,0.458-0.371,0.828-0.828,0.828h-1.449v-2.484c0-0.228-0.186-0.414-0.414-0.414H5.238c-0.228,0-0.414,0.186-0.414,0.414v2.484H3.375c-0.458,0-0.828-0.37-0.828-0.828V7.723c0-0.458,0.371-0.828,0.828-0.828h13.25c0.457,0,0.828,0.371,0.828,0.828V12.691z M7.309,13.312h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,13.312,7.309,13.312M7.309,15.383h5.383c0.229,0,0.414-0.187,0.414-0.414s-0.186-0.414-0.414-0.414H7.309c-0.228,0-0.414,0.187-0.414,0.414S7.081,15.383,7.309,15.383 M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484 M12.691,12.484H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,12.484,12.691,12.484M12.691,14.555H7.309c-0.228,0-0.414,0.187-0.414,0.414s0.187,0.414,0.414,0.414h5.383c0.229,0,0.414-0.187,0.414-0.414S12.92,14.555,12.691,14.555"></path>
                    </svg>

                  <span class="mx-4 font-medium">Print Badges</span>
                </a>
              </li>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/notifications">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M14.38,3.467l0.232-0.633c0.086-0.226-0.031-0.477-0.264-0.559c-0.229-0.081-0.48,0.033-0.562,0.262l-0.234,0.631C10.695,2.38,7.648,3.89,6.616,6.689l-1.447,3.93l-2.664,1.227c-0.354,0.166-0.337,0.672,0.035,0.805l4.811,1.729c-0.19,1.119,0.445,2.25,1.561,2.65c1.119,0.402,2.341-0.059,2.923-1.039l4.811,1.73c0,0.002,0.002,0.002,0.002,0.002c0.23,0.082,0.484-0.033,0.568-0.262c0.049-0.129,0.029-0.266-0.041-0.377l-1.219-2.586l1.447-3.932C18.435,7.768,17.085,4.676,14.38,3.467 M9.215,16.211c-0.658-0.234-1.054-0.869-1.014-1.523l2.784,0.998C10.588,16.215,9.871,16.447,9.215,16.211 M16.573,10.27l-1.51,4.1c-0.041,0.107-0.037,0.227,0.012,0.33l0.871,1.844l-4.184-1.506l-3.734-1.342l-4.185-1.504l1.864-0.857c0.104-0.049,0.188-0.139,0.229-0.248l1.51-4.098c0.916-2.487,3.708-3.773,6.222-2.868C16.187,5.024,17.489,7.783,16.573,10.27"></path>
                    </svg>

                  <span class="mx-4 font-medium">Notifications</span>
                </a>
              </li>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.659,3.681H8.468c-0.211,0-0.383,0.172-0.383,0.383v2.681H2.341c-0.21,0-0.383,0.172-0.383,0.383v6.126c0,0.211,0.172,0.383,0.383,0.383h1.532v2.298c0,0.566,0.554,0.368,0.653,0.27l2.569-2.567h4.437c0.21,0,0.383-0.172,0.383-0.383v-2.681h1.013l2.546,2.567c0.242,0.249,0.652,0.065,0.652-0.27v-2.298h1.533c0.211,0,0.383-0.172,0.383-0.382V4.063C18.042,3.853,17.87,3.681,17.659,3.681 M11.148,12.87H6.937c-0.102,0-0.199,0.04-0.27,0.113l-2.028,2.025v-1.756c0-0.211-0.172-0.383-0.383-0.383H2.724V7.51h5.361v2.68c0,0.21,0.172,0.382,0.383,0.382h2.68V12.87z M17.276,9.807h-1.533c-0.211,0-0.383,0.172-0.383,0.383v1.755L13.356,9.92c-0.07-0.073-0.169-0.113-0.27-0.113H8.851v-5.36h8.425V9.807z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Chat</span>
                </a>
              </li>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/keyboardists/edit/{id}">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M19.404,6.65l-5.998-5.996c-0.292-0.292-0.765-0.292-1.056,0l-2.22,2.22l-8.311,8.313l-0.003,0.001v0.003l-0.161,0.161c-0.114,0.112-0.187,0.258-0.21,0.417l-1.059,7.051c-0.035,0.233,0.044,0.47,0.21,0.639c0.143,0.14,0.333,0.219,0.528,0.219c0.038,0,0.073-0.003,0.111-0.009l7.054-1.055c0.158-0.025,0.306-0.098,0.417-0.211l8.478-8.476l2.22-2.22C19.695,7.414,19.695,6.941,19.404,6.65z M8.341,16.656l-0.989-0.99l7.258-7.258l0.989,0.99L8.341,16.656z M2.332,15.919l0.411-2.748l4.143,4.143l-2.748,0.41L2.332,15.919z M13.554,7.351L6.296,14.61l-0.849-0.848l7.259-7.258l0.423,0.424L13.554,7.351zM10.658,4.457l0.992,0.99l-7.259,7.258L3.4,11.715L10.658,4.457z M16.656,8.342l-1.517-1.517V6.823h-0.003l-0.951-0.951l-2.471-2.471l1.164-1.164l4.942,4.94L16.656,8.342z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Edit Profile</span>
                </a>
              </li>
             
              @can('is_national_leader')
                
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/keyboardist/suspend">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M13.774,9.355h-7.36c-0.305,0-0.552,0.247-0.552,0.551s0.247,0.551,0.552,0.551h7.36
                            c0.304,0,0.551-0.247,0.551-0.551S14.078,9.355,13.774,9.355z M10.094,0.875c-4.988,0-9.031,4.043-9.031,9.031
                            s4.043,9.031,9.031,9.031s9.031-4.043,9.031-9.031S15.082,0.875,10.094,0.875z M10.094,17.809c-4.365,0-7.902-3.538-7.902-7.902
                            c0-4.365,3.538-7.902,7.902-7.902c4.364,0,7.902,3.538,7.902,7.902C17.996,14.271,14.458,17.809,10.094,17.809z"></path>
                    </svg>

                  <span class="mx-4 font-medium">Suspended Accounts</span>
                </a>
              </li>
              @endcan
               
            </ul>

          </aside>

        </div> --}}





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

      <div class="w-3/4 mt-8">

        <div class="flex flex-wrap justify-center">
          <div class="w-6/12 sm:w-4/12 px-4">
            <img src="{{ asset('images/' . $user->userDetail->thumbnail) }}" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
          </div>
        </div>
        {{-- <div class="text-blue-700 font-bold flex justify-center">YOUR PROFILE </div>
          <div class="flex justify-center">
            <div><img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-10 sm:h-10 rounded-full" src="{{ asset('images/' . $user->userDetail->thumbnail) }}" alt="Woman's Face"> </div> 
            <div>

              <div class=" flex justify-center ">
               <div> Your Profile</div>
              </div>
              <div class="flex justify-center">
               {{$user->name}}</div> 
               <div class="flex justify-center">
               {{ $user->userDetail->contact }}</div> 
               <div class="flex justify-center">
                 @if(\App\Models\Altar::all())
                   {{ \App\Models\Altar::find($user->userDetail->altar)->name }}</div> 
                   <div class="flex justify-center">
                   {{ \App\Models\Region::find($user->userDetail->region)->name }}</div> 
                @else

                  <h1>No Altars</h1>
                
                @endif
                   
                 
              
             </div>
            </div>
      </div>   --}}
    </div>


</x-layout>
{{-- </x-layout> --}}