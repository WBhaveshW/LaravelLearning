<!-- resources/views/layouts/dummy_app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  @include('layouts.dummy_app_header')
</head>

<body>
  @yield('content')
</body>

</html>