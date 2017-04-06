<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Narwhals</title>
</head>
<body>


 @section('sidebar')
            This is the master sidebar.
 @show

<div class="container">
    @yield('content')
</div>

<div  >
@yield('content')
</div>

<div>
@yield('footer')
</div>

<div>
@yield('scripts')
</div>
     
</body>
</html>