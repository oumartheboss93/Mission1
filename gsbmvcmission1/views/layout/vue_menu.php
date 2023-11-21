<nav class="menuLeft">
  
  </nav>
    <!-- Division pour le sommaire -->
    <nav class="menuLeft">
        <ul class="menu-ul">
        <?php if(isset($_SESSION['prenom'])) { ?>
			<li class="menu-item">
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom'] ?>
			</li>
           
           <li class="menu-item">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>

           <li class="menu-item">
              <a href="index.php?uc=etatFrais&action=FraisVisiteur" title="Etat de tout les frais par visiteurs">Etat de tous les frais par visiteur</a>
           </li>
         
 	   <li class="menu-item">
             <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter"> Déconnexion</a>
           </li>
         </ul>
         
            <?php } ?>
    </ul>
  </nav> 
<section class="content">

