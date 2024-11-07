<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  bgcolor="yellow">
<div class="lst-header">
	<nav>
		<div class="a">
			<p>AGRI--CURE</p>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="https://agricoop.nic.in/#gsc.tab=0">SERVICES</a></li>
				<li><a href="web.html">PRODUCT</a></li>
				<li><a href="contact.html">CONTACT US</a></li>
			</ul>
		</div>
	</nav>
	<h2 align="center">
	THERE ARE VIDEOS WHICH HELP YOU <BR>IN MANTAINING YOUR CROP
	</h2>

	<div class="vid" align="center">

	<div class="vid1" style="margin-right: 20px;">
	<video width="700px" height="500px"
		controls="controls"/>
		
		<source src="videoplayback.mp4">
			type="video/mp4">
	</video>
</div>
<div class="vid2">
	<video width="500px" height="500px"
		controls="controls"/>
		
		<source src="videoplayback1.mp4">
			type="video/mp4">
	</video>
	<video width="500px" height="500px"
		controls="controls"/>
		
		<source src="videoplayback2.mp4">
			type="video/mp4">
	</video>
</div>
	<video width="700px" height="500px"
		controls="controls"/>
		
		<source src="videoplayback3	.mp4">
			type="video/mp4">
	</video>
	</div>
</div>
</body>

</html> -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGRI-CURE Videos</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            /* Gradient background with animation */
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
            color: white; /* Make the text more visible against the background */
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
            /* Remove black border by not applying a border here */
        }
    </style>
</head>
<body>
<div class="lst-header">
    <nav>
        <div class="a">
            <p>AGRI--CURE</p>
        </div>
    </nav>
    <h2 align="center">
    THERE ARE VIDEOS WHICH HELP YOU <br>IN MAINTAINING YOUR CROP
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
    // Get all videos with the class "hover-play"
    const videos = document.querySelectorAll('.hover-play');

    videos.forEach(video => {
        // Play the video on mouse hover
        video.addEventListener('mouseover', () => {
            video.play();
        });

        // Pause the video when the mouse leaves the video area
        video.addEventListener('mouseout', () => {
            video.pause();
            video.currentTime = 0;  // Reset the video to the beginning
        });

        // Toggle play/pause on click
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
