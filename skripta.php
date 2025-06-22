<?php
//NE KORISTI SE VIŠE NAKON ŠTO SAM PROMIJENIO UNOS.HTML U UNOS.PHP
?>

<section role="main"> 
             <div class="row"> 
             <p class="kategorija"><?php 
                     echo $kategorija; 
                     ?></p> 
             <h1 class="naslov"><?php 
                     echo $naslov; 
                     ?></h1> 
             <p>AUTOR:</p> 
             <p>OBJAVLJENO:</p> 
             </div> 
             <section class="slika"> 
             <?php 
                     echo "<img src='images/$slika'"; 
                     ?> 
 
             </section> 
             <section class="sazetak"> 
                 <p> 
                 <?php 
                     echo $sazetak; 
                     ?> 
                 </p> 
 
             </section> 
             <section class="tekst"> 
                 <p> 
                     <?php 
                     echo $tekst; 
                     ?> 
                 </p> 
             </section> 
 
         </section> 