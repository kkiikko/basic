<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

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
public function create()
{
    return view('posts/create');
}
// 今回はユーザの入力データをDBのpostsテーブルにアクセスし保存する必要があるため、空のPostインスタンスを利用、
// $request['post']を利用すると、postをキーにもつリクエストパラメータを取得することができます。
// $requestのキーは、HTMLのFormタグ内で定義した各入力項目のname属性と一致
public function store( Post $post, PostRequest $reqest)
{
    $input = $reqest['post'];
    $post->fill($input)->save();
    return redirect('/posts/' .$post->id);
}
public function edit(post $post)
{
    return view('posts/edit')->with(['post'=>$post]);
}
public function update( Post $post, PostRequest $reqest)
{
    $input = $reqest['post'];
    $post->fill($input)->save();
    return redirect('/posts/' .$post->id);
}
}
    