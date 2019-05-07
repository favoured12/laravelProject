<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/animate.css') }}" rel="stylesheet">
     <link href="{{ asset('css1/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/bootstrap-reboot.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css1/bootstrap.css.map') }}" rel="stylesheet"> --}}
    <style> 
      a:hover {
          text-decoration-style: none;
      }
    </style>
</head>
<body>
        <header role="banner">
                <div class="top-bar">
                  <div class="container">
                    <div class="row">
                      <div class="col-9 social">
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-youtube-play"></span></a>
                      </div>
                      <div class="col-3 search-top">
                        <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                        <form action="#" class="search-top-form">
                          <span class="icon fa fa-search"></span>
                          <input type="text" id="s" placeholder="Type keyword to search...">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="container logo-wrap">
                  <div class="row pt-5">
                    <div class="col-12 text-center">
                      <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                    <h1 class="site-logo"><a href="index.html">{{ config('app.name', 'Laravel') }}</a></h1>
                    </div>
                  </div>
                </div>
                
                {{-- <nav class="navbar navbar-expand-md  navbar-light bg-light">
                  <div class="container">
                    
                   
                    <div class="collapse navbar-collapse" id="navbarMenu">
                      <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                          <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Business</a>
                        </li>
                        <li class="nav-item dropdown">
                          
        
                        </li>
        
                        <li class="nav-item dropdown">
                          
        
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                </nav> --}}

                @include('inc.navbar')
              </header>
        <div  class="container">
            <br /><br />
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    @yield('content1')
                </div>
            </div>
        </div>
        <div  class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('inc.messages')
                        @yield('content')
                    </div>
                </div>
        </div>
        <div class="container">
            <br /><br /><br><br>
        <footer class="site-footer">
            <div class="container">
              <div class="row mb-5">
                <div class="col-md-4">
                  <h3>About Us</h3>
                  <p class="mb-4">
                    <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                  </p>
    
                  <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
                </div>
                <div class="col-md-6 ml-auto">
                  <div class="row">
                    <div class="col-md-7">
                      <h3>Latest Post</h3>
                      <div class="post-entry-sidebar">
                        <ul>
                          <li>
                            <a href="">
                              <img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
                              <div class="text">
                                <h4>How to Find the Video Games of Your Youth</h4>
                                <div class="post-meta">
                                  <span class="mr-2">March 15, 2018 </span> •
                                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
                              <div class="text">
                                <h4>How to Find the Video Games of Your Youth</h4>
                                <div class="post-meta">
                                  <span class="mr-2">March 15, 2018 </span> •
                                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="">
                              <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                              <div class="text">
                                <h4>How to Find the Video Games of Your Youth</h4>
                                <div class="post-meta">
                                  <span class="mr-2">March 15, 2018 </span> •
                                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-1"></div>
                    
                    <div class="col-md-4">
    
                      <div class="mb-5">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled">
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Travel</a></li>
                          <li><a href="#">Adventure</a></li>
                          <li><a href="#">Courses</a></li>
                          <li><a href="#">Categories</a></li>
                        </ul>
                      </div>
                      
                      <div class="mb-5">
                        <h3>Social</h3>
                        <ul class="list-unstyled footer-social">
                          <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                          <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                          <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                          <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                          <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                          <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <p class="small">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright © <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>2019 All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                </div>
              </div>
            </div>
          </footer> 
        </div>

        <!-- Scripts -->

        <script src="{{ asset('js1/jquery-3.2.1.min.js') }}" ></script>   
        <script src="{{ asset('js1/jquery-migrate-3.0.0.js') }}" ></script>
        <script src="{{ asset('js1/popper.min.js') }}" ></script>
         <script src="{{ asset('js1/bootstrap.min.js') }}" ></script>
         <script src="{{ asset('js1/owl.carousel.min.js') }}" ></script>
        <script src="{{ asset('js1/jquery.waypoints.min.js') }}" ></script>
        <script src="{{ asset('js1/jquery.stellar.min.js') }}" ></script>
        
        <script src="{{ asset('js1/main.js') }}" ></script>
        <script src="{{ asset('js/app.js') }}" ></script>

        
        
        <script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
      </div>
    </div>
</body>
</html>
