<?php
/** @var string $sf_content */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Sistema Médico - ORION</title>
    <style>
        body { background: #f4f7f6; font-family: 'Segoe UI', sans-serif; margin: 0; }
        .sidebar { width: 260px; background: #3b5998; color: white; height: 100vh; position: fixed; left: 0; top: 0; }
        .main-content { margin-left: 260px; padding: 20px; width: calc(100% - 260px); }
        .nav-link { color: #d1d8e0; padding: 15px; border-bottom: 1px solid #334a7d; text-decoration: none; display: block; }
        .nav-link:hover { background: #2f477a; color: white; }
        .nav-link i { margin-right: 10px; }
    </style>
</head>
<body>

<div class="sidebar d-flex flex-column">
    <div class="text-center py-4">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="rounded-circle mb-2" width="80" alt="Logo">
        <h6>ORION</h6>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link" href="<?php echo url_for('article/index') ?>"><i class="bi bi-house"></i> Inicio</a>
        <a class="nav-link" href="#"><i class="bi bi-card-list"></i> Tarjetas de Acceso</a>
        <a class="nav-link" href="#"><i class="bi bi-gear"></i> Mantenimiento</a>
    </nav>
</div>

<div class="main-content">
    <?php echo $sf_content ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>