<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>सहायता - AGRI-CURE</title>
    <style>
        body {
            background-color: #f0f4f8;
        }
        .header {
            text-align: center;
            padding: 40px;
            background-color: #4CAF50; /* हैडर की पृष्ठभूमि का रंग */
            color: white;
        }
        .researchers {
            margin: 40px 0;
        }
        .researcher-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border-left: 4px solid #4CAF50; /* बाएं किनारे का रंग */
            margin-bottom: 20px; /* पंक्तियों के बीच का अंतर */
            text-align: center; /* टेक्स्ट केंद्रित करें */
        }
        .researcher-card:hover {
            transform: scale(1.05);
        }
        .researcher-card h5 {
            color: #4CAF50; /* शोधकर्ता का नाम का रंग */
            font-size: 1.75rem; /* बड़े अक्षर */
            font-weight: bold; /* मोटा टेक्स्ट */
        }
        .link-primary {
            color: #007bff; /* लिंक का रंग */
            text-decoration: none;
        }
        .link-primary:hover {
            color: #0056b3; /* लिंक के होवर का रंग */
            text-decoration: underline;
        }
        .footer {
            background-color: #4CAF50; /* फूटर की पृष्ठभूमि का रंग */
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .list-group-item {
            background-color: #fff; /* लिस्ट आइटम्स का पृष्ठभूमि रंग */
            border: none; /* बॉर्डर हटाएं */
        }
        .list-group-item a {
            color: #4CAF50; /* लिस्ट आइटम्स का लिंक रंग */
        }
        .list-group-item a:hover {
            color: #0056b3; /* लिस्ट आइटम्स का होवर लिंक रंग */
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>कृषि अनुसंधान के लिए सहायता</h1>
        <p>विशेषज्ञ संपर्क और सरकारी संसाधनों के लिए आपका मार्गदर्शक</p>
    </div>

    <div class="container">
        <div class="researchers">
            <h2 class="text-center mb-4">हमारे कृषि शोधकर्ताओं से मिलें</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="researcher-card">
                        <h5>डॉ. एलिस ग्रीन</h5>
                        <p>विशेषज्ञता: सतत कृषि पद्धतियाँ</p>
                        <p>फोन: (123) 456-7890</p>
                        <p>ईमेल: alice.green@example.com</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="researcher-card">
                        <h5>डॉ. बॉब व्हाइट</h5>
                        <p>विशेषज्ञता: मृदा स्वास्थ्य और उर्वरता</p>
                        <p>फोन: (234) 567-8901</p>
                        <p>ईमेल: bob.white@example.com</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="researcher-card">
                        <h5>डॉ. एमिली ब्राउन</h5>
                        <p>विशेषज्ञता: फसल रोग प्रबंधन</p>
                        <p>फोन: (345) 678-9012</p>
                        <p>ईमेल: emily.brown@example.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="government-resources">
            <h2 class="text-center mb-4">सरकारी अनुसंधान पत्र</h2>
            <p class="text-center">कृषि उन्नति के लिए नवीनतम अनुसंधान प्रकाशनों और सरकारी ऑफर्स से अपडेट रहें।</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="https://www.ars.usda.gov/research/publications/" target="_blank" class="link-primary">राष्ट्रीय कृषि अनुसंधान पत्र 2023</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.nal.usda.gov/" target="_blank" class="link-primary">सतत कृषि पर सरकारी दिशानिर्देश</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.nifa.usda.gov/impact-research-and-evaluation" target="_blank" class="link-primary">नया उर्वरक अनुसंधान और विकास रिपोर्ट</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.fao.org/research-and-analysis/en/" target="_blank" class="link-primary">नवीन कृषि तकनीकें - 2023 संस्करण</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 AGRICURE. सभी अधिकार सुरक्षित।</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
