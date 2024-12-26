<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Template</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tiny.cloud/1/c8e36migxumfdqrsgfvulr80jb7aoe7vv3px66184lnqd03h/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist codesample code',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat | codesample code',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
        });
    </script>

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
    tinymce.init({ selector:'textarea' });
</script>
</body>

</html>
