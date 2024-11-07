<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGRICURE वीडियो</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            /* एनीमेशन के साथ ग्रेडिएंट पृष्ठभूमि */
            background: linear-gradient(45deg, #d2001a, #7462ff, #f48e21, #23d5ab);
            background-size: 600% 600%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .lst-header nav {
            background-color: lightgreen;
        }
        .lst-header nav ul {
            list-style-type: none;
            display: flex;
            gap: 10px;
        }
        .lst-header nav ul li {
            display: inline;
        }
        .lst-header nav ul li a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: lightgray;
            border-radius: 5px;
        }
        .lst-header h2 {
            margin: 20px 0;
            color: white; /* पृष्ठभूमि के खिलाफ टेक्स्ट को और अधिक स्पष्ट बनाता है */
        }
        .vid {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .vid1, .vid2 {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        video {
            /* काले बॉर्डर को हटाने के लिए यहाँ बॉर्डर लागू न करें */
        }
    </style>
</head>
<body>
<div class="lst-header">
    <nav>
        <div class="a">
            <p>AGRICURE</p>
        </div>
    </nav>
    <h2 align="center">
    यहाँ वीडियो हैं जो आपकी फसल को बनाए रखने में आपकी सहायता करते हैं
    </h2>

    <div class="vid" align="center">
        <div class="vid1">
            <video width="700px" height="500px" class="hover-play">
                <source src="vedio/videoplayback.mp4" type="video/mp4">
            </video>
        </div>
        <div class="vid2">
            <video width="500px" height="500px" class="hover-play">
                <source src="vedio/videoplayback1.mp4" type="video/mp4">
            </video>
            <video width="500px" height="500px" class="hover-play">
                <source src="vedio/videoplayback2.mp4" type="video/mp4">
            </video>
        </div>
        <video width="700px" height="500px" class="hover-play">
            <source src="vedio/videoplayback3.mp4" type="video/mp4">
        </video>
    </div>
</div>

<script>
    // "hover-play" क्लास के सभी वीडियो प्राप्त करें
    const videos = document.querySelectorAll('.hover-play');

    videos.forEach(video => {
        // माउस होवर पर वीडियो चलाएं
        video.addEventListener('mouseover', () => {
            video.play();
        });

        // जब माउस वीडियो क्षेत्र से बाहर जाए तो वीडियो रोकें
        video.addEventListener('mouseout', () => {
            video.pause();
            video.currentTime = 0;  // वीडियो को शुरुआत में रीसेट करें
        });

        // क्लिक करने पर प्ले/पॉज़ को टॉगल करें
        video.addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    });
</script>
</body>
</html>
