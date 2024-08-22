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
    header('Location: profile.php');
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
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="bab1.php">Materi</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
        <form action="profile.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

            <label for="class">Class</label>
            <select id="class" name="class" required>
                <option value="10" <?php if ($user['class'] == '10') echo 'selected'; ?>>Kelas 10</option>
                <option value="11" <?php if ($user['class'] == '11') echo 'selected'; ?>>Kelas 11</option>
                <option value="12" <?php if ($user['class'] == '12') echo 'selected'; ?>>Kelas 12</option>
            </select>

            <input type="submit" value="Save Changes">
        </form>
    </div>
</body>
</html>
