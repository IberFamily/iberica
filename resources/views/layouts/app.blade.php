<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
            <div class="container-fluid">
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="navbar-brand pt-3" href="{{ route('home') }}">IBER</a>
                  </li>

              </ul>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link "  href="{{ route('home')}}">Početna</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('cart.index') }}">Korpa <i class="fas fa-shopping-cart "></i> <div class="badge  bg-danger">
                        @auth
                        {{ Cart::session(auth()->id())->getTotalQuantity() }}
                        @endauth
                        </div></a>
                  </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <div class="d-flex">
                        @guest
                        <li class="nav-item">
                            <a class="no-underline hover:underline nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="no-underline hover:underline nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a  class="nav-link"> <span>{{ Auth::user()->name }}</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                            class=" nav-link"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden nav-link">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                    </div>
                </ul>
              </div>

            </div>
          </nav>
          <div class="container">
                @yield('content')
          </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/89fb6a0c53.js" crossorigin="anonymous"></script>
</body>
</html>
