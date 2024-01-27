<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
    @include('includes.spinner')

@include('includes.navbar') 
@include('includes.header')
       
    @yield('content')
       
    @include('includes.footer')
    @include('includes.js')
</body>

</html>