

<!DOCTYPE html>
<html>
    <head>
        @include('admin.includes.header')
    </head>

    <body>
        
        @include('admin.includes.sidebar')

        <section class="body">
            @yield('content')

        </section>

    </body>
</html>