<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
</head>
<body>
    <nav class=" flex items-center justify-between p-10 flex-wrap ml-auto">
        <div class="ml-10">
            <a href="/">
                <img src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Logo" width="60" height="60" class="">
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
                <a href="/login"><button type="button"  class="tombol-login lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">Login</button></a>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
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