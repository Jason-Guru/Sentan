<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/libs.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <section class="hero is-info is-large" id="app2">
                    <div class="hero-head">
                      <nav class="navbar">
                        <div class="container">
                          <div class="navbar-brand">
                            <a class="navbar-item">
                              <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                          </div>
                          <div id="navbarMenuHeroB" class="navbar-menu">
                            <div class="navbar-end">
                              <a class="navbar-item is-active">
                                @{{title}}
                              </a>
                              <a class="navbar-item">
                                Examples
                              </a>
                              <a class="navbar-item">
                                Documentation
                              </a>
                              <span class="navbar-item">
                                <a class="button is-info is-inverted">
                                  <span class="icon">
                                    <i class="fab fa-github"></i>
                                  </span>
                                  <span>Download</span>
                                </a>
                              </span>
                            </div>
                          </div>
                        </div>
                      </nav>
                    </div>
                  
                    <div class="hero-body">
                      <div class="container has-text-centered">
                        <p class="title">
                          Title
                        </p>
                        <p class="subtitle">
                          Subtitle
                        </p>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <nav class="tabs is-boxed is-fullwidth">
                        <div class="container">
                          <ul>
                            <li class="is-active">
                              <a>Overview</a>
                            </li>
                            <li>
                              <a>Modifiers</a>
                            </li>
                            <li>
                              <a>Grid</a>
                            </li>
                            <li>
                              <a>Elements</a>
                            </li>
                            <li>
                              <a>Components</a>
                            </li>
                            <li>
                              <a>Layout</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </section>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <div class="row">
                    <div class="col-md-6"></div>
                        <div class="col-md-6">
                                Laravel
                        </div>
                    </div>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script src="{{asset('js/libs.js')}}"></script>
    </body>
</html>
