<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मुखपृष्ठ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- नेवबार सेक्शन -->
    <div class="header">
	<nav>
		<button id="sidebar-toggle" class="sidebar-button" onclick="toggleSidebar()">☰</button>
		<div id="sidebar" class="sidebar">
			<button class="close-btn" onclick="toggleSidebar()">×</button>
			<a href="#">मुखपृष्ठ</a>
			<hr class="divider">
			<a href="hindiabout.php">हमारे बारे में</a>
			<hr class="divider">
			<a href="hindireference.php">संदर्भ</a>
			<hr class="divider">
            <a href="hindifeedbackform.php">प्रतिक्रिया</a>
			<hr class="divider">
			<a href="hindideveloper.php">हमसे संपर्क करें</a>
		</div>
        <div class="a" style="text-align: center; margin: 20px;">
    <p style="font-size: 32px; font-weight: bold; color: #4CAF50;">AGRICURE</p>
    
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">मुखपृष्ठ</li>
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">सेवाएँ</li>
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">हमारे बारे में</li>
        <li><a class="nav-link" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-globe" title="भाषा चुनें">भाषा</i>
        </a>         
        <!-- भाषा ड्रॉपडाउन मेनू -->
           <ul class="dropdown-menu" aria-labelledby="languageDropdown">
            <li><a class="dropdown-item" href="index1.php">अंग्रेजी</a></li>
            <li><a class="dropdown-item" href="hindiindex1.php">हिंदी</a></li>
                        </ul>
        </li>
        <li style="display: inline-block; margin: 0 15px; padding: 10px 20px;"><a href="hindilogin.php" style="color: white; text-decoration: none; background-color: #686854; border-radius: 50px; padding: 10px 20px;">लॉगिन/साइनअप</a></li>
</ul>

   <!-- पॉपअप ओवरले -->
<div id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 1000;">
    <div id="popupWindow" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.8); background-image: linear-gradient(135deg, #ff9a9e, #fad0c4); padding: 20px; width: 350px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); text-align: center; opacity: 1; transition: transform 0.5s ease, opacity 0.5s ease;">
        <h2 style="color: #2c3e50; font-family: 'Helvetica Neue', sans-serif; margin-bottom: 15px;">
            <i class="bi bi-info-circle-fill" style="color: #ffeb3b;"></i><br>कृपया पहले लॉगिन करें
        </h2>
        <p style="color: #34495e; margin-bottom: 20px;">इस अनुभाग का उपयोग करने के लिए आपको लॉगिन करना होगा।</p>
        <button id="closeBtn" onclick="closePopup()" style="
            background: linear-gradient(45deg, #ff6f61, #de6262); /* Coral to pink gradient */
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 1.1rem; /* Increased font size */
            font-weight: bold; /* Bold text */
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease; /* Transition for smooth effects */
        ">
            ओके
        </button>
    </div>
</div>

<style>
    /* Button hover effect */
    #closeBtn:hover {
        transform: scale(1.05); /* Slightly increases size on hover */
        background: linear-gradient(45deg, #de6262, #ff6f61); /* Inverted gradient on hover */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Shadow effect on hover */
    }
</style>



    <script>
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            setTimeout(() => {
                document.getElementById('popupOverlay').classList.add('active');
                document.getElementById('popupWindow').style.opacity = '1';
                document.getElementById('popupWindow').style.transform = 'translate(-50%, -50%) scale(1)';
            }, 10);
        }

        function closePopup() {
            document.getElementById('popupWindow').style.opacity = '0';
            document.getElementById('popupWindow').style.transform = 'translate(-50%, -50%) scale(0.7)';
            setTimeout(() => {
                document.getElementById('popupOverlay').style.display = 'none';
            }, 500);
        }
    </script>
</div>

	</nav>
	<div class="b">
		<h1>भारत की पहली कृषि वेबसाइट में आपका स्वागत है</h1>
		<p>जब सब कुछ आधुनिक हो रहा है, तो हम पहली बार हमारे वेबसाइट से किसानों को जोड़ना चाहते हैं।</p><br><br>
	 <a href="Hindi.php" class="btn">अधिक जानने के लिए हमें विजिट करें</a>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="fish"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <span class="button__text"></span>
     </a>
	</div>
</div>
<script>
	function toggleSidebar() {
		var sidebar = document.getElementById("sidebar");
		sidebar.classList.toggle("active");
	}
</script>

<!-- सेवाएँ सेक्शन -->

<section class="services-section" id="services">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 services">

                <div class="row row1">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about9.jpg" class="card-img-top" alt="...">
                            <a href="hindiresearch.php"><div class="card-body">
                                <h4 class="card-title">अनुसंधान</h4>
                                <p class="card-text">"हमारा अध्ययन नवीनतम विधियों और आधुनिक तकनीकों का उपयोग करके कृषि विधियों में सुधार करने के लिए है। हम फसल की स्थिरता, मिट्टी की सेहत, और कीट प्रबंधन पर शोध करते हैं ताकि स्थायी तरीके से उपज बढ़ाई जा सके। हमारी टीम पर्यावरण संरक्षण, खाद्य सुरक्षा, और कृषि उद्योग की आर्थिक स्थिरता से संबंधित समाधानों के विकास के लिए समर्पित है।"</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about11.png" class="card-img-top" alt="...">
                            <a href="hindibranding.php"><div class="card-body">
                                <h4 class="card-title">ब्रांडिंग</h4>
                                <p class="card-text">"कृषि में प्रभावी ब्रांडिंग किसानों, उत्पादकों और उपभोक्ताओं को जोड़ने में सहायक होती है। हम किसानों को एक प्रतिष्ठित ब्रांड बनाने में मदद करते हैं जो पर्यावरण के प्रति जागरूक ग्राहकों को आकर्षित करता है। स्थिरता और गुणवत्ता पर जोर देकर, हमारी ब्रांडिंग तकनीकें—जो मजबूत लोगो बनाने से लेकर सोशल मीडिया पर उपस्थिति स्थापित करने तक फैली हुई हैं—निष्ठा को बढ़ावा देती हैं और विकास को आगे बढ़ाती हैं।"</p>
                            </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row row2">


                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">विकास</h4>
                                <p class="card-text">"हमारे विकास कार्यक्रमों का लक्ष्य कृषि के सतत विस्तार को बढ़ावा देना है। हम सटीक कृषि को लागू करके, जैविक प्रथाओं को प्रोत्साहित करके, और ग्रामीण समुदायों की सहायता करके उत्पादन बढ़ाने के साथ-साथ पर्यावरण की रक्षा करने के लिए काम करते हैं। हमारा उद्देश्य किसानों को आवश्यक कौशल और जानकारी प्रदान करना है ताकि वे एक सतत भविष्य सुनिश्चित कर सकें।</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3 style="font-size: 36px; font-weight: bold; text-align: center; color: #fff; background: linear-gradient(90deg, #4CAF50, #8BC34A); padding: 10px 20px; border-radius: 10px; box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.2); letter-spacing: 2px; text-transform: uppercase; display: inline-block; margin-bottom: 20px; transition: all 0.3s ease-in-out;" onmouseover="this.style.background='linear-gradient(90deg, #8BC34A, #4CAF50)'; this.style.boxShadow='0px 6px 10px rgba(0, 0, 0, 0.3)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.background='linear-gradient(90deg, #4CAF50, #8BC34A)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='translateY(0)';">
                    सेवाएं
                </h3>
                <h1>हम अपनी सेवा के माध्यम से आपकी समस्या का समाधान कर सकते हैं।</h1>
                <p>हम एक ब्रांड रणनीति और डिजिटल डिज़ाइन एजेंसी हैं जो संस्कृति में महत्वपूर्ण ब्रांड बनाते हैं, दस साल से अधिक के अनुभव के साथ।</p>
                <img src="images/about2.jpg" style="width: 100%; max-width: 800px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="हमारे बारे में" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
                <button class="btn" style="width: 60%; color: #fff; margin-top: 20px;">
                अधिक जानें
                </button>
            </div>

        </div>
    </div>
</section>

<!-- about section  -->

<section class="about-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="images/about.jpg" style="width: 100%; max-width: 800px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="हमारे बारे में" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3>हम कौन हैं</h3>
                <h1>बढ़ते ब्रांडों के लिए रचनात्मक और प्रौद्योगिकी सेवाएं प्रदान करना।</h1>
                <p>हमारी कंपनी अनुसंधान, ब्रांड पहचान डिजाइन, यूआई/यूएक्स डिजाइन, विकास और ग्राफिक डिजाइन में विशेषज्ञता रखती है। अपने ग्राहकों के व्यवसाय को बेहतर बनाने के लिए, हम दुनिया भर में उनके साथ काम करते हैं।</p>
                <button class="btn" style="width: 60%; color: #fff; margin-top: 20px;">अधिक जानें</button>
            </div>
        </div>
    </div>
</section>

<!-- फुटर सेक्शन -->

<footer style="background-color: #2c3e50; color: #ecf0f1; position: relative; overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <p class="logo" style="font-size: 28px; font-weight: bold; margin: 0; animation: fadeIn 1s;color: #4CAF50;">
                    AGRICURE
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <ul class="d-flex" style="list-style: none; padding: 0; margin: 0; justify-content: center;">
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">मुख्य पृष्ठ</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">सेवाएं</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">हमारे बारे में</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">संपर्क</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align: center; margin: 0; animation: fadeIn 1s;">&copy; 2024 AGRICURE</p>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12">
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="color: #ecf0f1; font-size: 24px; transition: transform 0.3s;">
                    <i class="bi bi-arrow-up-short"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- एनीमेशन के लिए कीफ्रेम जोड़ें -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .back-to-top:hover {
            transform: scale(1.2);
            color: #e67e22; /* होवर पर रंग बदलें */
        }
        a:hover {
            color: #e67e22; /* लिंक के लिए होवर पर रंग बदलें */
        }
    </style>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</body>

</html>
