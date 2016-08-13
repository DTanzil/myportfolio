<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dania Tanzil</title>    
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>

<body id="app-layout">
    <!-- navigation panel -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('homepage') }}">Dania Tanzil</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('allprojects') }}">Projects</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ URL::asset('js/prefixfree.js') }}"></script>
    <script src="{{ URL::asset('js/bubble.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<footer>  
  <div class="container text-center">
    <h3>Follow Me:</h3>
    <span class="dt-icons">
      <a target="_blank" href="mailto:daniatanzil@live.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
    </span>
    <span class="dt-icons">
      <a target="_blank" href="https://github.com/DTanzil"><i class="fa fa-github" aria-hidden="true"></i></a>
    </span>
    <span class="dt-icons">
      <a target="_blank" href="https://www.linkedin.com/in/dania-tanzil-73a5882b"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
    </span>
  </div>
</footer>

</html>
