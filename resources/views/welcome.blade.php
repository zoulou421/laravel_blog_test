<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notre blog</title>
</head>
<body>


@foreach($articles as $article)
<li><a href="{{$article->id}}">{{$article->title}}</a></li>

@endforeach
</body>
</html>