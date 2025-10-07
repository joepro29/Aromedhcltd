<?php
// Simple placeholder form handler for demo deployment.
// In production replace with validation/security measures and real email or DB handling.
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars($_POST['name'] ?? $_POST['fullname'] ?? 'N/A');
    $email = htmlspecialchars($_POST['email'] ?? 'N/A');
    $message = htmlspecialchars($_POST['message'] ?? 'N/A');
    $entry = date('c')." | $name | $email | $message\n";
    file_put_contents('messages.txt', $entry, FILE_APPEND);
    echo '<p>Thank you! Your message has been received. <a href="index.html">Back to home</a></p>';
} else {
    echo '<p>Invalid request.</p>';
}
?>