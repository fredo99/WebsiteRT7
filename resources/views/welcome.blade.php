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
    <nav class="flex items-center justify-between h-25 py-10">
        <a href="/">
            <img src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Logo" width="40" height="40" class="ml-20">
        </a>
        <ul class="flex items-center">
            <li >
                <a href="/" class="tombol-navbar">Home</a>
            </li>
            <li >
                <a href="#keterangan" class=" tombol-navbar">Keterangan</a>
            </li>
            <li >
                <a href="#kepengurusan" class=" tombol-navbar">Kepengurusan</a>
            </li>
            <li >
                <a href="#jimpitan" class=" tombol-navbar">Jimpitan</a>
            </li>
            <li >
                <a href="#foto" class=" tombol-navbar">Foto</a>
            </li>
            <button href="/login" class="tombol-login">Login</button>
        </ul>
    </nav>

    <div class="w-full relative mb-20">
        <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center">
            <div class="text-6xl font-bold text-white">Website RT 7 RW 9 Pedurungan Tengah</div>
            <div class="text-2xl text-white">Warga Merpati 2</div>
        </div>
        <img src="https://picsum.photos/id/190/1920/700">
    </div>

    <div class="container mx-auto my-20" id="keterangan">
        <h1 class="font-bold text-4xl mb-5">KETERANGAN RT 7 RW 9</h1>
        <div class="grid grid-cols-2">
            <div data-aos="fade-right" class="w-full">
                <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae nesciunt nostrum repellendus! Magnam odio consequuntur iusto 
                    alias amet quod tenetur eveniet veritatis cumque incidunt. Quia sit, mollitia voluptatum, ea beatae incidunt aut voluptates 
                    natus officia, suscipit minus quis repellat a vero cumque ex autem quasi. Sunt totam incidunt minus, dolor ipsum sint cupiditate 
                    ratione, magni porro assumenda nemo veniam consequuntur, placeat fugit? Quis quidem minus vitae, dignissimos laudantium exercitationem 
                    quo explicabo, architecto minima cumque repellat impedit. Perferendis harum doloremque nostrum ea dolore non architecto totam obcaecati 
                    vitae quam voluptatum dignissimos odit iusto facilis, voluptas tempore, est corporis tenetur enim sed, ipsum ducimus consequatur assumenda. 
                    Voluptatem incidunt id similique fugiat? Possimus, magnam iste fugiat quasi eveniet eos ipsam autem officia dicta iure, hic pariatur non corrupti 
                    ad molestias incidunt doloribus vel doloremque veritatis earum dolores officiis rem perferendis ut. Repellat illo provident nostrum repudiandae eos 
                    consequatur praesentium, nulla fugiat asperiores officia!</p>
            </div>
            <div class="w-7/12 mx-20">
                <img data-aos="fade-left" src="/img/Keterangan-img.svg" alt="Gambar Kelompok">
            </div>
        </div>
    </div>

    <div class="container my-20" id="kepengurusan">
        <div class="grid grid-cols-2">
            <div class="w-full">
                <img data-aos="fade-right" class="ml-20" src="/img/struktur.png" alt="struktur kepengurusan">
            </div>
            <div class="flex justify-center items-center">
                <h1 class="font-bold text-4xl mb-5 text-center">KEPENGURUSAN TAHUN 2022</h1>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-20" id="jimpitan">
        <h1 class="font-bold text-4xl text-center mb-5">JIMPITAN</h1>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-md sm:rounded-lg">
                        <table class="min-w-full jimpitan">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        No
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Hari
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Penyetor
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tidak Setor
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Jumlah Setoran
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Product 1 -->
                                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        Jumat, 18 Februari 2022
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        suriyem
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        Bpk.a, Bpk.b
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        20.000
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <strong class="text-2xl">Jumlah Uang Jimpitan </strong>
        <strong class="text-2xl text-red-500" id="jumlahjimpitan"></strong>
    </div>

    <div class="container mx-auto my-20" id="foto">
        <h1 class="font-bold text-4xl mb-5">Kumpulan Foto</h1>
        <div class="grid grid-rows-1 grid-cols-4 gap-2">
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/200/300/?blur" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/seed/picsum/200/300" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/200/300/?blur" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/seed/picsum/200/300" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/seed/picsum/200/300" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/seed/picsum/200/300" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/seed/picsum/200/300" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            <div data-aos="zoom-in-up" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://picsum.photos/200/300/?blur" alt="Sunset in the mountains" width="300" height="300"> 
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    $(document).ready(function () {
        let i = 1;
        $.ajax({
            url: '/api/jimpitan',
            success: function(data){      
                $('.jimpitan').DataTable({
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
</body>
</html>