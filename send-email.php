<?php
// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Forbidden"]);
    exit;
}

// Set response header
header('Content-Type: application/json');

// Get form data
$firstName = strip_tags(trim($_POST["firstName"]));
$lastName = strip_tags(trim($_POST["lastName"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = strip_tags(trim($_POST["phone"]));
$service = strip_tags(trim($_POST["service"]));
$message = strip_tags(trim($_POST["message"]));

// Basic Validation
if (empty($firstName) || empty($lastName) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Please fill out all required fields correctly."]);
    exit;
}

// Email Details
$recipient = "hello@hmwebs.co.uk";
$subject = "New Contact Job from $firstName $lastName - HMWebs";

// Build Email Content
$email_content = "Name: $firstName $lastName\n";
$email_content .= "Email: $email\n";
$email_content .= "Phone: $phone\n";
$email_content .= "Service Interest: $service\n\n";
$email_content .= "Message:\n$message\n";

// Email Headers
$email_headers = "From: $firstName $lastName <$email>";

// Send Email
if (mail($recipient, $subject, $email_content, $email_headers)) {
    http_response_code(200);
    echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent."]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Oops! Something went wrong and we couldn't send your message."]);
}
?>
