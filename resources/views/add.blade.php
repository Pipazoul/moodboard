<link href="/css/main.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">

<h1>Moodboard</h1>
<h2>Add a post</h2>
<form method="post">
    <select name="post_type" id="post-type">
        <option value="text">Text</option>
        <option value="picture">Picture</option>
        <option value="video">Video</option>
    </select>
    <br>
    <p>Title</p>
    <input type="text" name="title">
    <br><br>
    <textarea id="text" name="body"></textarea>
    <div id="video-url">
        <p>Youtube Url</p>
        <textarea name="video_url"></textarea>
    </div>
    <div id="image-file">
        <p>Image</p>
        <input type="file" name="image-file"/>
    </div>
    <br>
    <br>
    <input type="submit">
</form>