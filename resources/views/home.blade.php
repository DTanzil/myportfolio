@extends('layouts.app')

@section('content')
    
<!-- Avatar & bubbles -->
<div id="homepage" class="home">
    <div class="text-vcenter">
      <div class="container">
        <div id="box">
          <div id="contentContainer">
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>
            <div class="thing"></div>                       
          </div>
      </div>

    <div class="row">
      <div class="col-sm-6">
        <img src="{{ asset('img/dania.png') }}" id="myavatar">          
      </div>
      <div class="col-sm-6 text-center">
        <h1 style="margin-top:25%;">Hi,I'm Dania.<br/>I'm a web developer.</h1>
        <img src="{{ asset('img/kite-black.png') }}" id="mykite" style="width:100px;height:150px;float:right;"> 
      </div>
    </div>
  </div>

  </div>
</div>

<!-- Skills -->
<div class="separator"></div>
<div class="pad-section" style="background:aliceblue;">
  <div class="container">
    <div class="row">
      <h2 class="text-center">What can I do?</h2>

      <div class="col-sm-3 text-center"></div>
      <div class="col-lg-6 col-md-12 col-sm-12 text-center">
        <div id="skills-console">
          <p>
            <span class="skills">PHP</span>
            <span class="skills">HTML</span>
            <span class="skills">Wordpress</span>
          </p>
          <p>
            <span class="skills">MySQL</span>
            <span class="skills">CSS</span>
            <span class="skills">Laravel</span>
          </p>
          <p>
            <span class="skills">CakePHP</span>            
            <span class="skills">Java</span>
            <span class="skills">Linux</span>            
          </p>
          <p>
            <span class="skills">Bootstrap</span>
            <span class="skills">SVN</span>
            <span class="skills">Git</span>
           
          </p>
        </div>

        <div class="separator"></div>
        
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8 col-md-12 col-sm-12 myprojects" style="background:#31b7ea;border-radius:10px;padding:10px;">
            <a class="mybutton" href="{{ route('allprojects') }}"><span>
              <i class="fa fa-btn fa-file-code-o" aria-hidden="true"></i>
              <i class="fa fa-btn fa-file-code-o" aria-hidden="true"></i>
              <i class="fa fa-btn fa-file-code-o" aria-hidden="true"></i>

              <br/>
              <b>Check Out Some Projects I Worked On Here!</b>
            </span>
            </a>
          </div>
          <div class="col-lg-2"></div>
        </div>

      </div>
      <div class="col-sm-3 text-center"></div>        
    </div>
  </div>
</div>

@endsection
