#!C:/Python313/python.exe
import sys
import os
from urllib.parse import parse_qs
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

# Function to retrieve form data
def get_form_data():
    # Check the request method
    if os.environ.get('REQUEST_METHOD', '').upper() == 'POST':
        try:
            # CONTENT_LENGTH might be missing or invalid
            content_length = int(os.environ.get('CONTENT_LENGTH', 0))
        except ValueError:
            content_length = 0
        post_data = sys.stdin.read(content_length)
        # Parse the URL-encoded POST data
        form = parse_qs(post_data)
        # Get values; if not present, use default.
        name = form.get('name', ['No Name'])[0]
        email = form.get('email', ['No Email'])[0]
        subject = form.get('subject', ['No Subject'])[0]
        message = form.get('message', ['No Message'])[0]
        return name, email, subject, message
    else:
        return "No Name", "No Email", "No Subject", "No Message"

# Retrieve form data
name, user_email, subject, message = get_form_data()

# Email configuration - update these with your actual details.
sender_email = "gacherubrian93@gmail.com"    
receiver_email = "gacherubrian93@gmail.com"    
password = "dxde wybh pneh ntws"

# Compose the email message.
msg = MIMEMultipart()
msg['From'] = sender_email
msg['To'] = receiver_email
msg['Subject'] = f"Contact Form Submission: {subject}"
# Set the Reply-To header to the user's email
msg.add_header('Reply-To', user_email)

# Create the email body.
body = f"Name: {name}\nEmail: {user_email}\n\nMessage:\n{message}"
msg.attach(MIMEText(body, 'plain'))
try:
    # Connect to the SMTP server (using Gmail's SMTP server as an example).
    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.starttls()  # Secure the connection.
    server.login(sender_email, password)
    server.sendmail(sender_email, receiver_email, msg.as_string())
    server.quit()
    result_message = "Email sent successfully."
except Exception as e:
    result_message = f"Error sending email: {e}"

# Output the HTTP header and HTML response.
print("Content-Type: text/html")
print()
print(f"""
<html>
  <head>
    <title>Contact Form Result</title>
    <style>
      body {{ font-family: Arial, sans-serif; margin: 2rem; }}
      .message {{ padding: 1rem; background-color: #f9f9f9; border: 1px solid #ddd; }}
      a {{ color: #ff9600; text-decoration: none; }}
    </style>
  </head>
  <body>
    <div class="message">
      <p>{result_message}</p>
      <p><a href="/contact.php">Return to Contact Page</a></p>
    </div>
  </body>
</html>
""")

