<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRI-CURE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- AOS Library for Animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* General Body Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Navbar Styling */
        .navbar-section {
            background: rgba(76, 175, 80, 0.9);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-section.scrolled {
            background: rgba(76, 175, 80, 1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand p {
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin: 0;
        }

        .nav-link {
            color: #fff !important;
            font-size: 16px;
            padding: 10px 15px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link:hover {
            color: #ffeb3b !important;
            transform: scale(1.1);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('images/hero-bg.jpg') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: #fff;
            text-align: center;
            animation: fadeIn 2s ease;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(76, 175, 80, 0.6);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: slideInDown 1s ease;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            animation: slideInUp 1s ease;
        }

        .hero .btn {
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 50px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .hero .btn-primary {
            background-color: #ffeb3b;
            color: #333;
            border: none;
        }

        .hero .btn-primary:hover {
            background-color: #fff176;
            transform: translateY(-5px);
        }

        /* About Us Section */
        .about-us {
            padding: 80px 20px;
            background: #fff;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            animation: fadeInUp 1s ease;
            margin-top: 100px;
        }

        .about-us .uv {
            flex: 1 1 500px;
            padding: 20px;
            animation: fadeInLeft 1s ease;
        }

        .about-us .uv h1 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .about-us .uv h3 {
            font-size: 24px;
            color: #388E3C;
            margin-bottom: 10px;
        }

        .about-us .uv p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
        }

        .about-us .uv .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .about-us .uv .btn:hover {
            background-color: #388E3C;
            transform: translateY(-3px);
        }

        .about-us .abouti {
            flex: 1 1 400px;
            padding: 20px;
            text-align: center;
            animation: fadeInRight 1s ease;
        }

        .about-us .abouti img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .about-us .abouti img:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Services Section */
        .services {
            padding: 80px 20px;
            background: #f9f9f9;
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        .services h2 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 40px;
        }

        .services .service-item {
            margin-bottom: 30px;
        }

        .services .service-item i {
            font-size: 50px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .services .service-item h4 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .services .service-item p {
            font-size: 16px;
            color: #555;
        }

        /* Enhanced Footer Styling */
        .footer {
            background: linear-gradient(135deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            padding: 60px 20px;
            color: #fff;
            text-align: center;
            position: relative;
        }

        .footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: auto;
        }

        .footer .footer-section {
            flex: 1 1 200px;
            margin: 20px;
            min-width: 200px;
        }

        .footer h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .footer p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #f0f0f0;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ffeb3b;
        }

        .footer .social-icons a {
            color: #fff;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: #ffeb3b;
            transform: scale(1.2);
        }

        .footer .newsletter input[type="email"] {
            padding: 10px;
            border: none;
            border-radius: 30px;
            width: 70%;
            margin-bottom: 10px;
        }

        .footer .newsletter button {
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .footer .newsletter button:hover {
            background-color: #ffeb3b;
            color: #333;
        }

        .footer .quick-links ul {
            list-style: none;
            padding: 0;
        }

        .footer .quick-links ul li {
            margin-bottom: 10px;
        }

        .footer .quick-links ul li a {
            font-size: 16px;
            color: #fff;
            transition: color 0.3s ease;
        }

        .footer .quick-links ul li a:hover {
            color: #ffeb3b;
        }

        .footer .contact-info a {
            color: #ffeb3b;
            text-decoration: none;
        }

        .footer .contact-info a:hover {
            color: #fff;
        }

        .footer .contact-info p {
            margin: 0;
            line-height: 1.6;
        }

        .footer .footer-bottom {
            margin-top: 30px;
            font-size: 14px;
            color: #f0f0f0;
			padding-left: 37%;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 18px;
            }

            .about-us {
                flex-direction: column;
                padding: 60px 10px;
            }

            .about-us .uv, .about-us .abouti {
                flex: 1 1 100%;
            }

            .services .service-item {
                margin-bottom: 40px;
            }

            .footer .container {
                flex-direction: column;
                align-items: center;
            }

            .footer .footer-section {
                margin: 20px 0;
            }

            .footer .newsletter input[type="email"] {
                width: 100%;
                margin-bottom: 10px;
            }

            .footer .newsletter button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- नेवबार -->
<header class="navbar-section">
    <nav class="navbar navbar-expand-lg container">
        <a class="navbar-brand" href="#">
            <p>AGRICURE</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="नेविगेशन टॉगल करें">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">होम</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">हमारे बारे में</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">सेवाएँ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- नायक अनुभाग -->
<section class="hero" id="home" data-aos="fade-up">
    <div class="hero-content">
        <h1 data-aos="zoom-in">AGRICURE में आपका स्वागत है</h1>
        <p data-aos="fade-up" data-aos-delay="200">कृषकों को स्थायी समाधान प्रदान करना</p>
        <a href="#about" class="btn btn-primary" data-aos="fade-up" data-aos-delay="400">अधिक जानें</a>
    </div>
</section>

<!-- हमारे बारे में अनुभाग -->
<section class="about-us" id="about">
    <div class="uv" data-aos="fade-right">
        <h1>हमारा दृष्टिकोण, मिशन और मूल्य</h1>
        <h3>हमारा दृष्टिकोण</h3>
        <p>वैश्विक दक्षिण में ग्रामीण जीवन की गुणवत्ता में सुधार और स्थायी खाद्य प्रणालियाँ।</p>
        <h3>हमारा मिशन</h3>
        <p>स्थायी विकास के लिए कृषि-पर्यावरणीय सिद्धांतों और ग्रामीण उद्यमिता को बढ़ावा देना। स्थानीय भाषाओं में कृषक से कृषक प्रशिक्षण वीडियो के माध्यम से क्षमता विकास और दक्षिण-दक्षिण आदान-प्रदान।</p>
        <h3>हमारे मूल्य</h3>
        <p>स्थानीय ज्ञान और नवाचारों का सम्मान। पर्यावरण और पारिस्थितिकी तंत्र के प्रति मूल्य। पेशेवर, प्रभावी और विज्ञान द्वारा सूचित। रचनात्मक, लचीला और लिंग समानता के प्रति संवेदनशील।</p>
        <a href="hindivedio.php" class="btn">अभी अन्वेषण करें</a>
    </div>
    <div class="abouti" data-aos="fade-left">
        <img src="images/aboutimg.webp"
            style="width: 550px; max-width: 550px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="हमारे बारे में छवि"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
    </div>
    </div>
</section>

<!-- सेवाएँ अनुभाग -->
<section class="services" id="services">
    <h2 data-aos="fade-up">हमारी सेवाएँ</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 service-item" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-gear-fill"></i>
                <h4>कृषि-पर्यावरणीय प्रशिक्षण</h4>
                <p>स्थायी कृषि प्रथाओं को बढ़ावा देने के लिए व्यापक प्रशिक्षण कार्यक्रम प्रदान करना।</p>
            </div>
            <div class="col-md-4 service-item" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-people-fill"></i>
                <h4>कृषक नेटवर्किंग</h4>
                <p>ज्ञान साझा करने और सहयोग के लिए क्षेत्रों में कृषकों को जोड़ना।</p>
            </div>
            <div class="col-md-4 service-item" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-globe2"></i>
                <h4>वैश्विक बाजार पहुंच</h4>
                <p>कृषकों को वैश्विक बाजारों तक पहुंचने में मदद करना ताकि उनके व्यापार के अवसर बढ़ सकें।</p>
            </div>
        </div>
    </div>
</section>

<!-- उन्नत फुटर -->
<footer class="footer">
    <div class="container">
        <!-- AGRI-CURE के बारे में -->
        <div class="footer-section about">
            <h3>AGRICURE के बारे में</h3>
            <p>AGRICURE का लक्ष्य कृषकों को स्थायी समाधान प्रदान करना, कृषि-पर्यावरणीय प्रथाओं को बढ़ावा देना और नवाचारी प्रशिक्षण एवं नेटवर्किंग अवसरों के माध्यम से ग्रामीण जीवन स्तर को बढ़ाना है।</p>
        </div>

        <!-- त्वरित लिंक -->
        <div class="footer-section quick-links">
            <h3>त्वरित लिंक</h3>
            <ul>
                <li><a href="#">गोपनीयता नीति</a></li>
                <li><a href="#">सेवा की शर्तें</a></li>
            </ul>
        </div>

        <!-- संपर्क जानकारी -->
        <div class="footer-section contact-info">
            <h3>संपर्क करें</h3>
            <p>कार्यालय टेल: <a href="tel:+254202108300">+91 8954069933</a><br>
            ईमेल: <a href="devpandey3134@gmail.com">devpandey3134@gmail.com</a></p>
        </div>

        <!-- हमें फॉलो करें -->
        <div class="footer-section follow-us">
            <h3>हमें फॉलो करें</h3>
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <!-- न्यूज़लेटर सदस्यता -->
        <!-- <div class="footer-section newsletter">
            <h3>जुड़े रहें</h3>
            <form class="d-flex justify-content-center" action="#" method="post">
                <input type="email" placeholder="अपना ईमेल दर्ज करें" required>
                <button type="submit">सदस्यता लें</button>
            </form>
        </div>
    </div> -->

    <div class="footer-bottom">
        <p>&copy; 2024 AGRICURE. सर्वाधिकार सुरक्षित।</p>
    </div>
</footer>

<!-- जावास्क्रिप्ट पुस्तकालय -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93fEvH9tv6McL3qNyeR3M4LrC25G6CJJh80y1BrLhZ3EZKxgSB9PZp1pAriF7k" crossorigin="anonymous"></script>

<!-- एनिमेशन के लिए AOS पुस्तकालय -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // AOS प्रारंभ करें
    AOS.init({
        duration: 1000, // एनिमेशन की अवधि
        once: true, // क्या एनिमेशन केवल एक बार होना चाहिए
    });

    // स्क्रॉल करने पर नेवबार का बैकग्राउंड बदलें
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-section');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>
