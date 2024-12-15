<!-- <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer's autoloader (adjust the path to match where PHPMailer is installed)
require 'vendor/autoload.php'; // Adjust the path if necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['conName'] ?? '';
    $lastName = $_POST['conLName'] ?? '';
    $email = $_POST['conEmail'] ?? '';
    $phone = $_POST['conPhone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Set up PHPMailer to use SMTP
        // $mail->isSMTP();
        // $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        // $mail->SMTPAuth = true;
        // $mail->Username   = "sagarmali6546@gmail.com"; // Your email
        // $mail->Password   = "Sagar6546"; // Your password or app password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port = 587;

        // // Set the sender and recipient email addresses
        // $mail->setFrom('sagarmali6546@gmail.com', 'sagar'); // Your email address
        // $mail->addAddress($email); // Recipient email from the form

        // // Set email subject
        // $mail->Subject = 'Message from Contact Form';

        // // Prepare the email body
        // $emailBody = "<p><strong>First Name:</strong> {$firstName}</p>";
        // $emailBody .= "<p><strong>Last Name:</strong> {$lastName}</p>";
        // $emailBody .= "<p><strong>Email:</strong> {$email}</p>";
        // $emailBody .= "<p><strong>Phone:</strong> {$phone}</p>";
        // $emailBody .= "<p><strong>Message:</strong><br>{$message}</p>";

        // // Set email format to HTML
        // $mail->isHTML(true);
        // $mail->Body = $emailBody;
        // $mail->AltBody = strip_tags($emailBody); // For non-HTML clients

        // // Send the email
        // $mail->send();
        echo "Your message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?> -->