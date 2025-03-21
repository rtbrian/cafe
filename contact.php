<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="home.css" />
</head>
<body>
  <header>
    <?php include 'nav.php'; ?>
  </header>
  <main>
  <section class="contact-section">
      <h1>Contact Us</h1>
      <p>We would love to hear from you! Please fill out the form below to get in touch.</p>
      <form action="/cgi-bin/send-message.py" method="post" class="contact-form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email" required />
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Subject" required />
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </section>
    <section class="contact-info">
  <p>
    We would love to hear from you. Please reach out with any questions or feedback.
  </p>
  <address>
    <p>Email: <a href="mailto:gacherubrian02@gmail.com">gacherubrian02@gmail.com</a></p>
    <p>Phone: 0773400758</p>
  </address>
</section>
  </main>
  <footer>
    <p>&copy; 2025 Modern Website. All rights reserved.</p>
  </footer>
</body>
</html>