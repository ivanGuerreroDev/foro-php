<nav class="main-nav">
    <img src="https://media.ambito.com/p/d9c05f0c7071deefa00d7353c919fdff/adjuntos/239/imagenes/040/743/0040743943/taringa-logo.jpg" alt="Logo">
    <ul>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">LogIn</a></li>
            <li><a href="registro.php">SignUp</a></li>
        <?php endif; ?>
    </ul>
    <div class="search-container">
        <form method="GET" action="buscador.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
        </form>
    </div>
</nav>

<header>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="mis-publicaciones.php">Mis publicaciones</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'): ?>
                <li><a href="moderacion.php">Moderacion</a></li>
            <?php endif; ?>
            
        </ul>
    </nav>
</header>