<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Ayyappa Gifts</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
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
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contact Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Contact Us</h2>
    <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Have questions or want to place a bulk order? Reach out to us anytime — we’re happy to help!
    </p>

    <div class="row g-4">
      <!-- Contact Form -->
      <div class="col-md-6" data-aos="fade-right">
        <div class="card shadow border-0 p-4">
          <h5 class="fw-bold mb-3">Send a Message</h5>
          <form method="POST">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Message</label>
              <textarea name="message" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-warning w-100">Send Message</button>
          </form>

          <?php
          if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $message = $_POST['message'];

              $sql = "INSERT INTO contact (name, email, message, date) VALUES ('$name', '$email', '$message', NOW())";
              if ($conn->query($sql) === TRUE) {
                  echo "<div class='alert alert-success mt-3'>Message sent successfully! We’ll get back soon.</div>";
              } else {
                  echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
              }
          }
          ?>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6" data-aos="fade-left">
        <div class="card shadow border-0 p-4">
          <h5 class="fw-bold mb-3">Get in Touch</h5>
          <p><i class="bi bi-geo-alt-fill text-danger"></i>  Near Ayyappa Temple, Guntur, Andhra Pradesh</p>
          <p><i class="bi bi-telephone-fill text-success"></i>  +91 98765 43210</p>
          <p><i class="bi bi-envelope-fill text-primary"></i>  ayyappagifts@gmail.com</p>
          <hr>
          <h6 class="fw-bold mb-3">Connect With Us</h6>
          <a href="https://wa.me/919876543210" class="btn btn-success w-100 mb-2"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          <a href="https://www.instagram.com/" class="btn btn-danger w-100 mb-2"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="tel:+919876543210" class="btn btn-dark w-100"><i class="bi bi-telephone"></i> Call Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map -->
<section class="map">
  <div class="container-fluid px-0">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.605305925661!2d80.4229552746367!3d16.30384763446077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35efae7f70fd73%3A0x40c99f93eb6e5488!2sAyyappa%20Temple%2C%20Guntur!5e0!3m2!1sen!2sin!4v1699999999999!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
  <p class="mb-1">&copy; 2025 Ayyappa Gifts & Custom Packing</p>
  <p class="small mb-0">Designed with ❤️ by Jagadeesh</p>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
