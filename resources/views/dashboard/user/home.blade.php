<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'حكيم ويب')</title>
    @include('head')
</head>

<body>

<!-- welcome  :) -->
<!-- start loading -->

<!-- end loading -->
<!-- welcome -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div>
                    <table class="table table-success">
                            <tr class="table-success">
                                <th>Action</th>
                                <th>Email</th>
                                <th>First Name</th>
                            </tr>
                            <tr class="table-success">
                                <td class="table-success"> <a href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('input-form').submit()">logout</a>
                                    <form action="{{route('user.logout')}}" id="input-form" method="post">@csrf</form></td>
                                <td class="table-success">{{Auth::user()->email}}</td>
                                <td class="table-success">{{Auth::user()->first_name}}</td>
                            </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
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
        @include('main.article-index')
        <!-- end  article-index  ===
            ========= -->

        <!-- start more-section === -->
        @include('main.more-section')
        <!-- end more-section === -->

        <!-- start new-article-index === -->
        @include('main.new-article-index')
        <!-- end new-article-index === -->

        <!-- start read-article-index === -->
        @include('main.read-article-index')
        <!-- end read-article-index === -->

        <!-- start read-also-article-index === -->
        @include('main.read-also-article-index')
        <!-- end read-also-article-index === -->

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
