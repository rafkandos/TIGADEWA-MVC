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
  <?php foreach($gal as $g) { ?>

  <div class="site-wrap">

    <nav class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              
              <a href="<?=base_url()?>index.php/Home">
                <img src="<?=base_url()?>assets/images/tigadewa1.png" style="width: 250px;">
              </a>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-3 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="<?=base_url()?>index.php/Home">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="#">Trip</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="<?=base_url()?>index.php/OpenTrip">Open Trip</a></li>
                      <li><a href="<?=base_url()?>index.php/PrivateTrip">Private Trip</a></li>
                      <li><a href="<?=base_url()?>index.php/InternationalTrip">International Trip</a></li>
                    </ul>
                  </li>
                  <li class="active"><a href="<?=base_url()?>index.php/Gallery">Gallery</a></li>
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
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover overlay" style="background-image: url('<?=base_url()?>assets/images/mount6.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="200">
            
              <h1 class="mb-4" style="color: #fe6700; font-weight: bold;"><?php echo $g->tripName?></h1>
              <p class="mb-5"><?php echo $g->tripDate?> <?php echo $g->year?></p>
            
          </div>
        </div>
      </div>
    </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
  
          <figure>
            <img src="<?=base_url()?>assets/uploads/<?php echo $g->picture; ?>" alt="Image" class="img-fluid">
            <figcaption><?php echo $g->picture; ?></figcaption>
          </figure>
  
          <p><?php echo $g->detail?></p>
  
  
          <!-- <div class="pt-5">
            <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a
                href="#">#asia</a></p>
          </div> -->
  
  
          <!-- <div class="pt-5">
            <h3 class="mb-5 text-white">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>
  
              <li class="comment">
                <div class="vcard">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
  
                <ul class="children">
                  <li class="comment">
                    <div class="vcard">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                        ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                        impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply rounded">Reply</a></p>
                    </div>
  
  
                    <ul class="children">
                      <li class="comment">
                        <div class="vcard">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply rounded">Reply</a></p>
                        </div>
  
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste
                                iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
  
              <li class="comment">
                <div class="vcard">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>
            </ul>
  
            <div class="comment-form-wrap">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>
  
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary px-4 py-3">
                </div>
  
              </form>
            </div>
          </div> -->
  
        </div>
  
  
        <!-- <div class="col-md-3 ml-auto">
          <div class="mb-5">
            <h3 class="h5 text-white mb-3">Search</h3>
            <form action="#" method="post">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
              </div>
            </form>
          </div>
  
          <div class="mb-5">
            <h3 class="h5 text-white mb-3">Popular Posts</h3>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li class="mb-2"><a href="#">Quaerat rerum voluptatibus veritatis</a></li>
              <li class="mb-2"><a href="#">Maiores sapiente veritatis reprehenderit</a></li>
              <li class="mb-2"><a href="#">Natus eligendi nobis</a></li>
            </ul>
          </div>
  
          <div class="mb-5">
            <h3 class="h5 text-white mb-3">Recent Comments</h3>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">James</a> <em>in</em> <a href="#">Lorem ipsum dolor sit amet</a></li>
              <li class="mb-2"><a href="#">James</a> <em>in</em> <a href="#">Quaerat rerum voluptatibus veritatis</a>
              </li>
              <li class="mb-2"><a href="#">James</a> <em>in</em> <a href="#">Maiores sapiente veritatis
                  reprehenderit</a></li>
              <li class="mb-2"><a href="#">James</a> <em>in</em> <a href="#">Natus eligendi nobis</a></li>
            </ul>
          </div>
  
        </div> -->
  
      </div>
    </div>
  </div>

  <?php } ?>

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