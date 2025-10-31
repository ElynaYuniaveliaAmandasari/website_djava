<?php
include 'backend/db.php';
$menu = $conn->query("SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="en">
  

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DJava</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div>  
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Djava</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#menu">Menu</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#bestseller">Best Seller</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimoni">Testimoni</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/header-bg-1.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong>DJava</strong> Setiap Tegukan Penuh Rasa</span>
                            </h1>
                            <p class="animated2">Nikmati minuman racikan terbaik dengan bahan pilihan<br> untuk menemani harimu</p>	
                            <a href="#menu" class="page-scroll btn btn-primary animated1">Lihat Menu</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="images/header-back.png" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                    		  <span>Menu Favorite <strong>Pelanggan</strong></span>
                    	    </h1>
                            <p class="animated2">Dari milk tea hingga mojito - semua bisa kamu pilih<br> Pesan langsung dari website</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated3">Lihat Best Seller</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="images//galaxy.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>Pesan mudah via </span> <strong>WhatsApp</strong></span>
                            </h1>
                            <p class="animated1">Klik tombol di bawah untuk langsung memesan minuman favoritmu!</p>	
                             <a class="animated3 slider btn btn-primary btn-min-block" href="https://wa.me/6282133177750" target="_blank">Pesan Sekarang</a>
                                
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    
    
<section id="about" class="feature-section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Tentang DJava</h3>
      <p>DJava adalah UMKM lokal yang menghadirkan berbagai varian minuman teh, kopi, dan soda dengan cita rasa khas dan harga bersahabat.</p>
    </div>

    <div class="row text-center">
      <div class="col-md-4 col-sm-6">
        <div class="feature">
          <i class="fa fa-leaf"></i>
          <h4>Bahan Berkualitas</h4>
          <p>Semua minuman kami dibuat dari bahan pilihan terbaik untuk menjaga rasa dan kesegaran.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature">
          <i class="fa fa-coffee"></i>
          <h4>Varian Menu Lengkap</h4>
          <p>Dari teh buah segar hingga kopi susu kekinian, semua tersedia sesuai selera kamu.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature">
          <i class="fa fa-heart"></i>
          <h4>Dibuat dengan Cinta</h4>
          <p>Setiap gelas minuman DJava diracik dengan sepenuh hati agar pelanggan selalu puas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
    
    <!-- Start Menu Section -->
<section id="menu" class="portfolio-section-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h3>Menu DJava</h3>
          <p>Pilih menu favoritmu, tambahkan ke keranjang, dan pesan lewat WhatsApp</p>
        </div>                        
      </div>
    </div>

    <div class="row text-center">
      <?php while($row = $menu->fetch_assoc()): ?>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <div class="menu-card">
            <img src="images/menu/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
            <h4><?= htmlspecialchars($row['name']) ?></h4>
            <p class="price">Rp <?= number_format($row['price'], 0, ',', '.') ?></p>
            <button onclick="addToCart('<?= addslashes($row['name']) ?>', <?= $row['price'] ?>)" class="btn btn-success btn-sm">Tambah</button>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

        <!-- End Menu Section -->

        <!-- Start Cart Section -->
        <section id="cart-section" class="cart-section" style="background:#f8f8f8; padding:30px 0;">
          <div class="container">
            <h3 class="text-center">Keranjang</h3>
            <ul id="cart-list" style="list-style:none; padding-left:0; font-size:16px;"></ul>
            <p class="text-center"><strong>Total:</strong> Rp <span id="cart-total">0</span></p>
            <div class="text-center">
              <button class="btn btn-success" onclick="checkout()">Pesan Sekarang</button>
            </div>
          </div>
        </section>
        <!-- End Cart Section -->
    
    <!-- Start Portfolio Modal Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Portfolio Details</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                        </div>
                        <div class="col-md-6">
                            <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                        </div>
                        
                    </div><!-- /.row -->
                </div>                
            </div>
        </div>
        <!-- End Portfolio Modal Section -->
    
    
<section id="bestseller" class="best-seller-section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Menu Terlaris DJava</h3>
      <p>Beberapa menu favorit pelanggan kami</p>
    </div>

    <div class="row text-center">
      <!-- Request Bento Cake -->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="menu-card">
                      <img src="images/menu/bento-cake.jpeg" alt="Request Bento Cake">
                      <h4>Request Bento Cake</h4>
                      <p class="price">Rp 25.000</p>
                    </div>
                  </div>
      <!-- Matcha Tea -->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="menu-card">
                      <img src="images/menu/macha-tea.jpeg" alt="Matcha Tea">
                      <h4>Matcha Tea</h4>
                      <p class="price">Rp 8.000</p>
                    </div>
                  </div>
      <!-- Blackcurrent Tea -->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="menu-card">
                      <img src="images/menu/blackbery-tea.jpeg" alt="Blackcurrent Tea">
                      <h4>Blackcurrent Tea</h4>
                      <p class="price">Rp 5.000</p>
                    </div>
                  </div>
      <!-- Caramel Coffee -->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="menu-card">
                      <img src="images/menu/caramel-coffe.jpeg" alt="Caramel Coffee">
                      <h4>Caramel Coffee</h4>
                      <p class="price">Rp 7.000</p>
                    </div>
                  </div>
      <!-- Mojito Leci -->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="menu-card">
                      <img src="images/menu/mojito.jpeg" alt="Mojito Leci">
                      <h4>Mojito Leci</h4>
                      <p class="price">Rp 10.000</p>
                    </div>
                  </div>
</section>
        
    <!-- Start Testimonial Section -->
<div id="testimoni" class="testimonial-section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Kata Pelanggan Kami</h3>
      <p>Beberapa ulasan jujur dari pelanggan DJava</p>
    </div>

    <div id="testimonial-carousel" class="testimonials-carousel">
      <div class="testimonials item">
        <div class="testimonial-content text-center">
          <img src="images/testimonial/foto1.jpeg" alt="pelanggan" class="img-circle" width="80">
          <p>“Tehnya seger banget, rasa buahnya kerasa asli. Favoritku Markisa Tea!”</p>
          <h5>- Rani, Mahasiswi</h5>
        </div>
      </div>

      <div class="testimonials item">
        <div class="testimonial-content text-center">
          <img src="images/testimonial/foto2.jpeg" alt="pelanggan" class="img-circle" width="80">
          <p>“Pelayanan cepat, bisa langsung pesan via WhatsApp. Harga bersahabat banget.”</p>
          <h5>- Budi, Pelajar</h5>
        </div>
      </div>

      <div class="testimonials item">
        <div class="testimonial-content text-center">
          <img src="images/testimonial/foto3.jpeg" alt="pelanggan" class="img-circle" width="80">
          <p>“Pas banget buat nongkrong sore!”</p>
          <h5>- Dita, Freelancer</h5>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- End Testimonial Section -->

   
<section id="contact" class="contact">
  <div class="container text-center">
    <div class="section-title">
      <h3>Hubungi Kami</h3>
      <p>Ingin pesan atau tanya dulu? Hubungi DJava langsung!</p>
    </div>

    <div class="contact-box">
      <p><strong>Alamat:</strong><br>Jl. Kradenan, Palang, Tuban</p>
      <p><strong>Telepon / WhatsApp:</strong><br>
        <a href="https://wa.me/6282133177750" target="_blank">082133177750</a>
      </p>
      <p><strong>Instagram:</strong><br>
        <a href="https://www.instagram.com/djava.place?igsh=aXhrM3A4c2ZveHY=" target="_blank">@djava.place</a>
      </p>
      <p><strong>Jam Operasional:</strong><br>Setiap hari pukul 09.00 - 22.00</p>
    </div>
  </div>
</section>



    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

    <script>
  let cart = [];

  function addToCart(name, price) {
    cart.push({ name, price });
    alert(name + " ditambahkan ke keranjang!");
    renderCart();
  }

  function renderCart() {
    let cartSection = document.getElementById('cart-section');
    if (!cartSection) return;

    const list = document.getElementById('cart-list');
    const total = document.getElementById('cart-total');
    list.innerHTML = '';
    let sum = 0;

    cart.forEach((item, index) => {
      list.innerHTML += `
        <li>${item.name} - Rp ${item.price.toLocaleString()} 
        <button onclick="removeItem(${index})" class="btn btn-danger btn-xs">x</button></li>`;
      sum += item.price;
    });

    total.textContent = sum.toLocaleString();
  }

  function removeItem(index) {
    cart.splice(index, 1);
    renderCart();
  }

  function checkout() {
    if (cart.length === 0) {
      alert("Keranjang masih kosong!");
      return;
    }
    let pesan = "Halo, saya ingin memesan:%0A";
    cart.forEach(item => {
      pesan += `- ${item.name} (Rp ${item.price.toLocaleString()})%0A`;
    });
    const total = cart.reduce((sum, i) => sum + i.price, 0);
    pesan += `%0ATotal: Rp ${total.toLocaleString()}`;
    window.open(`https://wa.me/6282133177750?text=${pesan}`, "_blank");
  }
</script>

</body>

</html>
