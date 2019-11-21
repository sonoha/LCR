
@foreach($posts as $posts)
<div>
    <div>
        <p>{{ $posts->name }}</p>
    </div>
    <div>
        <p>{{ $posts->id }}</p>
    </div>
    <div>
        <p>{{ $posts->content }}</p>
    </div>
    <div>
        <p>{{ $posts->snippet }}</p>
    </div>
    <div>
        <p>{{ $posts->posted_at }}</p>
    </div>
</div>
@endforeach
