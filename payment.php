<?php
include('db/connect.php');

if (isset($_GET['amount'])) {
  $amount = $_GET['amount']; // from order page
} else {
  $amount = 100; // fallback for testing
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Ayyappa Gifts</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Razorpay -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

  <style>
    body {
      background: linear-gradient(135deg, #fff4e3, #ffe9b3);
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    .payment-container {
      max-width: 600px;
      margin: 80px auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      padding: 40px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .payment-container::before {
      content: "";
      position: absolute;
      top: -60px;
      left: -60px;
      width: 180px;
      height: 180px;
      background: radial-gradient(circle, rgba(255,193,7,0.25) 0%, rgba(255,193,7,0) 80%);
      z-index: 0;
    }

    .payment-container::after {
      content: "";
      position: absolute;
      bottom: -60px;
      right: -60px;
      width: 180px;
      height: 180px;
      background: radial-gradient(circle, rgba(255,111,0,0.25) 0%, rgba(255,111,0,0) 80%);
      z-index: 0;
    }

    .payment-container h2 {
      font-weight: 700;
      color: #222;
      z-index: 1;
      position: relative;
    }

    .gift-icon {
      font-size: 3rem;
      color: #ffb703;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%,100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.8; }
    }

    .btn-pay {
      background: linear-gradient(90deg, #ffb703, #ff6f00);
      color: #fff;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      padding: 12px 20px;
      transition: 0.4s;
    }

    .btn-pay:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(255, 183, 3, 0.3);
    }

    footer {
      text-align: center;
      margin-top: 60px;
      background: #111;
      color: #fff;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="payment-container" data-aos="fade-up">
    <i class="bi bi-gift-fill gift-icon"></i>
    <h2 class="mt-3">Secure Payment</h2>
    <p class="text-muted">Complete your order payment below</p>
    <div class="display-6 fw-bold mb-4 text-success">₹<?php echo $amount; ?></div>

    <button id="payBtn" class="btn btn-pay btn-lg w-100">
      <i class="bi bi-credit-card-2-front"></i> Pay Now
    </button>

    <div class="mt-4 text-muted small">
      <i class="bi bi-shield-lock"></i> 100% Secure Payments via Razorpay
    </div>
  </div>

  <footer>
    &copy; 2025 Ayyappa Gifts & Custom Packing | Designed with ❤️ by Jagadeesh
  </footer>

  <!-- Razorpay Payment Script -->
  <script>
    var options = {
      "key": "rzp_test_ABC123xyz", // 🔑 Replace with your Razorpay Key ID
      "amount": "<?php echo $amount * 100; ?>", 
      "currency": "INR",
      "name": "Ayyappa Gifts",
      "description": "Gift Order Payment",
      "image": "assets/images/gift1.jpg",
      "handler": function (response){
          alert("🎉 Payment successful! Payment ID: " + response.razorpay_payment_id);
          window.location.href = "payment_success.php?payment_id=" + response.razorpay_payment_id;
      },
      "theme": {
          "color": "#ffb703"
      }
    };

    document.getElementById('payBtn').onclick = function(e){
      var rzp1 = new Razorpay(options);
      rzp1.open();
      e.preventDefault();
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
