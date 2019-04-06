<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/AdminConcept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/AdminConcept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/AdminConcept/assets/libs/css/style.css">
    <link rel="stylesheet" href="/AdminConcept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    @yield('style')
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       @include('layouts.part.navbar')
       @include('layouts.part.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.part.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/AdminConcept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/AdminConcept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/AdminConcept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="/AdminConcept/assets/libs/js/main-js.js"></script>
    @yield('script')
</body>

</html>
