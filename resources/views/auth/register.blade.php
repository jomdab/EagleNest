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
        .rectangle .register{
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
        .rectangle .register .logo{
            display: flex;
            align-items:center;
            margin-top: 30px;
            margin-left: 10px;
            margin-bottom: 10px;
            justify-content: center;
        }
        .rectangle .register .txt{
            font-size: 30px;
            font-weight: bold;
            overflow: hidden;
            text-align: center;
            justify-content: center;
        }
        .rectangle .register .email{
            width: 350px;
        }
        .rectangle .register .password{
            width: 350px;
        }
        .rectangle .register .option{
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
            height:100%;
            width: 300px;
            justify-content:center;
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
        <div class = "register">
            <x-guest-layout>
                    <div class="logo">
                        <img class="img" src="{{asset('/logo/logo_long.png')}}">
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-jet-button class="ml-4">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
            </x-guest-layout>
        </div>
    </div>
</body>

