<?php
//print_r($_SESSION);
 ?>
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary navbar-fixed-top">
	<div class="container">
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
		</button>
    <a class="navbar-brand active" href="index.php"><span class="sr-only">(current)</span><strong>NW</strong></a>
    <div class="collapse navbar-collapse" id="navbarNav1">
     	<ul class="navbar-nav mr-auto">
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=Acheter'>>Acheter</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=Produire'>>Produire</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=vitrine&amp;action=Distribuer'>>Distribuer</a></li>
<?php 
  if ( utilisateur_est_connecte()) {
    if ( utilisateur_est_complet()) {
      $type = $_SESSION["type"] ;
      switch ($type) {
        
        //cas client
        case "C" :  
?>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=profil'>Info</a></li>
          <li class="nav-item "><a class="nav-link" href='index.php?module=panier&amp;action=panier'>Panier</a></li>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=deconnexion'><i class="fa fa-sign-out" ></i>Déconnexion</a></li>
<?php          
          break;
        //cas point relai
        case "R" :
?>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=profil'>Info</a></li>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=deconnexion'><i class="fa fa-sign-out" ></i>Déconnexion</a></li>
<?php    
              break;
        //cas producteur
        case "P" :
?>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=profil'>Info</a></li>
          <li class="nav-item "><a class="nav-link" href='index.php?module=&amp;action=profil'>Produits</a></li>
          <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=desconnexion'><i class="fa fa-sign-out" ></i>Déconnexion</a></li>
<?php 
              break;
        default : 
        break; 
      }    
    } 
    else{
?>
      <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=completionProfil'>Completer Profil</a></li>
<?php 
    }
  }
  else {
    // index.php?module=visiteurs&amp;action=afficher_profil&amp;id=$id_utilisateur
    // <a href='index.php?module=visiteurs&amp;action=connexion'>Connexion</a>*/
?>
 				<!--<li class="nav-item"><a href="#modal_login" id="show_login" class="nav-link" data-toggle="modal" data-target="#modal_login"><i class="fa fa-sign-in" ></i>Connexion</i>-->
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=connexion'><i class="fa fa-sign-in" ></i>Connexion</a></li>
        <li class="nav-item "><a class="nav-link" href='index.php?module=utilisateur&amp;action=inscription'>Inscription</a></li>
<?php } ?>
    	</ul>
      <form class="form-inline waves-effect waves-light">
       	<input class="form-control" type="text" placeholder="Search">
     	</form>
  	</div>
	</div>

</nav>


