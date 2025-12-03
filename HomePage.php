<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="hero">
  <h1>Welcome to Jaymee’s Digital Dream Boutique </h1>
  <p>Where creativity meets code — blending tech and style 💻✨</p>
</section>

<section class="content">
  <h2>🎀 Conditional Statements (if-else)</h2>
  <?php
    $visitorType = "member";

    if ($visitorType == "admin") {
      echo "<p>Welcome back, Admin! Your boutique is shining bright 💼</p>";
    } elseif ($visitorType == "member") {
      echo "<p>Hello beautiful member! Check out our exclusive offers below!</p>";
    } else {
      echo "<p>Welcome guest — sign up to unlock premium pink perks!</p>";
    }
  ?>
</section>

<?php include 'includes/footer.php'; ?>
