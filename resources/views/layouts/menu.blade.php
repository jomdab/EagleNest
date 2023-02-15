<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        *{
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body{
            background: #f5f6fa;
        }

        .wrapper .sidebar{
            background: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 225px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
        }
        .wrapper .sidebar .profile{
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper .sidebar .profile img{
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .wrapper .sidebar .profile h3{
            color: black;
            margin: 10px 0 5px;
        }

        .wrapper .sidebar .profile p{
            color: black;
            font-size: 14px;
        }
        .wrapper .sidebar ul li a{
            display: block;
            padding: 13px 30px;
            border-bottom: 1px solid #10558d;
            color: gray;
            font-size: 16px;
            position: relative;
        }

        .wrapper .sidebar ul li a .icon{
            color: black;
            width: 30px;
            display: inline-block;
        }
        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
            color: #0c7db1;

            background:white;
            border-right: 2px solid rgb(5, 68, 104);
        }

        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon{
            color: #0c7db1;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
            display: block;
        }
        .wrapper .section{
            width: calc(100% - 225px);
            margin-left: 225px;
            transition: all 0.5s ease;
        }

        .wrapper .section .top_navbar{
            background: rgb(7, 105, 185);
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 30px;

        }

        .wrapper .section .top_navbar .hamburger a{
            font-size: 28px;
            color: #f4fbff;
        }

        .wrapper .section .top_navbar .hamburger a:hover{
            color: #a2ecff;
        }

        body.active .wrapper .sidebar{
            left: -225px;
        }

        body.active .wrapper .section{
            margin-left: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <div class="wrapper">
        <!--Top menu -->
        <div>
        </div>
        <div class="sidebar">
           <!--profile image & text-->
            <!--menu item-->
            <div class="profile">
                <img src="{{asset('/logo/Logo.png')}}">
                <h3>EagleNest</h3>
                <p>Q&A support</p>
            </div>

            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                
                @if (Route::has('login'))
                <div class = 'hidden'>
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Dashboard</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="item">Sign in</span>
                            </a>
                        </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                <span class="icon"><i class="fa fa-user-plus"></i></span>
                                <span class="item">Sign up</span>
                            </a>
                        </li>
                    @endif
                    @endauth
                </div>
                @endif
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-bars"></i></span>
                        <span class="item">Feature</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="item">About us</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

    </div>
  <script>
    @yield('content')
  </script>
</body>
</html>