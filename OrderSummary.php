<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="content">
  <h2>Order Summary</h2>
  <?php
    $orders = [
      ["item" => "Pink Coder Hoodie", "price" => 1199],
      ["item" => "Laptop Sleeve", "price" => 899],
      ["item" => "Keyboard", "price" => 1799]
    ];

    $total = 0;
    echo "<table>
            <tr><th>Item</th><th>Price (₱)</th></tr>";
    foreach ($orders as $order) {
      echo "<tr><td>{$order['item']}</td><td>{$order['price']}</td></tr>";
      $total += $order['price'];
    }
    echo "</table>";
    echo "<p><strong>Total:</strong> ₱$total</p>";

    echo "<h3>🌷 While Loop: Loyalty Points</h3>";
    $count = 1;
    while ($count <= count($orders)) {
      echo "You earned a reward point for item #$count <br>";
      $count++;
    }
  ?>
</section>

<?php include 'includes/footer.php'; ?>
