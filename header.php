<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DC78182 | WhiteSea DC</title>
    <link rel="icon" href="imgs/ico.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" target="_blank" href="https://t.me/dc78182">
                        <i class="fab fa-telegram"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" target="_blank" href="https://vk.com/whiteseadc">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" target="_blank" href="https://discord.gg/DtczZME">
                        <i class="fab fa-discord"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" target="_blank" href="https://www.facebook.com/whiteseadc">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="imgs/ico.png" alt="DefCon Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">WhiteSea <i class="fas fa-bolt"></i> DC</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <?php
                        $linkCommunity = array('rating', 'oldctf', 'merch', 'partners', 'faq', 'roadmap', 'socials', 'bugreport', 'orgreport');
                        $linkReports = array('reporthistory', 'reportrequest', 'reportproposal', 'helprequest');
                        $linkEvents = array('dc78182', 'ibonline', 'iboffline');
                        $linkUtility = array('manuals', 'internet', 'masscult', 'telegramrate');
                        ?>
                        <li class="nav-item<?= (in_array($p, $linkCommunity) ? " menu-open" : "") ?>">
                            <a href="#" class="nav-link<?= (in_array($p, $linkCommunity) ? " active" : "") ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Сообщество DC78182
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/index.php?p=rating" class="nav-link<?= ($p == "rating" ? " active" : "") ?>">
                                        <i class="fas fa-flag-checkered nav-icon"></i>
                                        <p>Capture The Flag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=oldctf" class="nav-link<?= ($p == "oldctf" ? " active" : "") ?>">
                                        <i class="fas fa-flag nav-icon"></i>
                                        <p>Проведенные CTF</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=merch" class="nav-link<?= ($p == "merch" ? " active" : "") ?>">
                                        <i class="fas fa-tshirt nav-icon"></i>
                                        <p>Мерч</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=partners" class="nav-link<?= ($p == "partners" ? " active" : "") ?>">
                                        <i class="fas fa-handshake nav-icon"></i>
                                        <p>Партнеры</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=faq" class="nav-link<?= ($p == "faq" ? " active" : "") ?>">
                                        <i class="fas fa-question nav-icon"></i>
                                        <p>FAQ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=roadmap" class="nav-link<?= ($p == "roadmap" ? " active" : "") ?>">
                                        <i class="fas fa-map-marked-alt nav-icon"></i>
                                        <p>RoadMap сообщества </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=bugreport" class="nav-link<?= ($p == "bugreport" ? " active" : "") ?>">
                                        <i class="fas fa-bug nav-icon"></i>
                                        <p>Нашел баг ...</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=orgreport" class="nav-link<?= ($p == "orgreport" ? " active" : "") ?>">
                                        <i class="fas fa-user-cog nav-icon"></i>
                                        <p>Хочу в организаторы!</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item<?= (in_array($p, $linkReports) ? " menu-open" : "") ?>">
                            <a href="#" class="nav-link<?= (in_array($p, $linkReports) ? " active" : "") ?>">
                                <i class="nav-icon fas fa-sticky-note"></i>
                                <p>
                                    Доклады
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/index.php?p=reporthistory" class="nav-link<?= ($p == "reporthistory" ? " active" : "") ?>">
                                        <i class="fas fa-landmark nav-icon"></i>
                                        <p>История докладов</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=reportrequest" class="nav-link<?= ($p == "reportrequest" ? " active" : "") ?>">
                                        <i class="far fa-question-circle nav-icon"></i>
                                        <p>Прошу рассказать о ...</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=reportproposal" class="nav-link<?= ($p == "reportproposal" ? " active" : "") ?>">
                                        <i class="fas fa-question-circle nav-icon"></i>
                                        <p>Xочу рассказать о ...</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=helprequest" class="nav-link<?= ($p == "helprequest" ? " active" : "") ?>">
                                        <i class="fas fa-exclamation-triangle nav-icon"></i>
                                        <p>Прошу помочь с ...</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item<?= (in_array($p, $linkEvents) ? " menu-open" : "") ?>">
                            <a href="#" class="nav-link<?= (in_array($p, $linkEvents) ? " active" : "") ?>">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Мероприятия
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/index.php?p=dc78182" class="nav-link<?= ($p == "dc78182" ? " active" : "") ?>">
                                        <i class="fas fa-beer nav-icon"></i>
                                        <p>Встречи DC78182</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=ibonline" class="nav-link<?= ($p == "ibonline" ? " active" : "") ?>">
                                        <i class="fas fa-toggle-on nav-icon"></i>
                                        <p>On-line мероприятия</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=iboffline" class="nav-link<?= ($p == "iboffline" ? " active" : "") ?>">
                                        <i class="fas fa-toggle-off nav-icon"></i>
                                        <p>Off-line мероприятия</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item<?= (in_array($p, $linkUtility) ? " menu-open" : "") ?>">
                            <a href="#" class="nav-link<?= (in_array($p, $linkUtility) ? " active" : "") ?>">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    Полезности
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/index.php?p=manuals" class="nav-link<?= ($p == "manuals" ? " active" : "") ?>">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Тех. литература</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=internet" class="nav-link<?= ($p == "internet" ? " active" : "") ?>">
                                        <i class="fab fa-internet-explorer nav-icon"></i>
                                        <p>Интернет-ресурсы</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=masscult" class="nav-link<?= ($p == "masscult" ? " active" : "") ?>">
                                        <i class="fas fa-film nav-icon"></i>
                                        <p>Массовая культура</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php?p=telegramrate" class="nav-link<?= ($p == "telegramrate" ? " active" : "") ?>">
                                        <i class="fab fa-telegram-plane nav-icon"></i>
                                        <p>Рейтинги TG-каналов</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>