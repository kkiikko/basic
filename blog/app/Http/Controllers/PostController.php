<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
 public function index(Post $post)
{
     return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
}
public function show(Post $post)
{
    return view('posts/show')->with(['post'=>$post]);
}
}