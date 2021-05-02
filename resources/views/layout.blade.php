
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Laravel</title>
        <style>
            .title{
                background-color: green;
                font-size:50px;
                text-align: center;
            }
            .container{
                background-color: red;
                border: solid;
                border: 1px;
            }
            h1{
                font-size: 45px;
                color: green;
            }
        </style>
    </head>
    <body>
        <div class="title">ESTO ES PARTE DEL LAYOUT</div>
        <div class="container">
            <h1>Esto es personalizado de cada web:
                @yield('content')</h1>
        </div>
        <div>
            @auth
            <h2>Estas logeado como {{auth()->user()->name}}</h2>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" value="Logout">
            </form>
            @endauth
            @guest
            <a href="{{route('login')}}">LOGIN</a></div>

        <a href="{{route('register')}}">REGISTRAR</a></div>
    @endguest



</body>
</html>