<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
          <div>
            <p>{{ $users->name }}</p>
          </div>
          <div>
            <p>{{ $posts->user_id }}</p>
          </div>
          <div>
            <p>{{ $posts->content }}</p>
          </div>
          <div>
            <p>{{ $posts->snippet }}</p>
          </div>
        </div>
          @foreach($comments as $comments)
            <div>
              <div>
                <p>{{ $comments->name }}</p>
              </div>
              <div>
                <p>{{ $comments->user_id }}</p>
              </div>
              <div>
                <p>{{ $comments->content }}</p>
              </div>
              <div>
                <p>{{ $comments->snippet }}</p>
              </div>
            </div>
          @endforeach

          @php
            $action = 'detail/'.$posts->post_id;
          @endphp

          @include('post', ['action' => $action])
    </body>
</html>
