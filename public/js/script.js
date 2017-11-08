$(document).ready(function() {
    $('#video-url').hide();
    $('#image-file').hide();
    $('#post-type').change(function () {
        var post_type = $('#post-type').val();
        console.log(post_type);
        if (post_type == 'text'){
            $('#video-url').hide();
            $('#image-file').hide();
            $('#text').show();
        }
        if (post_type == 'video'){
            $('#text').hide();
            $('#image-file').hide();
            $('#video-url').show();
        }
        if (post_type == 'picture'){
            $('#text').hide();
            $('#video-url').hide();
            $('#image-file').show();
        }

    });
});
