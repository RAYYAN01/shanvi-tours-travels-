<?php
// Contact Form Handler for Shanvi Tours & Travels

// Never leak warnings/notices into what must stay valid JSON — set this
// in the script itself rather than relying only on .htaccess, since the
// PHP built-in dev server (php -S) ignores .htaccess entirely.
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('log_errors', '1');

session_start();

// Set response headers
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Initialize response array
$response = array('success' => false, 'message' => '');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Basic same-origin check — the form should only ever be posted to
    // from this site's own pages, so reject requests with a foreign
    // Origin/Referer. Not a substitute for a CSRF token, but a cheap
    // first filter against off-site form replay and mail-bombing.
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
    if ($origin !== '' && $host !== '' && strpos($origin, $host) === false) {
        $response['message'] = 'Request rejected.';
        echo json_encode($response);
        exit;
    }

    // Honeypot: a hidden field real visitors never fill in. Bots that
    // blindly fill every input trip this and get silently "succeeded"
    // so they don't retry with a smarter payload.
    if (!empty($_POST['website'])) {
        $response['success'] = true;
        $response['message'] = 'Thank you for contacting us! We will get back to you soon.';
        echo json_encode($response);
        exit;
    }

    // Simple per-session rate limit — one submission every 30 seconds.
    if (isset($_SESSION['last_contact_submit']) && (time() - $_SESSION['last_contact_submit']) < 30) {
        $response['message'] = 'Please wait a moment before sending another message.';
        echo json_encode($response);
        exit;
    }

    // Sanitize and validate input
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $service = isset($_POST['service']) ? trim(htmlspecialchars($_POST['service'])) : 'Not specified';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';

    // Strip any stray CR/LF defensively before anything touches a mail
    // header — filter_var() already rejects these in a valid email, but
    // this keeps the guarantee even if that check ever changes.
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $email);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $response['message'] = 'Please fill in all required fields.';
        echo json_encode($response);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
        echo json_encode($response);
        exit;
    }

    // Validate phone: digits, spaces, +, -, ( ) only, 7-15 digits total
    if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
        $response['message'] = 'Please enter a valid phone number.';
        echo json_encode($response);
        exit;
    }

    // Prepare email
    $to = 'info@shanvitoursandtravels.com'; // Change this to your actual email
    $subject = 'New Contact Form Submission - Shanvi Tours & Travels';

    $email_body = "
    New Contact Form Submission

    Name: $name
    Email: $email
    Phone: $phone
    Service Interested: $service

    Message:
    $message

    ---
    This email was sent from the contact form at shanvitoursandtravels.com
    ";

    $headers = "From: website@shanvitoursandtravels.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        $_SESSION['last_contact_submit'] = time();
        $response['success'] = true;
        $response['message'] = 'Thank you for contacting us! We will get back to you soon.';

        // Optionally, you can also save the submission to a database here
        // saveToDatabase($name, $email, $phone, $service, $message);

    } else {
        $response['message'] = 'Sorry, there was an error sending your message. Please try again or contact us directly at 9611120023.';
    }

} else {
    $response['message'] = 'Invalid request method.';
}

// Return JSON response
echo json_encode($response);
exit;

// Optional function to save to database
// function saveToDatabase($name, $email, $phone, $service, $message) {
//     // Database connection and insert code here
//     // Example:
//     // $conn = new mysqli($servername, $username, $password, $dbname);
//     // $sql = "INSERT INTO contacts (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)";
//     // $stmt = $conn->prepare($sql);
//     // $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);
//     // $stmt->execute();
//     // $stmt->close();
//     // $conn->close();
// }
?>
