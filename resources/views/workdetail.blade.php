@extends('layouts.app')

@section('content')

<div class="pad-section">
  <div class="container">
    <div class="row">
        <h1 class="text-center title" id="funword">
            <span>#</span><span>P</span><span>r</span><span>o</span><span>j</span><span>e</span><span>c</span><span>t</span><span>s</span>
            </h1>
    </div>
  </div>
</div>

<div>
    <div class="pad-section pagecontent">
        <div class="container text-center">
            <div class="row">
                <p><a href="{{ route('allprojects') }}">&larr; Back to All Projects Page</a></p>
                <h1>{{ $project->title }} </h1>
                <div class="separator"></div>
                @if(isset($project->images))
                  @foreach($project->images as $key => $image)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <img src="{{ asset($image->pic) }}" class="prjimg">
                    </div>
                  @endforeach
                @endif
            </div>

            <div class="separator"></div>
            <h3 style="color:grey;"> Role: </h3>
            <h2> {{ $project->role }} </h2>
            <div class="separator"></div>
            <h3 style="color:grey;"> What is used for this project: </h3>
            <h2> {{ $project->technology }} </h2>

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <h3 style="color:grey;"> Description: </h3>
                    <p style="font-size:16px;"> 
                      {{ $project->description }}
                    </p>
                    <div class="separator"></div>
                    <p><a href="{{ route('allprojects') }}">&larr; Back to All Projects Page</a></p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>     


@endsection
