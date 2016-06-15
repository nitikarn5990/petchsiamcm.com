<?php
// Prerequisites
session_start();
//include_once ( '../lib/application.php');

include_once($_SERVER["DOCUMENT_ROOT"] . '/lib/application.php');
if ($_SESSION ['admin_id'] == "" || $_COOKIE['user'] == '') {


    header('location:' . ADDRESS_ADMIN . 'login.php');
}
if ($_SESSION['admin_id'] == 'demo') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_GET['action'] == 'del') {
        SetAlert('DEMO MODE ไม่สามารถกระทำรายการได้');
        header('location:' . ADDRESS_ADMIN_CONTROL . 'demo');
        exit();
    }
}
?>
<html lang="en">
    <head>


        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keywords" content="">
        <meta name="Description" content="">



        <link rel="stylesheet"
              href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Bootstrap Stylesheet -->

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
              media="screen">

        <!-- Theme Stylesheet -->

        <link rel="stylesheet" href="assets/css/dandelion.theme.css"
              media="screen">

        <!-- Icon Stylesheet -->

        <link rel="stylesheet" href="assets/css/fonts/glyphicons/style.css"
              media="screen">

        <!--  Main Stylesheet -->

        <link rel="stylesheet" href="assets/css/dandelion.min.css"
              media="screen">
        <link rel="stylesheet" href="assets/css/customizer.css" media="screen">

        <!-- Demo Stylesheet -->

        <link rel="stylesheet" href="assets/css/demo.css" media="screen">

        <!-- Plugin Stylesheet -->

        <link rel="stylesheet"
              href="assets/js/plugins/wizard/dandelion.wizard.css" media="screen">

        <!-- JS Libs -->

        <script src="assets/js/libs/jquery-1.8.3.min.js"></script>
        <script src="assets/js/libs/jquery.placeholder.min.js"></script>
        <script src="assets/js/libs/jquery.mousewheel.min.js"></script>

        <!-- JS Bootstrap -->

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- jQuery-UI JavaScript Files -->

        <script src="assets/jui/js/jquery-ui-1.9.2.min.js"></script>
        <script src="assets/jui/jquery.ui.timepicker.min.js"></script>
        <script src="assets/jui/jquery.ui.touch-punch.min.js"></script>


        <!-- JS Plugins -->

        <!-- Validation Plugin -->

        <script src="plugins/validate/jquery.validate.min.js"></script>

        <!-- DataTables Plugin -->

        <script src="plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- Flot Plugin -->

        <!--[if lt IE 9]>
                
                <script src="assets/js/libs/excanvas.min.js"></script>
                
                <![endif]-->

        <script src="plugins/flot/jquery.flot.min.js"></script>
        <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
        <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>

        <!-- Circular Stat Plugin -->

        <script
        src="assets/js/plugins/circularstat/dandelion.circularstat.min.js"></script>

        <!-- Wizard Plugin -->

        <script src="assets/js/plugins/wizard/dandelion.wizard.min.js"></script>
        <script src="assets/js/libs/jquery.form.min.js"></script>

        <!-- Fullcalendar Plugin -->

        <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="plugins/fullcalendar/gcal.js"></script>
        <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.css"
              media="screen">
        <link rel="stylesheet"
              href="plugins/fullcalendar/fullcalendar.print.css" media="print">

        <!-- Select2 Plugin -->

        <script src="plugins/select2/select2.js"></script>
        <link rel="stylesheet" href="plugins/select2/select2.css" media="screen">

        <!-- Editor -->

        <script type="text/javascript"
        src="plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

        <!-- Picklist Plugin -->

        <script src="assets/js/plugins/picklist/picklist.min.js"></script>
        <link rel="stylesheet" href="assets/js/plugins/picklist/picklist.css"
              media="screen">

        <!-- Colorpicker Plugin -->

        <script src="plugins/colorpicker/colorpicker.js"></script>
        <link rel="stylesheet" href="plugins/colorpicker/colorpicker.css"
              media="screen">

        <!-- elRTE Plugin -->

        <script src="plugins/elrte/js/elrte.full.js"></script>
        <link rel="stylesheet" href="plugins/elrte/css/elrte.css" media="screen">

        <!-- elFinder Plugin -->

        <script src="plugins/elfinder/js/elfinder.min.js"></script>
        <link rel="stylesheet" href="plugins/elfinder/css/elfinder.min.css"  media="screen">

        <!-- iButton Plugin -->

        <script src="plugins/ibutton/jquery.ibutton.min.js"></script>
        <style type="text/css"></style>
        <link rel="stylesheet" href="plugins/ibutton/jquery.ibutton.css"
              media="screen">

        <!-- Autosize Plugin -->

        <script src="plugins/autosize/jquery.autosize.min.js"></script>

        <!-- FilInput Plugin -->

        <script src="assets/js/plugins/fileinput/jquery.fileinput.js"></script>

        <!-- JS Demo -->

        <script src="assets/js/demo/demo.validation.js"></script>
        <script src="assets/js/demo/demo.dashboard.js"></script>
        <script src="assets/js/demo/demo.tables.js"></script>
        <script src="assets/js/demo/demo.form.js"></script>

        <!-- JS Login -->

        <script src="assets/js/core/dandelion.login.js"></script>

        <!-- JS Template -->

        <script src="assets/js/core/dandelion.core.js"></script>

        <!-- JS Customizer -->

        <script src="assets/js/core/dandelion.customizer.js"></script>

        <!-- Input Tag -->
        <script src="assets/input_tags/bootstrap-tagsinput-angular.js"></script>
        <script src="assets/input_tags/bootstrap-tagsinput.js"></script>
        <link rel="stylesheet" href="assets/input_tags/bootstrap-tagsinput.css">
        <style>
            ul li.actived{
                background:#CCC;	
            }


            .bg-success{
                background-color: rgba(139, 195, 74, 0.27) !important;
            }
            .bg-warning{
                background-color: rgba(255, 235, 59, 0.27) !important;
            }
             .hidden{
                            display: none !important;
                        }

        </style>

        <!-- Switch -->
        <script src="//code.jquery.com/jquery-1.12.2.min.js"></script>
        <script src="plugins/switch/js/on-off-switch.js"></script>
        <script src="plugins/switch/js/on-off-switch-onload.js"></script>
        <link rel="stylesheet" href="plugins/switch/css/on-off-switch.css">

        <!-- Date Picker -->
        <link rel="stylesheet" href="plugins/datepicker/css/datepicker.min.css">
        <script src="plugins/datepicker/js/datepicker.min.js"></script>
        <script src="plugins/datepicker/js/i18n/datepicker.en.js"></script>

        <!-- Validate -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    </head>

    <body cz-shortcut-listen="true">

        <!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
        <div id="da-wrapper">

            <!-- Header -->
            <div id="da-header">
                <div id="da-header-top">

                    <!-- Container -->
                    <div class="da-container clearfix">

                        <!-- Logo Container. All images put here will be vertically centere -->
                        <div id="da-logo-wrap">
                            <div id="da-logo">
                                <div id="da-logo-img">

