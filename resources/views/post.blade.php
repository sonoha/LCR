<form action="/post/{{$action}}" method="post" class="col-12 my-2 py-2 bg-info shadow-sm rounded">
    {{csrf_field()}}
    <input type="text" name="content" placeholder="本文" required class="col-12 my-2">
    <input type="text" name="snippet" placeholder="コード" class="col-12 my-2 bg-light">
    <input type="submit" value="投稿" class="col-12 my-2 text-white bg-primary shadow-sm btn">
</form>