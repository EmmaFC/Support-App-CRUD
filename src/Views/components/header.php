<header id="header">
    <div id="header-container">
        <div id="logo_container" class="">
            <a class="btn" href="http://localhost/crud-app-php/index.php">
                <h3>Request Center</h3>
            </a>
            <!-- <img src="" alt="logotipo"> -->
        </div>
        <nav id="nav_menu">
            <a class="btn" href="../../src/Views/user/show.php?id= <?php echo $user["id"] ?>">Mi Perfil</a>
            <a class="btn" href="../../index.php">Logout</a>
        </nav>
    </div>    
</header>

<?php require "../components/header.php"; ?>