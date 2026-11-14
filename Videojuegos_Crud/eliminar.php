<?php
require_once 'conexion.php';

// QA Check 1: Verificar que el ID venga en la URL
if (!isset($_GET['id'])) {
    header('Location: index.php?mensaje=ID no proporcionado');
    exit;
}

$id = (int) $_GET['id'];

// QA Check 2: Verificar que la película realmente exista antes de borrar
$stmt = $pdo->prepare("SELECT id FROM peliculas WHERE id = :id");
$stmt->execute([':id' => $id]);

if ($stmt->rowCount() === 0) {
    // Si no existe, no la borramos y avisamos
    header('Location: index.php?mensaje=Película no encontrada');
    exit;
}

// Si existe, procedemos a borrar de forma segura
$stmt = $pdo->prepare("DELETE FROM peliculas WHERE id = :id");
$stmt->execute([':id' => $id]);

header('Location: index.php?mensaje=Película eliminada correctamente');
exit;
?>
