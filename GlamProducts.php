<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="content">
  <h2>Featured Glam Products</h2>
  <?php
    $products = [
      ["name" => "Blush Laptop Sleeve", "price" => 899],
      ["name" => "Pink Coder Hoodie", "price" => 1199],
      ["name" => "Soft Pastel Headphones", "price" => 1599],
      ["name" => "Cotton Candy Keyboard", "price" => 1799]
    ];

    echo "<ul>";
    foreach ($products as $product) {
      echo "<li>{$product['name']} — ₱{$product['price']}</li>";
    }
    echo "</ul>";
  ?>

  <h3>Switch Statement</h3>
  <?php
    $category = "accessory";

    switch ($category) {
      case "fashion":
        echo "<p>You’re browsing our fashion line — always on trend 💅</p>";
        break;
      case "tech":
        echo "<p>Discover pink-powered devices made for creators 💻💖</p>";
        break;
      case "accessory":
        echo "<p>Complete your look with our cutest accessories 🎀</p>";
        break;
      default:
        echo "<p>Pick a category to start your digital fashion journey 🌸</p>";
    }
  ?>
</section>

<?php include 'includes/footer.php'; ?>
