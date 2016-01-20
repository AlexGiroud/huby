<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicolas
 * Date: 12/9/2015
 * Time: 4:16 PM
 */

$huby_db = new PDO(
    'sqlite:HubyDb.db');
$huby_db->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

//$range_start = $_GET["start"];
//$range_end = $_GET["end"];

$datetime1 = new DateTime('2012-01-01');
$datetime2 = new DateTime('2014-01-01');

$difference = $datetime2->diff($datetime1);
echo $difference->format('%y months');
echo ("\r\n");

$PDOresult = $huby_db->query("SELECT COUNT(*) as total from Entry where Date between '2012-01-01' and '2016-01-01'");

$result = $PDOresult->fetch();

echo $result['total'];

