<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicolas
 * Date: 12/9/2015
 * Time: 4:16 PM
 */
$dateStart = null;
$dateEnd = null;
$queryChoice = null;

function checkDateFormat()
{
    global $dateStart;
    global $dateEnd;
    global $queryChoice;


    $dateStart = $_GET["start"];
    $dateEnd = $_GET["end"];
    $queryChoice = $_GET["flow"];



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

    switch($queryChoice) {
        case "in":
            $queryString = "SELECT * from Entry where Date between '".$dateStart."' and '".$dateEnd."' order by `Date` asc";
            break;
        case "out":
            $queryString = "SELECT * from Exit where Date between '".$dateStart."' and '".$dateEnd."' order by `Date` asc";
    }
    $PDOresult = $huby_db->query($queryString);

    $result = $PDOresult->fetchAll();
    //var_dump($result);
    $entry_list = json_encode($result);
    echo $entry_list;
}

