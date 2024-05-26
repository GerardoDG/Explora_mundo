<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Explora el Mundo</title>
</head>
<body>
    <header>
        <nav>
            <h1>EXPLORA EL MUNDO</h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="logindiv">
            <div>
                <h3>Inicia sesión</h3>
                <form action="login.php" method="POST" id="form">
                    <input type="text" name="user" required placeholder="Usuario">
                    <input type="password" name="password" id="password" required placeholder="Contraseña">
                    <input type="submit" value="Iniciar Sesión" >
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>