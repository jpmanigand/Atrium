<?php
 
// alphanumerical ID of the plugin; never change this
$id = "xatr";
 
// code version; must be changed for all code changes
$version = "1.0.0";
/*
version 1.0.0 => correctif classe excel sur V5.3 - correction sur le calcul de la moyenne - présentation de la progression
version 0.0.45=> mise en conformite 5.3 et php 7.1 - ticket mantis nmr 0000180
version 0.0.44=> mise en conformité 5.2 - Adaptation des class class.ilAtriumLPMatrixTableGUI, class.ilAtriumLPSummaryTableGUI et class.ilAtriumLPUsersTableGUI avec phpexcel
version 0.0.43=> mise en conformité 5.1 (ajout de la fonction uninstallCustom dans ilAtriumPlugin.php)
version 0.0.42=> 
suppression de la page de configuration du plug-in qui est inutile
Mise en commentaire de la balise echo ligne 439 du fichier classe.ilAtriumTrackingData.php
*/
 
// ilias min and max version; must always reflect the versions that should
// run with the plugin
$ilias_min_version = "5.2.0";
$ilias_max_version = "5.3.999";
 
// optional, but useful: Add one or more responsible persons and a contact email
$responsible = "Alexander Killing";
$responsible_mail = "killing at leifos.com";
$learning_progress = true;
?>
