<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources\js\app.js'])

<body>
    <div class="judul text-center p-2 bg-warning fs-1 text-white">
        Giant Book Supplier
    </div>
    @include('layouts/navbar')

    <div class="container">
       @yield('content')
    </div>

   @include('layouts/footer')
</body>

</html>