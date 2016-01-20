<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicolas
 * Date: 12/9/2015
 * Time: 4:16 PM
 */
$dateStart = null;
$dateEnd = null;

function checkDateFormat()
{
    global $dateStart;
    global $dateEnd;

    $dateStart = $_GET["start"];
    $dateEnd = $_GET["end"];



    $englishDate = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})/";
    $frenchDate = "/^([0-9]{2})-([0-9]{2})-([0-9]{4})/";
    if (preg_match($englishDate, $dateStart, $matches) != null) {
        return true;
    } else if (preg_match($frenchDate, $dateStart, $matches) != null) {
        $dateStart = $matches[3]."-".$matches[2]."-".$matches[1];
        preg_match($frenchDate, $dateEnd, $matches);
        $dateEnd = $matches[3]."-".$matches[2]."-".$matches[1];
        return true;
    } else {
        return false;
    }
}


$validDate = checkDateFormat();
if($validDate == true) {
    $huby_db = new PDO(
        'sqlite:HubyDb.db');
    $huby_db->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    $queryString = "SELECT * from Entry where Date between '".$dateStart."' and '".$dateEnd."'";

    $PDOresult = $huby_db->query($queryString);

    $result = $PDOresult->fetch();

    echo $result[0];
}

