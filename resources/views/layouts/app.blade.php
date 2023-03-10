<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Importar Excel</title>
</head>
<body>
    <div class="container">
        <nav class="mt-4 navbar bg-primary navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-bg-primary" href="#">ImportExcel</a>
            </div>
        </nav>
                
        @if (session()->has('success') )
            <div class='alert alert-success'>{{ session()->get('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>