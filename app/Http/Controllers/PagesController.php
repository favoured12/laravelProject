<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel!';
        $user = User::all()->sortBy('created_at');
        $recentPosts  = Post::all()->sortBy('created_at');
        $firstThreeusers = collect([$user->pop(), $user->pop(), $user->pop()]);
        $firstThree = collect([$recentPosts->pop(), $recentPosts->pop(), $recentPosts->pop()]);

        return view('pages.index', ['posts'=> $firstThree, 'title'=> $title, 'users'=>$firstThreeusers]);
    }

    public function about(){
        $title = 'About Us';
        $recentPosts  = Post::all()->sortBy('created_at');
  
        $firstThree = collect([$recentPosts->pop(), $recentPosts->pop(), $recentPosts->pop()]);
        return view('pages.about', ['title'=>$title, 'posts'=>$firstThree]);
    }

    public function services(){
    
        $data = array(
            'title'=> 'Our Services',
            'services' => ['web design', 'Programming', 'Mobile App Development']
        );
        return view('pages.services')->with($data);
    }

    public function show($id)
    {
        $posts = Post::find($id);
        //return view('posts.show')->with('post', $post);
    }

}
