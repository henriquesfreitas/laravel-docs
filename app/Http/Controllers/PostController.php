<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    //PostRepository $postRepository realiza injeção de depedencia
    public function index(PostRepository $postRepository){

//        $posts = $postRepository->all();

//        $posts = Post::latest()->filter(\request(['month', 'year']))->get();

        $posts = $postRepository->scopeFilter(Post::latest(), \request(['month', 'year']))->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        $this->validate(\request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => \request('title'),
            'body' => \request('body'),
            'user_id' => auth()->user()->id
        ]);

//        outra maneira de salvar um registro
//        auth()->user()->publish(
//            new Post(\request(['title', 'body']))
//        );

        return redirect('/');

    }
}
