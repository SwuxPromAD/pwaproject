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

<form action="" method="POST" enctype="multipart/form-data"> 
<div class="form-item"> 
<label for="naslov">Naslov vijesti</label> 
<div class="form-field"> 
<input type="text" name="naslov" class="form-field-textual"> 
</div> 
</div> 
<div class="form-item"> 
<label for="sazetak">Kratki sadržaj vijesti (do 50 znakova)</label> 
<div class="form-field"> 
<textarea name="sazetak" id="" cols="30" rows="10" class="form-field-textual"></textarea> 
</div> 
</div> 
<div class="form-item"> 
<label for="tekst">Sadržaj vijesti</label> 
<div class="form-field"> 
<textarea name="tekst" id="" cols="30"rows="10" class="form-field-textual"></textarea> 
</div> 
</div> 
<div class="form-item">  
<label for="slika">Slika: </label> 
<div class="form-field"> 
<input type="file" accept="image/jpg" class="input-text" name="slika"/> 
</div> 
</div> 
<div class="form-item"> 
<label for="kategorija">Kategorija vijesti</label> 
<div class="form-field"> 
<select name="kategorija" id="" class="form-field-textual"> 
<option value="Seniori">Seniori</option> 
<option value="Juniori">Juniori</option> 
</select> 
</div> 
</div> 
<div class="form-item"> 
<label>Spremiti u arhivu:  
<div class="form-field"> 
<input type="checkbox" name="arhiva"> 
</div> 
</label> 
</div> 
<div class="form-item"> 
<button type="reset" value="Ponisti">Poništi</button> 
<button type="submit" value="Prihvati">Prihvati</button> 
</div> 
</form>

<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $naslov = isset($_POST['naslov']) ? $_POST['naslov'] : '';
    $sazetak = isset($_POST['sazetak']) ? $_POST['sazetak'] : '';
    $tekst = isset($_POST['tekst']) ? $_POST['tekst'] : '';
    $kategorija = isset($_POST['kategorija']) ? $_POST['kategorija'] : '';
    $datum = date('d.m.Y.');
    $arhiva = isset($_POST['arhiva']) ? 1 : 0;

    $slika_name = '';
    if (isset($_FILES['slika']) && $_FILES['slika']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'images/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $tmp_name = $_FILES['slika']['tmp_name'];
        $original_name = basename($_FILES['slika']['name']);
        $slika_name = uniqid() . '_' . $original_name;
        $target_path = $upload_dir . $slika_name;

        if (!move_uploaded_file($tmp_name, $target_path)) {
            echo "Greska prilikom prijenosa slike.";
            exit;
        }
    } else {
        echo "Slika nije prenesena ili je doslo do greske.";
        exit;
    }

    $img_tag = '<img src="images/' . htmlspecialchars($slika_name, ENT_QUOTES) . '" alt="">';

    $stmt = $dbc->prepare("INSERT INTO vijesti (naslov, sazetak, tekst, slika, kategorija, arhiva, datum) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die($dbc->error);
    }

    $stmt->bind_param("sssssis", $naslov, $sazetak, $tekst, $img_tag, $kategorija, $arhiva, $datum);

    if ($stmt->execute()) {
        echo "Vijest je uspješno spremljena!";
    } else {
    }

    $stmt->close();
    $dbc->close();
}
?>

<footer>
</footer>

</body>