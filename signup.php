<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #fc466b 0%, #3f5efb 100%);
      font-family: 'Arial', sans-serif;
    }

    .container {
      max-width: 400px;
      width: 100%;
      background: white;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
      transform: scale(1);
      transition: transform 0.4s ease-in-out;
    }

    .container:hover {
      transform: scale(1.03);
    }

    header {
      background: linear-gradient(45deg, #fc466b, #3f5efb);
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 26px;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-radius: 15px 15px 0 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

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
      color: #fc466b;
      font-size: 18px;
    }

    .input-field {
      width: 90%;
      padding: 12px 12px 12px 40px;
      border: 1px solid #ccc;
      border-radius: 30px;
      outline: none;
      transition: 0.4s;
      background-color: #f9f9f9;
    }

    .input-field:focus {
      border-color: #fc466b;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(252, 70, 107, 0.4);
    }

    .strength-indicator {
      text-align: right;
      font-size: 12px;
      color: #666;
    }

    .strength-indicator.weak {
      color: #ff1744;
    }

    .strength-indicator.medium {
      color: #ff9100;
    }

    .strength-indicator.strong {
      color: #00e676;
    }

    .btn {
      padding: 12px 20px;
      border: none;
      border-radius: 30px;
      background-color: #fc466b;
      color: white;
      font-size: 18px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.4s, transform 0.4s ease;
    }

    .btn:hover {
      background-color: #3f5efb;
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(63, 94, 251, 0.3);
    }

    .match-indicator {
      font-size: 12px;
      margin-top: -10px;
      text-align: right;
    }

    .match-indicator.match {
      color: #00e676;
    }

    .match-indicator.no-match {
      color: #ff1744;
    }

    .links {
      text-align: center;
      margin-top: 15px;
    }

    .links a {
      color: #fc466b;
      text-decoration: none;
      transition: color 0.3s;
    }

    .links a:hover {
      color: #3f5efb;
    }

    .message {
      margin: 10px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-box box">
      <header>Sign Up</header>
      <form action="#" method="POST">

        <?php
        include "connection.php";

        if (isset($_POST['register'])) {

          $name = $_POST['username'];
          $email = $_POST['email'];
          $pass = $_POST['password'];
          $cpass = $_POST['cpass'];

          $check = "select * from users where email='{$email}'";
          $res = mysqli_query($conn, $check);
          $passwd = password_hash($pass, PASSWORD_DEFAULT);

          if (mysqli_num_rows($res) > 0) {
            echo "<div class='message' style='color:red'>
                    <p>This email is already in use. Try another.</p>
                    <a href='register.php'><button type='button' class='btn'>Go Back</button></a>
                  </div>";
          } else {
            if ($pass === $cpass) {
              $sql = "insert into users(username,email,password) values('$name','$email','$passwd')";
              $result = mysqli_query($conn, $sql);

              if ($result) {
                echo "<div class='message' style='color:green'>
                        <p>Successfully registered!</p>
                        <div class='links'>
                          <p>Already have an account? <a href='login.php'>Sign in here</a></p>
                        </div>
                      </div>";
              } else {
                echo "<div class='message' style='color:red'>
                        <p>Registration failed. Please try again.</p>
                      </div>";
              }
            } else {
              echo "<div class='message' style='color:red'>
                      <p>Passwords do not match!</p>
                    </div>";
            }
          }
        } else {
        ?>

        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Username" name="username" required>
        </div>

        <div class="input-container">
          <i class="fa fa-envelope icon"></i>
          <input class="input-field" type="email" placeholder="Email Address" name="email" required>
        </div>

        <div class="input-container">
          <i class="fa fa-lock icon"></i>
          <input class="input-field password" type="password" placeholder="Password" name="password" required>
          <div class="strength-indicator" id="strength-indicator"></div>
        </div>

        <div class="input-container">
          <i class="fa fa-lock icon"></i>
          <input class="input-field" type="password" placeholder="Confirm Password" name="cpass" required>
          <div class="match-indicator" id="match-indicator"></div>
        </div>

        <button type="submit" name="register" class="btn">Sign Up</button>

        <div class="links">
          Already have an account? <a href="login.php">Sign in here</a>
        </div>

        <?php
        }
        ?>
      </form>
    </div>
  </div>

  <script>
    const passwordField = document.querySelector('.password');
    const strengthIndicator = document.getElementById('strength-indicator');
    const confirmPasswordField = document.querySelector('input[name="cpass"]');
    const matchIndicator = document.getElementById('match-indicator');

    passwordField.addEventListener('input', function() {
      const password = passwordField.value;
      let strength = 'Weak';

      if (password.length >= 8 && /[A-Z]/.test(password) && /[0-9]/.test(password)) {
        strength = 'Strong';
        strengthIndicator.className = 'strength-indicator strong';
      } else if (password.length >= 6) {
        strength = 'Medium';
        strengthIndicator.className = 'strength-indicator medium';
      } else {
        strengthIndicator.className = 'strength-indicator weak';
      }

      strengthIndicator.textContent = 'Strength: ' + strength;
    });

    confirmPasswordField.addEventListener('input', function() {
      if (confirmPasswordField.value === passwordField.value) {
        matchIndicator.textContent = 'Passwords match';
        matchIndicator.className = 'match-indicator match';
      } else {
        matchIndicator.textContent = 'Passwords do not match';
        matchIndicator.className = 'match-indicator no-match';
      }
    });
  </script>
</body>

</html>
