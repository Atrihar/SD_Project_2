<!DOCTYPE html>
<html lang="en">

<head>
@include('student.includes.head')
</head>

<body>

  @include('student.includes.header')

  @include('student.includes.sidebar')

  @yield('content')

  @include('student.includes.footer')

  @include('student.includes.script')

</body>

</html>
