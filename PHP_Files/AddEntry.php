<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicolas
 * Date: 12/9/2015
 * Time: 11:56 AM
 */
try {
    $huby_db = new PDO(
        'sqlite:HubyDb.db');
    $huby_db->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);      // Select all data from file db messages table

    $result = $huby_db->query("INSERT INTO Entry(Date)
                                  VALUES (datetime('now'))");
}
catch(PDOException $e){
    echo $e->getMessage();
}
