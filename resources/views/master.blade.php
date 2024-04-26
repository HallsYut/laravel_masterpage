<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Master')</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        .brand{
            text-align: center;
        }
        .brand h1{
            font-size: 50px;
        }
        /* nav */
        .nav ul{
            text-align: center;
            padding: 0px;
        }
        .nav li{
            display: inline-block;
        }
        .nav ul li a{
            text-decoration: none;
            padding: 30px;
            font-size: 20px;
        }
        /* container */
        .container{
            text-align: center;
            font-size: 50px;
            margin-top: 200px;
        }
    </style>
        @yield('head')
</head>
<body>
    <div class="brand">
        <h1>NUTTAWUT</h1>
    </div>
    <div class="nav">
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">CONTACT</a></li>
            <li><a href="">MAP</a></li>
        </ul>
    </div>
    <div class="container">
        <p>Master Page</p>
        @yield('content')
    </div>
</body>
</html>