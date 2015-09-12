<!DOCTYPE html>
<html>
<head>
  @yield('title')

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">

</head>
<body>
<header>
    <nav class=" events_nav navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{{action('EventsController@index')}}}">Home</a></li>
            <li><a href="#about">Events</a></li>
            @if(Auth::check())
                <li><a href="{{{action('HomeController@doLogout')}}}">Logout</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">{{{ Auth::user()->first_name }}}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-calendar"></i> My Events</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Edit Profile</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <li><a href="{{{action('HomeController@showWelcome')}}}">Login</a></li>
            </ul>
            @endif
          

        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<main>
    

@yield('content')


</main>
<footer>
    


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</footer>
</body>
</html>