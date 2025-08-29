<?php


session_start();
if(isset($_POST['add_to_cart'])){
  if(isset($_SESSION['cart'])){
    // if the user has already added products to the cart

    $products_array_ids = array_column($_SESSION['cart'], 'product_id'); // array with all products ids
    
    // if this exact product has not already been added to the cart
    if(!in_array($_POST['product_id'] ,$products_array_ids)){

        $product_array = array(
          'product_id' => $_POST['product_id'],
          'product_name' => $_POST['product_name'],
          'product_image' => $_POST['product_image'],
          'product_price' => $_POST['product_price'],
          'product_quantity' => $_POST['product_quantity'],
        );

        $_SESSION['cart'][$product_id] = $product_array;
    }else{
      echo '<script>alert("Product was already added  to the cart");</script>';
    //  echo '<script>window.location="index.php";</script>';

    }

  }else{ 
  // the first product of the cart
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
      'product_id' => $product_id,
      'product_name' => $product_name,
      'product_image' => $product_image,
      'product_price' => $product_price,
      'product_quantity' => $product_quantity,
    );

    $_SESSION['cart'][$product_id] = $product_array;
  }
}else{
     echo '<script>console.log("SKA POST");</script>';
}


?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
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
              <a class="nav-link" href="index.php">Home</a>
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

    <!-- Cart products -->
     <section class="cart container my-5 py-5">
      <div class="container mt-5">
        <h2 class="font-weight-bold">Your cart</h2>
        <hr>
      </div>
      <table class="mt-5 pt-5">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
        
        <?php foreach($_SESSION['cart'] as $key => $value){ ?>
        <tr>
          <td>
            <div class="product-info">
              <img src="<?php echo $value['product_image']; ?>" alt="">
              <div>
                <p><?php echo $value['product_name']; ?></p>
                <small><span>$</span><?php echo $value['product_price']; ?></small>
                <br>
                <a class="remve-button" href="#">Remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="<?php echo $value['product_quantity']; ?>">
            <a class="edit-button" href="#">Edit</a>
          </td>
          <td>
            <span>$</span>
            <span class="product-price">150</span>
          </td>
        </tr>
        
          <?php } ?>
      </table>

      <!-- Total table -->
       <div class="cart-total">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$450</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$450</td>
          </tr>
        </table>
       </div>

       <!-- Checkout button -->
       <div class="checkout-container">
        <button class="button checkout-button">Checkout</button>
       </div>
      </section>

     
    
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