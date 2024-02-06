<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="AirAstana - Aktau Airport">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Nurmukhamed">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <style>
        html, body {
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
