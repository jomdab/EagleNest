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

    .content-board {
        background: white;
        width: 600px;
        height: 90%;
        display: flex;
        flex-direction: column;
    }

    .content-board h2{
        text-align:center;
        background:#efd3d3;
        height:50px;
    }

    .table {
        width:100%;
        height:100%;
        font-size: 0.875rem;
    }
    
    .table-responsive{
        width:100%;
        height:100%;
        overflow-y:scroll;
        overflow-x:hidden;
    }

    .table thead th{
        font-weight: bold;
        text-transform: uppercase;
        color: #333;
        border-color: #ddd;
        width: 20%;
    }
    .table thead th:nth-child(1){
        width: calc(40%);
    }


    .table td,
    .table th {
        width:auto;
        height:60px;
        vertical-align: middle;
        border-color: #ddd;
    }

    .table tbody tr:nth-of-type(even) {
        background-color: #f9f9f9;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f5f5f5;
    }

    .table-bordered {
        border: 1px solid #ddd;
    }
    </style>
    @livewireStyles
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
            <div class="content-board">
                <h2>Result for Room:{{$roomId}}</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Question</th>
                                <th scope="col">Asked by</th>
                                <th scope="col">Vote score</th>
                                <th scope="col">Star</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $event)
                            <tr>
                                <td>{{ $event->text }}</td>
                                @if ($event->anonymous == 0)
                                    <td>{{ $event->name }}</td>
                                @else
                                    <td>Anonymous</td>
                                @endif
                                <td>{{ $event->vote }}</td>
                                @if ($event->is_starred == 1)
                                    <td>Yes</td>
                                @else
                                    <td>No</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a style="margin-top:10px;float:left;width:100%; color:white; margin-left:-70px;margin-bottom:-30px;" href="/manage"> < Back</a>
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