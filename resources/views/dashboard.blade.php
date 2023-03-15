<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/log-out.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Nest | Sign in</title>
    <style>
    @import url(href='https://fonts.googleapis.com/css?family=Inria Sans');

    * {
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

    .rectangle {
        width: 1019px;
        height: 600px;
        background-color: #b6b6b6;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;
        /* Set the border radius to 50% to make the edges circular */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar {
        background: white;
        position: relative;
        top: 0;
        left: 0;
        width: 395px;
        height: 100%;
        padding: 20px 0;
        transition: all 0.5s ease;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }

    .sidebar .profile {
        margin-bottom: 30px;
        text-align: center;
    }

    .sidebar .profile img {
        background-color: #d9d9d9;
        display: block;
        width: 286px;
        height: 119px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
    }

    .sidebar .profile h3 {
        color: black;
        margin: 10px 0 5px;
        font-size: 20px;
    }

    .sidebar .profile p {
        color: black;
        font-size: 20px;
    }

    .sidebar ul li a {
        margin-left: 20px;
        display: block;
        padding: 10px 30px;
        color: gray;
        font-size: 24px;
        position: relative;
    }

    .sidebar ul li a .icon {
        color: black;
        width: 30px;
        display: inline-block;
    }

    .sidebar ul li div {
        color: white;
        padding-bottom: 15px;
        display: inline-block;
    }

    .sidebar ul li a:hover,
    .sidebar ul li a.active {
        color: black;

        background-color: #d9d9d9;
        border-right: 2px solid rgb(5, 68, 104);
    }


        .sidebar .profile img{
            background-color: #d9d9d9;
            display: block;
            width: 286px;
            height: 119px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            
            
        }

        .sidebar .profile h3{
            color: black;
            margin: 10px 0 5px;
            font-size: 20px;
          
            
        }

        .sidebar .profile p{
            color: black;
            font-size: 20px;
           
            
        }
        .sidebar ul li a{
            margin-left: 20px;
            display: block;
            padding: 10px 30px;
            color: gray;
            font-size: 24px;
            position: relative;
        }

    .sidebar ul li a:hover .icon,
    .sidebar ul li a.active .icon {
        background-color: #d9d9d9;
        color: black;
    }

    .sidebar ul li a:hover:before,
    .sidebar ul li a.active:before {
        display: block;
    }

    body.active .sidebar {
        left: -225px;
    }


    .content {
        background: #b6b6b6;
        width: 624px;
        height: 100%;
        position: relative;
        transition: all 0.5s ease;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .form-group {
        position: relative;
        transition: all 0.5s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .form-control {
        width: 280px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    .create {
        justify-content: center;
        text-align: center;
        width: 280px;
        height: 50px;
        border-radius: 20px;
        font-size: 15px;
        color: grey;
        background-color: #d9d9d9;
        margin-bottom: 10px;
        border: none;
    }


        body.active .sidebar{
            left: -225px;
        }
        .content{
            background: #b6b6b6;
            width: 624px;
            height: 100%;
            position: relative;
            transition: all 0.5s ease;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            display: flex;
            justify-content: space-around;
            align-items:center;
            flex-direction:column;
        }
        .form-group{
            position: relative;
            transition: all 0.5s ease;
            display: flex;
            justify-content: center;
            align-items:center;
            flex-direction:column;
        }
        .form-control{
            width: 280px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        .create{
            justify-content: center;
            text-align: center;
            width: 280px;
            height:50px;
            border-radius: 20px;
            font-size: 15px;
            color: grey;
            background-color: #d9d9d9;
            margin-bottom: 10px;
            border:none;
        }
        .create:hover,
        .create.activate{
            justify-content: center;
            text-align: center;
            width: 280px;
            height:50px;
            border-radius: 20px;
            font-size: 15px;
            background-color: #cdd9e3;
            color: black;
            margin-bottom: 10px;
            border: 2px solid black;
        }
        .join{
            justify-content: center;
            text-align: center;
            width: 280px;
            height:50px;
            border-radius: 20px;
            font-size: 15px;
            color: grey;
            background-color: #d9d9d9;
            margin-bottom: 10px;
            border:none;
        }
        .join:hover,
        .join.activate{
            justify-content: center;
            text-align: center;
            width: 280px;
            height:50px;
            border-radius: 20px;
            font-size: 15px;
            background-color: #cdd9e3;
            color: black;
            margin-bottom: 10px;
            border: 2px solid black;
        }
        .content .fa-user-circle {
            font-size: 75px;
        }
        .gg-log-out{
            margin-left:5px;
        }
        .fa-user-circle{
            margin-bottom: 10px;
        }
        

    .create:hover,
    .create.activate {
        justify-content: center;
        text-align: center;
        width: 280px;
        height: 50px;
        border-radius: 20px;
        font-size: 15px;
        background-color: #cdd9e3;
        color: black;
        margin-bottom: 10px;
        border: 2px solid black;
    }

    .join {
        justify-content: center;
        text-align: center;
        width: 280px;
        height: 50px;
        border-radius: 20px;
        font-size: 15px;
        color: grey;
        background-color: #d9d9d9;
        margin-bottom: 10px;
        border: none;
    }

    .join:hover,
    .join.activate {
        justify-content: center;
        text-align: center;
        width: 280px;
        height: 50px;
        border-radius: 20px;
        font-size: 15px;
        background-color: #cdd9e3;
        color: black;
        margin-bottom: 10px;
        border: 2px solid black;
    }

    .content .fa-user-circle {
        font-size: 75px;
    }

    .gg-log-out {
        margin-left: 5px;
    }

    .fa-user-circle {
        margin-bottom: 10px;
    }

    </style>
    <script>
    // add an event listener to the form submit event
    document.getElementById('join-room-form').addEventListener('submit', function() {
        // get the value of the roomId input field
        var roomId = document.getElementById('roomId').value;

        // set the value of the room_id hidden input field
        document.getElementById('room-id-input').value = roomId;
    });
    </script>
</head>

<body>
    <div class="rectangle">
        <div class="sidebar">
            <!--profile image & text-->
            <!--menu item-->
            <div class="profile">
                <img src="{{asset('/logo/logo_long.png')}}">
            </div>


                <ul>
                    <li>
                        <a href="{{ route('profile.show') }}" >
                            <span class="icon"><i class="fa fa-user-circle"></i></span>
                            <span class="item">Profile</span>
                        </a>
                        <div></div>
                    </li>
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
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="icon"><i class="gg-log-out"></i></span>
                            <span class="item">Log out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <div></div>
                    </li>
                </ul>

            

        </div>
        <div class="content">
            <div class="profile">
                <i class="fa fa-user-circle"></i>
            </div>
            <button class="create" onclick="location.href='/manage'">
                <h3>
                    {{ __('CREATE ROOM') }}
                </h3>
            </button>
            <form action="{{ url('/join-room') }}" method="GET">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="roomId" name="roomId" placeholder="Enter Room ID"
                        required>
                    <input type="hidden" name="room_id" id="room-id-input">
                    <input type="hidden" id="sort" name="sort" value="vote">
                    <button class="join" type="submit">
                        <h3>
                            {{ __('JOIN ROOM') }}
                        </h3>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
</body>