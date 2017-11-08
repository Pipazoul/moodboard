<link href="/css/main.css" rel="stylesheet" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
<h1>Moodboard <a id="add-post" href="/add" <i class="fa fa-plus" aria-hidden="true"></i></a></h1>
<div id="posts">
    @foreach ($posts as $post)
        @if ($post->type == 'video')
    <iframe width="560" height="315" src="{{ $post->video_url }}" frameborder="0" allowfullscreen></iframe>
        @endif
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->created_at }}</p>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
</div>