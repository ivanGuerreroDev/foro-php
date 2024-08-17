<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Foro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include_once('template/header.php'); ?>

<main>
    <section>
        <h1>Publicaciones Recientes</h1>
        <?php
        include('conexion.php');
        $query = "SELECT *, username as usuario FROM publicaciones INNER JOIN usuarios ON publicaciones.usuario_id = usuarios.id ORDER BY fecha_creacion DESC LIMIT 10";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="post">
                <h3><?php echo htmlspecialchars($row['titulo']); ?></h3>
                <p><?php echo htmlspecialchars($row['contenido']); ?></p>
                <small>Publicado por: <?php echo htmlspecialchars($row['usuario']); ?> el <?php echo htmlspecialchars($row['fecha_creacion']); ?></small>
            </div>
        <?php endwhile; ?>
    </section>
</main>
</body>
</html>
