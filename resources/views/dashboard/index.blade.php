@extends('layouts.main')
@section('content')
     <div class="container">
          <div class="row justify-content-center ">
               <h1 class="text-center">Ini halaman dashboard</h1>
               <h1 class="text-center">Hello {{ auth()->user()->name }}</h1>
          </div>     
          <a class="btn btn-secondary text-light" href="{{route('logout')}}">Logout</a>
     </div>
@endsection

