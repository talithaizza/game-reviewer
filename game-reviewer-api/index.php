<?php 
  $url = "http://localhost/rest_ci/api/game";
  $json = file_get_contents($url);
  $array = json_decode($json, true);
 
  
  // function jumlahKategori($data, $nama_kategori){
  //   $jumlah = 0;
  //   foreach ($data as $row){
  //       if($row['kategori'] == $nama_kategori){
  //         $jumlah = $jumlah + 1;
  //       }
  //   }
  //   return $jumlah;
  // }

  // $jumlah_kategori_action = jumlahKategori($array['data'], 'Action'); 
  // $jumlah_kategori_strategy = jumlahKategori($array['data'], 'Strategy'); 
  // $jumlah_kategori_edu = jumlahKategori($array['data'], 'Education'); 
  // $jumlah_kategori_casual = jumlahKategori($array['data'], 'Casual'); 
  // $jumlah_kategori_sport = jumlahKategori($array['data'], 'Sport');

  function getJumlah($data)
  {
    $kategori = array(
      array('nama' => 'Action', 'jumlah' => 0),
      array('nama' => 'Strategy', 'jumlah' => 0),
      array('nama' => 'Education', 'jumlah' => 0),
      array('nama' => 'Casual', 'jumlah' => 0),
      array('nama' => 'Sport', 'jumlah' => 0),
      array('nama' => 'Other', 'jumlah' => 0)
    );

    foreach ($data as $row){
        if($row['kategori'] == $kategori[0]['nama']){
          $kategori[0]['jumlah'] = $kategori[0]['jumlah'] + 1;
        }
        elseif($row['kategori'] == $kategori[1]['nama']){
          $kategori[1]['jumlah'] = $kategori[1]['jumlah'] + 1;
        }
        elseif($row['kategori'] == $kategori[2]['nama']){
          $kategori[2]['jumlah'] = $kategori[2]['jumlah'] + 1;
        }
        elseif($row['kategori'] == $kategori[3]['nama']){
          $kategori[3]['jumlah'] = $kategori[3]['jumlah'] + 1;
        }
        elseif($row['kategori'] == $kategori[4]['nama']){
          $kategori[4]['jumlah'] = $kategori[4]['jumlah'] + 1;
        }
        else {
          $kategori[5]['jumlah'] = $kategori[5]['jumlah'] + 1;
        }
    }
    return $kategori;
  }

  $jumlah = getJumlah($array['data']);
  
  // tampilkan jumlah Action?
  // echo $jumlah[0]['jumlah'];
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Game Reviewer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Game<span class="text-primary">Reviewer</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="#about">About</a></li>
        
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Game Reviewer for your choice</h1>
                <p data-aos="fade-up" data-aos-delay="100">Search anything you want to know about game.</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                    <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <!-- <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control rounded" placeholder="Location">
                    </div> -->
                    
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="" id="">
                        <option value="">All Categories</option>
                        <option value="">Action</option>
                        <option value="">Casual</option>
                        <option value="">Arcade</option>
                        <option value="">Puzzles</option>
                        <option value="">Education</option>
                        <option value="">Strategy</option>
                        <option value="">Sport</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        
        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-house"></span></span>
                <span class="caption mb-2 d-block">Action</span>
                <span class="number"><?php echo $jumlah[0]['jumlah']; ?></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-books"></span></span>
                <span class="caption mb-2 d-block">Education</span>
                <span class="number"><?php echo $jumlah[2]['jumlah']; ?></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                <span class="caption mb-2 d-block">Casual</span>
                <span class="number"><?php echo $jumlah[3]['jumlah']; ?></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-innovation"></span></span>
                <span class="caption mb-2 d-block">Strategy</span>
                <span class="number"><?php echo $jumlah[1]['jumlah']; ?></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Sport</span>
                <span class="number"><?php echo $jumlah[5]['jumlah']; ?></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-pizza"></span></span>
                <span class="caption mb-2 d-block">Other</span>
                <span class="number"><?php echo $jumlah[5]['jumlah']; ?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Trending Today</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <span class="category">Action</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                <address>Don St, Brooklyn, New York</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                <div class="lh-content">
                  <span class="category">Casual</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                  <address>Don St, Brooklyn, New York</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

              <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
                <div class="lh-content">
                  <span class="category">Strategy</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">iPhone X gray</a></h3>
                  <address>Don St, Brooklyn, New York</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

             

          </div>
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
              <div class="lh-content">
                <span class="category">Action</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html">Red Luxury Car</a></h3>
                <address>Don St, Brooklyn, New York</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>

            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <span class="category">Arcade</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                <address>Don St, Brooklyn, New York</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                <div class="lh-content">
                  <span class="category">Casual</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                  <address>Don St, Brooklyn, New York</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>
              <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Articles</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates </p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
              <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
              <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>

          <div class="col-12 text-center mt-4">
            <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
          </div>
        </div>
      </div>
    </div>
  
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6" id="about">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-4 text-left">
                <h2 class="footer-heading mb-4">Navigations</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Articles</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-3" >
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>