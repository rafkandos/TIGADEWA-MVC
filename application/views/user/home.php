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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  
    <link rel="stylesheet" href="<?=base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    
  </head>
  <body>

  <div class="site-wrap">

    <nav class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <a href="#">
                <img src="<?=base_url()?>assets/images/tigadewa1.png" style="width: 250px;">
              </a>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-3 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="#">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="#">Trip</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="<?=base_url()?>index.php/OpenTrip">Open Trip</a></li>
                      <li><a href="<?=base_url()?>index.php/PrivateTrip">Private Trip</a></li>
                      <li><a href="<?=base_url()?>index.php/InternationalTrip">International Trip</a></li>
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
    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="site-blocks-cover overlay" style="background-image: url('<?=base_url()?>assets/images/mount1.jpg');"  data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h1 class="mb-4" style="color: #fe6700; font-size: 40pt;font-weight: bold;">you will never hike alone</h1>
            <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            <a href="#" class="mt-5 pt-2 pb-2 btn btn-orange font-weight-bold" data-toggle="modal" data-target="#exampleModal"
              style="width: 180px">BOOK NOW</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel">Choose Your Trip</h4>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4 ml-auto text-center">
                  <a href="<?=base_url()?>index.php/OpenTrip" class="btn btn-hai text-uppercase font-weight-bold mt-1">
                    <span class="icon-unlock" style="font-size: 30px;"></span><br>
                    Open trip
                  </a>
                </div>
                <div class="col-md-12 col-lg-4 ml-auto text-center">
                  <a href="<?=base_url()?>index.php/PrivateTrip" class="btn btn-hai text-uppercase font-weight-bld mt-1">
                    <span class="icon-lock" style="font-size: 30px;"></span><br>
                    Private Trip
                  </a>
                </div>
                <div class="col-md-12 col-lg-4 ml-auto text-center">
                  <a href="<?=base_url()?>index.php/InternationalTrip" class="btn btn-hai text-uppercase font-weight-bld mt-1">
                    <span class="icon-flag" style="font-size: 30px;"></span><br>
                    International Trip
                  </a>
                </div>
              </div>
            </div>
            
            
            
          </div>
          <!-- <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="opentrip.html" class="btn btn-brown text-uppercase">Go to Trip</a>
          </div> -->
        </div>
      </div>
    </div>

      <div class="container" 
        style="margin-top: -70px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" 
            style="box-shadow: 0 0 20px -3px rgba(0, 0, 0, 0.9);">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?=base_url()?>assets/images/hiking4.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>MOST POPULAR TRIP</h1>
                <p>Kilimanjaro Mountain (2019), 10 Members</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=base_url()?>assets/images/hiking2.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>MOST POPULAR TRIP</h1>
                <p>Panderman Mountain (2018), 7 Members</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=base_url()?>assets/images/hiking3.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>MOST POPULAR TRIP</h1>
                <p>Papandayan Mountain (2017), 5 Members</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Our Last Trip</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        
        <div class="site-block-retro d-block d-md-flex">

          <a href="#" class="col1 unit-9 no-height">
            <div class="image" style="background-image: url('<?=base_url()?>assets/images/hiking7.jpg');"></div>
            <div class="unit-9-content">
              <h2>Panderman Mountain</h2>
              <span>June 20th, 2019</span>
            </div>
          </a>

          <div class="col2 ml-auto">

            <a href="#" class="col2-row1 unit-9 no-height">
              <div class="image" style="background-image: url('<?=base_url()?>assets/images/hiking4.jpg');"></div>
              <div class="unit-9-content">
                <h2>Buthak Mountain</h2>
                <span>August 09th, 2019</span>
              </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height">
              <div class="image" style="background-image: url('<?=base_url()?>assets/images/hiking3.jpg');"></div>
              <div class="unit-9-content">
                <h2>Papandayan Mountain</h2>
                <span>October 10th, 2019</span>
              </div>
            </a>

          </div>

        </div>

        <div class="row mt-3">
          <div class="col-md-12 text-center mt-5">
            <a href="<?=base_url()?>index.php/Gallery" class="btn btn-brown">See All of Our Trip</a>
          </div>
        </div>
        
      </div>
    </div>
    
    <div class="site-section bg-light block-13">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Testimonials</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">
          
          <?php foreach ($testi as $t) { ?>
            <div class="text-center p-3 p-md-5 bg-white">
              <div class="mb-4">            
                <img src="<?=base_url()?>assets/uploads/<?php echo $t->photo?>" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
              </div>
              <div class="text-black">
                <h3 class="font-weight-bld h5"><?php echo $t->name?></h3>
                <p class="font-italic">&ldquo;<?php echo $t->caption?>&rdquo;</p>
              </div>
            </div>
          <?php }?>

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
  </script>
    
  </body>
</html>
