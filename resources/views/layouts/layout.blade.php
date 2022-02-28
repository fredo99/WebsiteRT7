<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
  <style>
    /*Overrides for Tailwind CSS */

    /*Form fields*/
    .dataTables_wrapper select,
    .dataTables_wrapper .dataTables_filter input {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: .5rem;
        /*pl-2*/
        padding-bottom: .5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 2px;
        /*border-2*/
        border-radius: .25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
    }

    /*Row Hover*/
    table.dataTable.hover tbody tr:hover,
    table.dataTable.display tbody tr:hover {
        background-color: #ebf4ff;
        /*bg-indigo-100*/
    }

    /*Pagination Buttons*/
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Current selected */
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Hover */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Add padding to bottom border */
    table.dataTable.no-footer {
        border-bottom: 1px solid #e2e8f0;
        /*border-b-1 border-gray-300*/
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    /*Change colour of responsive icon*/
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
        background-color: #667eea !important;
        /*bg-indigo-500*/
    }
</style>
</head>
<body>
    <nav class=" flex items-center justify-between p-10 flex-wrap ml-auto">
        <div class="md:ml-10 ml-3">
            <a href="/">
                <img src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Logo" width="50" height="50" class="">
            </a>
        </div>
        {{-- Humberger Button --}}
        <div class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button">
                <svg class=" w-10 h-10 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class=" hidden navbar-menu w-full lg:inline-flex lg:flex-grow lg:w-auto">
            <ul class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-center flex flex-col lg:h-auto ">
                <li>
                    <a href="/" class="tombol-navbar lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Home</a>
                </li>
                <li >
                    <a href="#keterangan" class=" tombol-navbar lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Keterangan</a>
                </li>
                <li >
                    <a href="#kepengurusan" class=" tombol-navbar lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Kepengurusan</a>
                </li>
                <li >
                    <a href="#jimpitan" class=" tombol-navbar lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Jimpitan</a>
                </li>
                <li >
                    <a href="#album" class=" tombol-navbar lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Foto</a>
                </li>
                @auth
                @php
                    $prefix = auth()->user()->roles;
                @endphp
                <li>
                    <a href="/{{$prefix}}/Dashboard" class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Halo, {{ auth()->user()->name }}</a>
                </li>
                @else
                <a href="/login"><button type="button"  class="tombol-login lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Login</button></a>
                @endauth
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function () {
            let i = 1;
            $.ajax({
                url: '/api/jimpitan',
                success: function(data){      
                    $('#tabel-jimpitan').DataTable({
                        "data": data,
                        "responsive" : true,
                        "columns": [{
                                    "data" : "id",
                                    "render": function ( data, type, row ) {
                                    return i++;
                                },
                            },
                            {
                                "data" : "hari",
                                "render": function ( data, type, row ) {
                                    return `${row.hari}`;
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
                                    return "<a href='/jimpitan/"+ row.id +"'><button type='button' class='tombol-detail'>Detail</button></a>";
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
        $(document).ready(function (){
            $.ajax({
            url: '/api/sumjimpitan',
            success: function(data){
                // console.log(data);
                $('#jumlahjimpitan').html('Rp. ' + data);
            }
            });
        });
    </script>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".navbar-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>