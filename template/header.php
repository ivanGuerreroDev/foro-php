<nav class="main-nav">
    <img src="https://1000logos.net/wp-content/uploads/2023/01/Myspace-Logo-2004.png" alt="Logo">
    <ul>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="gestion.php">Perfil</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">LogIn</a></li>
            <li><a href="registro.php">SignUp</a></li>
        <?php endif; ?>
    </ul>
    <div class="search-container">
        <form action="/buscador.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
        </form>
    </div>
</nav>

<header>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Inicio</a></li>
            <li><a href="#forum">Foro</a></li>
            <li><a href="#buscador">Buscador</a></li>
        </ul>
    </nav>
</header>