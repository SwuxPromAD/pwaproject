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