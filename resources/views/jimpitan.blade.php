@extends('/layouts/layout')

@section('content')
{{-- <hr>
    <div class="container mx-auto my-20">
        <h1 class="font-sans font-bold text-3xl">Hasil Jimpitan Bapak {{ $jimpitan['penyetor'] }}</h1>
        <h3>{{ $jimpitan['tanggal'] }}</h3>
    </div> --}}
    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="/item">
          @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" value="{{ old('name') }}" required>
                @error('nama') 
                  <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                @enderror
              </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" value="{{ old('email') }}" required>
                @error('jumlah')
                <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                @enderror 
              </div>
            <div class="flex justify-end mb-3">
                <p href="/login" class="text-sm">Have an Account? <a href="/login" class="font-bold hover:underline">Tambah Data</a></p>
            </div>
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Tambah Data</button>
        </form>
    </section>
    
@endsection