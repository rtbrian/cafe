<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the database connection file
include __DIR__ . '/db.php';

$stmt = $pdo->query("SELECT id, name, description, price, image_url, category FROM products");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="shop.css">
</head>
<body>
  <header>
    <?php include 'nav.php'; ?>
  </header>
  <main>
    <h1>Shop</h1>
    <div class="products">
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <div class="product">
            <img src="<?php echo htmlspecialchars(trim($product['image_url'])); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <div class="product-details">
              <h3><?php echo htmlspecialchars($product['name']); ?></h3>
              <p><?php echo htmlspecialchars($product['description']); ?></p>
              <div class="price">$<?php echo number_format($product['price'], 2); ?></div>
              <!-- Add to Cart Form -->
              <form method="post" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>">
                <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product['price']); ?>">
                <input type="hidden" name="product_description" value="<?php echo htmlspecialchars($product['description']); ?>">
                <input type="hidden" name="product_image" value="<?php echo htmlspecialchars(trim($product['image_url'])); ?>">
                <button type="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>No products available.</p>
      <?php endif; ?>
    </div>
    <!-- Checkout Button -->
    <div class="checkout">
      <a href="cart.php" class="btn-checkout">Checkout</a>
    </div>
  </main>
  <footer>
    <p>&copy; 2025 My Website. All rights reserved.</p>
  </footer>
</body>
</html>

