@extends('layouts.app')
@section('content')

        <div class="col-12 mt-n3 mb-4 p-4 bg-white shadow rounded">
            <div class="col-5 mb-1 bg-info rounded-pill" style="max-width: 200px;">
                <span class="text-white">{{ $users->name }}</span>
                <span class="text-muted">#{{ $posts->user_id }}</span>
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
    <div class="container">
        <span>この投稿に対する返信</span>
        @foreach($comments as $comments)
            <div class="col-12 my-2 py-2 bg-white shadow-sm rounded">
                <div class="col-5 mb-1 bg-info rounded-pill" style="max-width: 200px;">
                    <span class="text-white">{{ $comments->name }}</span>
                    <span class="text-muted">#{{ $comments->user_id }}</span>
                </div>
                <div>
                    <span>{{ $comments->content }}</span>
                </div>
                @isset($comments->snippet)
                    <pre class="m-2 border border-info rounded"><code>{{ $comments->snippet }}</code></pre>
                @endisset
                <div class="text-right">
                    <span>{{ $comments->commented_at }}</span>
                </div>
            </div>
        @endforeach

        @php
            $action = 'detail/'.$posts->post_id;
        @endphp

        @include('post', ['action' => $action])
    </div>
@endsection