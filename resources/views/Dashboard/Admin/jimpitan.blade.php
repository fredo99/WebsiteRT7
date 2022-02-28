@extends('Dashboard/layouts/layout')

@section('content-dashboard')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
          <h3 class="text-gray-700 text-3xl font-medium">Jimpitan</h3>
          <div class="flex flex-col mt-8">
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div
                      class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                      <button class="border bg-violet-500 hover:bg-violet-600 text-gray-800 text-lg hover:text-white mx-3 my-3 px-4 py-2 rounded-md">Tambah</button>
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
@endsection