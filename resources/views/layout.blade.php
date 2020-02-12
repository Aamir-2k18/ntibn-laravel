<html lang="en">

@include('inc.head')

<body>
    @include('inc.header')
    <main id="main">
        @yield('content')
        @include('inc.clients')
        @include('inc.contact')
    </main>
    @include('inc.footer')
</body>

</html>