<!--    													 <img src="assets/images/logo.png" alt=""> -->

                                </div>
                            </div>
                        </div>

                        <!-- Header Toolbar Menu -->
                        <div id="da-header-toolbar" class="clearfix">
                            <div id="da-user-profile-wrap">
                                <div id="da-user-profile" data-toggle="dropdown" class="clearfix">
                                    <div id="da-user-avatar"></div>
                                    <div id="da-user-info">
                                        <?= $_SESSION['admin_id'] == 'demo' ? 'Demo' : 'Admin Administrator' ?>  <span class="da-user-title"><?= $_SESSION['admin_id'] == 'demo' ? 'Demo' : 'Admin Administrator' ?> </span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu">

                                    <li><a
                                            href="<?php echo ADDRESS_ADMIN_CONTROL ?>profile&action=edit&id=1">เปลี่ยนรหัสผ่าน</a></li>
                                </ul>
                            </div>
                            <div id="da-header-button-container" >
                                <ul>
                                    <li class="da-header-button-wrap">
                                        <div class="da-header-button">
                                            <a href="javascript:void(0)"
                                               onclick="window.location = '<?php echo ADDRESS_ADMIN_CONTROL ?>logout'"
                                               title="ออกจากระบบ"><i class="icon-power"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div id="da-content">

                <!-- Container -->
                <div class="da-container clearfix">

                    <!-- Sidebar Separator do not remove -->
                    <div id="da-sidebar-separator"></div>

                    <!-- Sidebar -->
                    <div id="da-sidebar">

                        <!-- Navigation Toggle for < 480px -->
                        <div id="da-sidebar-toggle"></div>

                        <!-- Main Navigation -->
                        <div id="da-main-nav" class="btn-container">
                            <ul>

                                <li class="<?= PAGE_CONTROLLERS == 'customer' ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDgwLjEzIDgwLjEzIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA4MC4xMyA4MC4xMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik00OC4zNTUsMTcuOTIyYzMuNzA1LDIuMzIzLDYuMzAzLDYuMjU0LDYuNzc2LDEwLjgxN2MxLjUxMSwwLjcwNiwzLjE4OCwxLjExMiw0Ljk2NiwxLjExMiAgIGM2LjQ5MSwwLDExLjc1Mi01LjI2MSwxMS43NTItMTEuNzUxYzAtNi40OTEtNS4yNjEtMTEuNzUyLTExLjc1Mi0xMS43NTJDNTMuNjY4LDYuMzUsNDguNDUzLDExLjUxNyw0OC4zNTUsMTcuOTIyeiBNNDAuNjU2LDQxLjk4NCAgIGM2LjQ5MSwwLDExLjc1Mi01LjI2MiwxMS43NTItMTEuNzUycy01LjI2Mi0xMS43NTEtMTEuNzUyLTExLjc1MWMtNi40OSwwLTExLjc1NCw1LjI2Mi0xMS43NTQsMTEuNzUyUzM0LjE2Niw0MS45ODQsNDAuNjU2LDQxLjk4NCAgIHogTTQ1LjY0MSw0Mi43ODVoLTkuOTcyYy04LjI5NywwLTE1LjA0Nyw2Ljc1MS0xNS4wNDcsMTUuMDQ4djEyLjE5NWwwLjAzMSwwLjE5MWwwLjg0LDAuMjYzICAgYzcuOTE4LDIuNDc0LDE0Ljc5NywzLjI5OSwyMC40NTksMy4yOTljMTEuMDU5LDAsMTcuNDY5LTMuMTUzLDE3Ljg2NC0zLjM1NGwwLjc4NS0wLjM5N2gwLjA4NFY1Ny44MzMgICBDNjAuNjg4LDQ5LjUzNiw1My45MzgsNDIuNzg1LDQ1LjY0MSw0Mi43ODV6IE02NS4wODQsMzAuNjUzaC05Ljg5NWMtMC4xMDcsMy45NTktMS43OTcsNy41MjQtNC40NywxMC4wODggICBjNy4zNzUsMi4xOTMsMTIuNzcxLDkuMDMyLDEyLjc3MSwxNy4xMXYzLjc1OGM5Ljc3LTAuMzU4LDE1LjQtMy4xMjcsMTUuNzcxLTMuMzEzbDAuNzg1LTAuMzk4aDAuMDg0VjQ1LjY5OSAgIEM4MC4xMywzNy40MDMsNzMuMzgsMzAuNjUzLDY1LjA4NCwzMC42NTN6IE0yMC4wMzUsMjkuODUzYzIuMjk5LDAsNC40MzgtMC42NzEsNi4yNS0xLjgxNGMwLjU3Ni0zLjc1NywyLjU5LTcuMDQsNS40NjctOS4yNzYgICBjMC4wMTItMC4yMiwwLjAzMy0wLjQzOCwwLjAzMy0wLjY2YzAtNi40OTEtNS4yNjItMTEuNzUyLTExLjc1LTExLjc1MmMtNi40OTIsMC0xMS43NTIsNS4yNjEtMTEuNzUyLDExLjc1MiAgIEM4LjI4MywyNC41OTEsMTMuNTQzLDI5Ljg1MywyMC4wMzUsMjkuODUzeiBNMzAuNTg5LDQwLjc0MWMtMi42Ni0yLjU1MS00LjM0NC02LjA5Ny00LjQ2Ny0xMC4wMzIgICBjLTAuMzY3LTAuMDI3LTAuNzMtMC4wNTYtMS4xMDQtMC4wNTZoLTkuOTcxQzYuNzUsMzAuNjUzLDAsMzcuNDAzLDAsNDUuNjk5djEyLjE5N2wwLjAzMSwwLjE4OGwwLjg0LDAuMjY1ICAgYzYuMzUyLDEuOTgzLDEyLjAyMSwyLjg5NywxNi45NDUsMy4xODV2LTMuNjgzQzE3LjgxOCw0OS43NzMsMjMuMjEyLDQyLjkzNiwzMC41ODksNDAuNzQxeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                                        </span> สมาชิก
                                    </a>
                                    <ul>
                                        <li class="<?= PAGE_CONTROLLERS == 'customer' ? 'actived' : '' ?>"><a href="<?php echo ADDRESS_ADMIN_CONTROL ?>customer">จัดการสมาชิก</a></li>

                                    </ul>
                                </li>
                                <li class="<?= PAGE_CONTROLLERS == 'all_product' || PAGE_CONTROLLERS == 'category' || PAGE_CONTROLLERS == 'product' ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwOS4wMjMgMzA5LjAyMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzA5LjAyMyAzMDkuMDIzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTIyMS42MjEsNTAuNjQ3Yy0wLjI3Ni0yLjQ5Ni0xLjgzNy00LjcxNi00LjExLTUuODY3TDE1Ny45MDEsMTQuNThjLTIuMTMxLTEuMDgtNC42NDgtMS4wOC02Ljc3OSwwTDkxLjUxLDQ0Ljc3OCAgIGMtMi41MjEsMS4yNzctNC4xMSwzLjg2My00LjExLDYuNjl2MC4wMDF2MC4wMDF2NTAuMzEyTDQuMjgsMTQyLjIxNWMtMi40OTYsMS4xODctNC4xMzgsMy42NS00LjI3Miw2LjQxMSAgIGMtMC4xMzQsMi43NjIsMS4yNjIsNS4zNzIsMy42MzIsNi43OTRsNTIuNDExLDMxLjQ0OXY1NC45MzhjMCwyLjgzLDEuNTkzLDUuNDE5LDQuMTE4LDYuNjk0bDkwLjk2LDQ1Ljk0NiAgIGMxLjA2MywwLjUzNywyLjIyMywwLjgwNiwzLjM4MiwwLjgwNmMxLjE1OSwwLDIuMzE4LTAuMjY5LDMuMzgyLTAuODA2bDkwLjk1OS00NS45NDZjMi41MjUtMS4yNzUsNC4xMTgtMy44NjQsNC4xMTgtNi42OTR2LTU0LjkzOCAgIGw1Mi40MTEtMzEuNDQ5YzIuMzcxLTEuNDIyLDMuNzY3LTQuMDMyLDMuNjMzLTYuNzk0Yy0wLjEzNC0yLjc2MS0xLjc3NS01LjIyNC00LjI3MS02LjQxbC04My4xMjItNDAuNDM4VjUwLjY0N3ogTTIyOC44NTUsMTIyLjMgICBsLTcuMjMzLDMuNjMydi03LjMxN0wyMjguODU1LDEyMi4zeiBNMTU0LjUxMiwyOS42NzhsNDMuMDE0LDIxLjc5MmwtNDMuMDE0LDIxLjc5MWwtNDMuMDE2LTIxLjc5M0wxNTQuNTEyLDI5LjY3OHogICAgTTg3LjM5OSwxMTguNjE2djcuMzE0bC03LjIzLTMuNjNMODcuMzk5LDExOC42MTZ6IE0yMy4zNTYsMTQ5Ljc1OGw0MC4xMDQtMTkuMDYxbDc2LjA0OCwzOC4xOGwtNDAuMzAyLDI2LjM5NUwyMy4zNTYsMTQ5Ljc1OHogICAgTTE0Ny4wMTIsMjc1LjU2M2wtNzUuOTYtMzguMzdWMTk1Ljg3bDI0LjQ3MSwxNC42ODRjMS4xODksMC43MTQsMi41MjUsMS4wNjksMy44NTksMS4wNjljMS40MzMsMCwyLjg2My0wLjQxLDQuMTA5LTEuMjI2ICAgbDQzLjUyMS0yOC41MDNWMjc1LjU2M3ogTTE1NC41MTIsMTU5LjYyNGwtNTIuMTEyLTI2LjE2M1Y2My42NzVsNDguNzIzLDI0LjY4NGMxLjA2NSwwLjU0LDIuMjI3LDAuODEsMy4zOSwwLjgxICAgYzEuMTYyLDAsMi4zMjQtMC4yNywzLjM5LTAuODFsNDguNzItMjQuNjgydjY5Ljc4NUwxNTQuNTEyLDE1OS42MjR6IE0yMzcuOTcxLDIzNy4xOTNsLTc1Ljk1OSwzOC4zN3YtOTMuNjY4bDQzLjUxOSwyOC41MDMgICBjMS4yNDYsMC44MTYsMi42NzcsMS4yMjYsNC4xMDksMS4yMjZjMS4zMzQsMCwyLjY3LTAuMzU1LDMuODU5LTEuMDY5bDI0LjQ3Mi0xNC42ODVWMjM3LjE5M3ogTTIwOS44MTQsMTk1LjI3MmwtNDAuMzAxLTI2LjM5NSAgIGw3Ni4wNDgtMzguMTgxbDQwLjEwNSwxOS4wNjFMMjA5LjgxNCwxOTUuMjcyeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                                        </span> สินค้า
                                    </a>
                                    <ul>

                                        <li class="hidden <?= PAGE_CONTROLLERS == 'category' ? 'actived' : '' ?>"><a href="<?php echo ADDRESS_ADMIN_CONTROL ?>category">จัดการหมวดหมู่สินค้า</a></li>
                                        <li class="<?= PAGE_CONTROLLERS == 'product' ? 'actived' : '' ?>"><a href="<?php echo ADDRESS_ADMIN_CONTROL ?>product">จัดการสินค้า</a></li>
                                    </ul></li>
                                <li class="<?= PAGE_CONTROLLERS == 'ordered' ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDQwOS4yMjEgNDA5LjIyMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDA5LjIyMSA0MDkuMjIxIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8cGF0aCBkPSJtMjUyLjczOCwzMTAuODIzYzAsNS41MjMtNC40NzcsMTAtMTAsMTBoLTc2LjI1NGMtNS41MjMsMC0xMC00LjQ3Ny0xMC0xMHM0LjQ3Ny0xMCAxMC0xMGg3Ni4yNTRjNS41MjMsMCAxMCw0LjQ3NyAxMCwxMHptLTk0LjYxNy0xNjAuOTE0YzAtMTkuMjQ4IDIwLjQyMS0zNC4zMjYgNDYuNDktMzQuMzI2czQ2LjQ4OSwxNS4wNzggNDYuNDg5LDM0LjMyNi0yMC40MiwzNC4zMjYtNDYuNDg5LDM0LjMyNi00Ni40OS0xNS4wNzgtNDYuNDktMzQuMzI2em0yMCwwYzAsNi43NjIgMTEuMzI5LDE0LjMyNiAyNi40OSwxNC4zMjZzMjYuNDg5LTcuNTYzIDI2LjQ4OS0xNC4zMjYtMTEuMzI4LTE0LjMyNi0yNi40ODktMTQuMzI2LTI2LjQ5LDcuNTY0LTI2LjQ5LDE0LjMyNnptMTc0Ljc5My05OC44Mzd2MzQ4LjE0OGMwLDUuNTIzLTQuNDc3LDEwLTEwLDEwaC0yNzYuNjA3Yy01LjUyMywwLTEwLTQuNDc3LTEwLTEwdi0zNDguMTQ4YzAtNS41MjMgNC40NzctMTAgMTAtMTBoNzkuNjUxdi02Ljc0N2MwLTUuNTIzIDQuNDc3LTEwIDEwLTEwaDE1LjgxMWM0LjI5Mi0xNC4wNjQgMTcuMzktMjQuMzI1IDMyLjg0LTI0LjMyNXMyOC41NSwxMC4yNjEgMzIuODQxLDI0LjMyNmgxNS44MTNjNS41MjMsMCAxMCw0LjQ3NyAxMCwxMHY2Ljc0N2g3OS42NWM1LjUyNC0wLjAwMSAxMC4wMDEsNC40NzYgMTAuMDAxLDkuOTk5em0tMTg2Ljk1NiwyMS45MDdoNzcuMzA1di0yOC42NTNoLTE0LjMyN2MtNS41MjMsMC0xMC00LjQ3Ny0xMC0xMCAwLTcuODk5LTYuNDI2LTE0LjMyNi0xNC4zMjYtMTQuMzI2aC0wLjAwMWMtNy44OTksMC0xNC4zMjYsNi40MjYtMTQuMzI2LDE0LjMyNiAwLDUuNTIzLTQuNDc3LDEwLTEwLDEwaC0xNC4zMjZ2MjguNjUzem0tMzkuNzYzLDI2Ny41ODloMTU2LjgzMnYtMjc5LjQ5NmgtMTkuNzYzdjIxLjkwN2MwLDUuNTIzLTQuNDc3LDEwLTEwLDEwaC05Ny4zMDVjLTUuNTIzLDAtMTAtNC40NzctMTAtMTB2LTIxLjkwN2gtMTkuNzY0djI3OS40OTZ6bTIwNi43Mi0yNzkuNDk2aC0yOS44ODh2Mjg5LjQ5NmMwLDUuNTIzLTQuNDc3LDEwLTEwLDEwaC0xNzYuODMyYy01LjUyMywwLTEwLTQuNDc3LTEwLTEwdi0yODkuNDk2aC0yOS44ODd2MzI4LjE0OGgyNTYuNjA2di0zMjguMTQ4em0tMTA5LjIzOSwyMTEuMDk4YzUuNTIzLDAgMTAtNC40NzcgMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0zOC4xMjdjLTUuNTIzLDAtMTAsNC40NzctMTAsMTBzNC40NzcsMTAgMTAsMTBoMzguMTI3em0xOS4wNjQtNTEuNzc0aC03Ni4yNTRjLTUuNTIzLDAtMTAsNC40NzctMTAsMTBzNC40NzcsMTAgMTAsMTBoNzYuMjU0YzUuNTIzLDAgMTAtNC40NzcgMTAtMTBzLTQuNDc3LTEwLTEwLTEweiIgZmlsbD0iIzAwMDAwMCIvPgo8L3N2Zz4K" />
                                        </span> ข้อมูลการสั่งซื้อ
                                    </a>
                                    <ul>
                                        <li class="<?= PAGE_CONTROLLERS == 'ordered' ? 'actived' : '' ?>"><a href="<?php echo ADDRESS_ADMIN_CONTROL ?>ordered">ข้อมูลการสั่งซื้อ</a></li>

                                    </ul>
                                </li>
                             
                              
                               
                             
                                <li class="<?= PAGE_CONTROLLERS == 'bank' || PAGE_CONTROLLERS == 'payment_confirm' ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDI0NC42ODMgMjQ0LjY4MyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjQ0LjY4MyAyNDQuNjgzIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0yNDQuMDU0LDExOC41ODdsLTI1LjQxNy03OS4yMzJjLTEuMDczLTMuMzQ0LTMuMzg0LTYuMDctNi41MDgtNy42NzYtMy4xMjMtMS42MDUtNi42ODUtMS44OTgtMTAuMDI5LTAuODI3bC0xMjkuMjEsNDEuNDVjLTYuOTA0LDIuMjE1LTEwLjcxOCw5LjYzMy04LjUwNCwxNi41MzdsNS4xNzEsMTYuMTJoLTU2LjQwOWMtNy4yNSwwLTEzLjE0OCw1Ljg5OC0xMy4xNDgsMTMuMTQ4djgzLjIwOWMwLDcuMjUgNS44OTgsMTMuMTQ4IDEzLjE0OCwxMy4xNDhoMTQ0LjY5NWM3LjI1LDAgMTMuMTQ4LTUuODk4IDEzLjE0OC0xMy4xNDh2LTQ1LjQ4Mmw2NC41NTgtMjAuNzFjNi45MDQtMi4yMTQgMTAuNzE5LTkuNjMyIDguNTA1LTE2LjUzN3ptLTg2LjIxLDgzLjg3OGgtMTQ0LjY5NmMtMC42MzMsMC0xLjE0OC0wLjUxNS0xLjE0OC0xLjE0OHYtODMuMjA5YzAtMC42MzMgMC41MTUtMS4xNDggMS4xNDgtMS4xNDhoMTQ0LjY5NWMwLjYzMywwIDEuMTQ4LDAuNTE1IDEuMTQ4LDEuMTQ4djgzLjIwOWMwLjAwMSwwLjYzMy0wLjUxNCwxLjE0OC0xLjE0NywxLjE0OHptNDguNzk3LTE2MC4xMTRjMC4xOTMsMC4wOTkgMC40NDgsMC4yOTYgMC41NjgsMC42N2w1LjA3MiwxNS44MS0xMzEuMzk2LDQyLjE1My01LjA3Mi0xNS44MTFjLTAuMTk0LTAuNjAzIDAuMTQtMS4yNTEgMC43NDMtMS40NDRsMTI5LjIwOS00MS40NWMwLjEyNi0wLjA0MSAwLjI0NS0wLjA1NyAwLjM1NC0wLjA1NyAwLjIxNSw3LjEwNTQzZS0xNSAwLjM5NCwwLjA2MyAwLjUyMiwwLjEyOXptLTQ4Ljc5Nyw2Mi42MDhoLTUwLjA2NGwxMDguMTY3LTM0LjcgMTYuNjgsNTEuOTk0YzAuMTkzLDAuNjA0LTAuMTQsMS4yNTItMC43NDMsMS40NDVsLTYwLjg5MiwxOS41MzR2LTI1LjEyNWMtMi44NDIxN2UtMTQtNy4yNS01Ljg5OC0xMy4xNDgtMTMuMTQ4LTEzLjE0OHoiIGZpbGw9IiMwMDAwMDAiLz4KICAgIDxwYXRoIGQ9Im01Ni41NCwxMzQuNzEyaC0yNS42NjZjLTMuMzEzLDAtNiwyLjY4Ny02LDZzMi42ODcsNiA2LDZoMjUuNjY2YzMuMzEzLDAgNi0yLjY4NyA2LTZzLTIuNjg2LTYtNi02eiIgZmlsbD0iIzAwMDAwMCIvPgogICAgPHBhdGggZD0ibTg1LjIwNywxNDYuNzEyYzMuMzEzLDAgNi0yLjY4NyA2LTZzLTIuNjg3LTYtNi02aC05LjMzM2MtMy4zMTMsMC02LDIuNjg3LTYsNnMyLjY4Nyw2IDYsNmg5LjMzM3oiIGZpbGw9IiMwMDAwMDAiLz4KICAgIDxwYXRoIGQ9Im0xNDkuMjA3LDE2MC43MTJjMC0zLjMxMy0yLjY4Ny02LTYtNmgtMjkuMzMzYy0zLjMxMywwLTYsMi42ODctNiw2djI2YzAsMy4zMTMgMi42ODcsNiA2LDZoMjkuMzMzYzMuMzEzLDAgNi0yLjY4NyA2LTZ2LTI2em0tMTIsNnYxNGgtMTcuMzMzdi0xNGgxNy4zMzN6IiBmaWxsPSIjMDAwMDAwIi8+CiAgPC9nPgo8L3N2Zz4K" />
                                        </span> การแจ้งโอนเงิน
                                    </a>
                                    <ul>
                                
                                        <li class="<?= PAGE_CONTROLLERS == 'payment_confirm' ? 'actived' : '' ?>"><a
                                                href="<?php echo ADDRESS_ADMIN_CONTROL ?>payment_confirm">แจ้งการชำระเงิน
                                            </a></li>
                                    </ul></li>
                            
                                <li class="<?= PAGE_CONTROLLERS == 'contact' || PAGE_CONTROLLERS == 'contact_message' ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDQ0IDQ0IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0NCA0NCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CiAgPGc+CiAgICA8Zz4KICAgICAgPGc+CiAgICAgICAgPHBhdGggZD0iTTQzLDZIMUMwLjQ0Nyw2LDAsNi40NDcsMCw3djMwYzAsMC41NTMsMC40NDcsMSwxLDFoNDJjMC41NTIsMCwxLTAuNDQ3LDEtMVY3QzQ0LDYuNDQ3LDQzLjU1Miw2LDQzLDZ6IE00MiwzMy41ODEgICAgIEwyOS42MTIsMjEuMTk0bC0xLjQxNCwxLjQxNEw0MS41OSwzNkgyLjQxbDEzLjM5Mi0xMy4zOTJsLTEuNDE0LTEuNDE0TDIsMzMuNTgxVjhoNDBWMzMuNTgxeiIgZmlsbD0iIzAwMDAwMCIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8Zz4KICAgICAgPGc+CiAgICAgICAgPHBhdGggZD0iTTM5Ljk3OSw4TDIyLDI1Ljk3OUw0LjAyMSw4SDJ2MC44MDdMMjEuMjkzLDI4LjFjMC4zOTEsMC4zOTEsMS4wMjMsMC4zOTEsMS40MTQsMEw0Miw4LjgwN1Y4SDM5Ljk3OXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPC9nPgogICAgPC9nPgogIDwvZz4KPC9zdmc+Cg==" />
                                        </span> ติดต่อเรา
                                    </a>
                                    <ul>
                                        <li class="<?= PAGE_CONTROLLERS == 'contact' ? 'actived' : '' ?>"><a
                                                href="<?php echo ADDRESS_ADMIN_CONTROL ?>contact&action=edit&id=1">รายละเอียด</a></li>

                                    </ul>
                                </li>
                            
                                   <li class="<?= PAGE_CONTROLLERS == 'social'  ? 'active' : '' ?>"><a href="#"> <!-- Icon Container --> <span
                                            class="da-nav-icon"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDUxMCA1MTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMCA1MTA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8ZyBpZD0icG9zdC1mYWNlYm9vayI+CgkJPHBhdGggZD0iTTQ1OSwwSDUxQzIyLjk1LDAsMCwyMi45NSwwLDUxdjQwOGMwLDI4LjA1LDIyLjk1LDUxLDUxLDUxaDQwOGMyOC4wNSwwLDUxLTIyLjk1LDUxLTUxVjUxQzUxMCwyMi45NSw0ODcuMDUsMCw0NTksMHogICAgIE00MzMuNSw1MXY3Ni41aC01MWMtMTUuMywwLTI1LjUsMTAuMi0yNS41LDI1LjV2NTFoNzYuNXY3Ni41SDM1N1Y0NTloLTc2LjVWMjgwLjVoLTUxVjIwNGg1MXYtNjMuNzUgICAgQzI4MC41LDkxLjgsMzIxLjMsNTEsMzY5Ljc1LDUxSDQzMy41eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                                        </span> Social
                                    </a>
                                    <ul>
                                        <li class="<?= PAGE_CONTROLLERS == 'social' ? 'actived' : '' ?>"><a
                                                href="<?php echo ADDRESS_ADMIN_CONTROL ?>social&action=edit&id=1">Facebook, Twitter</a></li>
                                               

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Main Content Wrapper -->
                    <div id="da-content-wrap" class="clearfix">

                        <!-- Content Area -->
                        <div id="da-content-area">
                            <?php
                            if (PAGE_CONTROLLERS == '') {
                                // include ("controllers/slides.php");
                                header("location:" . ADDRESS_ADMIN_CONTROL . 'product');
                            } else {
                                include ("controllers/" . PAGE_CONTROLLERS . ".php");
                            }
                            ?>
                        </div>
                    </div>
