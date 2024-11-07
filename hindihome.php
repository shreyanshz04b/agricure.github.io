<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मुख्य पृष्ठ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- नेवबार सेक्शन -->

    <header class="navbar-section">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <p style="font-size: 32px; font-weight: bold; color: #4CAF50; border: 2px solid #4CAF50; padding: 5px; display: inline;">
                    AGRICURE
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="नेविगेशन टॉगल करें">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">मुख्य पृष्ठ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">सेवाएं</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hindiabout1.php">हमारे बारे में</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hindiweb.php">उत्पाद</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">संपर्क</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <!-- ड्रॉपडाउन ट्रिगर करने वाला आइकन -->
                            <a class='nav-link dropdown-toggle' href='edit.php?id=$res_id' id='dropdownMenuLink'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                <i class='bi bi-person'></i>
                            </a>

                            <!-- ड्रॉपडाउन मेन्यू -->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
                                    while ($result = mysqli_fetch_assoc($query)) {
                                        $res_username = $result['username'];
                                        $res_email = $result['email'];
                                        $res_id = $result['id'];
                                    }
                                    echo "<a class='dropdown-item' href='edit.php?id=$res_id'>प्रोफाइल बदलें</a>";
                                    ?>
                                </li>
                                <li><a class="dropdown-item" href="logout.php">लॉगआउट</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="name" style="font-family: 'Arial', sans-serif; font-size: 24px; color: #fff; background: url('images/background.jpg') no-repeat center center/cover; padding: 20px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
    <center>
        <marquee id="welcomeMarquee" behavior="scroll" direction="left" scrollamount="6" style="width: 100%;">
            स्वागत है 
            <?php
            echo $_SESSION['username'];
            ?>
            !
        </marquee>
    </center>
</div>
<script>
    // Stop the marquee after 1 minute (60000 milliseconds)
    setTimeout(function(){
        const marquee = document.getElementById("welcomeMarquee");
        marquee.stop(); // Stop the marquee
        // Optionally, you can display a message
        // marquee.innerHTML += " - Stopped!";
    }, 60000);
</script>

<!-- नायक अनुभाग -->
<section id="home" class="hero-section" style="position: relative; height: 100vh; background-image: url('images/about4.jpg'); background-size: cover; background-position: center;">
    <div class="container" style="position: relative; z-index: 1; color: white;">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                <h1>आपकी आवश्यक कृषि सेवा</h1>
                <p>हम प्रभावी रणनीतियाँ बनाते हैं जो आपको पूरे वेब पर ग्राहकों और संभावनाओं तक पहुँचने में मदद करती हैं।</p>
                <button class="btn"><a href="#" style="color: white; text-decoration: none;">प्रोजेक्ट का अनुमान लगाएँ</a></button>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12" style="position: relative; display: flex; justify-content: center; align-items: center;">
                <img src="images/about3.jpg" alt="फोरग्राउंड इमेज" class="img-fluid" style="max-width: 80%; border-radius: 50%; position: absolute; top: 20%; left: 10%; transition: transform 0.5s ease-in-out, opacity 0.6s ease-in-out;" onmouseover="this.style.transform='scale(1.1)'; this.style.opacity='0.9';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='1';">
            </div>
        </div>
    </div>
</section>
<br><br>

<!-- सेवाएँ अनुभाग -->

<section class="services-section" id="services">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 services">

                <div class="row row1">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">अनुसंधान</h4>
                                <p class="card-text">स्थायी कृषि फसल उपज को बढ़ाती है जबकि पर्यावरणीय स्वास्थ्य और जैव विविधता को बनाए रखती है।</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about11.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">ब्रांडिंग</h4>
                                <p class="card-text">मजबूत ब्रांडिंग कृषि क्षेत्र में उपभोक्ताओं के बीच विश्वास और वफादारी को बढ़ावा देती है।</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br>

                <div class="row row2">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <img src="images/about7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">विकास</h4>
                                <p class="card-text">किसान विकास में प्रशिक्षण, संसाधनों तक पहुंच, और उत्पादकता सुधार के लिए प्रौद्योगिकी अपनाना शामिल है।</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3 style="
                font-size: 36px; 
                font-weight: bold; 
                text-align: center; 
                color: #fff; 
                background: linear-gradient(90deg, #4CAF50, #8BC34A); 
                padding: 10px 20px; 
                border-radius: 10px; 
                box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.2); 
                letter-spacing: 2px; 
                text-transform: uppercase; 
                display: inline-block; 
                margin-bottom: 20px; 
                transition: all 0.3s ease-in-out;" 
                onmouseover="this.style.background='linear-gradient(90deg, #8BC34A, #4CAF50)'; this.style.boxShadow='0px 6px 10px rgba(0, 0, 0, 0.3)'; this.style.transform='translateY(-5px)';"
                onmouseout="this.style.background='linear-gradient(90deg, #4CAF50, #8BC34A)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.2)';">
                सेवाएँ
                </h3>

                <h1>हम आपकी समस्या का समाधान अपनी सेवा के माध्यम से कर सकते हैं।</h1>
                <p>हम एक ब्रांड रणनीति और डिजिटल डिज़ाइन एजेंसी हैं जो ऐसे ब्रांड बनाती है जो संस्कृति में महत्वपूर्ण हैं और हमारे पास दस साल से अधिक का अनुभव है।</p>
                <img src="images/about5.webp" 
                style="width: 650px; max-width: 550px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="हमारे बारे में चित्र"
                onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';"
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
                <button class="btn" style="width: 60%; margin-top: 20px;">अन्वेषण करें</button>
            </div>

        </div>
    </div>
