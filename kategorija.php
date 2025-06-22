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
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php 
include 'connect.php'; 
?> 
<?php 
$kategorija=$_GET['kategorija'];
$query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='$kategorija'"; 
$result = mysqli_query($dbc, $query); 
       $i=0; 
       while($row = mysqli_fetch_array($result)) { 
             echo '<article>'; 
                echo'<div class="media-article">'; 
                echo '<div class="img">'; 
                echo $row['slika']; 
                echo '</div>'; 
                echo '<div class="media_body">'; 
                echo '<h4 class="title">'; 
                echo '<a href="clanak.php?id='.$row['id'].'">'; 
                echo $row['naslov']; 
                echo '</a></h4>'; 
                echo '</div></div>'; 
                echo $row['datum']; 
                echo '</article>'; 
           }?>  

           <footer>
</footer>

</body>