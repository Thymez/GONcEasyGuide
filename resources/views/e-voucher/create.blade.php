<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create E-Voucher</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

        <!-- Title and Description -->
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <!-- Section Input for Platforms -->
        <div id="platforms-section">
            <h3>Platforms</h3>
            <!-- Allow adding sections by number or clicking a button -->
            <label for="sectionCount">How many sections to add:</label>
            <input type="number" id="sectionCount" min="1" max="10" value="1">
            <button type="button" onclick="generateSections()">Generate Sections</button>

            <!-- Placeholder for dynamically added sections -->
            <div id="sections-container"></div>
        </div>

        <button type="submit">Create E-Voucher</button>
    </form>

    <script>
        function generateSections() {
            const container = document.getElementById('sections-container');
            container.innerHTML = ''; // Clear previous sections

            let sectionCount = document.getElementById('sectionCount').value;

            for (let i = 0; i < sectionCount; i++) {
                let sectionHTML = `
                <div class="section">
                    <h4>Section ${i + 1}</h4>
                    <div>
                        <label for="platforms[${i}][name]">Platform Name:</label>
                        <input type="text" name="platforms[${i}][name]" required>
                    </div>

                    <div>
                        <label for="platforms[${i}][title]">Title:</label>
                        <input type="text" name="platforms[${i}][title]" required>
                    </div>

                    <div>
                        <label for="platforms[${i}][description]">Description:</label>
                        <textarea name="platforms[${i}][description]" required></textarea>
                    </div>

                    <div>
                        <label for="platforms[${i}][image]">Image:</label>
                        <input type="file" name="platforms[${i}][image]" required>
                    </div>
                </div>`;
                
                container.innerHTML += sectionHTML;
            }
        }
    </script>
</body>
</html>
