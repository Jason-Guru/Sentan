<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sentan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/libs.css')}}">
    </head>
    <body>
    <div id="app">
      <section class="hero is-info is-medium is-bold">
          <div class="hero-head">
            <nav class="navbar">
              <div class="container">
                <div class="navbar-brand">
                  <a class="navbar-item">
                    <img src="{{asset('/images/logonew.png')}}" alt="Logo">
                  </a>
                  <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                {{-- @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif --}}
                <div id="navbarMenuHeroB" class="navbar-menu">
                  <div class="navbar-end">
                    <span class="navbar-item">
                      <a class="button is-info is-inverted">
                        <span class="icon">
                          <i class="fas fa-user-tie"></i>
                        </span>
                        <span>Login/Register as job seekers</span>
                      </a>
                    </span>
                    <span class="navbar-item">
                      <a class="button is-info is-inverted">
                        <span class="icon">
                          <i class="fas  fa-building"></i>
                        </span>
                        <span>Employer's Zone</span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        
          <div class="hero-body">
            <div class="container has-text-centered">
              <h1 class="title">
                Manipur's Ultimate Online Job Portal
              </h1>
              <p>
                This job portal is totally free. Made with the intention to eliminate unemployment in Manipur, by connecting the employer with the job seeker.
              </p>
              <div style="margin-top:10px;">
                  <a class="button is-warning"><span class="icon">
                      <i class="fas fa-paper-plane"></i>
                    </span><span>Post Jobs</span></a>
                  <a class="button is-warning"><span class="icon">
                      <i class="fas  fa-search"></i>
                    </span><span>Find Jobs</span></a>
              </div>
            </div>
          </div>
        </section>
        <div class=" has-background-warning" id="optin">
          <div class="container">
          <div class="columns is-vcentered">
            <div class="column is-3 is-offset-4 has-text-centered-mobile has-text-right-tablet"><p><strong>Subscribe! to Latest job Alerts</strong></p></div>
            <div class="column is-2 has-text-centered-mobile"><a href="" class="button is-info">Subscribe</a></div>
          </div>
        </div>
          
          
        </div>
        <section class="section">
          <div class="container">
            <div class="columns">
              <div class="column is-3">
                <div class="panel">
                  <p class="panel-heading has-background-info has-text-light">Category Filter</p>
                  
                  <div class="panel-block">
                    <p class="control has-icons-left">
                      <input class="input is-small" type="text" placeholder="search">
                      <span class="icon is-small is-left">
                        <i class="fas fa-search" aria-hidden="true"></i>
                      </span>
                    </p>
                  </div>
                  <div class="panel-tabs">
                      <a class="is-active">all</a>
                      <a>popular</a>
                      <a>featured</a>
                  </div>
                  <a class="panel-block is-active">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    driver
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    developer
                  </a>
                </div>

              </div>
              <div class="column">
                <p class="title is-4">Recent Hot Jobs</p>
                <p class="subtitle">List of all recent jobs in Manipur</p>
                  <article class="media">
                    <figure class="media-left">
                      <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                      </p>
                    </figure>
                    <div class="media-content">
                      <div class="content">
                        <p>
                          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                          <br>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                        </p>
                      </div>
                      <nav class="level is-mobile">
                        <div class="level-left">
                          <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-reply"></i></span>
                          </a>
                          <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                          </a>
                          <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-heart"></i></span>
                          </a>
                        </div>
                      </nav>
                    </div>
                    <div class="media-right">
                      <button class="delete"></button>
                    </div>
                  </article>

                  <article class="media">
                      <figure class="media-left">
                        <p class="image is-64x64">
                          <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                      </figure>
                      <div class="media-content">
                        <div class="content">
                          <p>
                            <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                          </p>
                        </div>
                        <nav class="level is-mobile">
                          <div class="level-left">
                            <a class="level-item">
                              <span class="icon is-small"><i class="fas fa-reply"></i></span>
                            </a>
                            <a class="level-item">
                              <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                            </a>
                            <a class="level-item">
                              <span class="icon is-small"><i class="fas fa-heart"></i></span>
                            </a>
                          </div>
                        </nav>
                      </div>
                      <div class="media-right">
                        <button class="delete"></button>
                      </div>
                    </article>
              </div>
              <div class="column is-3">
                <p class="title is-4">Sentan Loushing</p>
                <p class="subtitle">Learn to make money</p>
              </div>
            </div>
          </div>
        </section>
        <section class="hero is-dark">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                  “There is no passion to be found playing small—in settling for a life that is less than the one you are capable of living.” 
              </h1>
              <h2 class="subtitle">
                  <em>—Nelson Mandela</em>
              </h2>
            </div>
          </div>
        </section>
        <footer class="footer has-background-grey-lighter">
          <div class="container">
            <div class="content has-text-centered">
              <p>
                  <strong>Sentan</strong> was born from a passion to deliver easy &amp; cost-effective job solution for private &amp; government jobs sector in Manipur. Our mission is to bridge the gap between job seekers &amp; employers by connecting skill with opportunity. All text &amp; design is copyright © 2017 All Rights Reserved. Sentan™ &amp; Logo are registered trademark of OxMonk Professionals.
              </p>
            </div>
          </div>
        </footer>
          
      </div>
        <script src="{{asset('js/libs.js')}}"></script>
    </body>
</html>
