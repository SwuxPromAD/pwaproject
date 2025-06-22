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
$query = "SELECT * FROM vijesti"; 
$result = mysqli_query($dbc, $query); 
while($row = mysqli_fetch_array($result)) { 
echo '<form enctype="multipart/form-data" action="" method="POST"> 
<div class="form-item"> 
<label for="title">Naslov vjesti:</label> 
<div class="form-field"> 
<input type="text" name="title" class="form-field-textual" 
value="'.$row['naslov'].'"> 
</div> 
</div> 
<div class="form-item"> 
<label for="about">Kratki sadržaj vijesti (do 50 
znakova):</label> 
<div class="form-field"> 
<textarea name="about" id="" cols="30" rows="10" class="form
field-textual">'.$row['sazetak'].'</textarea> 
</div> 
</div> 
<div class="form-item"> 
<label for="content">Sadržaj vijesti:</label> 
<div class="form-field"> 
<textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea> 
</div> 
</div> 
<div class="form-item"> 
<label for="pphoto">Slika:</label> 
<div class="form-field">  <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/> <br>';
echo '<p class="100px">' . $row['slika'] . '</p>';
// pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike
 
            echo '</div> 
            </div> 
            <div class="form-item"> 
                <label for="category">Kategorija vijesti:</label> 
            <div class="form-field"> 
                <select name="category" id="" class="form-field-textual" 
value="'.$row['kategorija'].'"> 
                    <option value="Seniori">Seniori</option> 
                    <option value="Juniori">Juniori</option> 
                </select> 
            </div> 
            </div> 
            <div class="form-item"> 
                <label>Spremiti u arhivu:  
            <div class="form-field">'; 
                if($row['arhiva'] == 0) { 
                    echo '<input type="checkbox" name="archive" id="archive"/> 
Arhiviraj?'; 
                } else { 
                    echo '<input type="checkbox" name="archive" id="archive" 
checked/> Arhiviraj?'; 
                } 
                    echo '</div> 
                </label> 
            </div> 
            </div> 
            <div class="form-item"> 
                <input type="hidden" name="id" class="form-field-textual" 
value="'.$row['id'].'"> 
                <button type="reset" value="Poništi">Poništi</button> 
                <button type="submit" name="update" value="Prihvati"> 
Izmjeni</button> 
                <button type="submit" name="delete" value="Izbriši"> 
Izbriši</button> 
            </div> 
        </form>'; 
 
}

if(isset($_POST['delete'])){ 
    $id=$_POST['id']; 
    $query = "DELETE FROM vijesti WHERE id=$id "; 
    $result = mysqli_query($dbc, $query); 
} 

define('UPLPATH', 'images/'); 
 
if(isset($_POST['update'])){ 
$picture = $_FILES['pphoto']['name']; 
$title=$_POST['title']; 
$about=$_POST['about']; 
$content=$_POST['content']; 
$category=$_POST['category']; 
if(isset($_POST['archive'])){ 
    $archive=1; 
}else{ 
    $archive=0; 
} 
$target_dir = 'images/'.$picture; 
move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir); 

$img_tag = '<img src="images/' . htmlspecialchars($picture, ENT_QUOTES) . '" alt="">';
 
$id=$_POST['id']; 
$query = "UPDATE vijesti SET naslov='$title', sazetak='$about', tekst='$content', 
slika='$img_tag', kategorija='$category', arhiva='$archive' WHERE id=$id "; 
$result = mysqli_query($dbc, $query); 
} 
?>

<footer>
</footer>

</body>