</section>

<!-- हमारे बारे में अनुभाग -->

<section class="about-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="images/about6.webp" 
                    style="width: 550px; max-width: 550px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="हमारे बारे में चित्र"
                    onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';"
                    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3>हम कौन हैं</h3>
                <h1>विकासशील ब्रांडों के लिए रचनात्मक और प्रौद्योगिकी सेवाएँ प्रदान करना।</h1>

                <p>हमारी कंपनी अनुसंधान, ब्रांड पहचान डिज़ाइन, यूआई/यूएक्स डिज़ाइन, विकास और ग्राफिक डिज़ाइन में विशेषज्ञता रखती है। अपने ग्राहकों के व्यवसाय को सुधारने में मदद करने के लिए, हम उनके साथ दुनिया भर में काम करते हैं।</p>
                <button>और जानें</button>
            </div>
        </div>
    </div>
</section>

<!-- संपर्क अनुभाग -->
<section class="contact-section" id="contact" style="background-color: #f8f9fa; padding: 60px 0;">
    <div class="container">

        <div class="row gy-4">

            <h1 style="text-align: center; margin-bottom: 40px; font-family: 'Arial', sans-serif; color: #333;">संपर्क करें</h1>
            
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box" style="animation: fadeIn 0.5s; transition: transform 0.3s; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="bi bi-geo-alt" style="font-size: 24px; color: #007bff;"></i>
                            <h3 style="color: #007bff;">पता</h3>
                            <p>बरसाना<br>छाता, मथुरा 281401</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box" style="animation: fadeIn 0.5s; transition: transform 0.3s; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="bi bi-telephone" style="font-size: 24px; color: #007bff;"></i>
                            <h3 style="color: #007bff;">हमें कॉल करें</h3>
                            <p>
                                <a href="tel:+918954069933" style="text-decoration: none; color: inherit;">+91 8954069933</a><br>
                                <a href="tel:+918954069933" style="text-decoration: none; color: inherit;">+91 8954069933</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box" style="animation: fadeIn 0.5s; transition: transform 0.3s; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="bi bi-envelope" style="font-size: 24px; color: #007bff;"></i>
                            <h3 style="color: #007bff;">हमें ईमेल करें</h3>
                            <p>
                                <a href="mailto:devpandey3134@gmail.com" style="text-decoration: none; color: inherit;">devpandey3134@gmail.com</a><br>
                                <a href="mailto:devpandey3134@gmail.com" style="text-decoration: none; color: inherit;">devpandey3134@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box" style="animation: fadeIn 0.5s; transition: transform 0.3s; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="bi bi-clock" style="font-size: 24px; color: #007bff;"></i>
                            <h3 style="color: #007bff;">खुलने का समय</h3>
                            <p>सभी समय<br>24×7</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 form">
                <form action="contact.php" method="post" class="php-email-form" style="animation: fadeIn 0.5s;">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="आपका नाम" required style="border-radius: 10px; padding: 15px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="आपका ईमेल" required style="border-radius: 10px; padding: 15px;">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="विषय" required style="border-radius: 10px; padding: 15px;">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="5" placeholder="संदेश" required style="border-radius: 10px; padding: 15px;"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" style="padding: 10px 20px; border: none; border-radius: 10px; background-color: #007bff; color: white; cursor: pointer; transition: background-color 0.3s;">संदेश भेजें</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>

<style>
    /* CSS एनीमेशन */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .info-box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    button:hover {
        background-color: #0056b3; /* होवर पर गहरा नीला */
    }
</style>

<!-- फूटर अनुभाग -->

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
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">होम</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">सेवाएँ</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">हमारे बारे में</a>
                    </li>
                    <li style="margin: 0 15px;">
                        <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">संपर्क करें</a>
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
        }
    </style>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>