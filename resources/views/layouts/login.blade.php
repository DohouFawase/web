<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  
    @include('container.backend.head')
</head>
<body>
  

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

                @yield('content')

        </div>
    </div>

    @include('container.backend.foot')
 

</body>
</html>