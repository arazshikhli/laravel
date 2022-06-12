@extends('layout')
@section('title')Qalereya @endsection
@section('main_content')
   <div clas="container">
       <div class="fotorama " data-loop="true" data-width="100%" data-ratio="800/600" data-nav="thumbs">
           <img src="https://s.fotorama.io/1.jpg">
           <img src="https://s.fotorama.io/2.jpg">
           <img src="https://s.fotorama.io/3.jpg">
       </div>
   </div>

@endsection
