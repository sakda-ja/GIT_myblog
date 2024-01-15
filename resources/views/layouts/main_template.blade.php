<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('includes.head')
</head>
<body>


    @include('includes.menu')

        <div style="padding-top:60px">
            @yield('content')
        </div>

    @include('includes.foot')


</body>
</html>
