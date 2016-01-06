<?php
$fp = fopen ("action.txt", "r+");
$nb_visites = fgets ($fp, 11);
$nb_visites = $nb_visites + 1;
fseek ($fp, 0);
fputs ($fp, $nb_visites);
fclose ($fp);
echo 'Ce site compte '.$nb_visites.' visiteurs !';