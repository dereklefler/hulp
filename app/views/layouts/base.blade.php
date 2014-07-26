<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hulp Laravel</title>
    {{ HTML::style('lib/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,700,900') }}
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}" style="margin-right: 10px;">
                HULP <span style="font-weight: 300;">| Property Management</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{URL::to('explore/category')}}">Explore</a>
                </li>
                <li>
                    <a href="{{URL::to('about')}}">About</a>
                </li>
                <!-- don't need search right now
                <li><a href="{{URL::to('search')}}">
                        <i class="glyphicon glyphicon-search"></i>
                </a></li>-->
            </ul>
            <!-- don't need login/register right now
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{URL::to('login')}}">
                        Log In
                    </a>
                </li>
                <li class="active">
                    <a href="{{URL::to('register')}}">
                        Register
                    </a>
                </li>
            </ul>-->
        </div>
    </div>
</nav>

<div class="container">
    @yield('body')
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 footer-left">
                Hulp &copy; 2013 - {{date('Y')}}
            </div>
            <div class="col-sm-6 footer-right">
                Made with <span style="color: #bd6848;">&hearts;</span> in Provo, UT
            </div>
        </div>
    </div>
</footer>


{{ HTML::script('lib/jquery/jquery-2.0.3.min.js') }}
{{ HTML::script('lib/bootstrap/js/bootstrap.min.js') }}
</body>
</html>