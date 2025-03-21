<?php
session_start();
// Retrieve cart items from session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="cart.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <main>
    <section class="cart-section">
      <h1>Your Shopping Cart</h1>
      <?php if (!empty($cart)): ?>
        <table class="cart-table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $total = 0;
              foreach ($cart as $item):
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
            ?>
              <tr>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td><?php echo htmlspecialchars($item['description']); ?></td>
                <td>$<?php echo number_format($item['price'], 2); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($subtotal, 2); ?></td>
                <td>
                  <!-- Remove item form -->
                  <form method="post" action="remove_from_cart.php">
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($item['id']); ?>">
                    <button type="submit">Remove</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4">Total</td>
              <td colspan="2">$<?php echo number_format($total, 2); ?></td>
            </tr>
          </tfoot>
        </table>
        <div class="checkout">
          <a href="booking.php" class="btn-checkout">Proceed to Checkout</a>
        </div>
      <?php else: ?>
        <p>Your cart is empty.</p>
      <?php endif; ?>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
