@extends('Dashboard/layouts/layout')

@section('content-dashboard')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
          <h3 class="text-gray-700 text-3xl font-medium">Jimpitan</h3>
          <div class="flex flex-col mt-8">
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div
                      class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                      <button class="border bg-violet-500 hover:bg-violet-600 text-gray-800 text-lg hover:text-white mx-3 my-3 px-4 py-2 rounded-md" onclick="openmodaljimpitan()">Tambah</button>
                      <table class="min-w-full display" id="tbl-jimpitan">
                          <thead>
                              <tr>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      No</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Tanggal</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Penyetor</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      TidakSetor</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      JumlahSetoran</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                                      Action</th>
                              </tr>
                          </thead>

                          <tbody class="bg-white text-center">
                              {{-- @foreach ($jimpitan as $j)
                                @php
                                    $i = 0;
                                @endphp
                              <tr>
                                  <td>{{ $i++ }}</td>
                                  <td>{{ $j->tanggal }}</td>
                                  <td>{{ $j->penyetor }}</td>
                                  <td>{{ $j->tidaksetor }}</td>
                                  <td>{{ $j->jumlahsetoran }}</td>
                                  <td
                                      class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium">
                                      <button class="border bg-green-500 hover:bg-green-600 text-gray-800 text-lg hover:text-white px-4 py-2 rounded-md">Edit</button>
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

{{-- modal tambah jimpitan --}}
<dh-component>
    <form method="POST" action="/Admin/Jimpitan/create">
        @csrf
        <div class="py-12 bg-gray-200 bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal-tambah-jimpitan">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <h1 class="text-gray-800 font-bold text-lg text-center tracking-normal leading-tight mb-4">FORM TAMBAH JIMPITAN</h1>
                    <label for="tanggal" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Masukkan tanggal Anda" value="" required/>
                    @error('tanggal')
                    <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                    @enderror
                    <label for="tidaksetor" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Tidak Setor</label>
                    <select class="selectpicker mb-5 mt-2" name="tidaksetor[]" style="width: 100%" data-allow-clear="false" multiple="multiple">
                    @foreach ($users as $u)
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                    </select>
                    @error('tidaksetor')
                    <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                    @enderror
                    <label for="jumlahsetoran" class="text-gray-800 text-sm font-bold leading-tight tracking-normal mt-5">Jumlah Setoran</label>
                    <input class="form-control block w-full text-base font-normal text-gray-700 g-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan Jumlah Setoran Anda" type="number" id="jumlahsetoran" name="jumlahsetoran" required>
                    @error('image')
                    <p class="text-sm text-red-500 ml-3">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-start w-full mt-3">
                        <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="closemodaljimpitan()">Cancel</button>
                    </div>
                    <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="closemodaljimpitan()" aria-label="close modal" role="button">
                        <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</dh-component>
@endsection