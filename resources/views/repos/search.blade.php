<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<body>
<div class="container mt-5">
    <h1>GitHub Repository Search</h1>
    <form action="{{ route('search') }}" method="GET">
        <div class="mb-3">
            <input type="text" name="search_query" class="form-control" placeholder="Search for repositories">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
</body>

</html>
