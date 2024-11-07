<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style1.css">
    <?php require 'vendor/autoload.php'; ?> <!-- Load the Twilio PHP SDK -->
</head>

<body>
    <div class="container">
        <div class="form-box box">

            <?php
            // Include database connection
            include "connection.php";

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $messageBody = $_POST['message']; // Renamed to avoid conflict

                // Insert message into database
                $query = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$messageBody')";
                $data = mysqli_query($conn, $query);

                // Twilio credentials
                $sid = 'AC23215ff66bf62067f76531b9fe00c132'; // Your Twilio Account SID
                $token = '198f3868edce45508524c2e2b907e7bf';  // Your Twilio Auth Token
                $twilioNumber = '+8954069933'; // Your Twilio number

                // Send SMS using Twilio
                $twilio = new Twilio\Rest\Client($sid, $token);

                try {
                    $twilio->messages->create(
                        '+918954069933', // The number to send the message to
                        [
                            'from' => $twilioNumber, // Your Twilio number
                            'body' => 'You have a new message from: ' . $name . 
                                      ', Email: ' . $email . 
                                      ', Subject: ' . $subject . 
                                      ', Message: ' . $messageBody
                        ]
                    );
                    echo "<div class='message'>
                        <p>Message sent successfully ✨</p>
                    </div><br>";
                } catch (Exception $e) {
                    echo "<div class='message'>
                        <p>Error sending message: " . $e->getMessage() . " 😔</p>
                    </div><br>";
                }

                // Check if data was successfully inserted into the database
                if ($data) {
                    echo "<a href='home.php'><button class='btn'>Go Back</button></a>";
                } else {
                    echo "<a href='home.php'><button class='btn'>Go Back</button></a>";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>
