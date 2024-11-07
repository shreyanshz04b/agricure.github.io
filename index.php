<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Farm Animation</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Background and Body Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #e3fdfd, #ffe6fa); /* Flower-inspired background */
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            padding-top: 20px;
            position: relative;
        }
        
        /* Heading Styles */
        h1 {
            font-size: 2.5rem;
            color: #2e8b57; /* Sea green text */
            text-shadow: 2px 2px 4px #98fb98; /* Pale green shadow */
            margin-bottom: 20px;
            z-index: 2; /* Ensures heading is above animation */
            text-align: center;
            position: relative; /* To keep it above the animation */
        }

        h1::first-letter {
            font-family: 'Lucida Calligraphy', cursive;
            font-size: 5rem;
            color: #b22222; /* Firebrick color for emphasis */
        }

        /* Animation Container Styles */
        .animation-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1; /* Animation stays behind heading */
        }

        /* Circle Animation Keyframes */
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        div {
            display: inline;
            position: absolute;
            width: 10px;
            height:10px;
            left: calc(50% - 1em);
            border-radius: 1.3cm;
            transform-origin: 2.3em 2.3em;
            animation: rotate;
            animation-iteration-count: infinite;
            animation-duration: 1.5s;
        }
        

        .a1 { animation-delay: 0.1s; background-color: #ff6347; }
        .a2 { animation-delay: 0.2s; background-color: #ffd700; }
        .a3 { animation-delay: 0.3s; background-color: #add8e6; }
        .a4 { animation-delay: 0.4s; background-color: #90ee90; }
        .a5 { animation-delay: 0.5s; background-color: white; }
        .a6 { animation-delay: 0.6s; background-color: white; border-radius: 40px; }
        .a7 { animation-delay: 0.7s; background-color: white; border-radius: 50%; background: url(); }

    </style>
</head>
<body>
    
    <center>
        <h1>Welcome to Agriculture Farm</h1>
        <div class="a1"></div>
        <div class="a2"></div>
        <div class="a3"></div>
        <div class="a4"></div>
        <div class="a5"></div>
        <div class="a6"></div>
        <div class="a7"></div>
    </center>

    <!-- JavaScript for Redirect after 2 seconds -->
    <script>
        setTimeout(function() {
            window.location.href = 'index1.php';
        }, 3000);
    </script>
    
</body>
</html>
