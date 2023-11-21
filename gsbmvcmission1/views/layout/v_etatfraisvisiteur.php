<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais.php&action=afficher" method="post">
      <div class="corpsForm">

<p>
     
     <label for="numéro" accesskey="n">Frais : </label>
     <select id="nuémro" name="numéro">
         <?php
         foreach ($lesMois as $unMois)
         {
             $mois = $unMois['mois'];
             $numAnnee =  $unMois['numAnnee'];
             $numMois =  $unMois['numMois'];
             if($mois == $moisASelectionner){
             ?>
             <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
             <?php 
             }
             else{ ?>
             <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
             <?php 
             }
         
         }
         ?>