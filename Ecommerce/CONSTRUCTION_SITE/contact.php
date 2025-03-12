<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Insert into database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // Send email notification
        $to = "4kmconstructionlimitedservices@gmail.com"; // Replace with actual company email
        $subject = "New Contact Message from $name";
        $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";
        $body = "You have received a new message from $name.\n\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
