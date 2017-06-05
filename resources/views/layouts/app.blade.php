<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Оголошення - @yield('title')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<header>

    <div class="header-middle">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('main') }}"><i class="fa fa-shopping-cart"></i> {{ trans('menu.main_message') }}</a></li>
                            <li><a href="{{ route('catalog') }}"><i class="fa fa-shopping-cart"></i> {{ trans('menu.catalog') }}</a></li>
                            <li><a href="{{ route('about') }}"><i class="fa fa-user"></i> {{ trans('menu.about') }}</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> {{ trans('menu.register') }}</a></li>
                            <li><a href="{{ route('login')}}"><i class="fa fa-user"></i> {{ trans('menu.login') }}</a></li>

                           <li> <a href="{{ route('logout') }}">
                                   {{ trans('menu.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                           </li>
                            <li><p><a href="{{ route('create') }}"><i class="fa fa-user"><img src="/plus.jpg" width="50"
                                                                        height="50" alt="Додати">{{ trans('menu.create_ad') }}</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <ul class="nav navbar-nav">
                        <li><a href="/ua"><i class="fa fa-user"></i> UA</a></li>
                        <li><a href="/en"><i class="fa fa-user"></i> ENG</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>
