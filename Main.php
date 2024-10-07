<?php

include 'Composite.php';
include 'Leaf.php';

$servername = "localhost";
$username = "root";
$password = "";
$database = "design_patterns";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully\n\n";

$mysqli = new mysqli($servername, $username, $password, $database);
$sql = "INSERT INTO composite (name, parent) VALUES (?, ?)";

$file1 = new File("file1.txt");
$file2 = new File("file2.txt");
$file3 = new File("file3.txt");

$dir1 = new Folder("Folder 1");
$dir1->add($file1);
$dir1->add($file2);

$root = new Folder("Root");
$root->add($dir1);
$root->add($file3);
$root->display();

$mysqli->execute_query($sql, [$file1->name, $file1->parent]);
$mysqli->execute_query($sql, [$file2->name, $file2->parent]);
$mysqli->execute_query($sql, [$file3->name, $file3->parent]);

?>