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


<div class="aleg">

    <div class="pad-section pagecontent">
        <div class="container">
            <div class="row">

                <p class="text-center"><a href="{{ route('allprojects') }}">&larr; Back to All Projects Page</a></p>

                <h1 class="text-center"> {{ $project->title }} </h1>
                <div class="separator"></div>

                @if(isset($project->images))
                  @foreach($project->images as $key => $image)
                    <div class="col-lg-4 col-md-4 col-sm-12" style="">
                      <img src="{{ asset($image->pic) }}" style="border:3px solid #ddd; box-shadow: 0 0 20px rgba(0,0,0,0.6); margin-bottom:20px;">
                    </div>
                  @endforeach
                @endif

<!--                 <div class="col-lg-4 col-md-4 col-sm-12" style="">
                    <img src="http://localhost/myportfolio/public/img/wdxdetail2.jpg" style="border:3px solid #ddd; box-shadow: 0 0 20px rgba(0,0,0,0.6);">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" style="">
                    <img src="http://localhost/myportfolio/public/img/wdxdetail2.jpg" style="border:3px solid #ddd; box-shadow: 0 0 20px rgba(0,0,0,0.6);">
                </div> -->
            </div>
            <div class="separator"></div>

            <h3 class="text-center" style="color:grey;"> Role: </h3>
            <h2 class="text-center"> {{ $project->role }} </h2>
            <div class="separator"></div>
            <h3 class="text-center" style="color:grey;"> What is used for this project: </h3>
            <h2 class="text-center"> {{ $project->technology }} </h2>
            <!-- <div class="separator"></div> -->

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12 text-center">
                    <h3 style="color:grey;"> Description: </h3>
                    <p style="font-size:16px;"> 
                      {{ $project->description }}
                        <!-- Picasso is a furniture company based in Jakarta, Indonesia. 
                        They wanted a website to facilitate online shopping and also showcase their amazing collections. 
                        Using Wordpress and Woocommerce, I created an e-commerce website for them. -->  
                    </p>
                    <div class="separator"></div>
                    <p><a href="{{ route('allprojects') }}">&larr; Back to All Projects Page</a></p>
                </div>

                <div class="col-lg-3"></div>

            </div>
        </div>
    </div>
</div>      



<!-- fourth section - Information -->
<!-- <div id="information" class="pad-section">
  <div class="container">
    <div class="row">
      <p>            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
      </p> -->
<!--       <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Additional information</h2>
          </div>
          <div class="panel-body lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Additional information</h2>
          </div>
          <div class="panel-body lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
          </div>
        </div>
      </div>
 -->
<!-- 
    </div>
  </div>
</div> -->
<!-- /fourth section -->


@endsection
