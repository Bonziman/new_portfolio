<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#text1',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image'
        });
    </script>
</head>
<body>
<h2> Upload a new project </h2>
<form method="POST" action="{{ route('admin.upload') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="input-group">
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="slogan">Slogan:</label>
            <input type="text" name="slogan" required>
        </div>
    </div>
    <div class="input-group">
        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" required>
        </div>
        <div>
            <label for="client">Client:</label>
            <input type="text" name="client" required>
        </div> 
    </div>

    <div class="input-group">
    <label for="description">Description:</label>
    <textarea name="description" rows="4" required></textarea>

    <label for="second_description">Description 2:</label>
    <textarea name="second_description" rows="4"></textarea>
    </div>
    
    <div class="input-group">
    <label for="link">Link:</label>
    <input type="text" name="link">

    <label for="link_puesdo">link puesdo:</label>
    <input type="text" name="link_puesdo">
    </div>

    <div class="input-group">
    <label for="role">Role:</label>
    <input type="text" name="role" required>

    <label for="images">Images (multiple):</label>
    <input type="file" name="images[]" accept="image/*" multiple required>
    </div>
    <button type="submit">Upload Project</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h2> Projects </h2>
@if ($projects->isNotEmpty())
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Client</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->date }}</td>
                    <input type="hidden" name="id" value="{{ $project->id }}">
                    <td>
                        <a href="{{ route('edit', $project->id) }}">Edit</a>
                        <form method="POST" action="{{ route('admin.delete', $project->id) }}">
                        @csrf
                        @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
<h2>Upload new blog post </h2>
<!-- posts upload form -->
<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#text1',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
        images_upload_url: '/upload-image', // URL to your Laravel controller method handling image uploads
        images_upload_handler: function (blobInfo, success, failure) {
            var formData = new FormData();
            formData.append('image', blobInfo.blob(), blobInfo.filename());

            fetch('/upload-image', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(result => {
                success(result.location);
            })
            .catch(error => {
                failure('Image upload failed');
            });
        }
    });
</script>

<form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <label for="title">Title:</label>
    <input type="text" name="title" class="field" required>

    <label for="author">Author:</label>
    <input type="text" name="author" class="field" required>

    <label for="read_time">Read Time:</label>
    <input type="text" name="read_time" class="field" required>

    <label for="sub_title">SubTitle:</label>
    <input type="text" name="sub_title" class="field" required>

    <label for="text1">Text 1:</label>
    <textarea rows="4" name="text1"  id="text1" ></textarea>

    <button type="submit">Upload Post</button>
</form>



<h2>Posts</h2>
@if ($posts->isNotEmpty())
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->date }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}">Edit</a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this post and its associated images?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<style>
    /* Basic form styles */
    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    /* Set width for each input to display two inputs per line */
    .input-group {
        margin-bottom: 10px;
        display: flex;
    }

    .input[type="text"],
    .input[type="date"],
    .textarea {
        width: 50%; /* Adjusted width to fit two inputs on one line with some space */
        padding: 8px;
        box-sizing: border-box; /* Include padding and border in the width */
        vertical-align: top; /* Align inputs to the top */
    }

    .input-group::after .input{
        content: '';
        display: flex;
        clear: both;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: #337ab7;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    button {
        padding: 10px 20px;
        background-color: black;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #23527c;
    }

    /* Table styles */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Alerts */
    .alert {
        margin-bottom: 20px;
        padding: 15px;
        color: #fff;
        border-radius: 4px;
    }

    .alert-danger {
        background-color: #d9534f;
    }

    .alert-success {
        background-color: #5cb85c;
    
    }
    .field {
        width: 500px
    }
</style>
</body>
</html>
