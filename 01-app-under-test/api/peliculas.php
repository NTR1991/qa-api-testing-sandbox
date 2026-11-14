<?php
// api/peliculas.php
require_once '../conexion.php';
header('Content-Type: application/json');

$metodo = $_SERVER['REQUEST_METHOD'];

// Función de ayuda para errores
function responderError($codigo, $mensaje) {
    http_response_code($codigo);
    echo json_encode(['error' => $mensaje]);
    exit;
}

// 1. GET (Leer)
if ($metodo === 'GET') {
    if (isset($_GET['id'])) {
        $stmt = $pdo->prepare("SELECT * FROM peliculas WHERE id = :id");
        $stmt->execute([':id' => (int)$_GET['id']]);
        $pelicula = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$pelicula) responderError(404, 'Película no encontrada');
        
        echo json_encode($pelicula, JSON_PRETTY_PRINT);
    } else {
        $stmt = $pdo->query("SELECT * FROM peliculas");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
    }
    exit;
}

// 2. POST (Crear)
if ($metodo === 'POST') {
    $datos = json_decode(file_get_contents('php://input'), true);
    
    if (!$datos || empty($datos['titulo']) || empty($datos['director'])) {
        responderError(400, 'Datos inválidos o incompletos');
    }

    $sql = "INSERT INTO peliculas (titulo, director, genero, anio, duracion) 
            VALUES (:titulo, :director, :genero, :anio, :duracion)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => trim($datos['titulo']),
        ':director' => trim($datos['director']),
        ':genero' => trim($datos['genero']),
        ':anio' => (int)$datos['anio'],
        ':duracion' => (int)$datos['duracion']
    ]);

    http_response_code(201); // Created
    echo json_encode(['mensaje' => 'Película creada', 'id' => $pdo->lastInsertId()]);
    exit;
}

// 3. PUT (Actualizar)
if ($metodo === 'PUT') {
    if (!isset($_GET['id'])) responderError(400, 'Falta el ID');
    $datos = json_decode(file_get_contents('php://input'), true);

    $sql = "UPDATE peliculas SET titulo = :titulo, director = :director, 
            genero = :genero, anio = :anio, duracion = :duracion WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => trim($datos['titulo']),
        ':director' => trim($datos['director']),
        ':genero' => trim($datos['genero']),
        ':anio' => (int)$datos['anio'],
        ':duracion' => (int)$datos['duracion'],
        ':id' => (int)$_GET['id']
    ]);

    echo json_encode(['mensaje' => 'Película actualizada']);
    exit;
}

// 4. DELETE (Eliminar)
if ($metodo === 'DELETE') {
    if (!isset($_GET['id'])) responderError(400, 'Falta el ID');
    
    $stmt = $pdo->prepare("DELETE FROM peliculas WHERE id = :id");
    $stmt->execute([':id' => (int)$_GET['id']]);

    http_response_code(204); // No Content
    exit;
}

// Si llega aquí, el método no está permitido
responderError(405, 'Método no permitido');
?>
