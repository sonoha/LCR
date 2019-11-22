@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $posts)
        <a href="http://localhost/detail/{{$posts->id}}" class="text-decoration-none text-secondary">
            <div class="col-12 my-2 py-2 bg-white shadow-sm rounded">
                <div class="col-5 mb-1 bg-info rounded-pill" style="max-width: 200px;">
                    <span class="text-white">{{ $posts->name }}</span>
                </div>
                <div>
                    <span>{{ $posts->content }}</span>
                </div>
                @isset($posts->snippet)
                <pre class="m-2 border border-info rounded"><code>{{ $posts->snippet }}</code></pre>
                @endisset
                <div class="text-right">
                    <span>{{ $posts->posted_at }}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection