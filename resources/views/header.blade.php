<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('lang.title') }}</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><figure class="logo-box"><a href="#"><img src="{{ asset('logo/logo-color.svg') }}" width="100px"></a></figure><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/')}}">{{ __('lang.reservation') }}</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/cennik')}}">{{ __('lang.pricelist') }}</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/faq')}}">{{ __('lang.faq') }}</a></li>
                            <li class="nav-item" role="presentation" ><a class="nav-link" href="{{url('/kontakt')}}">{{ __('lang.contact') }}</a></li>
                        </ul>
                        @guest
                        <form class="form-inline mr-auto" target="_self">
                        </form><a class="btn btn-light action-button" role="button" href="{{url('/register')}}">{{ __('lang.register') }}</a></div>
                        <div id="box">
                            <span id="button" class="navbar-text">{{ __('lang.loggin') }}</span>
                                <form method="POST" action="{{ route('login') }}" id="form">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?  ') }}
                                        </a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a style="padding-left: 10px;" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                            {{ ('Create account') }}
                                        </a>
                                    @endif

                                    <x-primary-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                        @endguest
                        @auth
                        @php
                        $id = Auth::user() -> id;
                        $userData = App\Models\User::find($id);
                        @endphp
                        <form class="form-inline mr-auto" target="_self">
                        </form><span class="welcome"><p id="welcome-name">{{ __('lang.welcome') }} {{$userData->name}}</p>
                        <a id="myAccount" class="nav-link" href="{{url('/account')}}">{{ __('lang.myaccount') }}</a></div>
                        @endauth
                        <form class="form-inline mr-auto" target="_self">
                        </form><div class="col-md-3">
                <select class="form-control Langchange">
                    <option value="pl" {{ session()->get('locale') == 'pl' ? 'selected' : '' }}>Polski</option> 
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>                   
                </select>
                    </div>      
                </div>
            </nav>
        </div>
    </div>
