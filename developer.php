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
        <h1>Developer Details</h1>
    </div>

    <!-- Project In-charge Card -->
    <div class="horizontal-row">
        <div class="card-hover">
            <img src="images/mayanksir.jpg" alt="Project In-charge">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                    <span> Dr. Mayank Agrawal</span> - Project In-charge
                </h3>
                <p class="card-hover__text">Project In-charge: Experienced leader overseeing all development tasks.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Dr. Mayank Agrawal', 'Experienced leader overseeing all development tasks.', 'images/mayanksir.jpg', 'https://linkedin.com/in/mayank', 'https://github.com/mayank', 'https://twitter.com/mayank', 'https://instagram.com/mayank', '9897626693', 'mayank.agrawal@gla.ac.in')">Contact</button>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-row">
        <div class="card-hover">
            <img src="images/Professional.jpeg" alt="Project Leader">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                    <span> Devkinandan Pandey</span> - Project Leader
                </h3>
                <p class="card-hover__text">Project Leader: Leading projects with innovative approaches and strategic planning.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Devkinandan Pandey', 'Leading projects with innovative approaches and strategic planning.', 'images/chintu.jpg', 'https://www.linkedin.com/in/devkinandan-pandey-869482235/', 'https://github.com/devkinandan386', 'https://twitter.com/devkinandan', 'https://instagram.com/devkinandan386', '8954069933', 'devpandey3134@gmail.com')">Contact</button>
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
        <h2>Team Members</h2>
    </div>

    <!-- Project Leader Card -->
    <div class="horizontal-row">
        <div class="card-hover">
            <img src="https://images.unsplash.com/photo-1521141282020-5be9d7d4e1a2?crop=faces&fit=crop&w=500&q=80" alt="Team Member 1">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                <span>Hardyansh Singh</span> - Backend Developer</h3>
                </h3>
                <p class="card-hover__text">Project Leader: Leading projects with innovative approaches and strategic planning.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Hardyansh Singh', 'Leading projects with innovative approaches and strategic planning.', 'https://images.unsplash.com/photo-1521141282020-5be9d7d4e1a2?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/johnsmith', 'https://github.com/johnsmith', 'https://twitter.com/johnsmith', 'https://instagram.com/johnsmith', '99189 66991', 'johnsmith@example.com')">Contact</button>
                </div>
            </div>
        </div>
        
        <!-- Team Member Cards -->
        <div class="card-hover">
            <img src="https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80" alt="Team Member 2">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                <span>Devesh Chaudhary</span> - Frontend Developer</h3>
                </h3>
                <p class="card-hover__text">Developer: Specializes in front-end development and user experience.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Devesh Chaudhary', 'Specializes in front-end development and user experience.', 'https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/alicejohnson', 'https://github.com/alicejohnson', 'https://twitter.com/alicejohnson', 'https://instagram.com/alicejohnson', '63973 74765', 'alicejohnson@example.com')">Contact</button>
                </div>
            </div>
        </div>

        <div class="card-hover">
            <img src="images/k.jpg" alt="Team Member 3">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                <span>Divyanshi Rajput</span> - UI/UX Designer</h3>
                </h3>
                <p class="card-hover__text">Developer: Focuses on back-end technologies and database management.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Divyanshi Rajput', 'Focuses on back-end technologies and database management.', 'images/k.jpg', 'https:inkedin.com/in/divyanshi-rajput-a11732264/', 'https://github.com/Divyanshi-Rajput', 'https://twitter.com/bobbrown', 'https://www.instagram.com/31rajputdiv/', '95488 10430', '31rajputdiv@gmail.com')">Contact</button>
                </div>
            </div>
        </div>
    </div>
        <div class="card-hover">
            <img src="https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80" alt="Team Member 4">
            <div class="card-hover__content">
                <h3 class="card-hover__title">
                <span>Harsh Bhardwaj</span> - Project member
                </h3>
                <p class="card-hover__text">Developer: Focuses on back-end technologies and database management.</p>
                <div class="card-hover__buttons">
                    <button class="card-button" onclick="contactDeveloper('Harsh Bhardwaj', 'Focuses on back-end technologies and database management.', 'https://images.unsplash.com/photo-1511441282120-40b1cc81d165?crop=faces&fit=crop&w=500&q=80', 'https://linkedin.com/in/bobbrown', 'https://github.com/bobbrown', 'https://twitter.com/bobbrown', 'https://instagram.com/bobbrown', '70171 64754', 'bobbrown@example.com')">Contact</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Panel -->
    <div class="contact-panel" id="contactPanel">
        <h2>Contact Developer</h2>
        <div id="developerDetails"></div>
        <br>
        <center>
        <button onclick="closeContactPanel()">Close</button>
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
