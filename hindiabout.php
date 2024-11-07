<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>कृषि होमपेज</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* हल्का बैकग्राउंड */
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

    <!-- नेविगेशन बार -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="नेविगेशन टॉगल करें">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">हमारे बारे में</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">विशेषताएँ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">संपर्क करें</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- हीरो सेक्शन -->
    <header class="hero">
        <div>
            <h1 class="display-4">AGRI-CURE में आपका स्वागत है</h1>
            <p class="lead">किसानों को नवीन समाधानों के साथ सशक्त बनाना</p>
            <a href="#about" class="btn btn-warning btn-lg">और जानें</a>
        </div>
    </header>

    <!-- हमारे बारे में सेक्शन -->
    <section id="about" class="py-5 text-center">
        <div class="container">
            <h2 class="text-success">हमारे बारे में</h2>
            <p class="lead">AGRI-CURE किसानों को बेहतर उपज के लिए गुणवत्ता संसाधनों, नवीन तकनीकों और सतत प्रथाओं के साथ समर्थन करने के लिए समर्पित है।</p>
        </div>
    </section>

    <!-- विशेषताएँ सेक्शन -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center text-success">हमारी विशेषताएँ</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card feature-card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-warning">विशेषज्ञ सलाह</h5>
                            <p class="card-text">अपने कृषि प्रथाओं को अनुकूलित करने के लिए कृषि विशेषज्ञों से परामर्श करें।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-warning">गुणवत्ता उत्पाद</h5>
                            <p class="card-text">हमारे स्टोर में उच्च गुणवत्ता वाले उर्वरक, बीज और कृषि उपकरण खोजें।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-warning">समर्थन और संसाधन</h5>
                            <p class="card-text">आपकी सभी कृषि आवश्यकताओं के लिए संसाधनों और समर्थन का एक विशाल भंडार तक पहुँचें।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- संपर्क करें सेक्शन -->
<section id="contact" class="py-5 text-center">
    <div class="container">
        <h2 class="text-success">संपर्क करें</h2>
        <p class="lead">क्या आपके पास प्रश्न हैं या सहायता की आवश्यकता है? हमसे संपर्क करें!</p>
        <form id="contactForm" action="send_email.php" method="POST">
            <div class="form-row justify-content-center">
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="name" placeholder="आपका नाम" required>
                </div>
                <div class="col-md-4 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="आपका ईमेल" required>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-md-8 mb-3">
                    <textarea class="form-control" name="message" placeholder="आपका संदेश" rows="3" required></textarea>
                </div>
            </div>
            <button class="btn btn-success" type="submit">संदेश भेजें</button>
        </form>
        <div id="successMessage" class="mt-3" style="display: none; color: green;">
            आपका संदेश सफलतापूर्वक भेज दिया गया है!
        </div>
    </div>
</section>

    <!-- फुटर -->
    <footer>
        <div class="container">
            <p>&copy; 2024 AGRI-CURE. सभी अधिकार सुरक्षित हैं।</p>
            <p>
                <a href="#">गोपनीयता नीति</a> | 
                <a href="#">सेवा की शर्तें</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS और निर्भरताएँ -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // संपर्क फ़ॉर्म सबमिशन हैंडलर
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // यहां AJAX कॉल या फ़ॉर्म हैंडलिंग कोड जोड़ें
            document.getElementById('successMessage').style.display = 'block';
        });
    </script>
</body>
</html>
