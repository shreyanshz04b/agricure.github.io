<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शोध संदर्भ - AGRI-CURE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* सामान्य शैलियाँ */
        body {
            background-color: #f9fcff;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* नायक अनुभाग */
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

        /* हमारे बारे में अनुभाग */
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

        /* शोधकर्ता अनुभाग */
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

        /* शोध पत्र अनुभाग */
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

        /* सामान्य प्रश्न अनुभाग */
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

        /* संपर्क अनुभाग */
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

        /* फुटर */
        .footer {
            background: #006400;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* एनीमेशन */
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

        /* कृषि अनुसंधान शैलियाँ */
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
            display: flex; /* क्षैतिज लेआउट के लिए फ्लेक्सबॉक्स */
            flex-wrap: wrap; /* चौड़ाई से अधिक होने पर वस्तुओं को लपेटें */
            justify-content: center; /* वस्तुओं को केंद्र में संरेखित करें */
        }

        #agricultural-research li {
            margin: 10px; /* सूची आइटम के बीच की दूरी */
            padding: 15px; /* आइटम के लिए पैडिंग */
            background: #ffffff; /* आइटम के लिए बैकग्राउंड */
            border-radius: 8px; /* गोल कोने */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* छाया प्रभाव */
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

    <!-- नेवबार -->
    <nav class="navbar navbar-expand-lg" style="background-color: #2E7D32; padding: 15px; position: relative;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #FFC107; font-size: 30px; font-weight: bold; text-transform: uppercase;">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="नेविगेशन टॉगल करें">
                <span class="navbar-toggler-icon" style="background-color: #FFC107;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="display: flex; flex-direction: row; list-style: none; padding-left: 0;">
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            हमारे बारे में
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#researchers" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            शोधकर्ता
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#research-papers" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            शोध पत्र
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            सामान्य प्रश्न
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: white; margin-right: 20px; font-size: 18px; position: relative; padding: 10px 15px; border-radius: 20px; transition: all 0.3s;">
                            संपर्क करें
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- नायक अनुभाग -->
<section style="background-image: url('https://source.unsplash.com/1600x900/?agriculture,sustainable-farming'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center; position: relative; padding: 20px;">
    <header style="background: rgba(0, 0, 0, 0.7); padding: 50px; border-radius: 15px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);">
        <h1 style="font-size: 4rem; margin: 0; font-weight: bold;">AGRI-CURE अनुसंधान केंद्र में आपका स्वागत है</h1>
        <p style="font-size: 1.6rem; margin: 20px 0;">अत्याधुनिक कृषि अनुसंधान, विशेषज्ञ सलाह और सतत खेती के लिए नवोन्मेषी समाधानों का अन्वेषण करें।</p>
        <div style="margin-top: 40px;">
            <h3 style="font-size: 1.5rem;">विशेष रूप से अनुसंधान क्षेत्र:</h3>
            <ul style="list-style-type: none; padding: 0; font-size: 1.2rem;">
                <li>🌾 स्थायी फसल उत्पादन</li>
                <li>🌱 नवोन्मेषी कीट प्रबंधन</li>
                <li>💧 जल संरक्षण तकनीकें</li>
                <li>🍃 मिट्टी स्वास्थ्य में सुधार</li>
            </ul>
            <a href="#about" style="display: inline-block; padding: 10px 20px; background-color: #ffc107; color: #fff; font-size: 18px; text-align: center; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                अधिक जानें
            </a>
        </div>
    </header>
</section>


    <!-- हमारे बारे में अनुभाग -->
    <section id="about" class="about-section fade-in">
        <h2>हमारे बारे में</h2>
        <p>AGRI-CURE कृषि के क्षेत्र में नवीनतम अनुसंधान के बारे में जानकारी प्रदान करता है। हमारा उद्देश्य किसानों को जानकारी उपलब्ध कराना और कृषि विकास में मदद करना है।</p>
    </section>

    <!-- शोधकर्ता अनुभाग -->
    <section id="researchers" class="researcher-section">
        <h2 class="fade-in">हमारे प्रमुख शोधकर्ता</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <h5>डॉ. राधिका सिंह</h5>
                        <p>कृषि जैव प्रौद्योगिकी में विशेषज्ञता।</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <h5>डॉ. अजय कुमार</h5>
                        <p>जैविक खेती और पर्यावरण विज्ञान में विशेषज्ञता।</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <h5>डॉ. सुमित शर्मा</h5>
                        <p>पौधों की आनुवंशिकी में विशेषज्ञता।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- शोध पत्र अनुभाग -->
<section id="research-papers" class="research-paper-section">
    <h2 class="fade-in">प्रमुख शोध पत्र</h2>
    <ul class="research-paper-list fade-in">
        <li class="research-paper-item">
            <a href="https://www.fao.org/research-and-extension/en/" target="_blank">कृषि में नवीनतम अनुसंधान प्रवृत्तियाँ</a>
        </li>
        <li class="research-paper-item">
            <a href="https://www.mdpi.com/2071-1050/12/4/1267" target="_blank">जैविक खेती के लाभ और चुनौतियाँ</a>
        </li>
        <li class="research-paper-item">
            <a href="https://www.ipcc.ch/report/ar6/wg2/" target="_blank">जलवायु परिवर्तन का कृषि पर प्रभाव</a>
        </li>
    </ul>
</section>


    <!-- सामान्य प्रश्न अनुभाग -->
    <section id="faq" class="faq-section">
        <h2 class="fade-in">सामान्य प्रश्न</h2>
        <div class="faq fade-in">
            <h5>कृषि अनुसंधान क्या है?</h5>
            <p>कृषि अनुसंधान कृषि उत्पादन को बढ़ाने और विकास के लिए नई तकनीकों की खोज करने की प्रक्रिया है।</p>
        </div>
        <div class="faq fade-in">
            <h5>हम कैसे सहयोग कर सकते हैं?</h5>
            <p>आप हमें अपनी आवश्यकता या प्रश्न भेजकर सहयोग कर सकते हैं। हम आपकी सहायता के लिए यहाँ हैं!</p>
        </div>
        <div class="faq fade-in">
            <h5>क्या मैं शोध पत्र डाउनलोड कर सकता हूँ?</h5>
            <p>हाँ, आप दिए गए लिंक से शोध पत्र डाउनलोड कर सकते हैं।</p>
        </div>
    </section>

    <!-- संपर्क अनुभाग -->
    <section id="contact" class="contact-section">
        <h2 class="fade-in">संपर्क करें</h2>
        <p>हमसे संपर्क करने के लिए नीचे दिए गए विवरण का उपयोग करें:</p>
        <p>ईमेल: devpandey3134@gmail.com</p>
        <p>फोन: +91 8954069933</p>
    </section>

    <!-- फुटर -->
    <footer class="footer">
        <p>&copy; 2024 AGRI-CURE. सर्वाधिकार सुरक्षित।</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // एनीमेशन प्रभाव
        $(document).ready(function () {
            $('.fade-in').css('opacity', 0);
            $('.fade-in').each(function (index) {
                $(this).delay(200 * index).animate({ opacity: 1 }, 1000);
            });
        });
    </script>

</body>

</html>
