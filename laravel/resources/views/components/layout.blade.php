<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>掲示板</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
    <script src="{{ url('js/script.js') }}"></script>
</body>
</html>
