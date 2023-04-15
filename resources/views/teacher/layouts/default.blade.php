<!DOCTYPE html>
<html lang="en">

<head>
@include('teacher.includes.head')
</head>

<body>

  @include('teacher.includes.header')

  @include('teacher.includes.sidebar')

  @yield('content')

  @include('teacher.includes.footer')

  @include('teacher.includes.script')

</body>

</html>
