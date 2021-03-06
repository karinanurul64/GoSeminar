<?php
        use App\Category;
        $headerCategory = Category::all();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('asset/logo.png') }}" alt="GoSeminar" height="60px" width="auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
               
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{ __('About Us') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('Event') }}
                        </a>

                        @guest
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($headerCategory as $category)
                                <a class="dropdown-item" href="/category/{{$category->id}}" value={{ $category->id }}>{{$category->CategoryName}}</a>
                                @endforeach
                            </div>
                        @endguest

                        @can('IsUser')
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($headerCategory as $category)
                            <a class="dropdown-item" href="/category/{{$category->id}}" value={{ $category->id }}>{{$category->CategoryName}}</a>
                            @endforeach
                        </div>
                        
                        @elsecan('IsPenyelenggara')
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/seminar/create">
                                    {{ __('Register your Seminar & Workshop') }}
                                </a>
                                <a class="dropdown-item" href="/seminar/registeredlists/{{Auth::user()->id}}">
                                    {{ __('List Seminar & Workshop') }}
                                </a>
                            </div>
                        @endcan
                        
                    </li>
                    @auth
                        @if(Auth::user()->role=='user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('membership') }}">{{ __('Membership') }}</a>
                        </li>
                        @endif
                    @endauth
                    
                    @guest  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
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
                            @auth
                                @if(Auth::user()->role=='user')
                                <a href="/myaccount" class="dropdown-item">{{ __('My Account') }}</a> 
                                @endif
                            @endauth

                            <a class="dropdown-item" href="{{ route('logout') }}"
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
    </div>
</nav>