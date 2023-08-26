<!DOCTYPE html>

<html>

<head>
    <title>حكيم ويب</title>
    @include('head')
</head>

<body>

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
    {{--    <main id="app">--}}

    {{--        <!-- start article-index  ===--}}
    {{--        ========= -->--}}
    {{--        @include('main.article-index')--}}
    {{--        <!-- end  article-index  ===--}}
    {{--            ========= -->--}}

    {{--        <!-- start more-section === -->--}}
    {{--        @include('main.more-section')--}}
    {{--        <!-- end more-section === -->--}}

    {{--        <!-- start new-article-index === -->--}}
    {{--        @include('main.new-article-index')--}}
    {{--        <!-- end new-article-index === -->--}}

    {{--        <!-- start read-article-index === -->--}}
    {{--        @include('main.read-article-index')--}}
    {{--        <!-- end read-article-index === -->--}}

    {{--        <!-- start read-also-article-index === -->--}}
    {{--        @include('main.read-also-article-index')--}}
    {{--        <!-- end read-also-article-index === -->--}}

    {{--    </main>--}}

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
