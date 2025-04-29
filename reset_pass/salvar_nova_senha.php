<?php

require_once('../config/config.php');

session_start();

$username = $_SESSION['username'];
$senha = $_POST['senha'];

$options = [
    'cost' => 15,
];

$hash = password_hash($senha, PASSWORD_DEFAULT, $options);

$sql = "UPDATE usuarios SET senha = ? WHERE username = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param('ss', $hash, $username);
$stmt->execute();

$conn->close();
$stmt->close();

header('Location: ../')



?>