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
          <h3 class="text-gray-700 text-3xl font-medium">Edit Album</h3>
          <div class="flex flex-col mt-8">
            <section class="mt-10 w-6/12">
                <form class="flex flex-col" method="GET" action='' id="form-edit">
                  @csrf
                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required>
                        @error('judul') 
                          <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                        @enderror
                      </div>
                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required>
                        @error('keterangan')
                        <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                        @enderror 
                    </div>
                    <div class="mb-6 pt-3 rounded bg-gray-200 border-2 border-gray-500 w-full h-50">
                    <img class="" id="previewImage" src="">
                        <h3 class="text-center mb-3">Image preview</h3>
                    </div>
                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="image">image</label>
                        <input type="file" name="image" id="image" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required>
                        <input type="hidden" name="old_image" id="old_image" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                        @error('image')    
                        <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                        @enderror
                      </div>
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" id="edit-album">Edit</button>
                </form>
            </section>
          </div>
      </div>
  </main>
</div>
@endsection