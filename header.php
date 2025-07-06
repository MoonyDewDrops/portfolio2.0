<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Julia Brouwer | Portfolio'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/avif" href="assets/img/pinkStar.avif">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="navbar-wrapper">
            <div class="site-title">Julia Brouwer</div>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About me</a></li>
                    <li><a href="projects.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>">Projects</a></li>
                    <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>