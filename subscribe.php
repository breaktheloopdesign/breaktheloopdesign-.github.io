<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $file = fopen("emails.csv", "a"); // Opens the file in append mode
    fputcsv($file, [$email]); // Writes the email to the file in CSV format
    fclose($file);
    echo "Email saved successfully!";
}
?>
