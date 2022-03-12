@extends('layouts/layout')

@section('content')
    <div class="w-full relative lg:mb-20 mb-10">
        <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center">
            <div class="sm:text-3xl md:text-6xl text-md font-bold text-white">Website RT 7 RW 9 Pedurungan Tengah</div>
            <div class="md:text-2xl text-white">Warga Merpati 2</div>
        </div>
        <img src="https://picsum.photos/id/190/1920/800">
    </div>

    <div class="container mx-auto my-20" id="keterangan">
        <h1 class="font-bold sm:text-3xl md:text-4xl mb-5 mx-3">KETERANGAN RT 7 RW 9</h1>
        <div class="grid grid-flow-col">
            <div data-aos="fade-right" class="md:w-full">
                <p class="text-justify mx-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae nesciunt nostrum repellendus! Magnam odio consequuntur iusto 
                    alias amet quod tenetur eveniet veritatis cumque incidunt. Quia sit, mollitia voluptatum, ea beatae incidunt aut voluptates 
                    natus officia, suscipit minus quis repellat a vero cumque ex autem quasi. Sunt totam incidunt minus, dolor ipsum sint cupiditate 
                    ratione, magni porro assumenda nemo veniam consequuntur, placeat fugit? Quis quidem minus vitae, dignissimos laudantium exercitationem 
                    quo explicabo, architecto minima cumque repellat impedit. Perferendis harum doloremque nostrum ea dolore non architecto totam obcaecati 
                    vitae quam voluptatum dignissimos odit iusto facilis, voluptas tempore, est corporis tenetur enim sed, ipsum ducimus consequatur assumenda. 
                    Voluptatem incidunt id similique fugiat? Possimus, magnam iste fugiat quasi eveniet eos ipsam autem officia dicta iure, hic pariatur non corrupti 
                    ad molestias incidunt doloribus vel doloremque veritatis earum dolores officiis rem perferendis ut. Repellat illo provident nostrum repudiandae eos 
                    consequatur praesentium, nulla fugiat asperiores officia!</p>
            </div>
            <div class="md:w-7/12 md:mx-20 md:block hidden">
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
                <h1 class="font-bold md:text-4xl mb-5 text-center">KEPENGURUSAN TAHUN 2022</h1>
            </div>
        </div>
    </div>

    <div class="container w-full mx-auto px-5">
      <h1 class="font-bold sm:text-3xl md:text-4xl text-center py-3">JIMPITAN</h1>
      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="tabel-jimpitan" class="stripe hover text-center" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Penyetor</th>
              <th>Tidak Setor</th>
              <th>Jumlah Setoran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          </tbody>    
        </table>
      </div>
      <div class="py-3 px-3">
        <strong class="md:text-2xl">Jumlah Uang Jimpitan Sebesar </strong>
        <strong class="md:text-2xl text-red-500" id="jumlahjimpitan"></strong>
      </div>
    </div>

    <div class="container mx-auto my-20" id="album">
        <h1 class="font-bold md:text-4xl py-3 text-center font-sans">Kumpulan Foto</h1>
        <div class="grid grid-rows-1 {{ $jumlahalbum <= 2 ? 'md:grid-cols-2' :'md:grid-cols-4'}} grid-cols-2 gap-2">
          @foreach ($album as $a)
          <div data-aos="zoom-in-up" class="rounded border border-gray-400 overflow-hidden shadow-lg mx-3 mt-3">
            @if ($a->image != null)
            <img class="w-full rounded" src="/storage/{{$a->image}}" alt="Sunset in the mountains" width="300" height="300"> 
            @elseif ($a->image == null)
            <img class="w-full rounded" src="https://picsum.photos/300/300/?blur" alt="Sunset in the mountains" width="300" height="300"> 
            @endif
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$a->judul}}</div>
                <p class="text-gray-700 text-base">
                  {{$a->keterangan}}
                </p>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
              </div>
          </div>
          @endforeach
        </div>
    </div>

    
@endsection