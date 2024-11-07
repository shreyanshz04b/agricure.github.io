<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Homepage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* Light background */
        }
        .navbar {
            background-color: #4CAF50;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc3MjN8MHwxfGFsbHwyfHx8fHx8fHwxNjc2MTY1ODI5&ixlib=rb-4.0.3&q=80&w=1600') no-repeat center center; 
            background-size: cover;
            height: 80vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeIn 2s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .feature-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div>
            <h1 class="display-4">Welcome to AGRI-CURE</h1>
            <p class="lead">Empowering farmers with innovative solutions</p>
            <a href="#about" class="btn btn-warning btn-lg">Learn More</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5 text-center">
        <div class="container">
            <h2 class="text-success">About Us</h2>
            <p class="lead">AGRI-CURE is dedicated to supporting farmers with quality resources, innovative techniques, and sustainable practices for better yields.</p>
        </div>
    </section>

    <!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <h2 class="text-center text-success">Our Features</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card feature-card mb-4">
                    <img src="https://via.placeholder.com/400x300?text=Expert+Advice" class="card-img-top" alt="Expert Advice">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Expert Advice</h5>
                        <p class="card-text">Consult with agricultural experts to optimize your farming practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card mb-4">
                    <img src="https://via.placeholder.com/400x300?text=Quality+Products" class="card-img-top" alt="Quality Products">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Quality Products</h5>
                        <p class="card-text">Find high-quality fertilizers, seeds, and agricultural tools in our store.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card mb-4">
                    <img src="https://via.placeholder.com/400x300?text=Support+%26+Resources" class="card-img-top" alt="Support & Resources">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Support & Resources</h5>
                        <p class="card-text">Access a wealth of resources and support for all your farming needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
<section id="contact" class="py-5 text-center">
    <div class="container">
        <h2 class="text-success">Get in Touch</h2>
        <p class="lead">Have questions or need assistance? Contact us!</p>
        <form id="contactForm" action="send_email.php" method="POST">
            <div class="form-row justify-content-center">
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-md-8 mb-3">
                    <textarea class="form-control" name="message" placeholder="Your Message" rows="3" required></textarea>
                </div>
            </div>
            <button class="btn btn-success" type="submit">Send Message</button>
        </form>
        <div id="successMessage" class="mt-3" style="display: none; color: green;">
            Your message has been sent successfully!
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 AGRI-CURE. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | 
                <a href="#">Terms of Service</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            document.getElementById('successMessage').style.display = 'block'; // Show success message
            this.reset(); // Clear form fields
        });
    </script>
</body>
</html>
