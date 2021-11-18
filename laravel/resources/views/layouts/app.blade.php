<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="appp">
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
<script src="">
    $(function() {
        $('.js-check-all').on('change', function(event) {
            var group = $(event.target).data('check-all');
            var dataCheckGroup = '[data-check-all="' + group + '"]';

            if ($(event.target).prop('checked')) {
                $('.js-check-all-target')
                    .filter(dataCheckGroup)
                    .find('input[type="checkbox"]:not(:disabled)')
                    .prop('checked', true);

                return;
            }

            $('.js-check-all-target')
                .filter(dataCheckGroup)
                .find('input[type="checkbox"]:not(:disabled)')
                .prop('checked', false);
        });
    });
</script>