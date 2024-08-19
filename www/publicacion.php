<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Foro</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <?php include_once('template/header.php'); ?>
    <main>
        <section>
            <?php
            // get form url param id.
            if (isset($_GET['id'])) {
                include('inc/conexion.php');
                $query = "SELECT *, username as usuario FROM publicaciones INNER JOIN usuarios ON publicaciones.usuario_id = usuarios.id WHERE publicaciones.id = " . $_GET['id'];
                $result = mysqli_query($conn, $query);
                if (empty($result) || mysqli_num_rows($result) == 0) {
                    echo "<p>No hay publicaciones disponibles.</p>";
                } else {
                    $row = mysqli_fetch_assoc($result);
            ?>
                    <div class="post">
                        <?php if (!empty($row['imagen_url'])) : ?>
                            <img src="<?php echo $row['imagen_url']; ?>" alt="<?php echo $row['titulo']; ?>" height='300px'>
                        <?php endif; ?>
                        <?php if (!empty($row['video_url'])) : ?>
                            <video controls>
                                <source src="<?php echo $row['video_url']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($row['titulo']); ?></h3>
                        <p><?php echo htmlspecialchars($row['contenido']); ?></p>
                        <small>Publicado por: <?php echo htmlspecialchars($row['usuario']); ?> el <?php echo htmlspecialchars($row['fecha_creacion']); ?></small>
                    </div>
            <?php
                    include('comentario.php');
                }
            } else {
                echo "<p>No hay publicaciones disponibles.</p>";
            }
            ?>
        </section>
    </main>
</body>