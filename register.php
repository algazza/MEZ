<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'mathequatezone');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $class = $_POST['class'];

    // Insert data into the database
    $sql = "INSERT INTO users (email, username, password, class) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $email, $username, $password, $class);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <!-- =================== Icon CSS ===================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" crossorigin="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="" />
  <!-- ==================== Math Font ==================== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/katex.min.css" integrity="sha384-wcIxkf4k558AjM3Yz3BBFQUbk/zgIYC2R0QpeeYb+TwlBVMrlgLqwRjRtGZiK7ww" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/katex.min.js" integrity="sha384-hIoBPJpTUs74ddyc4bFZSM1TVlQDA60VBbJS0oA934VSz82sBx1X7kSx2ATBDIyd" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/contrib/auto-render.min.js" integrity="sha384-43gviWU0YVjaDtb/GhzOouOXtZMP/7XUzwPTstBeZFe/+rCMvRwr4yROQP43s0Xk" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      renderMathInElement(document.body, {
        // customised options
        // • auto-render specific keys, e.g.:
        delimiters: [{
            left: "$$",
            right: "$$",
            display: true
          },
          {
            left: "$",
            right: "$",
            display: false
          },
          {
            left: "\\(",
            right: "\\)",
            display: false
          },
          {
            left: "\\[",
            right: "\\]",
            display: true
          },
        ],
        // • rendering keys, e.g.:
        throwOnError: false,
      });
    });
  </script>
  <!-- ==================== CSS Tailwind Component ===================== -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
</head>

<body class="bg-krem grain text-base hitam">
  <section class="py-20 border-hitam-bawah">
    <div class="box grid justify-center py-4 px-4 ms-auto me-auto">
      <div class="bg-putih border-hitam rounded-md p-4">
        <div class="flex gap-x-2">
          <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
          <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
          <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
        </div>

        <div class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center">
          <div class="py-3">
            <img style="width: 400px; height: 450px;" src="./image/maskot_mez.png" alt="" />
          </div>
          <div class="grid justify-center">
</head>
<body>


    <div class="">
        <h2 style="text-align: center; font-size: 30px;">Register</h2>
        <form method="post" action="register.php">
            <label for="email">Email:</label>
            <input style="background-color: #fff;" type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input style="background-color: #fff;" type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input style="background-color: #fff;" type="password" id="password" name="password" required>

            <label for="class">Class:</label>
            <select style="background-color: #fff;" id="class" name="class" required>
                <option value="10">Class 10</option>
                <option value="11">Class 11</option>
                <option value="12">Class 12</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <input style="background-color: #A47449;" type="submit" value="Register">
        </form>
    </div>

    <!-- ======================== Gsap Lenis =================================== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
  <!-- =================== Typed Js =========================== -->
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <!-- =================== Javascript =================== -->
  <script src="./js/script.js"></script>
</body>
</html>
