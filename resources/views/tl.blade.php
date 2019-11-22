@extends('layouts.app')
@section('content')
<form>
<input type="button" value="更新" onClick="window.location.reload();">
</form>
    <div class="container">
        @include('post', ['action' => 'tl'])
        @foreach($posts as $posts)
        <a href="http://localhost/detail/{{$posts->post_id}}" class="text-decoration-none text-secondary">
            <div class="col-12 my-2 py-2 bg-white shadow-sm rounded">
                <div class="col-5 mb-1 bg-info rounded-pill" style="max-width: 200px;">
                    <span class="text-white">{{ $posts->name }}</span>
                    <span class="text-muted">#{{ $posts->user_id }}</span>
                </div>
                <div>
                    <span>{{ $posts->content }}</span>
                </div>
                @isset($posts->snippet)
                <pre class="m-2 border border-info rounded"><code>{{ $posts->snippet }}</code></pre>
                @endisset
                <div>
                    <span>
                        {{ $posts->count }}
                    </span>
                    <span>
                        返信
                    </span>
                </div>
                <div class="text-right">
                    <span>{{ $posts->posted_at }}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection