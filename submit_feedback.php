<?php
// Database connection parameters
$host = 'localhost'; // Database host
$db = 'feedback_db'; // Database name
$user = 'root'; // Database username
$pass = ''; // Database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $category = htmlspecialchars(trim($_POST['category']));
    $message = htmlspecialchars(trim($_POST['message']));  // Capture the message
    $emoji = htmlspecialchars(trim($_POST['emoji']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    // Check if message is empty
    if (empty($message)) {
        echo json_encode(["status" => "error", "message" => "Message cannot be empty."]);
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, category, message, emoji) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        echo json_encode(["status" => "error", "message" => "Prepare failed: " . $conn->error]);
        exit;
    }

    $stmt->bind_param("sssss", $name, $email, $category, $message, $emoji);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Feedback submitted successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
    }

    // Close connections
    $stmt->close();
}

$conn->close();
?>
