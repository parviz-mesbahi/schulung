<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/md-editor-v3/dist/style.css">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/md-editor-v3"></script>--}}

{{--    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>--}}

{{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>--}}
{{--    <script>--}}
{{--        tinymce.init({--}}
{{--            selector: '#content'--}}
{{--        });--}}
{{--    </script>--}}
</head>

<body class="bg-gray-100">

<main class="py-10">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('textarea'))

        // toolbar: ['bold', 'italic', 'bulletedList', 'numberedList', 'link'],
        // allowedContent: true, // Allow all content, including lists
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error during initialization of the editor', error);
        });
</script>

{{--<script>--}}
{{--    // Initialize the Markdown Editor--}}
{{--    const editor = new MdEditor({--}}
{{--        el: document.getElementById('mk-editor-container'),--}}
{{--        value: document.getElementById('mk-editor').value,--}}
{{--        onChange(value) {--}}
{{--            document.getElementById('mk-editor').value = value;--}}
{{--        },--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
