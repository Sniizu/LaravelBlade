<title>About</title>
@extends('navbar')
@section('content')
    <h1>Halaman About</h1>
    <div class="container">
        <h3>Kelompok paling keren BH01</h3>
        @foreach ($mahasiswaList as $List)
        <b>Nama</b>
        {{$List['name']}}
        <br>
        <b>Email</b>
        {{$List['email']}}
        <br><br>
        @endforeach
    </div>
    <img src="{{asset('img/'.$image.'')}}" alt="" width="200">
@endsection
