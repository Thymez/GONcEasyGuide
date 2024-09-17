<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create E-Voucher</title>
</head>
<body>
    <h1>Create a New E-Voucher</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('e-voucher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" required>
        </div>

        <button type="submit">Create E-Voucher</button>
    </form>
</body>
</html>