@extends('layouts.app')
@section('content1')

    <section class="site-section pt-5">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-6">
              <h2 class="mb-4">All Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row mb-5 mt-5">
  
                <div class="col-md-12">
                        @if (count($posts) > 0)
                        @foreach ($posts as $post)
                        <div class="post-entry-horzontal">
                                <a href="/first/public/posts/{{$post->id}}">
                                  <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(/first/storage/app/public/cover_images/{{$post->cover_image}});"></div>
                                  <span class="text">
                                    <div class="post-meta">
                                      <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib">{{$post->user->name}}</span>&bullet;
                                      <span class="mr-2"> {{$post->created_at}} </span> &bullet;
                                      
                                      <span class="ml-2"><span class="fa fa-comments"></span> {{ $post->comments->count()}} </span>
                                    </div>
                                    <h2>{{$post->title}}</h2>
                                    <div class="interaction">
                                    <a href="#" class="like">{{Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like ==1 ? 'You like this post':'Like':'Like'}}</a>
                                    <a href="#" class="like">{{Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like ==0 ? 'You dont like this post':'Dislike':'Dislike'}}</a>
                                    </div>
                                    
                                  </span>
                                  <a class="category mb-5" >{{$post->category}}</a>
                                </a>
                        </div>
                        @endforeach
                        {{$posts->links()}}
                        @else
                        <p>No posts found</p>
                        @endif
                </div>
            </div>
        </div>
    </section>

        <script src="{{asset('/first/public/js/like.js')}}"></script>
        <script type="text/javascript">
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route ('like') }}';
        </script>
@endsection