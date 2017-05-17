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
    <div class="nav clearfix">
        <ul>
            <li style="float: left    line-height: 65px;
                margin-left: 15px";
            ><a href="{{ route('main') }}">Головна</a></li>
            <li style="float: left"><a href="{{ route('catalog') }}">Каталог</a></li>
            <li style="float: left"><a href="{{ route('about') }}">Про нас</a></li>
            <li style="float: left"><a href="{{ route('register') }}">Реєстрація</a></li>
            <li style="float: left"><a href="{{ route('login') }}">Вхід</a></li>
        </ul>
    </div>

 


<p><a href="{{ route('create') }}"><img src="plus.jpg" width="50" 
   height="50" alt="Додати"></a></p>
</header>


<div class="container">
    @yield('content')
</div>

</body>
</html>
 <!--  <form method="POST" action="{{ route('create') }}">
{{ csrf_field() }}
     <input type="text" name='title' placeholder="Категорія">
    <button type="submit">Створити нову категорію</button>
     

    </form> -->