<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{asset('js/scrolldown.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Nest | Home</title>
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

        .rectangle {
            width: 1500px;
            height: 650px;
            background-color: #b6b6b6;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 8px; /* Set the border radius to 50% to make the edges circular */
            display: flex;
        }

        .sidebar{
            background: white;
            position: relative;
            top: 0;
            left: 0;
            width: 264.71px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .sidebar .profile{
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar .profile img{
            background-color: #d9d9d9;
            display: block;
            width: 200px;
            height: 100px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto  ;
            margin-bottom: auto;
        }
        .bubble {
            position: relative;
            background-color: #ebdcdc;
            border-radius: 10px;
            border-bottom-left-radius:0px;
            padding: 10px;
            max-width: 300px;
            margin: 20px;
        }

        .bubble:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 5.5%;
            margin-left: -10px;
            border-width: 20px 20px 0 0;
            border-style: solid;
            border-color: #ebdcdc transparent;
            display: block;
            width: 0;
        }
        .question{
            background-color:white;
            height:550px;
            margin-top:50px;
            margin-left:50px;
            margin-right:50px;
            display: flex;
            flex-wrap:wrap;
            overflow:auto;
            position:relative;
        }
        #scroll-down-button {
            position: absolute; /* Position the button relative to the container */
            bottom: 10px; /* Position the button at the bottom of the container */
            right: 10px; /* Position the button on the right side of the container */
            display: none; /* Hide the button by default */
        }

    </style>
</head>
<body>
    <div class="rectangle">

        <div class="sidebar">
            <div class="profile">
                <img src="{{asset('/logo/logo_long.png')}}">
                <div>
                    <h4>{{ __('Your room id is '.$roomId) }}</h4>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="question">
                @foreach($event as $row)
                    @if($row->room_id == $roomId)

                        <div class="bubble">
                            <!-- <h5 class="card-title">title</h5> -->
                            <p class="card-text">{{$row->text}}</p>
                            <p class="card-text">Value voted by users: {{ $row->vote }}</p>
                            @if(empty($voted))
                            <form method="POST" action="/delete_question">
                                @csrf
                                <input type="hidden" name="voted" value="true">
                                <input type="hidden" name="id" value= "{{$row->id}}">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                            @endif
                        </div>
                    @endif
                @endforeach
            <button id="scroll-down-button" class="btn btn-primary">Scroll Down</button>
            </div>
        </div>
    </div>
</body>