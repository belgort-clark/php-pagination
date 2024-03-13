<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ctec';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO Instance
$db = new PDO($dsn, $user, $password);
// Set PDO default data type to be returned
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$start = 0;

$rows_per_page = 20;

$stmt = $db->prepare("SELECT * FROM student_v2");
$records = $stmt->execute();
$records = $stmt->rowCount();

$pages = ceil($records / $rows_per_page);

if (isset($_GET["page"])) {
    $page = $_GET["page"] - 1;
    $start = $page * $rows_per_page;
}

$sql = "SELECT * FROM student_v2 LIMIT $start,$rows_per_page";
$stmt = $db->prepare($sql);
$stmt->execute();
