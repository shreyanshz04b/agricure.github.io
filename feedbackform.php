<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Feedback Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #e3fdfd, #ffe6fa);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .feedback-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeInUp 0.5s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            border-color: #6a5acd;
            box-shadow: 0 0 8px rgba(106, 92, 205, 0.5);
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .emoji-rating {
            margin: 10px 0;
            text-align: center;
        }

        .emoji-rating label {
            font-size: 25px;
            cursor: pointer;
            margin: 0 5px;
            position: relative; /* For tooltip positioning */
            transition: transform 0.3s ease;
        }

        .emoji-rating label:hover {
            transform: scale(1.2);
        }

        /* Tooltip styling */
        .tooltip {
            visibility: hidden;
            width: 100px;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 30px; /* Position above the emoji */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: visibility 0s, opacity 0.3s;
        }

        /* Tooltip colors based on emoji */
        .emoji-rating label:nth-child(1):hover .tooltip {
            background-color: #4CAF50; /* Green for 😊 */
            visibility: visible;
            opacity: 1;
        }
        .emoji-rating label:nth-child(2):hover .tooltip {
            background-color: #2196F3; /* Light Blue for 🙂 */
            visibility: visible;
            opacity: 1;
        }
        .emoji-rating label:nth-child(3):hover .tooltip {
            background-color: #FFEB3B; /* Light Yellow for 😐 */
            visibility: visible;
            opacity: 1;
        }
        .emoji-rating label:nth-child(4):hover .tooltip {
            background-color: #FF9800; /* Light Orange for 🙁 */
            visibility: visible;
            opacity: 1;
        }
        .emoji-rating label:nth-child(5):hover .tooltip {
            background-color: #F44336; /* Red for 😡 */
            visibility: visible;
            opacity: 1;
        }

        button {
            background: linear-gradient(45deg, #6a5acd, #ff69b4);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
            font-size: 16px;
            font-weight: bold;
            margin: 10px 5px;
            box-shadow: 0 4px 15px rgba(106, 92, 205, 0.3);
        }

        button:hover {
            background: linear-gradient(45deg, #ff69b4, #6a5acd);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(106, 92, 205, 0.4);
        }

        .clear-button {
            background: #f44336;
        }

        .clear-button:hover {
            background: #e57373;
        }

        .thank-you-message {
            display: none;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="feedback-form" id="feedbackForm">
        <h2>Feedback Form</h2>
        <form id="form" action="submit_feedback.php" method="POST">
            <div>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div>
                <select id="feedbackCategory" name="category" required>
                    <option value="">Select Feedback Category</option>
                    <option value="General">General</option>
                    <option value="Compliment">Compliment</option>
                    <option value="Complaint">Complaint</option>
                    <option value="Suggestion">Suggestion</option>
                </select>
            </div>
            <div>
                <textarea id="feedback" name="message" placeholder="Your Feedback" required></textarea>
            </div>
            <div class="emoji-rating">
                <span>How do you feel?</span><br>
                <label>
                    <input type="radio" name="emoji" value="😊" required>
                    😊
                    <span class="tooltip">Excellent</span>
                </label>
                <label>
                    <input type="radio" name="emoji" value="🙂">
                    🙂 
                    <span class="tooltip">Good</span>
                </label>
                <label>
                    <input type="radio" name="emoji" value="😐">
                    😐
                    <span class="tooltip">Average</span>
                </label>
                <label>
                    <input type="radio" name="emoji" value="🙁">
                    🙁
                    <span class="tooltip">Bad</span>
                </label>
                <label>
                    <input type="radio" name="emoji" value="😡">
                    😡
                    <span class="tooltip">Terrible</span>
                </label>
            </div>
            <button type="submit">Submit</button>
            <button type="button" class="clear-button" onclick="clearForm()">Clear</button>
        </form>
        <div class="thank-you-message" id="thankYouMessage"></div>
    </div>

    <script>
        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const category = document.getElementById('feedbackCategory').value;
            const feedback = document.getElementById('feedback').value;
            const emoji = document.querySelector('input[name="emoji"]:checked').value;

            // AJAX request to submit feedback
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'submit_feedback.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const thankYouMessage = document.getElementById('thankYouMessage');
                    thankYouMessage.innerHTML = `<strong>Thank you, ${name}!</strong> Your feedback has been recorded.<br>Category: ${category} | Feeling: ${emoji}`;
                    thankYouMessage.style.display = 'block';
                    document.getElementById('form').reset();
                } else {
                    alert('Error submitting feedback');
                }
            };
            xhr.send(`name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&category=${encodeURIComponent(category)}&message=${encodeURIComponent(feedback)}&emoji=${encodeURIComponent(emoji)}`);
        });
    </script>

</body>
</html>