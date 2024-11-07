<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Reference - AGRI-CURE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
            background-color: #f9fcff;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* Hero Section */
        .hero {
            background: url('https://source.unsplash.com/1600x800/?farm,agriculture') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 120px 20px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin: 0;
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 20px;
        }

        /* About Section */
        .about-section {
            background-color: #f3f8fb;
            padding: 60px 20px;
            text-align: center;
        }

        .about-section h2 {
            color: #006400;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        /* Researcher Section */
        .researcher-section {
            background-color: #e9f5e9;
            padding: 60px 20px;
        }

        .researcher-card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
            background: #ffffff;
        }

        .researcher-card:hover {
            transform: translateY(-8px);
        }

        .researcher-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .researcher-card h5 {
            color: #006400;
            margin-top: 10px;
            font-size: 1.6rem;
        }

        /* Research Paper Section */
        .research-paper-section {
            background-color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }

        .research-paper-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .research-paper-list {
            list-style: none;
            padding: 0;
            max-width: 700px;
            margin: 0 auto;
        }

        .research-paper-item {
            padding: 15px;
            background: #f7f7f7;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .research-paper-item:hover {
            background: #eef2f5;
        }

        .research-paper-item a {
            color: #006400;
            text-decoration: none;
            font-weight: bold;
        }

        /* FAQ Section */
        .faq-section {
            background-color: #e8f4e8;
            padding: 60px 20px;
        }

        .faq-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .faq {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .faq h5 {
            color: #006400;
            font-weight: 500;
        }

        /* Contact Section */
        .contact-section {
            background-color: #f3f8fb;
            padding: 60px 20px;
            text-align: center;
        }

        .contact-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Footer */
        .footer {
            background: #006400;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Agricultural Research Styles */
        #agricultural-research {
            background-color: #f9f9f9;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        #agricultural-research h2 {
            color: #2c3e50;
        }

        #agricultural-research ul {
            list-style-type: none;
            padding-left: 0;
            display: flex; /* Flexbox for horizontal layout */
            flex-wrap: wrap; /* Wrap items if they exceed width */
            justify-content: center; /* Center align items */
        }

        #agricultural-research li {
            margin: 10px; /* Spacing between list items */
            padding: 15px; /* Padding for items */
            background: #ffffff; /* Background for items */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        #agricultural-research a {
            color: #2980b9;
            text-decoration: none;
        }

        #agricultural-research a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #2E7D32; padding: 15px; position: relative;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #FFC107; font-size: 30px; font-weight: bold; text-transform: uppercase;">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: #FFC107;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="display: flex; flex-direction: row; list-style: none; padding-left: 0;">
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#researchers" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            Researchers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#research-papers" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            Research Papers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Hero Section -->
    <section style="background-image: url('https://source.unsplash.com/1600x900/?agriculture,sustainable-farming'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center; position: relative; padding: 20px;">
        <header style="background: rgba(0, 0, 0, 0.7); padding: 50px; border-radius: 15px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);">
            <h1 style="font-size: 4rem; margin: 0; font-weight: bold;">Welcome to AGRI-CURE Research Hub</h1>
            <p style="font-size: 1.6rem; margin: 20px 0;">Explore cutting-edge agricultural research, expert advice, and innovative solutions for sustainable farming.</p>
            <div style="margin-top: 40px;">
                <h3 style="font-size: 1.5rem;">Featured Research Areas:</h3>
                <ul style="list-style-type: none; padding: 0; font-size: 1.2rem;">
                    <li>🌾 Sustainable Crop Production</li>
                    <li>🌱 Innovative Pest Management</li>
                    <li>💧 Water Conservation Techniques</li>
                    <li>🍃 Soil Health Improvement</li>
                </ul>
                <a href="#about" style="display: inline-block; padding: 10px 20px; background-color: #ffc107; color: #fff; font-size: 18px; text-align: center; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    Learn More
</a>

            </div>
        </header>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2>About AGRI-CURE</h2>
            <p>AGRI-CURE is dedicated to providing the latest agricultural research and resources to enhance farming practices and support sustainable agriculture.</p>
        </div>
    </section>

    <!-- Agricultural Research Section -->
<section id="agricultural-research" class="py-5">
    <div class="container">
        <h2 class="text-center text-success">Agricultural Research Areas</h2>
        <ul>
            <li><a href="https://www.fao.org/crop-improvement/en/" target="_blank">Crop Improvement</a></li>
            <li><a href="https://www.fao.org/soils-portal/en/" target="_blank">Soil Management</a></li>
            <li><a href="https://www.irrigation.org/IA/Education/Resources/Irrigation_Techniques.aspx" target="_blank">Irrigation Techniques</a></li>
            <li><a href="https://www.epa.gov/pesticides/pest-control-and-pesticide-safety" target="_blank">Pest Control</a></li>
            <li><a href="https://www.un.org/sustainabledevelopment/sustainable-agriculture/" target="_blank">Sustainable Farming Practices</a></li>
        </ul>
    </div>
</section>

<!-- Researchers Section -->
<section class="researcher-section" id="researchers">
    <div class="container">
        <h2>Meet Our Researchers</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="researcher-card fade-in">
                    <h5>Dr. A. Kumar</h5>
                    <p>Expert in sustainable agriculture and soil science.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="researcher-card fade-in">
                    <h5>Dr. S. Sharma</h5>
                    <p>Specializes in crop genetics and biotechnology.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="researcher-card fade-in">
                    <h5>Dr. R. Verma</h5>
                    <p>Focuses on pest management and ecological farming.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Research Paper Section -->
<section class="research-paper-section" id="research-papers" class="py-5">
    <div class="container">
        <h2 class="text-center text-success">Research Papers</h2>
        <ul class="research-paper-list">
            <li class="research-paper-item">
                <a href="https://www.ipcc.ch/report/ar6/wg2/" target="_blank">Impact of Climate Change on Agriculture</a>
                <span class="badge bg-success">2024</span>
            </li>
            <li class="research-paper-item">
                <a href="https://www.fao.org/3/cb9082en/cb9082en.pdf" target="_blank">Innovative Irrigation Techniques</a>
                <span class="badge bg-success">2023</span>
            </li>
            <li class="research-paper-item">
                <a href="https://www.mdpi.com/2071-1050/14/2/458" target="_blank">Advances in Organic Farming</a>
                <span class="badge bg-success">2022</span>
            </li>
        </ul>
    </div>
</section>


    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq">
                <h5>What is AGRI-CURE?</h5>
                <p>AGRI-CURE is a platform dedicated to agricultural research and resources.</p>
            </div>
            <div class="faq">
                <h5>How can I access research papers?</h5>
                <p>You can find research papers in the Research Papers section of this site.</p>
            </div>
            <div class="faq">
                <h5>How do I contact a researcher?</h5>
                <p>Please visit the Contact section for further information.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out!</p>
            <p>Email: devpandey3134@gmail.com</p>
            <p>Phone: +91 8954069933</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 AGRI-CURE. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