<!--                    <script src="assets/js/verify.notify.min.js"></script>-->
                    <script type="text/javascript">
                                                   //$( document ).ready(function() {
                                                   function addfile() {
                                                       $("#filecopy:first").clone().insertAfter("div #filecopy:last");
                                                   }
                                                   function delfile() {
                                                       //$("#filecopy").clone().insertAfter("div #filecopy:last");
                                                       var conveniancecount = $("div #filecopy").length;
                                                       if (conveniancecount > 2) {
                                                           $("div #filecopy:last").remove();
                                                       }


                                                   }

                                                   //});

                    </script>
                    <script>
                        $(function () {
                            // $( "#datepicker" ).datepicker();
                            $("#activity_date").datepicker({dateFormat: "yy-mm-dd"}).val()
                        });


                    </script>
                    <style>
                        /*Colored Label Attributes*/

                        .label {
                            background-color: #BFBFBF;
                            border-bottom-left-radius: 3px;
                            border-bottom-right-radius: 3px;
                            border-top-left-radius: 3px;
                            border-top-right-radius: 3px;
                            color: #FFFFFF;
                            font-size: 9.75px;
                            font-weight: bold;
                            padding-bottom: 2px;
                            padding-left: 4px;
                            padding-right: 4px;
                            padding-top: 2px;
                            text-transform: uppercase;
                            white-space: nowrap;
                        }

                        .label:hover {
                            opacity: 80;
                        }

                        .label.success {
                            background-color: #46A546;
                        }

                        .label.success2 {
                            background-color: #CCC;
                        }

                        .label.success3 {
                            background-color: #61a4e4;
                        }

                        .label.warning {
                            background-color: #FC9207;
                        }

                        .label.failure {
                            background-color: #D32B26;
                        }

                        .label.alert {
                            background-color: #33BFF7;
                        }

                        .label.good-job {
                            background-color: #9C41C6;
                        }
                        tr {
                            font-size: 12px;
                        }
                       

                    </style>
                </div>
            </div>

            <!-- Footer -->
            <div id="da-footer">
                <div class="da-container clearfix">
                    <p>Copyright 2016.</p>
                </div>
            </div>
        </div>




        <textarea tabindex="-1"
                  style="position: absolute; top: -9999px; left: -9999px; right: auto; bottom: auto; border: 0px; box-sizing: content-box; word-wrap: break-word; overflow: hidden; height: 0px !important; min-height: 0px !important;"></textarea>
        <div
            class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable"
            tabindex="-1" role="dialog" aria-labelledby="ui-id-1"
            style="display: none; outline: 0px; z-index: 1000;">
            <div
                class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                <span id="ui-id-1" class="ui-dialog-title">Get CSS Style</span><a
                    href="#" class="ui-dialog-titlebar-close ui-corner-all"
                    role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
            </div>
            <div id="da-customizer-dialog"
                 class="ui-dialog-content ui-widget-content" style="">
                <textarea readonly id="da-customizer-css"></textarea>
            </div>
        </div>
        <!-- nortification การแจ้งเตือน -->
<!--        <script src="js/notie.js"></script>-->



    </body>
</html>