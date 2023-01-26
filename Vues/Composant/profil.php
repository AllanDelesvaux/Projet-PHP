<div class="flex items-center justify-between">
  <img class="h-10 w-10 rounded-md" src= "<?php echo $_SESSION['suid']->getPhoto()?>" alt="">
  <div class="inline-block px-4">
    <?php 
        echo "<div class='font-semibold'> ". $_SESSION['suid']->getNom()." </div>";
        if($_SESSION['isAdmin']){
          echo "<a href='/PageAdministration' > <span class ='text-gray-200'>Administrateur</span></a>";
        }
        else{
          echo "<span class ='text-gray'>Utilisateur</span>";
        }
        ?>
  </div>
</div>