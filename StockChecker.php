<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="content">
  <h2> Stock Availability</h2>
  <?php
    $stock = 4;
    $availability = match (true) {
      $stock >= 10 => "In stock and ready to slay ",
      $stock >= 5 => "Low stock — hurry, beauties are buying fast ⚡",
      $stock >= 1 => "Almost gone! Grab yours now ",
      default => "Out of stock  Check back soon!"
    };

    echo "<p>Status: $availability</p>";
  ?>
</section>

<?php include 'includes/footer.php'; ?>
