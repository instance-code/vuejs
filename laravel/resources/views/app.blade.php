<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <exercise></exercise>
    </div>

    <script>
        window.config = '{!! json_encode(config('setting')) !!}';
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
