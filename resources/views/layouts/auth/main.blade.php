<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />

    <!-- Css Padrão -->
    <link rel="stylesheet" href="/css/global.css"/>
    <link rel="stylesheet" href="/css/AuthPagsCss/auth.css"/>
  
</head>

<body>
    @csrf
    @yield('content')
</body>
</html>