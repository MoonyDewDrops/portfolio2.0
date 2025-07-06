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
            <div class="site-title"><a href="/">Julia Brouwer</a></div>
            <nav>
                <ul>
                    <li><a href="/" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="over" class="<?php echo basename($_SERVER['PHP_SELF']) == 'over.php' ? 'active' : ''; ?>">Over mij</a></li>
                    <li><a href="projecten" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projecten.php' ? 'active' : ''; ?>">Projecten</a></li>
                    <li><a href="contact" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>