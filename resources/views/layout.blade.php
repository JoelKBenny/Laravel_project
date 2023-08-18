<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['/resources/css/app.css'])
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
        </nav>
    </header>
@yield("content")
</body>
</html>