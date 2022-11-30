<?php


$dbname="zeiterfassung";
$dbhost="localhost";
$dbuser="root";
$dbpass="Zeiterfassung2022";
$dbtable="test_tracking";
//$dbconnection = mysql_connect($dbhost, $dbuser, $dbpass);

$dbconnect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbtable);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if (isset($_POST['gesendet'])) {
    $p_nr = $_POST['p_nr'];
    $start_time = $_POST['start_time'];
    $pause_time = $_POST['pause_time'];
    $end_time = $_POST['end_time'];
    $note = $_POST['note'];
    
    $query = "INSERT INTO test_tracking (p_nr, start_time, pause_time, end_time, note) VALUES ('$p_nr', '$start_time', '$pause_time', '$end_time', '$note')";
    
    mysqli_query($dbconnect, $query);
    
    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
        echo "Thanks for your review.";
    }
}

//mysql_select_db($dbname,$dbconnection);

/* $p_nr = $_POST['p_nr'];
$start_time = $_POST['start_time'];
$pause_time = $_POST['pause_time'];
$end_time = $_POST['end_time'];
$note = $_POST['note'];

{
    mysql_query("INSERT INTO test_tracking (p_nr, start_time, pause_time, end_time, note) VALUES ('$p_nr', '$start_time', '$pause_time', '$end_time', '$note'");
}*/

?>