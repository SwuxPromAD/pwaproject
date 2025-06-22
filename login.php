<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM korisnik WHERE username = '$username'";
    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) == 0) {
        header("Location: registracija.php");
        exit();
    } else {
        $user = mysqli_fetch_assoc($result);

        if ($user['password'] === $password) {
            echo "Login successful! Welcome, " . htmlspecialchars($user['ime']);
        } else {
            echo "Incorrect password.";
        }
    }
}
?>

<form action="" method="POST">
    <label for="username">Username:</label><br>
    <input name="username" type="text" required><br>
    
    <label for="password">Password:</label><br>
    <input name="password" type="password" required><br><br>
    
    <input type="submit" value="Login">
</form>
