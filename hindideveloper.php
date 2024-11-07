<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Profiles</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            position: relative;
        }

        /* Navbar Styling */
        .navbar {
            width: 100%;
            background-color: #3498db;
            padding: 15px;
            display: flex;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar h1 {
            color: #fff;
            margin: 0;
            font-size: 1.8em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Card Styling */
        .card-hover {
            position: relative;
            width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(to bottom, #e3fdfd, #ffe6fa);
            margin: 10px; /* Reduced margin for horizontal layout */

        }
        .card-hover img {
            width: 100%;
            height: 250px;
            object-fit: undercover;
        }
        .card-hover__content {
            padding: 20px;
            text-align: center;
        }
        .card-hover__title {
            font-size: 1.5em;
            margin: 10px 0; /* Added margin for spacing */
        }
        .card-hover__text {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 15px;
        }
        .card-hover__buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .card-button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Sliding Contact Panel Style */
        .contact-panel {
            position: fixed;
            top: 0;
            right: -400px; /* Hidden off-screen initially */
            width: 400px;
            height: 100%;
            background-color: #ecf0f1;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            transition: right 0.3s ease; /* Smooth transition */
            padding: 20px;
            z-index: 1000;
            display: none; /* Hidden by default */
        }
        .contact-panel.open {
            right: 0; /* Slide into view */
            display: block; /* Show panel */
        }
        .contact-panel h2 {
            margin-top: 0;
        }
        .contact-panel button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Developer Image */
        .developer-image {
            width: 80px;
            height: 80px;
            border-radius: 50%; /* Circular image */
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Social Media Icons */
        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .social-icons a {
            margin: 0 5px;
            text-decoration: none;
        }
        .social-icons img {
            width: 35px; /* Size of social media icons */
            height: 35px;
            background: linear-gradient(to bottom, #e3fdfd, #ffe6fa);
        }

        /* Horizontal Row Styling */
        .horizontal-row {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            flex-wrap: wrap; /* Allow wrapping of cards */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h1>डेवलपर विवरण</h1>
    </div>

    <!-- Project In-charge Card -->
    <div class="horizontal-row">
        <div class="card-hover">
            <img src="images/mayanksir.jpg" alt="Project In-charge">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                    <span> डॉ. मयंक अग्रवाल</span> - प्रोजेक्ट इंचार्ज
                </h3>
                <p class="card-hover__text">सभी विकास कार्यों की निगरानी में अनुभवी नेता।</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('डॉ. मयंक अग्रवाल', 'विकास कार्यों की देखरेख में अनुभवी नेता।', 'images/mayanksir.jpg', 'https://linkedin.com/in/mayank', 'https://github.com/mayank', 'https://twitter.com/mayank', 'https://instagram.com/mayank', '9897626693', 'mayank.agrawal@gla.ac.in')">संपर्क करें</button>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-row">
    <div class="card-hover">
        <img src="images/chintu.jpg" alt="प्रोजेक्ट लीडर">
        <div class="card-hover__content">
            <h3 class="card-hover__title">
                <span> देवकीनंदन पांडे</span> - प्रोजेक्ट लीडर
            </h3>
            <p class="card-hover__text">प्रोजेक्ट लीडर: अभिनव दृष्टिकोण और रणनीतिक योजना के साथ प्रोजेक्ट का नेतृत्व करते हुए।</p>
            <div class="card-hover__buttons">
                <button class="card-button" onclick="contactDeveloper('देवकीनंदन पांडे', 'अभिनव दृष्टिकोण और रणनीतिक योजना के साथ प्रोजेक्ट का नेतृत्व करते हुए।', 'images/Professional.jpeg', 'https://www.linkedin.com/in/devkinandan-pandey-869482235/', 'https://github.com/devkinandan386', 'https://twitter.com/devkinandan', 'https://instagram.com/devkinandan386', '8954069933', 'devpandey3134@gmail.com')">संपर्क करें</button>
<!-- <button class="card-button" onclick="contactDeveloper(
    'Devkinandan Sharma',
    'UI/UX Designer: Expert in creating user-friendly interfaces and experiences.',
    'https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80', // Image
    'https://linkedin.com/in/devkinandan', // LinkedIn
    'https://github.com/devkinandan', // GitHub
    'https://twitter.com/devkinandan', // Twitter
    'https://instagram.com/devkinandan', // Instagram (update this)
    '234-567-8901', // Phone (update this)
    'devkinandan@example.com' // Email (update this)
)">Contact</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-row">
    <h2>टीम के सदस्य</h2>
</div>

<!-- प्रोजेक्ट लीडर कार्ड -->
<div class="horizontal-row">
    <div class="card-hover">
        <img src="https://images.unsplash.com/photo-1521141282020-5be9d7d4e1a2?crop=faces&fit=crop&w=500&q=80" alt="पटीम सदस्य 1">
        <div class="card-hover__content">
            <h3 class="card-hover__title">
                <span>हार्द्यांश सिंह</span> - बैकएंड डेवलपर</h3>
            </h3>
            <p class="card-hover__text">प्रोजेक्ट लीडर: अभिनव दृष्टिकोण और रणनीतिक योजना के साथ प्रोजेक्ट का नेतृत्व।</p>
            <div class="card-hover__buttons">
                <button class="card-button" onclick="contactDeveloper('हार्द्यांश सिंह', 'अभिनव दृष्टिकोण और रणनीतिक योजना के साथ प्रोजेक्ट का नेतृत्व।', 'https://images.unsplash.com/photo-1521141282020-5be9d7d4e1a2?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/johnsmith', 'https://github.com/johnsmith', 'https://twitter.com/johnsmith', 'https://instagram.com/johnsmith', '99189 66991', 'johnsmith@example.com')">संपर्क करें</button>
            </div>
        </div>
    </div>
    
    <!-- टीम सदस्य कार्ड -->
    <div class="card-hover">
        <img src="https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80" alt="टीम सदस्य 2">
        <div class="card-hover__content">
            <h3 class="card-hover__title">
                <span>देवेश चौधरी</span> - फ्रंटएंड डेवलपर</h3>
            </h3>
            <p class="card-hover__text">डेवलपर: फ्रंटएंड विकास और उपयोगकर्ता अनुभव में विशेषज्ञता।</p>
            <div class="card-hover__buttons">
                <button class="card-button" onclick="contactDeveloper('देवेश चौधरी', 'फ्रंटएंड विकास और उपयोगकर्ता अनुभव में विशेषज्ञता।', 'https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/alicejohnson', 'https://github.com/alicejohnson', 'https://twitter.com/alicejohnson', 'https://instagram.com/alicejohnson', '63973 74765', 'alicejohnson@example.com')">संपर्क करें</button>
            </div>
        </div>
    </div>

    <div class="card-hover">
        <img src="images/k.jpg" alt="टीम सदस्य 3">
        <div class="card-hover__content">
            <h3 class="card-hover__title">
                <span>दिव्यांशी राजपूत</span> - यूआई/यूएक्स डिज़ाइनर</h3>
            </h3>
            <p class="card-hover__text">डेवलपर: बैकएंड तकनीकों और डेटाबेस प्रबंधन पर ध्यान केंद्रित।</p>
            <div class="card-hover__buttons">
                <button class="card-button" onclick="contactDeveloper('दिव्यांशी राजपूत', 'बैकएंड तकनीकों और डेटाबेस प्रबंधन पर ध्यान केंद्रित।', 'images/k.jpg', 'https:inkedin.com/in/divyanshi-rajput-a11732264/', 'https://github.com/Divyanshi-Rajput', 'https://twitter.com/bobbrown', 'https://www.instagram.com/31rajputdiv/', '95488 10430', '31rajputdiv@gmail.com')">संपर्क करें</button>
            </div>
        </div>
    </div>

    <div class="card-hover">
        <img src="https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80" alt="टीम सदस्य 4">
        <div class="card-hover__content">
            <h3 class="card-hover__title">
                <span>हर्ष भारद्वाज</span> - प्रोजेक्ट सदस्य</h3>
            </h3>
            <p class="card-hover__text">डेवलपर: बैकएंड तकनीकों और डेटाबेस प्रबंधन पर ध्यान केंद्रित।</p>
            <div class="card-hover__buttons">
                <button class="card-button" onclick="contactDeveloper('हर्ष भारद्वाज', 'बैकएंड तकनीकों और डेटाबेस प्रबंधन पर ध्यान केंद्रित।', 'https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/bobbrown', 'https://github.com/bobbrown', 'https://twitter.com/bobbrown', 'https://instagram.com/bobbrown', '70171 64754', 'bobbrown@example.com')">संपर्क करें</button>
            </div>
        </div>
    </div>
</div>

    <!-- Contact Panel -->
    <div class="contact-panel" id="contactPanel">
        <h2>डेवलपर से संपर्क करें</h2>
        <div id="developerDetails"></div>
        <br>
        <center>
        <button onclick="closeContactPanel()">बंद करें</button>
        </center>
    </div>

    <script>
        function contactDeveloper(name, description, image, linkedIn, github, twitter, instagram, phone, email) {
            const details = `
                <div style="text-align:center;">
                    <img src="${image}" class="developer-image" alt="${name}">
                    <h3>${name}</h3>
                    <p>${description}</p>
                    <p><strong>Phone:</strong> ${phone}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <div class="social-icons">
                        <a href="${linkedIn}" target="_blank"><img src="https://img.icons8.com/ios-filled/50/3498db/linkedin.png" alt="LinkedIn"></a>
                        <a href="${github}" target="_blank"><img src="https://img.icons8.com/ios-filled/50/3498db/github.png" alt="GitHub"></a>
                        <a href="${twitter}" target="_blank"><img src="https://img.icons8.com/ios-filled/50/3498db/twitter.png" alt="Twitter"></a>
                        <a href="${instagram}" target="_blank"><img src="https://img.icons8.com/ios-filled/50/3498db/instagram.png" alt="Instagram"></a>
                    </div>
                </div>
            `;
            document.getElementById('developerDetails').innerHTML = details;
            document.getElementById('contactPanel').classList.add('open');
        }

        function closeContactPanel() {
            document.getElementById('contactPanel').classList.remove('open');
        }
    </script>
</body>
</html>
