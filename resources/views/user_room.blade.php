<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-NWswiZMYlxyx/p5ue5sg8O67W1BucM5RbRjKLvUGYft2rCq0eULkxxZpAMvE0fTFWV7qsdT+T83VzvD9nSmtfw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{asset('js/scrolldown.js')}}"></script>
    <script src="{{asset('js/unvote.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Nest | Home</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Inria+Sans');

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
        width: 1500px;
        height: 650px;
        background-color: #b6b6b6;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;
        /* Set the border radius to 50% to make the edges circular */
        display: flex;
    }

    .leavebtn {
        background-color: #ad9b9b;
        border-radius: 9px;
        border: none;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        width: 150px;
        height: 30px;
    }

    .sidebar {
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
        text-align: center;
    }

    .sidebar .profile {
        margin-bottom: 30px;
        text-align: center;
    }

    .sidebar .profile img {
        background-color: #d9d9d9;
        display: block;
        width: 200px;
        height: 100px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
    }

    p {
        line-height: 1.2;
        /* adjust as needed */
        margin: 0;
        padding: 0;
        border: none;
        font-size: 24px;
    }

    .vote {
        font-weight: bold;
    }

    .bubble {
        position: relative;
        background-color: #ebdcdc;
        border-radius: 10px;
        border-bottom-left-radius: 0px;
        padding: 10px;
        width: 250px;
        height: 190px;
        margin: 20px;
    }

    .bubble:nth-child(-n+3) {
        background-color: #efd3d3;
    }

    .bubble:nth-child(-n+3):after {
        border-color: #efd3d3 transparent;
    }

    .bubble:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 5.5%;
        margin-left: -10px;
        border-width: 15px 15px 0 0;
        border-style: solid;
        border-color: #ebdcdc transparent;
        display: block;
        width: 0;
    }

    /* WebKit browsers */
    .text::-webkit-scrollbar {
        width: 0;
        /* hide scrollbar width */
    }

    .name {
        margin-left: 10px;
        font-size: 15px;
        color: grey;
    }

    .text {
        height: 70px;
        margin-top: 10px;
        margin-left: 10px;
        margin-bottom: 5px;
        word-wrap: break-word;
        white-space: pre-wrap;
        overflow-y: scroll;
    }

    .question {
        background-color: white;
        width: 1200px;
        height: 500px;
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 0px;
        display: flex;
        flex-wrap: wrap;
        overflow: auto;
        position: relative;
    }

    #scroll-down-button {
        position: absolute;
        /* Position the button relative to the container */
        bottom: 10px;
        /* Position the button at the bottom of the container */
        right: 10px;
        /* Position the button on the right side of the container */
        display: none;
        /* Hide the button by default */
    }

    .addquestion {
        background-color: #c5b0b0;
        height: 140px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .bar {
        display: flex;
        flex-direction: row;
        height: 40px;
        background-color: #ad9b9b;
    }

    .fa-user-circle {
        margin-top: 5px;
        margin-left: 30px;
        color: white;
        font-size: 30px;
    }

    .bar-name {
        margin-left: 10px;
        display: flex;
        font-weight: bold;
        height: auto;
        justify-content: center;
        align-items: center;
    }

    .bar-anonymous {
        position: absolute;
        right: 50px;
    }

    .toggle {
        display: flex;
        height: 40px;
        justify-content: center;
        font-weight: bold;
        align-items: center;
    }

    .toggle input {
        display: none;
    }

    /* Style the slider element */
    .toggle .slider {
        margin-left: 10px;
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
        border-radius: 20px;
        background-color: gray;
    }

    /* Style the knob inside the slider element */
    .toggle .slider::before {
        position: absolute;
        content: "";
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: 1px;
        left: 1px;
        background-color: white;
        transition: all 0.3s ease;
    }

    .toggle input:checked+.slider {
        background-color: #87f255;
    }

    .toggle input:checked+.slider::before {
        transform: translateX(20px);
    }

    .desc {
        margin-left: 20px;
        font-size: 15px;
        color: white;
    }

    .askbox {
        margin-left: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .fa-paper-plane {
        color: #ad9b9b;
    }

    @media screen and (max-width: 600px) {
        .rectangle {
            width: 100vw;
        }

        .sidebar {
            display: none;
        }

        .question {
            width: 100vw;
        }

        .bubble {
            min-width: 90vw;
            max-height: 180px;
            margin-bottom: 10px;
        }

        .bubble-content p {
            margin-top: 0px;
            margin-bottom: 10px;
        }

        .bubble-content .votebtn {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .fa-crown {
            margin-bottom: 10px;
        }

        .fa-star {
            text-shadow: 0 0 5px #000;
            font-size: 30px;
            margin-top: -20px;
            margin-right: 0px;
        }
    }
    </style>
    @livewireStyles
</head>

<body>
    <div class="rectangle">
        <div class="sidebar">
            <div class="profile">
                <img src="{{asset('/logo/logo_long.png')}}">
            </div>
            <div>
                @if($sort == "vote")
                <form action="/room/{{$roomId}}">
                    <select class="form-control" name="sort" onchange="this.form.submit();">
                        <option selected value="vote">sort with vote</option>
                        <option value="time">sort with time</option>
                    </select>
                </form>
                @else
                <form action="/room/{{$roomId}}">
                    <select class="form-control" name="sort" onchange="this.form.submit();">
                        <option value="vote">sort with vote</option>
                        <option selected value="time">sort with time</option>
                    </select>
                </form>
                @endif
                <h4>{{ __('Your room id is '.$roomId) }}</h4>
            </div>
            <div class="leavebtn">
                <a href="{{ url('/dashboard') }}" style="text-decoration:none; color:inherit;">
                    <span>LEAVE ROOM</span>
                </a>
            </div>
        </div>
        <!-- submit question bar -->
        <div class="content">
            <div class="question">
                @foreach($event as $row)
                @if($row->room_id == $roomId)
                <div class="bubble">
                    <div class="bubble-content">
                        <div style="display:flex;align-items:center;">
                            <p class="vote">{{ $row->vote }} VOTE</p>
                            @if($loop->iteration ==1)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#FFB743;text-shadow: 0 0 2px #000;"></i>
                            @endif
                            @if($loop->iteration ==2)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#C0C0C0;text-shadow: 0 0 3px #000;"></i>
                            @endif
                            @if($loop->iteration ==3)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#B87333;text-shadow: 0 0 3px #000;"></i>
                            @endif
                            @if($row->is_starred == 1)
                            <button type="submit"
                                style="position: absolute;margin-top:-10px;right: 10px;height:50px;width:50px;background-color:inherit;border:none;">
                                <i class="fas fa-star" style=" color:#FFB743;font-size:30px;margin-top:20px;text-shadow: 0 0 5px #000;"></i>
                            </button>
                            @endif
                        </div>
                        @if($row->anonymous == 0)
                        <p class="name"> {{Auth::user()->name}} </p>
                        @else
                        <p class="name"> Anonymous </p>
                        @endif
                        <p class="text">{{$row->text}}</p>

                        @php($already_voted = 'false')
                        @foreach($vote as $v)
                        @if($v->user_id == Auth::user()->id && $v->question_id ==$row->id)
                        <form method="POST" action="/delete_vote" class="votebtn">
                            @csrf
                            <input type="hidden" name="id" value="{{$row->id}}">
                            <input type="hidden" name="vote_id" value="{{$v->id}}">
                            <button type="submit" class="btn btn-primary">Unvote</button>
                        </form>
                        @php($already_voted = 'true')
                        @endif
                        @endforeach
                        @if($already_voted == 'false')
                        <form method="POST" action="/increase_vote">
                            @csrf
                            <input type="hidden" name="id" value="{{$row->id}}">
                            <button type="submit" class="btn btn-secondary">Vote</button>
                        </form>
                        @endif
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="addquestion">
                <form action="/submit-question/{{$roomId}}" method="post">
                    <div class="bar">
                        <div class="fa fa-user-circle"></div>
                        <div class="bar-name">{{Auth::user()->name}}</div>
                        <div class="bar-anonymous">
                            <div>
                                <label class="toggle">
                                    <input type="checkbox" name="anonymous" value="1">ANONYMOUS
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    @csrf
                    @error('question')
                    <span class="text-danger my-2">{{$message}}</span>
                    @enderror
                    <div class="form-group my-2">
                    </div>
                    <div class="askbox">
                        <div class="desc">Ask some questions.</div>
                        <div style="position: relative;display:flex; width: auto; height:60px; background-color:white">
                            <input type="text" class="form-control" name="question"
                                placeholder="Ask your question here..." style="width: 95%; height:60px; border:none">
                            <button type="submit"
                                style="position: absolute;right: 10px;height:60px;width:50px;background-color:white;border:none;">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @livewireScripts
</body>