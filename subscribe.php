<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $file = fopen("emails.csv", "a");  // Open the file in append mode
    fputcsv($file, [$email]);  // Write the email to the file in CSV format
    fclose($file);
    echo "Email saved successfully!";
} else {
    // Not a POST request
    http_response_code(405);
    echo "Method not allowed";
}
?>
