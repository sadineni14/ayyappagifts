<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Products - Ayyappa Gifts</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #fff7e6, #fff0cc);
      font-family: 'Poppins', sans-serif;
    }

    .product-header {
      background: url('assets/images/gift-bg.jpg') center/cover no-repeat;
      color: white;
      padding: 100px 0 80px;
      text-align: center;
      position: relative;
    }
    .product-header::after {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.6);
    }
    .product-header h1 {
      position: relative;
      z-index: 1;
      font-weight: 700;
      font-size: 2.8rem;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
    }

    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: 0.4s;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      background: white;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3);
    }

    .card img {
      height: 220px;
      object-fit: cover;
      width: 100%;
    }

    .price {
      color: #ff8c00;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .btn-order {
      background: linear-gradient(90deg, #ffb703, #ff6f00);
      color: #fff;
      border: none;
      border-radius: 10px;
      transition: 0.3s;
    }
    .btn-order:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(255,193,7,0.4);
    }

    footer {
      background: #111;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4" href="index.html">🪔 Ayyappa Gifts</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="order.php">Order</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="product-header">
    <h1 data-aos="fade-down">🎁 Our Gift Collections</h1>
  </section>

  <!-- Product Cards -->
  <div class="container py-5">
    <div class="row g-4">
      <?php
      $sql = "SELECT * FROM products ORDER BY id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '
          <div class="col-md-4" data-aos="fade-up">
            <div class="card h-100">
              <img src="assets/images/'.$row["image"].'" alt="'.$row["name"].'">
              <div class="card-body text-center">
                <h5 class="fw-bold">'.$row["name"].'</h5>
                <p class="text-muted">'.$row["description"].'</p>
                <p class="price">₹'.$row["price"].'</p>
                <a href="order.php?product_id='.$row["id"].'" class="btn btn-order w-100 mt-2">
                  <i class="bi bi-cart-plus"></i> Order Now
                </a>
              </div>
            </div>
          </div>';
        }
      } else {
        echo "<p class='text-center'>No products available.</p>";
      }
      ?>
    </div>
  </div>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/919876543210?text=Hi%20I%20want%20to%20order%20custom%20gifts" 
     class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Footer -->
  <footer>
    &copy; 2025 Ayyappa Gifts & Custom Packing | Designed with ❤️ by Jagadeesh
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>

  <style>
  .whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: linear-gradient(135deg, #25D366, #128C7E);
    color: white;
    font-size: 28px;
    padding: 14px 18px;
    border-radius: 50%;
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    z-index: 999;
    transition: 0.3s;
  }
  .whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(37,211,102,0.6);
  }
  </style>
  <!-- 🔄 PRELOADER -->
<div id="preloader">
  <div class="preloader-content">
    <img src="assets/images/logo.png" alt="Ayyappa Gifts" class="preloader-logo mb-3">
    <div class="spinner-border text-warning" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <p class="mt-3 text-dark fw-semibold">Preparing your gifts...</p>
  </div>
</div>
<script>
window.addEventListener("load", function() {
  const preloader = document.getElementById("preloader");
  setTimeout(() => {
    preloader.classList.add("hide");
  }, 1500); // hides after 1.5 seconds
});
</script>

</body>
</html>
