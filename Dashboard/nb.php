<?php
$fp = fopen ("action.txt", "r+");
$nb_visites = fgets ($fp, 11);
echo $nb_visites;