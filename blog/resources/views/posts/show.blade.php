<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{$post->titile}}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>  
        </div>
        <p class="edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
        
        <div class="footer">
            <a href ="/">戻る<a>  
        </div>    
    </body>
    </html>