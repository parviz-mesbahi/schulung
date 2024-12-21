<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-100 text-gray-800">
<nav class="bg-blue-400">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <a href="#" class="text-white text-lg font-bold">MyWebsite</a>
        <!-- Menu Links -->
        <ul class="flex space-x-6">
            <li><a href="#" class="text-white hover:text-gray-200">Home</a></li>
            <li><a href="#" class="text-white hover:text-gray-200">About Us</a></li>
            <li><a href="#" class="text-white hover:text-gray-200">Contact</a></li>
        </ul>
    </div>
</nav>
<div class="text-center mt-10">
    <h1 class="text-4xl font-bold text-blue-500">Hello, Tailwind CSS!</h1>
    <p class="mt-4">This is a simple example using a downloaded Tailwind file.</p>
</div>
</body>
</html>
