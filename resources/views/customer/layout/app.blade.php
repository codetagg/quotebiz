<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Quotebiz">
    <meta name="author" content="Quotebiz">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="Quotebiz">
   
    <title>Quotebiz - @yield('title')</title>
  
    @include('customer.includes.head-css')

    @yield('styling')
</head>

<body>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
        @include('customer.includes.sidebar')
        <!-- wrap @s -->
        <div class="nk-wrap ">
        @include('customer.includes.mainheader')
        <!-- Main Content-->
        @yield('content')

        <!-- End Page -->
        @include('customer.includes.footer')
    </div>
     <!-- wrap @e -->
</div>
    @include('customer.includes.modal')
</div>

    @include('customer.includes.footer-script')
    @yield('script')
</body>

</html>
