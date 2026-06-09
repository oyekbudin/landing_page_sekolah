<?php
header('Content-Type: application/json');

$koneksi = new mysqli("localhost", "smpmaar2_smpmaarif", "smpmaarif65@rk", "smpmaar2_smpmaarif");

if ($koneksi->connect_error) {
    die(json_encode(["error" => $koneksi->connect_error]));
}

$result = $koneksi->query("SELECT * FROM admins");

$data = [];
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
