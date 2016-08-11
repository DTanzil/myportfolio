@extends('layouts.app')

@section('content')


<div>
  <div class="pad-section pagecontent">
    <div class="container">
        <div class="row text-center">
          <h1 style="font-size:6em;">Whoops! </h1>
          <h1> Sorry, this page is unavailable. </h1>
          <p><img src="{{ asset('img/whale.png') }}" style="width:400px;"></p>
          <div class="separator"></div>
          <p>
            <a href="{{ URL::previous() }}" style="margin:20px;background:#8cc1a8;padding:10px 20px;">Back to previous page </a>
            <a href="{{ URL::previous() }}" style="margin:20px;background:#8cc1a8;padding:10px 20px;">Go to Home Page </a>
          </p>  
    </div>
  </div>
</div>      


@endsection
