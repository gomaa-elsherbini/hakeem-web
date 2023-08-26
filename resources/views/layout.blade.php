<!DOCTYPE html>

<html lang="">

<head>
    <title>@yield('title')</title>
    @include('head')
</head>

<body>
@yield('login')
<!-- welcome  :) -->
<!-- start loading -->

<!-- end loading -->
<!-- welcome -->

<div class="body_page  d-flex flex-column justify-content-between">

    <!-- start header =====
    ============ -->
    @include('header')
    <!-- end header =====
        ============== -->

    <!-- start app ====
    ===============================
    ================================
    ============== --
    -->
    <main id="app">

        <!-- start article-index  ===
        ========= -->
        @yield('content')
        <!-- end  article-index  ===
            ========= -->

    </main>

    <!-- end app ====
    =============================
    ==================================
    ==================== -->

    <!-- start footer ==============================
    ============================== -->
    @include('footer')
    <!-- end footer=========================
        ===========================  -->

    <!-- start menu  ===
    ======== -->
    @include('menu')
    <!-- end menu  ===
        ======== -->

    <!-- start menu responsive ===
    ======== -->
    @include('menu-responsive')
    <!-- end menu responsive ===
        ======== -->

</div>

@include('scripts.scripts')
</body>
<!-- end-body
=================== -->

</html>
