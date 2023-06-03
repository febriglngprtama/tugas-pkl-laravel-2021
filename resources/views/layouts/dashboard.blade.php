<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>
    @include('configs.dashboard.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('dashboard.components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('dashboard.components.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{-- @include('dashboard.components.heading') --}}

                    <main>
                        @yield('content')
                    </main>
                    <!-- End of Main Content -->


                    {{-- @include('dashboard.components.footer') --}}
                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            @include('dashboard.components.logout')

            <!-- Bootstrap core JavaScript-->
            @include('configs.dashboard.js')

</body>

</html>
