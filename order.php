<?php include('db/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Place Order - Ayyappa Gifts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #fff8e1, #fff3cd);
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    .order-container {
      max-width: 650px;
      margin: 60px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      padding: 40px 50px;
      position: relative;
      overflow: hidden;
    }

    .order-container::before {
      content: '';
      position: absolute;
      top: -80px;
      left: -80px;
      width: 200px;
      height: 200px;
      background: radial-gradient(circle, rgba(255, 193, 7, 0.3) 0%, rgba(255, 193, 7, 0) 70%);
      z-index: 0;
    }

    .order-container::after {
      content: '';
      position: absolute;
      bottom: -80px;
      right: -80px;
      width: 200px;
      height: 200px;
      background: radial-gradient(circle, rgba(255, 87, 34, 0.3) 0%, rgba(255, 87, 34, 0) 70%);
      z-index: 0;
    }

    .order-container h2 {
      font-weight: 700;
      color: #333;
      margin-bottom: 25px;
      background: linear-gradient(90deg, #ffb703, #ff8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    .form-label {
      font-weight: 600;
      color: #444;
    }

    .form-control, .form-select {
      border-radius: 8px;
      border: 1px solid #ddd;
      box-shadow: none;
      transition: 0.3s;
    }

    .form-control:focus, .form-select:focus {
      border-color: #ffb703;
      box-shadow: 0 0 0 0.25rem rgba(255, 183, 3, 0.25);
    }

    .btn-success {
      background: linear-gradient(90deg, #ffb703, #ff8c00);
      border: none;
      transition: 0.4s;
      font-weight: 600;
    }

    .btn-success:hover {
      background: linear-gradient(90deg, #ffa000, #ff6f00);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 140, 0, 0.3);
    }

    .animated-gift {
      position: absolute;
      width: 80px;
      opacity: 0.15;
      animation: floatGift 10s infinite linear;
    }

    .animated-gift:nth-child(1) { top: 5%; left: 10%; animation-delay: 0s; }
    .animated-gift:nth-child(2) { bottom: 10%; right: 15%; animation-delay: 4s; }

    @keyframes floatGift {
      0% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(10deg); }
      100% { transform: translateY(0px) rotate(0deg); }
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>

<body>

  <!-- Floating background gift icons -->
  <img src="assets/images/gift1.png" class="animated-gift" alt="">
  <img src="assets/images/gift2.png" class="animated-gift" alt="">

  <div class="order-container" data-aos="fade-up">
    <h2><i class="bi bi-bag-heart-fill"></i> Place Your Order</h2>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" name="customer_name" class="form-control" placeholder="Enter your full name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" placeholder="e.g. 9876543210" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Event Type</label>
        <input type="text" name="event_type" class="form-control" placeholder="Marriage, Birthday, Housewarming, etc.">
      </div>

      <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" min="1" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Sweet Type</label>
        <select name="sweet_type" class="form-select">
          <option>Bundhi</option>
          <option>Laddu</option>
          <option>Both</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Custom Text (optional)</label>
        <input type="text" name="custom_text" class="form-control" placeholder="Write your custom message or label">
      </div>

      <div class="mb-3">
        <label class="form-label">Upload Logo/Image (optional)</label>
        <input type="file" name="image" class="form-control">
      </div>

      <button type="submit" name="submit" class="btn btn-success w-100 py-2 mt-3"><i class="bi bi-send-fill"></i> Submit Order</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
      $name = $_POST['customer_name'];
      $phone = $_POST['phone'];
      $event = $_POST['event_type'];
      $qty = $_POST['quantity'];
      $sweet = $_POST['sweet_type'];
      $text = $_POST['custom_text'];

      $image = $_FILES['image']['name'];
      $target = "assets/images/" . basename($image);
      move_uploaded_file($_FILES['image']['tmp_name'], $target);

      $sql = "INSERT INTO orders (customer_name, phone, event_type, quantity, sweet_type, custom_text, image, status, date)
              VALUES ('$name','$phone','$event','$qty','$sweet','$text','$image','Pending',NOW())";

      if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-4 text-center'>🎉 Order placed successfully! We’ll contact you soon.</div>";
      } else {
        echo "<div class='alert alert-danger mt-4'>Error: " . $conn->error . "</div>";
      }
    }
    ?>
  </div>

  <footer>
    &copy; 2025 Ayyappa Gifts & Custom Packing | Designed with ❤️ by Jagadeesh
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({ duration: 1000, once: true });</script>
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
