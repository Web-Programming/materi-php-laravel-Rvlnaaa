<!DOCTYPE html>
<html>
<head>
    <title>Materi Laravel</title>
</head>
<body>
    @include('layout.header')

    <div class="container">
        @yield('content')

        @include('layout.header')
    </div>
</body>
</html>