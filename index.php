<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="E-shop/assets/css/style.css">
  </head>
  <body>
    
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
        <img src="E-shop/assets/images/shopping-cart.avif" class="brand-logo">
        <h2 class="brandName">VociTech</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            </li>
            <li>
              <a class="nav-link" href="account.html"><i class="fas fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HOME -->
     <section id="home">
       <div class="home-actions">
        <h5>NEW ARRIVALS</h5>
        <h1><span>BEST PRICES</span></h1>
        <p>Offers</p>
        <button>Buy Now</button>
       </div>
     </section>

     <!-- BRANDS -->
      <section id="brand" class="container">
        <div class="row">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="E-shop/assets/images/brands/brand1.jpeg">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="E-shop/assets/images/brands/brand2.webp">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="E-shop/assets/images/brands/brand3.png">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="E-shop/assets/images/brands/brand4.png">
        </div>
      </section>
    
      <!-- NEW -->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
          <!-- 1 -->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="E-shop/assets/images/newProducts/1.webp">
            <div class="details">
              <h2>Extremely awesome shoes</h2>
              <button class="text-uppercase">Shop now</button>
            </div>
          </div>
          <!-- 2 -->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="E-shop/assets/images/newProducts/2.jpg">
            <div class="details">
              <h2>Awesome cargos</h2>
              <button class="text-uppercase">Shop now</button>
            </div>
          </div>
          <!-- 3 -->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="E-shop/assets/images/newProducts/3.avif">
            <div class="details">
              <h2>50% OFF Watches</h2>
              <button class="text-uppercase">Shop now</button>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured -->
      <section id="featured" class="my-5 pb-5" >
        <div class="container text-center">
          <h3>Our Featured Products</h3>
          <hr class="mx-auto">
          <p>Here you can <span class="fw-bold">check out</span> our new products</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('E-shop/server/get_featured_products.php'); ?>

        <?php foreach($featured_products as $row){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="E-shop/assets/images/featured/<?php echo $row['product_image'] ?>" class="img-fluid mb-3" alt="FOTO">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4 class="p-name"><?php echo $row['product_name'] ?></h4>
            <!-- <span>LIMITED EDITION<?php ?></span> -->
            <h4 class="p-price"><?php echo $row['product_price'] ?>$</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          
          <?php } ?>
        </div>
      </section>

<!-- Implement a see more button that navigates to more products of this category -->

      <!-- Banner -->
     <section id="banner">
      <div class="banner-actions">
       <h5>NEW ARRIVALS</h5>
       <h1><span>BEST PRICES</span></h1>
       <p>Offers</p>
       <button>Buy Now</button>
      </div>
    </section>


      <!-- Retro Kits -->

      <section id="retro" class="my-5 pb-5" >
        <div class="container text-center">
          <p> </p>
          <h3>Retro Kits</h3>
          <hr class="mx-auto">
          <p>Here you can <span class="fw-bold">check out</span> coolest old football kits</p>
        </div>
        <div class="row mx-auto container-fluid">
<?php include('E-shop/server/get_retro_kits.php'); ?>

        <?php foreach($retro_kits as $row){ ?>

          <div class="product text-center col-lg-4 col-md-4 col-sm-12">
            <img src="E-shop/assets/images/retro/<?php echo $row['product_image'] ?>" class="img-fluid mb-3" alt="FOTO">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4 class="p-name"><?php echo $row['product_name'] ?></h4>
            <!-- <span>LIMITED EDITION<?php ?></span> -->
            <h4 class="p-price"><?php echo $row['product_price'] ?>$</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          
          <?php } ?>
          
        </div>
      </section>

<!-- Implement a see more button that navigates to more products of this category -->
     

    <!-- Footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->

    <footer class="bg-black text-white text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Grid row -->
        <div class="row text-center">
          
          <!-- Column 1 -->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 150px; height: 150px;">
              <img src="E-shop/assets/images/shopping-cart.avif" height="70" alt="Logo" loading="lazy" />
            </div>
            <p>We provide you with the best and the most unique retro football items</p>
            <ul class="list-unstyled d-flex justify-content-center">
              <li><a class="text-white px-2" href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li><a class="text-white px-2" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="text-white px-2" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
    
          <!-- Column 2 -->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Retro Kits</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-white"><i class="fas fa-tshirt pe-2"></i>Italian clubs</a></li>
              <li class="mb-2"><a href="#" class="text-white"><i class="fas fa-tshirt pe-2"></i>Spanish clubs</a></li>
              <li class="mb-2"><a href="#" class="text-white"><i class="fas fa-tshirt pe-2"></i>English clubs</a></li>
              <li class="mb-2"><a href="#" class="text-white"><i class="fas fa-tshirt pe-2"></i>German clubs</a></li>
            </ul>
          </div>
    
          <!-- Column 3 -->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Contact</h5>
            <ul class="list-unstyled">
              <li><p><i class="fas fa-map-marker-alt pe-2"></i> Kominat, Kroi Banes, Tirane</p></li>
              <li><p><i class="fas fa-phone pe-2"></i> +355 69 26 82 180</p></li>
              <li><p><i class="fas fa-envelope pe-2"></i> dejvvoci@gmail.com</p></li>
            </ul>
          </div>
    
        </div>
        <!-- Grid row -->
      </div>
      <!-- Grid container -->
    
<!-- End of .container -->
      
    </footer>
    <script src="E-shop/assets/js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
