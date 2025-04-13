<!DOCTYPE html>
<html lang="id">

<head>
    @include('layouts.head')
</head>

<body class="bg-gray-50">
    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>