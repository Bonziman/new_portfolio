
    <h1>Edit Project</h1>

    <form method="POST" action="{{ route('admin.update', $project->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $project->title }}" required>

        <label for="slogan">Slogan:</label>
        <input type="text" name="slogan" value="{{ $project->slogan }}" required>

        <label for="date">Date:</label>
        <input type="date" name="date" value="{{ $project->date }}" required>

        <label for="client">Client:</label>
        <input type="text" name="client" value="{{ $project->client }}" required>

        <label for="description">Description:</label>
        <textarea name="description" rows="4" required>{{ $project->description }}</textarea>

        <label for="second_description">Description 2:</label>
        <textarea name="second_description" rows="4" required>{{ $project->second_description }}</textarea>

        <label for="link">Link:</label>
        <input type="url" name="link" value="{{ $project->link }}" required>

        <label for="link_puesdo">link puesdo:</label>
        <input type="text" name="link_puesdo" value="{{ $project->link_puesdo }}">

        <label for="role">Role:</label>
     <input type="text" name="role" value="{{ $project->role }}" required>

        <label for="images">Images (multiple):</label>
        <input type="file" name="images[]" accept="image/*" multiple>

        <button type="submit">Update Project</button>
    </form>

