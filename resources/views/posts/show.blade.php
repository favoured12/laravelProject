@extends('layouts.app')
    <style>
        .display-comment .display-comment{
            margin-left: 40px;
        }
    </style>
@section('content')

<section class="site-section py-lg">
        <div class="container">
          
          <div class="row blog-entries element-animate fadeInUp element-animated">
  
            <div class="col-md-12 col-lg-8 main-content">
              <img src="/first/storage/app/public/cover_images/{{$post->cover_image}}" alt="Image" class="img-fluid mb-5">
               <div class="post-meta">
                          <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib" class="mr-2">{{$post->user->name}}</span>•
                          <span class="mr-2">{{$post->created_at}}</span> •
                          <span class="ml-2"><span class="fa fa-comments"></span>{{ $post->comments->count()}}</span>
                        </div>
                    <h1 class="mb-4">{{$post->title}}</h1>
                    <a class="category mb-5" >{{$post->category}}</a>
              </div>
          </div>
              <div>
                  {!!$post->body!!}
              </div>
              <hr>
              <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
              <hr />
              <h4>Display Comments</h4>
              @include('partials._comment_replies', ['comments'=> $post -> comments, 'post_id' => $post -> id])
              <hr />
              <h4>
                  Add comment
              </h4>
              <form method="POST" action="{{route('comment.add')}}">
                  @csrf
                  <div class="form-group">
                      <input type="text" name="comment_body" class="form-control" />
                      <input type="hidden" name="post_id" value="{{$post->id}}" />
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-warning" value="Add Comment" />
                  </div>
              </form>
  
              @if(!Auth::guest())
                  @if(Auth::user()->id == $post->user_id)
                      <a href="/first/public/posts/{{$post->id}}/edit" class = "btn btn-primary">Edit</a>
  
                      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                          {{Form::hidden('_method','DELETE')}}
                          {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                      {!!Form::close()!!}
                  @endif
              @endif
  </div>
  
            <!-- END main-content -->
  
            
      </section>

           
    
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

@endsection