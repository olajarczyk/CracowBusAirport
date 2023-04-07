<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cracow Airport</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="nav-item" role="presentation" ><a class="nav-link" href="{{url('/contact')}}">{{ __('lang.contact') }}</a></li>
                        </ul>

                        @guest
                        <form class="form-inline mr-auto" target="_self">
                        </form><span class="navbar-text"><a href="{{url('/login')}}" class="login">{{ __('lang.loggin') }}</a></span><a class="btn btn-light action-button" role="button" href="{{url('/register')}}">{{ __('lang.register') }}</a></div>
                        @endguest
                        @auth
                        @php
                        $id = Auth::user() -> id;
                        $userData = App\Models\User::find($id);
                        @endphp
                        <form class="form-inline mr-auto" target="_self">
                        </form><span class="navbar-text login-text"><p>{{ __('lang.welcome') }} {{$userData->name}}</p></div>
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
