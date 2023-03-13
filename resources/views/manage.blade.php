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
        left: -48px;
        width: 300px;
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
        width: 250px;
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

    .gg-log-out {
        margin-left: 5px;
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


    .title {
        width: 100%;
        float: left;
        margin-bottom: 2rem;
    }

    .search {
        margin-top: 10px;
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .eventlist {
        width: 650px;
        height: 420px;
        background-color: white;
        border-radius: 8px;
        /* Set the border radius to 50% to make the edges circular */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .bar {
        background-color: #efd3d3;
        width: 100%;
        height: 70px;
        top: 0;
        position: absolute;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: row;
    }

    .bar ul {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
    }

    .bar li {
        text-align: center;
        width: 325px;
        list-style: none;
        padding: 10px;
        border-right: 1px solid #ccc;
    }

    .bar li:last-child {
        border-right: none;
    }

    .mid {
        display: flex;
        width: 100%;
    }

    .btn {
        height: 40px;
        float: right;
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        font-size: 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
        margin-bottom: 10px;
    }

    .btn:hover {
        background-color: #3e8e41;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 500px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .close {
        color: #aaa;
        margin-top: -60px;
        margin-left: 450px;
        position: absolute;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
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
                    <a href="{{ route('profile.show') }}">
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
            <div class="title">
                <h1>Q&A Event</h1>
            </div>
            <div class="mid">
                <div class="search">
                    <form>
                        <input type="text" name="q" placeholder="Search...">
                        <button type="submit" style="display:none;">
                        </button>
                    </form>
                </div>
                <button onclick="openModal()" class="btn">Create New Event</button>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <form action="/rooms" method="POST">
                            @csrf
                            <label for="input">Event Name:</label>
                            <input type="text" id="name" name="name">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="eventlist">
                <div class="bar">
                    <ul>
                        <li>Event Name</li>
                        <li>Status</li>
                    </ul>
                </div>
                <div class="list">
                    @foreach($rooms as $room)
                    <li>{{$room->name}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    </script>
</body>