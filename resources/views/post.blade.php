<form action="/post/{{$action}}" method="post" class="col-12 my-2 py-2 bg-info shadow-sm rounded">
    {{csrf_field()}}
    <textarea name="content" id="content" placeholder="本文" required autofocus class="col-12 my-2"></textarea>
    <textarea name="snippet" id="snippet" placeholder="コード" class="col-12 text-light bg-dark"></textarea>
    <input type="submit" value="投稿" class="col-12 my-2 text-white bg-primary shadow-sm btn rounded-pill">
</form>