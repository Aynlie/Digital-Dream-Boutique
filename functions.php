<?php
declare(strict_types=1);

// Turn on error reporting so we can see problems while testing
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'includes/header.php';
include 'includes/nav.php';

// Store product information (price and stock)
$glamProducts = [
    "Blush Laptop Sleeve" => ["price" => 899, "stock" => 7],
    "Pink Coder Hoodie" => ["price" => 1199, "stock" => 12],
    "Soft Pastel Headphones" => ["price" => 1599, "stock" => 5],
    "Cotton Candy Keyboard" => ["price" => 1799, "stock" => 3],
    "Rose Quartz Mouse" => ["price" => 799, "stock" => 9],
    "Strawberry Powerbank" => ["price" => 999, "stock" => 20]
];

// Tax rate
$taxRate = 12;

// Function to check if we need to reorder
function checkReorder(int $stock): string {
    if ($stock < 10) {
        return "Yes";
    } else {
        return "No";
    }
}

// Function to calculate total value of stock
function calculateTotal(float $price, int $quantity): float {
    return $price * $quantity;
}

// Function to calculate tax due
function calculateTax(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}
?>

<section class="content">
    <h2>GlamProducts Stock Monitor</h2>
    <table border="1" cellpadding="6" cellspacing="0" style="width:80%; margin:auto; text-align:center; background-color:#ffe6f0;">
        <tr style="background-color:#ffb3d9;">
            <th>Product</th>
            <th>Stock</th>
            <th>Reorder?</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (₱)</th>
        </tr>

        <?php
        foreach ($glamProducts as $product => $info) {
            $price = $info['price'];
            $stock = $info['stock'];

            echo "<tr>";
            echo "<td>$product</td>";
            echo "<td>$stock</td>";
            echo "<td>" . checkReorder($stock) . "</td>";
            echo "<td>₱" . number_format(calculateTotal($price, $stock), 2) . "</td>";
            echo "<td>₱" . number_format(calculateTax($price, $stock, $taxRate), 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</section>

<?php include 'includes/footer.php'; ?>
