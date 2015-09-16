<!DOCTYPE html>
<html>
<head>
  @yield('title')

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <!-- Custom styles CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" media="screen">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">


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
                <a class="navbar-brand" href="#">Event Lister</a>
            </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{{action('EventsController@index')}}}">Home</a></li>
            <li><a href="{{{action('HomeController@showEvents')}}}">Events</a></li>
          </ul>
            @if(Auth::check())
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{{ Auth::user()->first_name }}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{{action('EventsController@create')}}}"><i class="fa fa-calendar-plus-o"></i> Create Events</a></li>
                            <li><a href="{{{action('EventsController@userEvents')}}}"><i class="fa fa-calendar"></i> My Events</a></li>
                             <li><a href="{{{action('EventsController@userProfile')}}}"><i class="fa fa-calendar"></i> My Profile</a></li>
                            <li><a href="/editProfile/{{{Auth::user()->id}}}"><i class="glyphicon glyphicon-user"></i> Edit Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{{action('HomeController@doLogout')}}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{{action('HomeController@showWelcome')}}}">Login</a></li>
                </ul>
            @endif
          

        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<main>
    <div class="container">
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        @if($errors->has())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $key=> $error)
                        <li>{{{$error}}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>



</main>
<footer>
    


  <!-- Javascript files -->
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Background slider -->
  <script src="/assets/js/jquery.backstretch.min.js"></script>
     <!-- Waypoints -->
  <script src="/assets/js/jquery.waypoints.js"></script>
  <!-- WOW - Reveal Animations When You Scroll -->
  <script src="/assets/js/wow.min.js"></script>   
  <!-- Custom scripts -->
  <script src="/assets/js/wow.min.js"></script> 
  <script src="/assets/js/custom.js"></script>
  <script src="/jquery.datetimepicker.js"></script>
  <script>jQuery('#datetimepicker').datetimepicker();</script>
  <script>jQuery('#datetimepicker2').datetimepicker();</script>


</footer>
</body>
</html>