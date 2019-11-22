<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>POST</title>
    </head>
    <body>
        <form action="/post/{{$action}}" method="post">
            {{csrf_field()}}
            <input type="text" name="content" value="本文">
            <input type="text" name="snippet" value="コード">
            <input type="submit" value="投稿">
        </form>
        
    </body>
</html>