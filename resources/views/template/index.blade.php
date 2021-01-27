<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('template.partials._head')
</head>
<body data-BaseURL="{{url('/')}}">
<!-- Preloader Start -->
@include('template.partials._preloader')
<!-- Preloader Start-->
<!-- header-->
@include('template.partials._header')
<!-- main -->
@include('template.partials._main')
<!-- footer -->
@include('template.partials._footer')

<!-- JS here -->

@include('template.partials._scripts')

</body>
</html>
