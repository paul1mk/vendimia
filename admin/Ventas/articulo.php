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
$query = $db->query("SELECT * FROM articulos WHERE descripcion LIKE '%".$searchTerm."%' ORDER BY descripcion ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['descripcion'];
}
//return json data
echo json_encode($data);
?>
