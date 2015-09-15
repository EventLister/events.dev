
<!DOCTYPE html>
<html>
    <head>
        <title>Create new User</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/hello.css">
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <div class="container">
            <div class="row">
                <div>
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
                </div>
            </div>
                <div class="well" id="form">
                    {{ Form::open(array('action' => 'EventsController@storeUser')) }}
                        @include('events.partials.create_user_form')
                    {{Form::close()}}
                </div>
            </div>
        </main>
        <footer>
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </footer>
    </body>
</html>