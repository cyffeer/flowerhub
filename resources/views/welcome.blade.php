<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowerhub</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Welcome to Flowerhub</h1>
    <p>Click the button below to see the flowers Users</p>
    <a href="/flowers" class="btn">See Flowers Users</a>
</body>
</html>