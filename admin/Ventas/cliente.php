<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'vendimia';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM clientes WHERE nombre LIKE '%".$searchTerm."%' ORDER BY nombre ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nombre'];
}
//return json data
echo json_encode($data);
?>
