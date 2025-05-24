<?php
require_once '../includes/config.php'; // conexión PDO

$fecha_inicio = $_GET['fecha_inicio'] ?? '';
$fecha_fin = $_GET['fecha_fin'] ?? '';

if (!$fecha_inicio || !$fecha_fin) {
    die("Fechas no válidas.");
}

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reporte_noticias_" . date("Ymd_His") . ".xls");

echo "<table border='1'>";
echo "<tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Tipo de Noticia</th>
        <th>Fecha de Publicación</th>
      </tr>";

$stmt = $pdo->prepare("
    SELECT n.titulo, u.nombre as autor, n.tipo_noticia, n.fecha_publicacion
    FROM noticias n
    JOIN usuarios u ON n.autor_id = u.id
    WHERE DATE(n.fecha_publicacion) BETWEEN ? AND ?
    ORDER BY n.fecha_publicacion DESC
");
$stmt->execute([$fecha_inicio, $fecha_fin]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
    echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
    echo "<td>" . htmlspecialchars($row['tipo_noticia']) . "</td>";
    echo "<td>" . date('d/m/Y', strtotime($row['fecha_publicacion'])) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
