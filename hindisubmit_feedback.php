<?php
// डेटाबेस कनेक्शन के पैरामीटर
$host = 'localhost'; // डेटाबेस होस्ट
$db = 'feedback_db'; // डेटाबेस का नाम
$user = 'root'; // डेटाबेस उपयोगकर्ता नाम
$pass = ''; // डेटाबेस पासवर्ड

// कनेक्शन बनाएं
$conn = new mysqli($host, $user, $pass, $db);

// कनेक्शन जांचें
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "कनेक्शन असफल: " . $conn->connect_error]));
}

// जांचें कि फॉर्म सबमिट हुआ है या नहीं
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $category = htmlspecialchars(trim($_POST['category']));
    $message = htmlspecialchars(trim($_POST['message']));  // संदेश को कैप्चर करें
    $emoji = htmlspecialchars(trim($_POST['emoji']));

    // ईमेल मान्य करें
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "अमान्य ईमेल प्रारूप।"]);
        exit;
    }

    // जांचें कि संदेश खाली नहीं है
    if (empty($message)) {
        echo json_encode(["status" => "error", "message" => "संदेश खाली नहीं हो सकता।"]);
        exit;
    }

    // तैयार करें और बाइंड करें
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, category, message, emoji) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        echo json_encode(["status" => "error", "message" => "प्रस्तुति असफल: " . $conn->error]);
        exit;
    }

    $stmt->bind_param("sssss", $name, $email, $category, $message, $emoji);

    // स्टेटमेंट को निष्पादित करें
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "प्रतिक्रिया सफलतापूर्वक सबमिट की गई!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "त्रुटि: " . $stmt->error]);
    }

    // कनेक्शन बंद करें
    $stmt->close();
}

$conn->close();
?>
