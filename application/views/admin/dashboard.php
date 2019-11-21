<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>TigaDewaAdventure - ADMIN</title>
    <link rel="icon" type="text/png" href="<?=base_url()?>assets/images/tigadewa.png">
    
    <link href="<?=base_url()?>assets_admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/plugins/c3-master/c3.min.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/css/style.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/css/colors/blue.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url()?>index.php/Admin">
                        <b>
                            <img src="<?=base_url()?>assets_admin/images/tigadewa.png" style="width: 40px; height: 39px;" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="<?=base_url()?>assets_admin/images/tgdwtext.png" style="width: 165px; height: 25px; margin-top: 3px; margin-left: -5px;" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Markarn Doe</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav active">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark active" href="#" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_registration" aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">Registration</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_opentrip" aria-expanded="false">     
                                <i class="mdi mdi-lock-open"></i>
                                <span class="hide-menu">Open Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_privatetrip" aria-expanded="false">
                                <i class="mdi mdi-lock"></i>
                                <span class="hide-menu">Private Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_internationaltrip" aria-expanded="false">    <i class="mdi mdi-earth"></i>
                                <span class="hide-menu">International Trip</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">TDA Indonesia</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <footer class="footer"> ©2019 </footer>
        </div>
    </div>
    <script src="<?=base_url()?>assets_admin/plugins/jquery/jquery.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/jquery.slimscroll.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/waves.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/sidebarmenu.js"></script>
    
    <script src="<?=base_url()?>assets_admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/custom.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/d3/d3.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/c3-master/c3.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/dashboard1.js"></script>
</body>

</html>