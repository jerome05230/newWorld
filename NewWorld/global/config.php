<?php
/*
<!-------------------------------------------------------------------------------------
# Nom du programme                   : nom_du_fichier.html
# Version                            : 1.0
# Description                        : Page nom_de_la_page HTML5 du site nom_du_site
# Date de création                   : jj/mm/aaaa
# Date de modification               : jj/mm/aaaa
# Auteur                             : BARON-CAMPOS Jérôme
# Commentaire                        : 
------------------------------------------------------------------------------------->
 */
// Chemins à utiliser pour accéder aux vues/modeles/librairies
$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'index' : $module;
define('CHEMIN_VUE',    'modules/'.$module.'/vues/');
define('CHEMIN_MODELE', 'modeles/');
define('CHEMIN_CONTROLEUR', 'modules/'.$module.'/');
define('CHEMIN_LANGUE', 'langue/');
?>
