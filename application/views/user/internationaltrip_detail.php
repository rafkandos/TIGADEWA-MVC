    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>TigaDewaAdventure - Indonesia</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" type="text/png" href="<?=base_url()?>assets/images/tigadewa.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
        <link rel="stylesheet" href="<?=base_url()?>assets/fonts/icomoon/style.css">

        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/mediaelementplayer.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/fl-bigmug-line.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
        <link rel="stylesheet" href="<?=base_url()?>assets/css/aos.css">

        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
        
    </head>

    <style type="text/css">
        h6:hover{
        cursor: pointer;
        }
        .c-point:hover{
        cursor: pointer;
        }
    </style>

    <body>

    <div class="site-wrap">

        <nav class="site-navbar">
            <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                <a href="<?=base_url();?>index.php/Home">
                    <img src="<?=base_url()?>assets/images/tigadewa1.png" style="width: 250px;">
                </a>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                    <div class="d-inline-block d-lg-none ml-md-0 mr-3 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li>
                        <a href="<?=base_url();?>index.php/Home">Home</a>
                    </li>
                    <li class="has-children active">
                        <a href="#">Trip</a>
                        <ul class="dropdown arrow-top">
                        <li><a href="<?=base_url();?>index.php/OpenTrip">Open Trip</a></li>
                        <li><a href="<?=base_url();?>index.php/PrivateTrip">Private Trip</a></li>
                        <li><a href="<?=base_url();?>index.php/InternationalTrip">International Trip</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url()?>index.php/Gallery">Gallery</a></li>
                    <li class="has-children">
                        <a href="#">About</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="<?=base_url()?>index.php/About/aboutus">About us</a></li>
                          <li><a href="<?=base_url()?>index.php/About/ourguides">Our guides</a></li>
                          <li><a href="<?=base_url()?>index.php/About/contactus">Contact us</a></li>
                          <li><a href="<?=base_url()?>index.php/About/partners">Partners</a></li>
                          <li><a href="<?=base_url()?>index.php/About/testimonials">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url()?>index.php/Merchantdise">Merchantdise</a></li>
                    </ul>
                </nav>
                </div>
            
            </div>
            </div>
        </nav>
        </div>

        <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
        </div>
        
        <div class="site-blocks-cover overlay" style="background-image: url('<?=base_url()?>assets/images/mount7.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <?php
                    foreach ($detail as $d) {
                        echo '
                            <h1 class="mb-4" style="color: #fe6700; font-weight: bold;">'.$d->ItripName.'</h1>
                        ';
                    }
                ?>
                <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            </div>
            </div>
        </div>
        </div>

        <div class="site-section">
        <div class="container">
            <?php
                            $notifikasi = $this->session->flashdata('notif_gagal');
                            if ($notifikasi != null) {
                                echo '
                                    <div class="alert alert-danger">
                                        '.$notifikasi.'
                                    </div>
                                ';
                            }
                        ?>
                    <?php
                            $notifikasi_sukses = $this->session->flashdata('notif_sukses');
                            if ($notifikasi_sukses != null) {
                                echo '
                                    <div class="alert alert-success">
                                        '.$notifikasi_sukses.'
                                    </div>
                                ';
                            }
                        ?>
            <div class="row">
            <div class="col-md-12 col-lg-3">
                <div id="schedule" style="display: block; background-color: #fe6700;">
                    <div class="text-white text-center">
                    <h1 class="pt-2">SCHEDULE</h1>
                        <?php
                            foreach ($sch as $s) {
                                if ($s->slot != 0) {
                                    echo '
                                        <h5 class="pt-2 pb-2">'.$s->scheduleDate.'</h5>            
                                    ';
                                } else {
                                    echo '
                                        <h5 class="pt-2 pb-2">'.$s->scheduleDate.' (closed)</h5>            
                                    ';
                                }
                                
                            }
                        ?>
                        <!-- <h5 class="pt-2">#29 (09 - 12 April 2020)</h5>
                        <h5 class="pt-2">#30 (16 - 19 April 2020)</h5>
                        <h5 class="pt-2">#31 (23 - 26 April 2020)</h5>
                        <h5 class="pt-2 pb-4">#31 (30 - 03 Mei 2020)</h5> -->
                    </div>
                </div>
                <div id="priceList" class="mt-3" style="display: block;">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="2">PRICE LIST</th>
                            </tr>
                            <tr>
                                <th>Meeting Point</th>
                                <th>Rp.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($price as $p) {
                                    echo '
                                        <tr>
                                            <td>'.$p->meetingPoint.'</td>
                                            <td>'.$p->price.'</td>
                                        </tr>
                                    ';
                                }
                            ?>
                            <!-- <tr>
                            <td>#1 Stasiun Malang</td>
                            <td>699K</td>
                            </tr>
                            <tr>
                            <td>#2 Stasiun Malang</td>
                            <td>799K</td>
                            </tr>
                            <tr>
                            <td>#3 Stasiun Malang</td>
                            <td>999K</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">

            <div id="detailPack" class="container" style=" display: block;">
                <ul class="list-inline text-center">
                <li id="overview" class="list-inline-item mr-3 c-point" onclick="overview()"
                    style="border-bottom: 2px solid #fe6700; color: #fe6700">
                    <h6 class="text-center">OVERVIEW</h6>
                </li>
                <li id="itinerary" class="list-inline-item mr-3 c-point" onclick="itinerary()" 
                    style="border-bottom: 2px solid #000; color: #000;">
                    <h6 class="text-center">ITINERARY</h6>
                </li>
                <li id="priceDetail" class="list-inline-item mr-3 c-point" 
                    style="border-bottom: 2px solid #000; color: #000;">
                    <h6 class="text-center" onclick="priceDetail()">PRICE DETAIL</h6>
                </li>
                <li id="preparation" class="list-inline-item mr-3 c-point" 
                    style="border-bottom: 2px solid #000; color: #000;">
                    <h6 class="text-center" onclick="preparation()">PREPARATION</h6>
                </li>
                <li id="gearList" class="list-inline-item mr-3 c-point" 
                    style="border-bottom: 2px solid #000; color: #000;">
                    <h6 class="text-center" onclick="gearList()">GEAR LIST</h6>
                </li>
                </ul>
            </div>
            <div id="overviewContent" class="container mt-5" style="display: block;">
                <div class="row mt-5">
                <div class="col-md-10 site-section-heading mb-3 text-center w-border col-md-6 mx-auto">
                    <h2 class="mb-3">OVERVIEW</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <?php
                                foreach ($detail as $d) {
                                    echo '
                                        <p style="float: left;">'.$d->overview.'</p>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="itineraryContent" class="container mt-5" style="display: none">
                <div class="row mt-5">
                <div class="col-md-10 site-section-heading mb-3 text-center w-border col-md-6 mx-auto">
                    <h2 class="mb-3">ITINERARY</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-10">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Rundown</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($detail as $d) { ?>
                                <?php if ($d->day1 != null && $d->day1 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 1</th>
                                            <td>'.$d->day1.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day2 != null && $d->day2 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 2</th>
                                            <td>'.$d->day2.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day3 != null && $d->day3 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 3</th>
                                            <td>'.$d->day3.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day4 != null && $d->day4 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 4</th>
                                            <td>'.$d->day4.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day5 != null && $d->day5 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 5</th>
                                            <td>'.$d->day5.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day6 != null && $d->day6 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 6</th>
                                            <td>'.$d->day6.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day7 != null && $d->day7 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 7</th>
                                            <td>'.$d->day7.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day8 != null && $d->day8 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 8</th>
                                            <td>'.$d->day8.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day9 != null && $d->day9 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 9</th>
                                            <td>'.$d->day9.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day10 != null && $d->day10 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 10</th>
                                            <td>'.$d->day10.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day11 != null && $d->day11 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 11</th>
                                            <td>'.$d->day11.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day12 != null && $d->day12 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 12</th>
                                            <td>'.$d->day12.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day13 != null && $d->day13 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 13</th>
                                            <td>'.$d->day13.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day14 != null && $d->day14 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 14</th>
                                            <td>'.$d->day14.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day15 != null && $d->day15 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 15</th>
                                            <td>'.$d->day15.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day16 != null && $d->day16 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 16</th>
                                            <td>'.$d->day16.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day17 != null && $d->day17 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 17</th>
                                            <td>'.$d->day17.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day18 != null && $d->day18 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 18</th>
                                            <td>'.$d->day18.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day19 != null && $d->day19 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 19</th>
                                            <td>'.$d->day19.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day20 != null && $d->day20 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 20</th>
                                            <td>'.$d->day20.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day21 != null && $d->day21 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 21</th>
                                            <td>'.$d->day21.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day22 != null && $d->day22 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 22</th>
                                            <td>'.$d->day22.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day23 != null && $d->day23 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 23</th>
                                            <td>'.$d->day23.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day24 != null && $d->day24 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 24</th>
                                            <td>'.$d->day24.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day25 != null && $d->day25 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 25</th>
                                            <td>'.$d->day25.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day26 != null && $d->day26 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 26</th>
                                            <td>'.$d->day26.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day27 != null && $d->day27 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 27</th>
                                            <td>'.$d->day27.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day28 != null && $d->day28 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 28</th>
                                            <td>'.$d->day28.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day29 != null && $d->day29 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 29</th>
                                            <td>'.$d->day29.'</td>
                                        </tr>
                                    ';
                                }?>
                                <?php if ($d->day30 != null && $d->day30 != "") {
                                    echo '
                                        <tr>
                                            <th scope="row" style="font-size: 13pt">DAY 30</th>
                                            <td>'.$d->day30.'</td>
                                        </tr>
                                    ';
                                }?>
                            <?php }?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="priceDetailContent" class="container mt-5" style="display: none">
                <div class="row mt-5">
                <div class="col-md-10 site-section-heading mb-3 text-center w-border col-md-6 mx-auto">
                    <h2 class="mb-3">PRICE DETAIL</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-10">
                        <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                            <th scope="col">INCLUDE</th>
                            <th scope="col">EXCLUDE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Transportasi PP dari Stasiun Asal - Stasiun Tujuan</td>
                            <td>Transportasi dari Kota Asal</td>
                            </tr>
                            <tr>
                            <td>Transportasi Stasiun Tujuan - Stasiun Asal</td>
                            <td>Makan Selama Perjalanan</td>
                            </tr>
                            <tr>
                            <td>Simaksi Pendakian</td>
                            <td>Porter Pribadi</td>
                            </tr>
                            <tr>
                            <td>Guide Berlisensi APGI</td>
                            <td>Surat Kesehatan</td>
                            </tr>
                            <tr>
                            <td>Porter Team</td>
                            <td>Perlengkapan Pribadi</td>
                            </tr>
                            <tr>
                            <td>Makan Selama Pendakian (Breakfast, Dinner, Summit), Lunch pakai cemilan pribadi</td>
                            <td>Cemilan dan Air Mineral</td>
                            </tr>
                            <tr>
                            <td>Makan Sebelum Sesudah 2x</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Perlengkapan Makan dan Minum</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>T-Shirt Pendakian</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Tenda Kapasitas 4-5 diisi Max 4 Orang</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Alat Masak (Kompor, Nesting, Bahan Bakar)</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Rumah Singgah (Free Wifi)</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Kebersihan Rumah Singgah</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Welcome Drink dan Sop Buah</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Snack Gunung (Pisang Greentea)</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Asuransi TNBTS</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Logistik Team</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>First Aid Kid</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Dokumentasi Kegiatan (Jasa Foto Video Minimal 30 Peserta)</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>Sertifikat Pendakian (Format Pdf)</td>
                            <td></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="preparationContent" class="container mt-5" style="display: none">
                <div class="row mt-5">
                <div class="col-md-10 site-section-heading mb-4 text-center w-border col-md-6 mx-auto">
                    <h2>PREPARATION</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-10">
                        <?php
                            foreach ($detail as $d) {
                                echo '
                                    <p>'.$d->preparation.'</p>
                                ';
                            }
                        ?>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="gearListContent" class="container mt-5" style="display: none">
                <div class="row mt-5">
                <div class="col-md-10 site-section-heading mb-4 text-center w-border col-md-6 mx-auto">
                    <h2>GEAR LIST</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-5">
                        <ul>
                        <li>Carrier</li>
                        <li>Sepatu Treking dan Sandal Gunung</li>
                        <li>Kaos Kaki</li>
                        <li>Celana dan Pakaian Secukupnya</li>
                        <li>Jaket Duck Down/Waterproof</li>
                        <li>Topi dan Sarung Tangan</li>
                        <li>Senter/Headlamp</li>
                        <li>Sleeping Bag</li>
                        <li>Matras TNI/Alumunium Foil</li>
                        <li>Obat Pribadi</li>
                        <li>Perlengkapan Mandi, Shalat</li>
                        <li>Gaiter</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <ul>
                        <li>Raincoat/Jas Hujan</li>
                        <li>Tisu Kering</li>
                        <li>Baterai Cadangan</li>
                        <li>Trashbag/Kantong Sampah</li>
                        <li>Treking Pole</li>
                        <li>Cemilan dan Air Secukupnya</li>
                        <li>Masker/Buff</li>
                        <li>Foto Copy KTP 1x</li>
                        <li>Surat Keterangan Sehat Asli (Puskesmas, Klinik, Rumah Sakit)</li>
                        <li>Materai 6000</li>
                        <li>Surat Pernyataan (Halaman Paling Akhir)</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>

        <div id="btnRegist" class="container mt-5" style="display: block;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                <button onclick="registration()" class="btn btn-orange" style="width: 100%">Get Packages</button>
                </div>
            </div>
        </div>

        <div id="registration" class="site-section border-bottom" style="display: none;">
            <div class="container">
                <div class="row">

                    <div class="site-section-heading text-center mb-5 w-border col-md-7 mx-auto">
                    <h2 class="mb-3 mt-4">Registration Form</h2>
                    <!-- 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p> -->

                    </div>
            
                    <div class="col-md-12 mb-5">
            
                    <form action="<?=base_url('index.php/InternationalTrip/registrasi');?>" 
                        class="contact-form" method="post">
                    
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="selitem">Select Meeting Point</label>
                            <select class="custom-select form-control" id="selitem" name="selitem" required="true">
                                <?php
                                    foreach ($price as $p) {
                                        echo '
                                            <option value="'.$p->id_pricing.'">
                                                '.$p->meetingPoint.' (Rp. '.$p->price.')
                                            </option>
                                        ';
                                    }
                                ?>
                                <!-- <option value="#1">#1 Stasiun Malang (Semeru 4D3N)</option>
                                <option value="#2">#2 Stasiun Malang (Semeru + Explore Bromo Panorama + Tiket Masuk + Surat Sehat)</option>
                                <option value="#3">#3 Stasiun Malang (Semeru + Explore Bromo Sunrise + Tiket Masuk + Surat Sehat)</option> -->
                            </select>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="schedule">Schedule</label>
                            <select class="custom-select form-control" id="schedule" name="schedule" required="true">
                                <?php
                                    foreach ($schedule as $s) {
                                        echo '
                                            <option value="'.$s->id_schedule.'">
                                                '.$s->scheduleDate.'
                                            </option>
                                        ';
                                    }
                                ?>
                                <!-- <option value="#29">#29 (09 - 12 April 2020)</option>
                                <option value="#30">#30 (16 - 19 April 2020)</option>
                                <option value="#31">#31 (23 - 26 April 2020)</option>
                                <option value="#32">#32 (30 - 03 Mei 2020)</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" required="true">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="idno">Identity Number</label>
                            <input type="text" id="idno" name="idno" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="gender">Gender</label> <br>
                            <div class="custom-control custom-radio custom-control-inline mt-2">
                                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="men" required="true">
                                <label class="custom-control-label" for="customRadioInline1">Men</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="women" required="true">
                                <label class="custom-control-label" for="customRadioInline2">Women</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="country">Region</label>
                            <!-- <input type="text" id="country" class="form-control" name="country" required="true"> -->
                            <select onchange="selRegion()" class="custom-select form-control" name="region" id="region" required>
                                <option value="Indonesia">Indonesia</option>
                                <option value="International">International</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6" id="idn1" style="display: block;">
                            <label class="font-weight-bold" for="province">Province</label>
                            <select onclick="APIcity(this.value)" class="custom-select form-control" name="province" id="province">
                                
                            </select>
                            
                            <!-- <input type="text" id="province" class="form-control" name="province" required="true"> -->
                        </div>
                        <div class="col-md-6" id="idn2" style="display: block;">
                            <label class="font-weight-bold" for="city">City</label>
                            <select class="custom-select form-control" name="city" id="city">
                                <!-- <option value="">No Selected</option> -->
                                
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6" style="display: none" id="int1">
                            <label class="font-weight-bold" for="province">Country</label>
                            <!-- <select onclick="APIcity(this.value)" class="custom-select form-control" name="province" id="province" required>
                                
                                
                            </select> -->
                            <input type="text" id="country" class="form-control" name="country">
                        </div>
                        <div class="col-md-6" style="display: none" id="int2">
                            <label class="font-weight-bold" for="city">City</label>
                            <!-- <select class="custom-select form-control" name="city" id="city" required>
                                
                                
                            </select> -->
                            <input type="text" id="_city" class="form-control" name="_city">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="address">Full Address</label>
                            <input type="text" name="address" id="address" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="tees_size">Tees Size</label>
                            <select class="custom-select form-control" id="tees_size" name="tees_size" required="true">
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="xxl">XXL</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="phone_number">Phone Number</label>
                            <input type="number" id="phone_number" class="form-control" name="phone_number" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="emergency_contact">Emergency Contact</label>
                            <input type="number" id="emergency_contact" class="form-control" name="emergency_contact" required="true">
                        </div>
                        <?php
                            $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $booking_code = substr(str_shuffle($permitted_chars), 0, 10);
                            echo '
                                <input type="hidden" name="booking_code" id="booking_code" value="'.$booking_code.'">
                            ';
                        ?>
                    </div>

                    <div class="row form-group mt-5">
                        <div class="col-md-12">
                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-brown font-weight-bold" style="width: 100%">
                        </div>
                    </div>
                </form>
                    </div>
                </div>
                </div>
        </div>
        </div>

        <div class="bg-prm" style="margin-top: 100px;">
      <div class="container">
        <div class="row text-center">
          <a target="_blank" href="https://www.instagram.com/tigadewaadventureindonesia/" class="col-6 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=6281216012160" class="col-6 text-center py-4 social-icon d-block"><span class="icon-whatsapp text-white"></span></a>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About <strong>TDA<span class="text-cklt">.</span></strong></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="row mb-3">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
                  <li><a href="<?=base_url()?>index.php/OpenTrip">Open Trip</a></li>
                  <li><a href="<?=base_url()?>index.php/PrivateTrip">Private Trip</a></li>
                  <li><a href="<?=base_url()?>index.php/InternationalTrip">International</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="<?=base_url()?>index.php/Gallery">Gallery</a></li>
                  <li><a href="<?=base_url()?>index.php/About/aboutus">About Us</a></li>
                  <li><a href="<?=base_url()?>index.php/About/ourguides">Our Guides</a></li>
                  <li><a href="<?=base_url()?>index.php/About/contactus">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="<?=base_url()?>index.php/About/partners">Partners</a></li>
                  <li><a href="<?=base_url()?>index.php/About/testimonials">Testimonials</a></li>
                  <li><a href="<?=base_url()?>index.php/Merchantdise">Merchantdise</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading mb-4">Contact Us</h3>
            <div class="row">
              <div class="col-md-10">
                <span class="icon-map-marker d-inline" style="font-size: 20px"></span>
                <p class="d-inline pl-4">Alamat Menyusul</p>
              </div>
              <div class="col-md-10 mt-2">
                <span class="icon-phone d-inline" style="font-size: 20px"></span>
                <p class="d-inline pl-3">+62 813-3772-7343</p>
              </div>
              <div class="col-md-12 mt-2">
                <span class="icon-envelope d-inline" style="font-size: 20px"></span>
                <p class="d-inline pl-3">tigadewaadventureindonesia@gmail.com</p>
              </div>
              <!-- <div class="col-md-9">
                <p>+62 813-3772-7343</p>
              </div> -->
            </div>
          </div> 
            
          </div>
          
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
          
        </div>
      </div>
    </footer>

    </div>

    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/mediaelement-and-player.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.countdown.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/aos.js"></script>
    <script src="<?=base_url()?>assets/js/circleaudioplayer.js"></script>

    <script src="<?=base_url()?>assets/js/main.js"></script>

    <script type="text/javascript">
        var nav = document.querySelector('nav'); // Identify target

        window.addEventListener('scroll', function(event) { // To listen for event
            event.preventDefault();

            if (window.scrollY >= 100) { // Just an example
                nav.style.backgroundColor = 'rgb(34,34,34)'; // or default color
            } else {
                nav.style.backgroundColor = 'transparent';
            }
        });

        function selRegion() {
            if (document.getElementById("region").value === "Indonesia") {
                document.getElementById("idn1").style.display = "block";
                document.getElementById("idn2").style.display = "block";
                document.getElementById("int1").style.display = "none";
                document.getElementById("int2").style.display = "none";
            }
            if (document.getElementById("region").value === "International") {
                document.getElementById("idn1").style.display = "none";
                document.getElementById("idn2").style.display = "none";
                document.getElementById("int1").style.display = "block";
                document.getElementById("int2").style.display = "block";
            }
        }

        function APIprovince() {
            //debugger
            //alert("su");
            var xhr;
            if (window.XMLHttpRequest) {
              xhr = new XMLHttpRequest();
            } else{
              alert("Browser tidak mendukung AJAX");
            }
            xhr.open("GET", "https://dev.farizdotid.com/api/daerahindonesia/provinsi");
            xhr.send(null);

            xhr.onload = function() {
              if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                  // console.log(xhr.response);
                  // console.log(xhr.responseText);
                  var res = JSON.parse(xhr.responseText);
                  var tes = "";
                  for(var a = 0; a < res.semuaprovinsi.length; a++){
                    // txt += "<p>" + res[a].nama + "<p><br>";
                    // tes += res.semuaprovinsi[a]
                    tes += '<option value="'+res.semuaprovinsi[a].id+res.semuaprovinsi[a].nama+'">'+res.semuaprovinsi[a].nama+'</option>';
                  }
                  // console.log(tes);
                  $('#province').html(tes);
                  // document.getElementById("listHistoryAPI").innerHTML = txt;
                  //alert(res);
                }
              }
            };

        }

        function APIcity(provid) {
            //debugger
            var prov = provid;
            var idp = prov.substring(0, 2);
            // alert(provid);
            // console.log(idp);
            var xhr;
            if (window.XMLHttpRequest) {
              xhr = new XMLHttpRequest();
            } else{
              alert("Browser tidak mendukung AJAX");
            }
            xhr.open("GET", "https://dev.farizdotid.com/api/daerahindonesia/provinsi/"+idp+"/kabupaten");
            xhr.send(null);

            xhr.onload = function() {
              if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                  // console.log(xhr.response);
                  // console.log(xhr.responseText);
                  var pes = JSON.parse(xhr.responseText);
                  var tjes = "";
                  var mbohsu = "";
                  for(var q = 0; q < pes.kabupatens.length; q++){
                    // txt += "<p>" + res[a].nama + "<p><br>";
                    // tes += res.semuaprovinsi[a]
                    mbohsu = pes.kabupatens[q].nama.trim();
                    //alert(mbohsu);
                    tjes += '<option value="'+mbohsu+'">'+pes.kabupatens[q].nama+'</option>';
                  }
                  // console.log(tes);
                  $('#city').html(tjes);
                  // document.getElementById("listHistoryAPI").innerHTML = txt;
                  //alert(res);
                }
              }
            };

        }

        $(document).ready(function(){
            APIprovince();
            APIcity();
            // $('#province').change(function(){ 
            //     var hai = $(this).val();
            //     var id = hai.substring(0, 2);
            //     $.ajax({
            //         url : "<?php echo base_url('index.php/OpenTrip/get_regencies');?>",
            //         method : "POST",
            //         data : {id: id},
            //         async : true,
            //         contentType: "application/json",
            //         dataType : 'json',
            //         success: function(data){
                         
            //             var html = '';
            //             var i;
            //             for(i=0; i<data.length; i++){
            //                 html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
            //             }
            //             $('#cities').html(html);
            //             console.log(html);
            //         }
            //     });
            //     return false;
            // }); 
        });

        function overview(){
        var ov = document.getElementById("overview");
        var ovc = document.getElementById("overviewContent");
        var it = document.getElementById("itinerary")
        var itc = document.getElementById("itineraryContent")
        var pd = document.getElementById("priceDetail")
        var pdc = document.getElementById("priceDetailContent")
        var pr = document.getElementById("preparation")
        var prc = document.getElementById("preparationContent")
        var gl = document.getElementById("gearList")
        var glc = document.getElementById("gearListContent")
        ov.style.color = "#fe6700";
        ov.style.borderBottom = "2px solid #fe6700";
        ovc.style.display = "block";
        it.style.color = "#000";
        it.style.borderBottom = "2px solid #000";
        itc.style.display = "none";
        pd.style.color = "#000";
        pd.style.borderBottom = "2px solid #000";
        pdc.style.display = "none";
        pr.style.color = "#000";
        pr.style.borderBottom = "2px solid #000";
        prc.style.display = "none";
        gl.style.color = "#000";
        gl.style.borderBottom = "2px solid #000";
        glc.style.display = "none";
        }

        function itinerary(){
        var ov = document.getElementById("overview");
        var ovc = document.getElementById("overviewContent");
        var it = document.getElementById("itinerary")
        var itc = document.getElementById("itineraryContent")
        var pd = document.getElementById("priceDetail")
        var pdc = document.getElementById("priceDetailContent")
        var pr = document.getElementById("preparation")
        var prc = document.getElementById("preparationContent")
        var gl = document.getElementById("gearList")
        var glc = document.getElementById("gearListContent")
        ov.style.color = "#000";
        ov.style.borderBottom = "2px solid #000";
        ovc.style.display = "none";
        it.style.color = "#fe6700";
        it.style.borderBottom = "2px solid #fe6700";
        itc.style.display = "block";
        pd.style.color = "#000";
        pd.style.borderBottom = "2px solid #000";
        pdc.style.display = "none";
        pr.style.color = "#000";
        pr.style.borderBottom = "2px solid #000";
        prc.style.display = "none";
        gl.style.color = "#000";
        gl.style.borderBottom = "2px solid #000";
        glc.style.display = "none";
        }

        function priceDetail(){
        var ov = document.getElementById("overview");
        var ovc = document.getElementById("overviewContent");
        var it = document.getElementById("itinerary")
        var itc = document.getElementById("itineraryContent")
        var pd = document.getElementById("priceDetail")
        var pdc = document.getElementById("priceDetailContent")
        var pr = document.getElementById("preparation")
        var prc = document.getElementById("preparationContent")
        var gl = document.getElementById("gearList")
        var glc = document.getElementById("gearListContent")
        ov.style.color = "#000";
        ov.style.borderBottom = "2px solid #000";
        ovc.style.display = "none";
        it.style.color = "#000";
        it.style.borderBottom = "2px solid #000";
        itc.style.display = "none";
        pd.style.color = "#fe6700";
        pd.style.borderBottom = "2px solid #fe6700";
        pdc.style.display = "block";
        pr.style.color = "#000";
        pr.style.borderBottom = "2px solid #000";
        prc.style.display = "none";
        gl.style.color = "#000";
        gl.style.borderBottom = "2px solid #000";
        glc.style.display = "none";
        }

        function preparation(){
        var ov = document.getElementById("overview");
        var ovc = document.getElementById("overviewContent");
        var it = document.getElementById("itinerary")
        var itc = document.getElementById("itineraryContent")
        var pd = document.getElementById("priceDetail")
        var pdc = document.getElementById("priceDetailContent")
        var pr = document.getElementById("preparation")
        var prc = document.getElementById("preparationContent")
        var gl = document.getElementById("gearList")
        var glc = document.getElementById("gearListContent")
        ov.style.color = "#000";
        ov.style.borderBottom = "2px solid #000";
        ovc.style.display = "none";
        it.style.color = "#000";
        it.style.borderBottom = "2px solid #000";
        itc.style.display = "none";
        pd.style.color = "#000";
        pd.style.borderBottom = "2px solid #000";
        pdc.style.display = "none";
        pr.style.color = "#fe6700";
        pr.style.borderBottom = "2px solid #fe6700";
        prc.style.display = "block";
        gl.style.color = "#000";
        gl.style.borderBottom = "2px solid #000";
        glc.style.display = "none";
        }

        function gearList(){
        var ov = document.getElementById("overview");
        var ovc = document.getElementById("overviewContent");
        var it = document.getElementById("itinerary")
        var itc = document.getElementById("itineraryContent")
        var pd = document.getElementById("priceDetail")
        var pdc = document.getElementById("priceDetailContent")
        var pr = document.getElementById("preparation")
        var prc = document.getElementById("preparationContent")
        var gl = document.getElementById("gearList")
        var glc = document.getElementById("gearListContent")
        ov.style.color = "#000";
        ov.style.borderBottom = "2px solid #000";
        ovc.style.display = "none";
        it.style.color = "#000";
        it.style.borderBottom = "2px solid #000";
        itc.style.display = "none";
        pd.style.color = "#000";
        pd.style.borderBottom = "2px solid #000";
        pdc.style.display = "none";
        pr.style.color = "#000";
        pr.style.borderBottom = "2px solid #000";
        prc.style.display = "none";
        gl.style.color = "#fe6700";
        gl.style.borderBottom = "2px solid #fe6700";
        glc.style.display = "block";
        }

        function registration(){
        var reg = document.getElementById("registration");
        reg.style.display = "block";
        }
    </script>
        
    </body>
    </html>
