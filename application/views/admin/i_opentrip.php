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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

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
                            <a class="font-weight-bold nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo
                                    
                                    $this->session->userdata('adminName');
                                    
                                ?></a>
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
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/Admin" aria-expanded="false">
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
                            <a class="waves-effect waves-dark active" href="<?=base_url()?>index.php/_opentrip" aria-expanded="false">     <i class="mdi mdi-lock-open"></i>
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
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_gallery" aria-expanded="false">    
                                <i class="mdi mdi-file-image"></i>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_guides" aria-expanded="false">    
                                <i class="mdi mdi-account-multiple-plus"></i>
                                <span class="hide-menu">Guides</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_partner" aria-expanded="false">    
                                <i class="mdi mdi-pi-box"></i>
                                <span class="hide-menu">Partnership</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_merchantdise" aria-expanded="false">    
                                <i class="mdi mdi-shopping"></i>
                                <span class="hide-menu">Merchantdise</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_testimonials" aria-expanded="false">    
                                <i class="mdi mdi-message-bulleted"></i>
                                <span class="hide-menu">Testimonials</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="<?=base_url()?>index.php/Admin/logout" class="link" data-toggle="tooltip" title="Logout">
                    <i class="mdi mdi-power"></i>
                </a>
            </div>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Itinerary</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">Open Trip</a></li>
                            <li class="breadcrumb-item active">Itinerary</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <form method="post" action="<?=base_url()?>index.php/_opentrip/addit" class="form-horizontal form-material">
                                    <div class="form-group">
                                        <?php foreach ($itinerary as $d) { ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="font-weight-bold mt-2">Day 1</label>
                                                    <input value="<?php echo $d->day1?>" class="form-control form-control-line" type="text" onchange="d1()" name="day1" id="day1" required>
                                                    <label class="font-weight-bold mt-2">Day 2</label>
                                                    <input value="<?php echo $d->day2?>" class="form-control form-control-line" type="text" onchange="d2()" name="day2" id="day2" required>
                                                    <label class="font-weight-bold mt-2">Day 3</label>
                                                    <input value="<?php echo $d->day3?>" class="form-control form-control-line" type="text" onchange="d3()" name="day3" id="day3" required>
                                                    <label class="font-weight-bold mt-2">Day 4</label>
                                                    <input value="<?php echo $d->day4?>" class="form-control form-control-line" type="text" onchange="d4()" name="day4" id="day4">
                                                    <label class="font-weight-bold mt-2">Day 5</label>
                                                    <input value="<?php echo $d->day5?>" class="form-control form-control-line" type="text" onchange="d5()" name="day5" id="day5">
                                                    <label class="font-weight-bold mt-2">Day 6</label>
                                                    <input value="<?php echo $d->day6?>" class="form-control form-control-line" type="text" onchange="d6()" name="day6" id="day6">
                                                    <label class="font-weight-bold mt-2">Day 7</label>
                                                    <input value="<?php echo $d->day7?>" class="form-control form-control-line" type="text" onchange="d7()" name="day7" id="day7">
                                                    <label class="font-weight-bold mt-2">Day 8</label>
                                                    <input value="<?php echo $d->day8?>" class="form-control form-control-line" type="text" onchange="d8()" name="day8" id="day8">
                                                    <label class="font-weight-bold mt-2">Day 9</label>
                                                    <input value="<?php echo $d->day9?>" class="form-control form-control-line" type="text" onchange="d9()" name="day9" id="day9">
                                                    <label class="font-weight-bold mt-2">Day 10</label>
                                                    <input value="<?php echo $d->day10?>" class="form-control form-control-line" type="text" onchange="d10()" name="day10" id="day10">
                                                    <label class="font-weight-bold mt-2">Day 11</label>
                                                    <input value="<?php echo $d->day11?>" class="form-control form-control-line" type="text" onchange="d11()" name="day11" id="day11">
                                                    <label class="font-weight-bold mt-2">Day 12</label>
                                                    <input value="<?php echo $d->day12?>" class="form-control form-control-line" type="text" onchange="d12()" name="day12" id="day12">
                                                    <label class="font-weight-bold mt-2">Day 13</label>
                                                    <input value="<?php echo $d->day13?>" class="form-control form-control-line" type="text" onchange="d13()" name="day13" id="day13">
                                                    <label class="font-weight-bold mt-2">Day 14</label>
                                                    <input value="<?php echo $d->day14?>" class="form-control form-control-line" type="text" onchange="d14()" name="day14" id="day14">
                                                    <label class="font-weight-bold mt-2">Day 15</label>
                                                    <input value="<?php echo $d->day15?>" class="form-control form-control-line" type="text" onchange="d15()" name="day15" id="day15">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="font-weight-bold mt-2">Day 16</label>
                                                    <input value="<?php echo $d->day16?>" class="form-control form-control-line" type="text" onchange="d16()" name="day16" id="day16">
                                                    <label class="font-weight-bold mt-2">Day 17</label>
                                                    <input value="<?php echo $d->day17?>" class="form-control form-control-line" type="text" onchange="d17()" name="day17" id="day17">
                                                    <label class="font-weight-bold mt-2">Day 18</label>
                                                    <input value="<?php echo $d->day18?>" class="form-control form-control-line" type="text" onchange="d18()" name="day18" id="day18">
                                                    <label class="font-weight-bold mt-2">Day 19</label>
                                                    <input value="<?php echo $d->day19?>" class="form-control form-control-line" type="text" onchange="d19()" name="day19" id="day19">
                                                    <label class="font-weight-bold mt-2">Day 20</label>
                                                    <input value="<?php echo $d->day20?>" class="form-control form-control-line" type="text" onchange="d20()" name="day20" id="day20">
                                                    <label class="font-weight-bold mt-2">Day 21</label>
                                                    <input value="<?php echo $d->day21?>" class="form-control form-control-line" type="text" onchange="d21()" name="day21" id="day21">
                                                    <label class="font-weight-bold mt-2">Day 22</label>
                                                    <input value="<?php echo $d->day22?>" class="form-control form-control-line" type="text" onchange="d22()" name="day22" id="day22">
                                                    <label class="font-weight-bold mt-2">Day 23</label>
                                                    <input value="<?php echo $d->day23?>" class="form-control form-control-line" type="text" onchange="d23()" name="day23" id="day23">
                                                    <label class="font-weight-bold mt-2">Day 24</label>
                                                    <input value="<?php echo $d->day24?>" class="form-control form-control-line" type="text" onchange="d24()" name="day24" id="day24">
                                                    <label class="font-weight-bold mt-2">Day 25</label>
                                                    <input value="<?php echo $d->day25?>" class="form-control form-control-line" type="text" onchange="d25()" name="day25" id="day25">
                                                    <label class="font-weight-bold mt-2">Day 26</label>
                                                    <input value="<?php echo $d->day26?>" class="form-control form-control-line" type="text" onchange="d26()" name="day26" id="day26">
                                                    <label class="font-weight-bold mt-2">Day 27</label>
                                                    <input value="<?php echo $d->day27?>" class="form-control form-control-line" type="text" onchange="d27()" name="day27" id="day27">
                                                    <label class="font-weight-bold mt-2">Day 28</label>
                                                    <input value="<?php echo $d->day28?>" class="form-control form-control-line" type="text" onchange="d28()" name="day28" id="day28">
                                                    <label class="font-weight-bold mt-2">Day 29</label>
                                                    <input value="<?php echo $d->day29?>" class="form-control form-control-line" type="text" onchange="d29()" name="day29" id="day29">
                                                    <label class="font-weight-bold mt-2">Day 30</label>
                                                    <input value="<?php echo $d->day30?>" class="form-control form-control-line" type="text" onchange="d30()" name="day30" id="day30">
                                                </div>
                                            </div>
                                        <?php }?>
                                        <input type="submit" name="add" value="ADD" class="btn btn-info text-white mt-4 col-md-12 font-weight-bold">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <footer class="footer"> ©2019 </footer> -->
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

    <script>
        function itenerary() {
            var vl = $('#itt').val();
            console.log(vl);
            var tes = "";
            if (vl > 30) {
                alert("Batasan Hanya 30");
                // $('#itinerary').modal('hide');
                // document.getElementById("hassct").data-toggle = "modal";
                // document.getElementById("hassct").data-target = "modal";
            } else{
                // $('#itinerary').modal('show');
                // document.getElementById("hassct").data-toggle = "modal";
                // document.getElementById("hassct").data-target = "itenerary";
                for(var a = 1; a <= vl; a++){
                    // txt += "<p>" + res[a].nama + "<p><br>";
                    // tes += res.semuaprovinsi[a]
                    // tes += '<option value="'+res.semuaprovinsi[a].id+res.semuaprovinsi[a].nama+'">'+res.semuaprovinsi[a].nama+'</option>';
                    tes += '<label class="font-weight-bold">Day '+a+'</label> <input type="text" class="form-control name="day'+a+'"> <br><br>';
                    // tes + = '<label class="font-weight-bold">Day '+a+'</label> <input type="text" class="form-control form-control-line" name="day"> <br><br>';
                }
            }
                // console.log(tes);
                $('#haha').html(tes);
        }

        function d1() {
            if ($('#day1').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = true;
                document.getElementById("day4").readOnly = true;
                document.getElementById("day5").readOnly = true;
                document.getElementById("day6").readOnly = true;
                document.getElementById("day7").readOnly = true;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d2() {
            if ($('#day2').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = true;
                document.getElementById("day5").readOnly = true;
                document.getElementById("day6").readOnly = true;
                document.getElementById("day7").readOnly = true;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d3() {
            if ($('#day3').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = true;
                document.getElementById("day6").readOnly = true;
                document.getElementById("day7").readOnly = true;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d4() {
            if ($('#day4').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = true;
                document.getElementById("day7").readOnly = true;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d5() {
            if ($('#day5').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = true;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d6() {
            if ($('#day6').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = true;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d7() {
            if ($('#day7').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = true;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d8() {
            if ($('#day8').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = true;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d9() {
            if ($('#day9').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = true;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d10() {
            if ($('#day10').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = true;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d11() {
            if ($('#day11').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = true;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d12() {
            if ($('#day12').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = true;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d13() {
            if ($('#day13').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = true;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d14() {
            if ($('#day14').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = true;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d15() {
            if ($('#day15').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = true;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d16() {
            if ($('#day16').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = true;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d17() {
            if ($('#day17').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = true;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d18() {
            if ($('#day18').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = true;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d19() {
            if ($('#day19').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = true;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d20() {
            if ($('#day20').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = true;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d21() {
            if ($('#day21').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = true;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d22() {
            if ($('#day22').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = true;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d23() {
            if ($('#day23').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = true;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d24() {
            if ($('#day24').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = true;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d25() {
            if ($('#day25').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = true;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d26() {
            if ($('#day26').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = false;
                document.getElementById("day28").readOnly = true;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d27() {
            if ($('#day27').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = false;
                document.getElementById("day28").readOnly = false;
                document.getElementById("day29").readOnly = true;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d28() {
            if ($('#day28').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = false;
                document.getElementById("day28").readOnly = false;
                document.getElementById("day29").readOnly = false;
                document.getElementById("day30").readOnly = true;
            }
        }

        function d29() {
            if ($('#day29').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = false;
                document.getElementById("day28").readOnly = false;
                document.getElementById("day29").readOnly = false;
                document.getElementById("day30").readOnly = false;
            }
        }

        function d30() {
            if ($('#day30').val() != "") {
                document.getElementById("day1").readOnly = false;
                document.getElementById("day2").readOnly = false;
                document.getElementById("day3").readOnly = false;
                document.getElementById("day4").readOnly = false;
                document.getElementById("day5").readOnly = false;
                document.getElementById("day6").readOnly = false;
                document.getElementById("day7").readOnly = false;
                document.getElementById("day8").readOnly = false;
                document.getElementById("day9").readOnly = false;
                document.getElementById("day10").readOnly = false;
                document.getElementById("day11").readOnly = false;
                document.getElementById("day12").readOnly = false;
                document.getElementById("day13").readOnly = false;
                document.getElementById("day14").readOnly = false;
                document.getElementById("day15").readOnly = false;
                document.getElementById("day16").readOnly = false;
                document.getElementById("day17").readOnly = false;
                document.getElementById("day18").readOnly = false;
                document.getElementById("day19").readOnly = false;
                document.getElementById("day20").readOnly = false;
                document.getElementById("day21").readOnly = false;
                document.getElementById("day22").readOnly = false;
                document.getElementById("day23").readOnly = false;
                document.getElementById("day24").readOnly = false;
                document.getElementById("day25").readOnly = false;
                document.getElementById("day26").readOnly = false;
                document.getElementById("day27").readOnly = false;
                document.getElementById("day28").readOnly = false;
                document.getElementById("day29").readOnly = false;
                document.getElementById("day30").readOnly = false;
            }
        }



        $(document).ready( function () {
            for(var i = 2; i < 31; i++){
                if ( $('#day'+i).val() == "" ) {
                    document.getElementById("day" + i).readOnly = true;
                }
            }
            // $('#dtTables').DataTable();
        } );

    </script>

</body>

</html>