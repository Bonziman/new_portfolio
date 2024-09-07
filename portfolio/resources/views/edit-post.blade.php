<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
</head>
<body>
<!-- edit.blade.php -->
<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $post->title }}" required>

    <label for="author">Author:</label>
    <input type="text" name="author" value="{{ $post->author }}" required>

    <label for="read_time">Read Time:</label>
    <input type="text" name="read_time" value="{{ $post->read_time }}" required>

    <label for="sub_title">SubTitle:</label>
    <input type="text" name="sub_title" value="{{ $post->sub_title }}" required>

    <label for="text1">Content:</label>
    <textarea name="text1" id="text1" required>{!! $post->text1 !!}</textarea>

    <!-- Include other fields as needed -->

    <button type="submit">Update Post</button>
</form>

<script>
    tinymce.init({
        selector: '#text1',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image'
    });
</script>
</body>
</html>
