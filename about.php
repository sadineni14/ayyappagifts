
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Ayyappa Gifts</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #fff8e1, #fff3cd);
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    /* Header */
    .about-header {
      background: url('assets/images/gift-bg.jpg') center/cover no-repeat;
      color: white;
      padding: 120px 0;
      text-align: center;
      position: relative;
    }
    .about-header::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }
    .about-header h1 {
      position: relative;
      z-index: 1;
      font-weight: 700;
      font-size: 2.8rem;
    }

    /* Story Section */
    .story-section {
      background: #fff;
      border-radius: 20px;
      padding: 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .story-section img {
      border-radius: 20px;
      object-fit: cover;
    }

    /* Values */
    .value-card {
      background: white;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: 0.4s;
    }

    .value-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 25px rgba(255,193,7,0.3);
    }

    .value-card i {
      font-size: 2.5rem;
      color: #ffb703;
      margin-bottom: 15px;
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
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
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="order.php">Order</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="about-header">
    <h1 data-aos="fade-down">About Ayyappa Gifts</h1>
  </section>

  <!-- Story Section -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-md-6" data-aos="fade-right">
          <div class="story-section">
            <h2 class="fw-bold mb-3 text-dark">Our Story</h2>
            <p class="text-muted">
              Founded in 2020, <strong>Ayyappa Gifts</strong> was born out of a passion to make every celebration
              memorable with gifts that carry a divine and personal touch. What started as a small family business
              near Ayyappa Temple in Guntur has now grown into a trusted brand for customized event gifts.
            </p>
            <p class="text-muted">
              From <strong>Bundhi & Laddu packets</strong> to customized wrapping and return gift boxes, 
              we take pride in blending tradition with creativity. Each order is crafted with devotion, 
              ensuring happiness in every delivery.
            </p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <img src="assets/images/about1.jpg" class="img-fluid shadow" alt="Our Story">
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Values -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4" data-aos="fade-up">Our Values</h2>
      <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
          <div class="value-card">
            <i class="bi bi-heart-fill"></i>
            <h5>Customer Love</h5>
            <p class="text-muted small">Every order is handled with personal care and devotion to customer satisfaction.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="value-card">
            <i class="bi bi-box2-heart-fill"></i>
            <h5>Quality Packing</h5>
            <p class="text-muted small">We use high-quality materials and custom prints to ensure a premium gift experience.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="value-card">
            <i class="bi bi-truck-front-fill"></i>
            <h5>Timely Delivery</h5>
            <p class="text-muted small">Every function matters — we guarantee on-time delivery for all bulk orders.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Floating -->
  <a href="https://wa.me/919876543210?text=Hi%20Ayyappa%20Gifts%2C%20tell%20me%20more%20about%20your%20products"
     class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

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
</body>
</html>
