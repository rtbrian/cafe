<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking</title>
  <link rel="stylesheet" href="booking.css">
  <link rel="stylesheet" href="home.css" />
</head>
<body>
  <header>
    <?php include 'nav.php'; ?>
  </header>
  <main>
    <section>
      <h1>Booking</h1>
      <p>Please fill out the form below to book a service with us:</p>
      <form action="#" method="post">
        <div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div>
          <label for="date">Booking Date:</label>
          <input type="date" id="date" name="date" required />
        </div>
        <div>
          <label for="service">Service:</label>
          <select id="service" name="service">
            <option value="Pick Up">Pick Up </option>
            <option value="Delivery">Delivery</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div>
          <button type="submit">Book Now</button>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 K Group. All rights reserved.</p>
  </footer>
</body>
</html>
