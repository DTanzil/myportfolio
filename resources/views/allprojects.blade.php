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




<div class="pad-section pagecontent">
    <div class="container">
        <div class="row myprojects">
            @foreach($projects as $key => $file)

                <div class="col-lg-4 col-md-4 col-sm-12" style="margin-bottom:60px;">
                    <div id="mix-blend" style="text-align:center;" >
                        <div id="multp" class="result">   
                            <a href="{{ route('viewproject') }}/{{ $key }}">
                                <span class="color"></span>  
                                <img id="circle" src="{{ asset($file->main_image) }}"/>
                            </a>
                        </div>
                    </div>
                    <h3 class="text-center aleg"><a href="{{ route('viewproject') }}/{{ $key }}">| {{ $file->title }} |</a></h3>
                </div>

            @endforeach 
        </div>
    </div>
</div>



@endsection
