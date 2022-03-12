@extends('Dashboard/layouts/layout')

@section('content-dashboard')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
        @if(session()->has('success'))   
        <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
          <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">{{ session('success') }}</div>
        </div>
        @endif
          <h3 class="text-gray-700 text-3xl font-medium">Users</h3>
          <div class="flex flex-col mt-8">
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div
                      class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                      <button class="border bg-violet-500 hover:bg-violet-600 text-gray-800 text-lg hover:text-white mx-3 my-3 px-4 py-2 rounded-md" onclick="openmodaltambah()">Tambah</button>
                      <table class="min-w-full mx-3" id="tbl-users">
                          <thead>
                              <tr>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      No</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Name</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Role</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Email</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Action</th>
                              </tr>
                          </thead>

                          <tbody class="bg-white text-center">
                              {{-- @foreach ($user as $u)
                                @php
                                    $i = 0;
                                @endphp
                              <tr>
                                  <td>{{ $i++ }}</td>
                                  <td>{{ $u->name }}</td>
                                  <td>{{ $u->roles }}</td>
                                  <td>{{ $u->email }}</td>
                                  <td
                                      class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium">
                                      <button class="border bg-green-500 hover:bg-green-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md" id='tbl-edit' data-modal-toggle="modal">Edit</button>
                                      <button class="border bg-red-500 hover:bg-red-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md">Delete</button>
                                  </td>
                              </tr>
                              @endforeach --}}
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </main>
</div>

{{-- modal edit user --}}
<dh-component>
    <div class="py-12 bg-gray-200 bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal-edit-users">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 font-bold text-lg text-center tracking-normal leading-tight mb-4">FORM EDIT USERS</h1>
                <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Name</label>
                <input id="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="James" value=""/>
                <label for="role" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Role</label>
                <input id="role" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Role" value="" />
                <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                <input id="email" class="focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border disabled:bg-gray-300" placeholder="email@mail.com" value="" disabled/>
                <div class="flex items-center justify-start w-full mt-3">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm" id="submit">Submit</button>
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="closemodal()">Cancel</button>
                </div>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="closemodal()" aria-label="close modal" role="button">
                    <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</dh-component>

{{-- modal tambah user --}}
<dh-component>
    {{-- <form method="POST" action="/Admin/Users/create">
        @csrf --}}
        <div class="py-12 bg-gray-200 bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal-tambah-users">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <h1 class="text-gray-800 font-bold text-lg text-center tracking-normal leading-tight mb-4">FORM TAMBAH USERS</h1>
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Name</label>
                    <input id="name1" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Masukkan Nama Anda" value=""/>
                    <label for="role" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Role</label>
                    <input id="role1" name="roles" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Masukkan Role Anda" value="" />
                    <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                    <input id="email1" name="email" class="focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border disabled:bg-gray-300" placeholder="email@mail.com" value=""/>
                    <label for="password" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Password</label>
                    <input type="password" id="password1" name="password" class="focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border disabled:bg-gray-300" placeholder="Masukkan Password Anda" value=""/>
                    <div class="flex items-center justify-start w-full mt-3">
                        <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm" id="btn-tambah-user">Submit</button>
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="closemodaltambah()">Cancel</button>
                    </div>
                    <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="closemodaltambah()" aria-label="close modal" role="button">
                        <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    {{-- </form> --}}
</dh-component>

@endsection