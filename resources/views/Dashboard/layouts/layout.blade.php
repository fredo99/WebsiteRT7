<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
    $prefix = Request::route()->getPrefix();
    @endphp
    <title>Dashboard | {{ $prefix == '/Admin' ? 'Admin' : 'User' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
  </head>
    <body>
      <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                    </svg>
                    
                    <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                </div>
            </div>
    
            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ $active == 'dashboard' ? 'active' : ''}}" href="{{ $prefix }}/Dashboard">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
    
                    <span class="mx-3">Dashboard</span>
                </a>
                @if (auth()->user()->roles == 'Admin') 
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ $active == 'users' ? 'active' : ''}}"
                    href="{{ $prefix }}/Users">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle stroke-linecap="round" stroke-linejoin="round" stroke-width="2" cx="9" cy="7" r="4"></circle>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
    
                    <span class="mx-3">Users</span>
                </a>
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ $active == 'album' ? 'active' : ''}}"
                    href="{{ $prefix }}/Album">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">Album</span>
                </a>
                @endif
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ $active == 'jimpitan' ? 'active' : ''}}"
                    href="{{ $prefix }}/Jimpitan">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                    </svg>
    
                    <span class="mx-3">Jimpitan</span>
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
          <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
              <div class="flex items-center">
                  <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                      <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                      </svg>
                  </button>
        
                  <div class="relative mx-4 lg:mx-0">
                      <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                          <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                              <path
                                  d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              </path>
                          </svg>
                      </span>
        
                      <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                          placeholder="Search">
                  </div>
              </div>
        
              <div class="flex items-center">
                  <div x-data="{ notificationOpen: false }" class="relative">
                      <button @click="notificationOpen = ! notificationOpen"
                          class="flex mx-4 text-gray-600 focus:outline-none">
                          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              </path>
                          </svg>
                      </button>
        
                      <div x-show="notificationOpen" @click="notificationOpen = false"
                          class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>
        
                      <div x-show="notificationOpen"
                          class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl overflow-hidden z-10"
                          style="width: 20rem; display: none;">
                          <a href="#"
                              class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                              <img class="h-8 w-8 rounded-full object-cover mx-1"
                                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                  alt="avatar">
                              <p class="text-sm mx-2">
                                  <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                      class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                              </p>
                          </a>
                          <a href="#"
                              class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                              <img class="h-8 w-8 rounded-full object-cover mx-1"
                                  src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                                  alt="avatar">
                              <p class="text-sm mx-2">
                                  <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                              </p>
                          </a>
                          <a href="#"
                              class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                              <img class="h-8 w-8 rounded-full object-cover mx-1"
                                  src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                  alt="avatar">
                              <p class="text-sm mx-2">
                                  <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                      class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                              </p>
                          </a>
                          <a href="#"
                              class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                              <img class="h-8 w-8 rounded-full object-cover mx-1"
                                  src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80"
                                  alt="avatar">
                              <p class="text-sm mx-2">
                                  <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                              </p>
                          </a>
                      </div>
                  </div>
        
                  <div x-data="{ dropdownOpen: false }" class="relative">
                      <button @click="dropdownOpen = ! dropdownOpen"
                          class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                          <img class="h-full w-full object-cover"
                              src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                              alt="Your avatar">
                      </button>
        
                      <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                          style="display: none;"></div>
        
                      <div x-show="dropdownOpen"
                          class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                          style="display: none;">
                          <a href="#"
                              class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                          <a href="#"
                              class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                          <form method="POST" action="/logout">
                            @csrf
                          <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white w-full text-left">Logout</button>
                          </form>
                      </div>
                  </div>
              </div>
          </header>
        @yield('content-dashboard')
      </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        let i = 1;
        $.ajax({
            url: '/api/jimpitan',
            success: function(data){      
                $('#tbl-jimpitan').DataTable({
                    "data": data,
                    "responsive" : true,
                    "columns": [{
                                "data" : "id",
                                "render": function ( data, type, row ) {
                                return i++;
                            },
                        },
                        {
                            "data" : "tanggal",
                            "render": function ( data, type, row ) {
                                return `${row.tanggal}`;
                            },
                        },
                        {
                            "data" : "penyetor",
                            "render": function ( data, type, row ) {
                                return `${row.penyetor}`;
                            },
                        },
                        {
                            "data" : "tidaksetor",
                            "render": function ( data, type, row ) {
                                return `${row.tidaksetor}`;
                            },
                        },
                        {
                            "data" : "jumlahsetoran",
                            "render": function ( data, type, row ) {
                                return Intl.NumberFormat('en-US').format(`${row.jumlahsetoran}`);
                            },
                        },
                        {
                            "data" : null,
                            "sortable": false,
                            "render": function ( data, type, row ) {
                                return "<td class='px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium'><button type='button' class='border bg-green-500 hover:bg-green-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md' data-id='+ row.id +'>Edit</button><button class='border bg-red-500 hover:bg-red-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md' data-id='+ row.id +'>Delete</button></td>"
                            },
                        }
                    ],
                });
                i=1;
            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        showAlbum()
    });
    function showAlbum(){
        let i = 1;
        $.ajax({
            url: '/api/album',
            success: function(data){      
                $('#tbl-album').DataTable({
                    "data": data,
                    "responsive" : true,
                    "destroy": true,
                    "columns": [{
                                "data" : null,
                                "render": function ( data, type, row ) {
                                return i++;
                            },
                        },
                        {
                            "data" : "image",
                            "render": function ( data, type, row ) {
                                if(row.image){
                                    return '<img src="/storage/'+row.image+'">';
                                }else{
                                    return '<img src="https://picsum.photos/300/300/?blur">';
                                }
                            }
                        },
                        {
                            "data" : "judul",
                            "render": function ( data, type, row ) {
                                return `${row.judul}`;
                            },
                        },
                        {
                            "data" : "keterangan",
                            "render": function ( data, type, row ) {
                                return `${row.keterangan}`;
                            },
                        },
                        {
                            "data" : "id",
                            "sortable": false,
                            "render": function ( data, type, row ) {
                                return "<td class='px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium inline-block'>" +
                                    "<a onclick='editAlbum("+row.id+")'><button type='button' class='border bg-green-500 hover:bg-green-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md'>Edit</button></a>" + 
                                    "<button class='border bg-red-500 hover:bg-red-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md' onclick='deleteAlbum("+row.id+")'>Delete</button></td>"
                            },
                        }
                    ],
                });
                i=1;
            }
        });
    }

    function deleteAlbum(id){
        Swal.fire({
            title: 'Apakah Anda yakin ingin menhapus?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya, yakin',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
            $.ajax({
                url: "/Admin/Album/delete/" + id,
                data: "data",
                success: function (data) {
                    showAlbum();
                }
            });
            Swal.fire('Data Album Berhasil Dihapus', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Data Anda Batal Dihapus', '', 'info')
            }
        });
    }

    function editAlbum(id){
        let iduser = id;
        location.replace('/Admin/Album/edit/' +id);
        $.ajax({
            url: "/Admin/Album/edit/" + id,
            success: function(data){
                console.log(data);
                    $('#judul').val(data['judul']);
                    $('#keterangan').val(data['keterangan']);
                    // $('#previewImage').attr('src', '/storage/data['image']');
                    $('#edit-album').on('click', function(iduser){
                        let judul = $("#judul").val();
                        let keterangan = $("#keterangan").val();
                        let image = $("#image").val();
                        // console.log(name);
                        // console.log(roles);
                        $.ajax({
                            url: '/Admin/Album/update/'+ id,
                            data: {'judul': judul, 'keterangan': keterangan, 'image': image},
                            success: function(data){
                                console.log(data);
                                // show();
                                Swal.fire(
                                'Data User',
                                'Data Berhasil Diubah',
                                'success'
                                )
                            }
                        });
                    })
            }
        });
    }

</script>
<script>
    function tambahalbum(){
        $('#modal-tambah-album').toggle('hidden');
    }
</script>
<script>
    $(document).ready(function () {
        show()
    });
    function show(){
        let i = 1;
            $.ajax({
                url: '/api/users',
                success: function (data){      
                    $('#tbl-users').DataTable({
                        "data": data,
                        "responsive" : true,
                        "destroy": true,
                        "columns": [{
                                    "data" : null,
                                    "render": function ( data, type, row ) {
                                    return i++;
                                },
                            },
                            {
                                "data" : "name",
                                "render": function ( data, type, row ) {
                                    return `${row.name}`;
                                },
                            },
                            {
                                "data" : "roles",
                                "render": function ( data, type, row ) {
                                    return `${row.roles}`;
                                },
                            },
                            {
                                "data" : "email",
                                "render": function ( data, type, row ) {
                                    return `${row.email}`;
                                },
                            },
                            {
                                "data" : "id",
                                "sortable": false,
                                "render": function ( data, type, row ) {
                                    return "<td class='px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium'>" +
                                    "<button type='button' class='border bg-green-500 hover:bg-green-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md' onclick='edit("+ row.id +")' id='btn-edit-users'>Edit</button>" +
                                    "<button type='button' class='border bg-red-500 hover:bg-red-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md' onclick='destroy("+ row.id +")'>Delete</button></td>"
                                },
                            }
                        ],
                    });
                i=1;
            }
        });
    }
    function edit(id){
        let iduser = id;
        $.ajax({
            url: '/api/edit/'+ id,
            success: function(data){
                    $('#modal-edit-users').toggle('hidden');
                    $('#name').val(data['name']);
                    $('#role').val(data['roles']);
                    $('#email').val(data['email']);
                    $('#submit').on('click', function(iduser){
                        let name = $("#name").val();
                        let roles = $("#role").val();
                        console.log(name);
                        console.log(roles);
                        $.ajax({
                            url: '/Admin/Users/update/'+ id,
                            data: {'name': name, 'role': roles},
                            success: function(data){
                                console.log(data);
                                $("#modal-edit-users").toggle('hidden');
                                show();
                                Swal.fire(
                                'Data User',
                                'Data Berhasil Diubah',
                                'success'
                                )
                            }
                        });
                    })
            }
        });
    }
    function destroy(id){
        Swal.fire({
            title: 'Apakah Anda yakin ingin menhapus?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya, yakin',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    url: '/Admin/Users/delete/'+ id,
                    success: function(data){
                        show();
                    }
                });
                Swal.fire('Data User Berhasil Dihapus', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Data Anda Batal Dihapus', '', 'info')
            }
        })
    }

    $('#btn-tambah-user').on('click', function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        let name = $('#name1').val();
        let roles = $('#role1').val();
        let email = $('#email1').val(); 
        let password = $('#password1').val(); 
        $.ajax({
            url: '/Admin/Users/create',
            type: 'POST',
            data: {"name": name, "roles": roles, "email": email, "password": password},
            success: function(data){
                $('#modal-tambah-users').toggle('hidden');
                show();
                Swal.fire(
                'Data User',
                'Data Berhasil Ditambahkan',
                'success'
                )
            }
        });
    });

    function openmodaltambah(){
        $("#modal-tambah-users").toggle('hidden');
    }
    function closemodal() {
        $("#modal-edit-users").toggle('hidden');
    }
    function closemodaltambah() {
        $("#modal-tambah-users").toggle('hidden');
    }
    function closemodalalbum(){
        $('#modal-tambah-album').toggle('hidden');
    }
</script>
</body>
</html>
