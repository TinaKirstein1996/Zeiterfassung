<?php

if($_POST[gesendet])

$dbname="zeiterfassung";
$dbhost="localhost";
$dbuser="root";
$dbpass="Zeiterfassung2022";
$dbconnection = @mysql_connect($dbhost, $dbuser, $dbpass);


mysql_select_db($dbname,$dbconnection);

$p_nr = $_POST['p_nr'];
$start_time = $_POST['start_time'];
$pause_time = $_POST['pause_time'];
$end_time = $_POST['end_time'];
$note = $_POST['note'];

{
    mysql_query("INSERT INTO test_tracking (p_nr, start_time, pause_time, end_time, note) VALUES ('$p_nr', '$start_time', '$pause_time', '$end_time', '$note'");
}

?>?>