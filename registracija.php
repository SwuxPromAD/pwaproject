<!DOCTYPE html>
<html>
<head>
    <title>PWA Projekt</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="author" content="Petar Šimunović">
    <meta name="description" content="PWA Projekt">
    <meta name="revised" content="Projekt, rok 22.6.2025."/>
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="style.css">
</head>

<body>
    <header>
    <img src="images/logo.png" width="100px" title="logo" alt="logo">

    <nav class="navbar main_nav" role="navigation"> 
     <ul class="main nav navbar-nav"> 
     <li> 
         <a href="index.php" class="">Početna</a> 
     </li> 
     <li> 
         <a href="unos.php" class="">Unos</a> 
     </li> 
     <li> 
         <a href="kategorija.php?kategorija=seniori" class="">Seniori</a> 
     </li> 
     <li> 
<a href="kategorija.php?kategorija=juniori" class="">Juniori</a> 
</li> 
<li> 
<a href="administracija.php" class="">Administracija</a> 
</li> 
</ul> 
</header>

<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = trim($_POST['ime']);
    $prezime = trim($_POST['prezime']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $razina = isset($_POST['razina']) ? 1 : 0;

    // Insert user
    $query = "INSERT INTO korisnik (ime, prezime, username, password, razina)
              VALUES ('$ime', '$prezime', '$username', '$password', $razina)";
    
    if (mysqli_query($dbc, $query)) {
        echo "Registration successful! <a href='login.php'>Go to login</a>";
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}

?>

<form action="" method="POST">
    <label for="ime">Name:</label><br>
    <input name="ime" type="text" required><br>

    <label for="prezime">Surname:</label><br>
    <input name="prezime" type="text" required><br>

    <label for="username">Username:</label><br>
    <input name="username" type="text" required><br>

    <label for="password">Password:</label><br>
    <input name="password" type="password" required><br>

    <label for="razina">
        <input name="razina" type="checkbox"> Admin
    </label><br><br>

    <input type="submit" value="Register">
</form>

<footer>
</footer>

</body>