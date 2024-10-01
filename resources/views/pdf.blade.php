<!DOCTYPE html>
<html>
<head>
    <title>PDF Example</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-teal-800 text-3xl font-semibold">Hello, {{ $name }}!</h1>
    <p>This is an example PDF generated using Spatie's laravel-pdf package.</p>
</body>
</html>
