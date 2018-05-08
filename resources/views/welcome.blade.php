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
                    <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
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
                        <span>Login/Register for job seekers</span>
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
                      <i class="fas  fa-building"></i>
                    </span><span>Post Jobs</span></a>
                  <a class="button is-warning"><span class="icon">
                      <i class="fas  fa-building"></i>
                    </span><span>Find Jobs</span></a>
              </div>
            </div>
          </div>
        
          {{-- <div class="hero-foot">
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
          </div> --}}
        </section>
        <section class="section">
          <div class="container">
            <div class="columns">
              <div class="column is-one-third">

                <div class="tile is-ancestor">
                  <div class="tile is-12">
                    <div class="tile is-parent is-vertical">
                      <article class="tile is-child notification">
                        <p class="title">Filter</p>
                        <p class="subtitle">Search by Category</p>
                      </article>
                    </div>
                  </div>
                </div>

              </div>
              <div class="column">
                  <article class="message is-dark">
                      <div class="message-header">
                        <p>Reccent Hot Jobs</p>
                      </div>
                      <div class="message-body">
                        <div class="content">
                          <p class="title">Job Title</p>
                          <p class="subtitle">Job Location</p>
                          <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                          </p>
                          <a href="" class="button is-success">Apply Now</a>
                        </div>
                        <hr>
                        <div class="content">
                            <p class="title">Job Title</p>
                            <p class="subtitle">Job Location</p>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                            </p>
                            <a href="" class="button is-success">Apply Now</a>
                          </div>
                      </div>
                    </article>
              </div>
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
