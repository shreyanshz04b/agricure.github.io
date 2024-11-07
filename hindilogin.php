<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Container styling */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      width: 100%;
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      animation: slideIn 1s ease-in-out;
    }

    /* Header Styling */
    header {
      background-color: #4caf50;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    /* Form Styling */
    form {
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    .input-container {
      position: relative;
      margin-bottom: 20px;
    }

    .icon {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #4caf50;
      font-size: 18px;
      transition: color 0.3s;
    }

    .input-field {
      width: 80%;
      padding: 10px 40px;
      border: 1px solid #ccc;
      border-radius: 30px;
      outline: none;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .input-field:focus {
      border-color: #4caf50;
      box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .remember {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    /* Button Styling */
    .button {
      padding: 10px 20px;
      border: none;
      border-radius: 30px;
      background-color: #4caf50;
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.4s, transform 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .button:hover {
      background-color: #388e3c;
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(56, 142, 60, 0.3);
    }

    /* Message Styling */
    .message {
      text-align: center;
      margin-top: 15px;
      color: red; /* Message color */
      animation: fadeIn 1s ease-in-out;
    }

    .links {
      text-align: center;
      margin-top: 15px;
    }

    .links a {
      color: #4caf50;
      text-decoration: none;
      transition: color 0.3s;
    }

    .links a:hover {
      color: #388e3c;
    }

    /* Animations */
    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-box box">

      <?php
      include "connection.php";

      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_assoc($res);
          $password = $row['password'];
          $decrypt = password_verify($pass, $password);

          if ($decrypt) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: hindihome.php");
            exit();
          } else {
            echo "<div class='message'>
                    <p>Wrong Password</p>
                    </div><br>";
            echo "<a href='login.php'><button class='button'>Go Back</button></a>";
          }
        } else {
          echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                    </div><br>";
          echo "<a href='login.php'><button class='button'>Go Back</button></a>";
        }
      } else {
      ?>

        <header>Login</header>
        <hr>
        <form action="#" method="POST">

          <div class="form-box">
            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email Address" name="email" required>
            </div>

            <div class="input-container">
              <i class="fa fa-lock icon"></i>
              <input class="input-field password" type="password" placeholder="Password" name="password" required>
              <i class="fa fa-eye toggle icon"></i>
            </div>

            <div class="remember">
              <input type="checkbox" class="check" name="remember_me">
              <label for="remember">Remember me</label>
              <span><a href="forgot.php">Forgot password?</a></span>
            </div>
          </div>

          <input type="submit" name="login" id="submit" value="Login" class="button">

          <div class="links">
            Don't have an account? <a href="signup.php">Signup Now</a>
          </div>

        </form>
      </div>
      <?php
      }
      ?>
  </div>
  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</body>

</html>
