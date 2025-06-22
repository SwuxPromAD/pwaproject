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
?> 

<section role="main"> 
    <?php 
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = "SELECT * FROM vijesti WHERE id = $id"; 
$result = mysqli_query($dbc, $query);
$i=0; 
       while($row = mysqli_fetch_array($result)) { 
             echo '<div class="row">';
             echo '<h2 class="category">';
                     echo "<span>".$row['kategorija']."</span>"; 
                     echo '</h2>'; 
             echo'<h1 class="title">';
                     echo $row['naslov']; 
                     echo'</h1>'; 
             echo'<p>AUTOR:</p>'; 
             echo'<p>OBJAVLJENO: ';
                     echo "<span>".$row['datum']."</span>"; 
                     echo'</p>'; 
             echo'</div> ';
             echo'<section class="slika"> ';
                  echo $row['slika']; 
             echo'</section> ';
             echo'<section class="about"> ';
                 echo'<p> ';
                     echo "<i>".$row['sazetak']."</i>"; 
                echo' </p> ';
 
             echo'</section> ';
            echo' <section class="sadrzaj"> ';
                echo' <p> ';
                     echo $row['tekst']; 
                 echo'</p> ';
             echo'</section> ';
       }?>
         </section>

         <footer>
</footer>

</body>