<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h3 class="mb-4">Generar Reporte de Noticias</h3>
    <form action="descargar_excel.php" method="GET">
        <div class="row mb-3">
            <div class="col">
                <label for="fecha_inicio" class="form-label">Desde</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
            </div>
            <div class="col">
                <label for="fecha_fin" class="form-label">Hasta</label>
                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-file-excel"></i> Descargar Reporte Excel</button>
    </form>
</div>
</body>
</html>
