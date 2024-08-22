<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'mathequatezone');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_class = $_POST['class'];

    $sql = "UPDATE users SET username=?, email=?, class=? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $new_username, $new_email, $new_class, $username);
    $stmt->execute();
    $stmt->close();

    $_SESSION['username'] = $new_username;
    header('Location: home.php');
    exit();
}

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Change Profile</title>

</head>

<body class="bg-krem grain">
    <div class="nav flex items-center justify-between bg-krem border-hitam lg:px-12 px-8 py-4">
        <div class="logo">
            <img src="image/logo MEZ 2.png" alt="" style="width: 40px; height: 40px; margin-top: 20%;">
        </div>

        <div class="right-links">
            <a href="home.php" style="color: black;">Back To Home</a>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>

                <div class="field input">
                    <label for="class">Class</label>
                    <select id="class" name="class" required>
                        <option value="10" <?php if ($user['class'] == '10') echo 'selected'; ?>>Kelas 10</option>
                        <option value="11" <?php if ($user['class'] == '11') echo 'selected'; ?>>Kelas 11</option>
                        <option value="12" <?php if ($user['class'] == '12') echo 'selected'; ?>>Kelas 12</option>
                        <option value="Lainnya" <?php if ($user['class'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                    </select>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>

            </form>
        </div>
    </div>
</body>

</html>