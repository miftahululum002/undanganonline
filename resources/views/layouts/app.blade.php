<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="author" content="MC Project">
    <link href="{{asset('img')}}/favicon.png" rel="icon">
    <title><?= APP_NAME; ?> - <?= $title; ?></title>
    <link href="{{asset('vendor')}}/fontawesome-free/css/all.min.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor')}}/ruangadmin/css/ruang-admin.css?SIDOINIKAHV2" rel="stylesheet">
    <link href="{{asset('vendor')}}/datatables/dataTables.bootstrap4.min.css?SIDOINIKAHV2" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css')}}/croppie.min.css?SIDOINIKAHV2">
    <link rel="stylesheet" href="{{asset('css')}}/pikaday.css?SIDOINIKAHV2">


    <script src="{{asset('js')}}/moment-with-locales.js"></script>
    <script src="{{asset('vendor')}}/jquery/jquery.min.js"></script>
    @yield('style')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard.index')}}">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('img')}}/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3"><?= APP_NAME; ?></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Data Pengguna</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pembayaran">
                    <i class="fas fa-fw fa-money-bill-alt"></i>
                    <span>Data Pembayaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#setting">
                    <i class="fas fa-cogs"></i>
                    <span>Setting</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="version"><?= APP_NAME ?> Version 2</div>
        </ul>
        <!-- Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="{{asset('img')}}/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Nama User</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#/profil">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('login.logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                @yield('content')

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <p class="text-footer">&#169;2021 <a href="{{route('index')}}" rel="dofollow" target="_blank"><?= APP_NAME ?></a> - <a href="https://mycoding.net" rel="dofollow" target="_blank">MC Project</a> - <a href="https://401xd.com" rel="dofollow" target="_blank">401XD Group</a>.</p>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>

    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- modal upload croppie -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Foto Mempelai</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="resizer"></div>
                    <hr>
                    <button class="btn btn-block btn-dark" id="upload">
                        Upload</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('vendor')}}/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('vendor')}}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('vendor')}}/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('vendor')}}/ruangadmin/js/ruang-admin.js"></script>

    <!-- cart -->
    <!-- <script src="{{asset('vendor')}}/chart.js/Chart.min.js"></script>
    <script src="{{asset('vendor')}}/demo/chart-area-demo.js"></script> -->

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

</body>

</html>