<!DOCTYPE html>
<html>
<head>
    <title>Laravel 入门- @yield('title','Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>

</body>
</html>
