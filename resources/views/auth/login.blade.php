<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Nest | Sign in</title>

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
            width: 1200px;
            height: 600px;
            background-color: #b6b6b6;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 8px; /* Set the border radius to 50% to make the edges circular */
            display: flex;
        }
        .rectangle .content{
            background: #d9d9d9;
            position: relative;
            top: 0;
            left: 0;
            width: 700px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        .rectangle .login{
            background: white;
            position: relative;
            width: 500px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            display: flex;
            justify-content: center;
        }
        .rectangle .login .logo{
            width: 200px;
            height: 80px;
            margin-top: 30px;
            margin-left: 125px;
            margin-bottom: 10px;
            justify-content: center;
        }
        .rectangle .login .txt{
            font-size: 30px;
            font-weight: bold;
            overflow: hidden;
            text-align: center;
            justify-content: center;
        }
        .rectangle .login .email{
            width: 350px;
        }
        .rectangle .login .password{
            width: 350px;
        }
        .rectangle .login .option{
            width: 350px;
            margin-bottom: 50px;
        }
        .right{
            float: right;
        }
        .left{
            float: left;
        }
        .button{
            margin-left:110px;
            display:block;
            align-items: center;
            justify-content: center;
        }
        .button .btn{
            justify-content: center;
            text-align: center;
            width: 100px;
            height:50px;
            border-radius: 20px;
            font-size: 15px;
            background-color: #d9d9d9;
        }
        .img{
            height:100px;
            width:100px;
        }
        .linktxt{
            margin-top: 10px;
            margin-left:120px;
            display:block;
            align-items: center;
            justify-content: center;
            color: lightgrey;
        }
        .linktxt:hover,
        .linktxt.activate{
            color: black;
        }
    </style>
</head>
<body>
    <div class="rectangle">
        <div class = "content">
        </div>
        
        <div class = "login">
            <x-guest-layout>
                    <div class = "logo">
                        <img class="img" src="{{asset('/logo/logo_short.png')}}">
                    </div>

                    <div class = "txt">
                        <span>USER LOGIN</span>
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class = "email">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4 password">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="block mt-4 option">
                            <label for="remember_me" class="flex items-center left">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 right" href="{{ route('password.request') }}">
                                    {{ __('Forgot password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="button">
                            <x-jet-button class="ml-4 btn">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                        <div class="linktxt">
                            <a href="{{ route('register') }}">
                                    <span class="item">Create Account</span>
                            </a>
                        </div>
                    </form>
            </x-guest-layout>
        </div>
    </div>
</body>