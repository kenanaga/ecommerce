@extends('layouts.master')
@section('content')
<div class="container">
   <div class="jumbotron text-center">
         <h1>404</h1>
         <h2>sayfa bulunmadi</h2>
       <a href="{{route('anasayfa')}}" class="btn btn-primary">anasayfaya geri don</a>
   </div>
</div>

@endsection
