<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(href='https://fonts.googleapis.com/css?family=Inria Sans');

        *{
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inria Sans', sans-serif;
        }

        body {
                font-family: 'Inria Sans';
                background-color: #AD9B9B;
            }
        #rectangle {
            width: 1021px;
            height: 73%;
            background-color: #b6b6b6;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 8px; /* Set the border radius to 50% to make the edges circular */
            display: flex;
        }

        .wrapper .sidebar{
            background: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 395px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        
        .wrapper .sidebar .profile{
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper .sidebar .profile img{
            background-color: #d9d9d9;
            display: block;
            width: 286px;
            height: 119px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
        }

        .wrapper .sidebar .profile h3{
            color: black;
            margin: 10px 0 5px;
            font-size: 20px;
        }

        .wrapper .sidebar .profile p{
            color: black;
            font-size: 20px;
        }
        .wrapper .sidebar ul li a{
            margin-left: 20px;
            display: block;
            padding: 10px 30px;
            color: gray;
            font-size: 24px;
            position: relative;
        }

        .wrapper .sidebar ul li a .icon{
            color: black;
            width: 30px;
            display: inline-block;
        }
        .wrapper .sidebar ul li div{
            color: white;
            padding-bottom: 15px;
            display: inline-block;
        }
        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
            color: black;

            background-color: #d9d9d9;
            border-right: 2px solid rgb(5, 68, 104);
        }

        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon{
            background-color: #d9d9d9;
            color: black;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
            display: block;
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
        <div id="rectangle">
            <div class="sidebar">
            <!--profile image & text-->
                <!--menu item-->
                <div class="profile">
                    <img src="{{asset('/logo/logo_long.png')}}">
                </div>

                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                        <div></div>
                    </li>
                    
                    @if (Route::has('login'))
                    <div class = 'hidden'>
                        @auth
                            <li>
                                <a href="{{ url('/dashboard') }}">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    <span class="item">Dashboard</span>
                                </a>
                                <div></div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="item">Sign in</span>
                                </a>
                                <div></div>
                            </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">
                                    <span class="icon"><i class="fa fa-user-plus"></i></span>
                                    <span class="item">Sign up</span>
                                </a>
                                <div></div>
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
                        <div></div>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <span class="item">About us</span>
                        </a>
                        <div></div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>