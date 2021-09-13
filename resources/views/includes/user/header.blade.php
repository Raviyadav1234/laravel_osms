<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  {{title}}
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-secondary">
  <a href="{{url('/dashboard')}}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>


<div class="collapse navbar-collapse"  id="myMenu">             
              
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav custom-nav ml-auto" >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
             
            </div>

  
 </nav>

 