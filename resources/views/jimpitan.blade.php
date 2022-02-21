@extends('/layouts/layout')

@section('content')
<hr>
    <div class="container mx-auto my-20">
        <h1 class="font-sans font-bold text-3xl">Hasil Jimpitan Bapak {{ $jimpitan['penyetor'] }}</h1>
        <h3>{{ $jimpitan['tanggal'] }}</h3>
    </div>
    
@endsection