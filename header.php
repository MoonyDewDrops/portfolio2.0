<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Julia Brouwer | Portfolio'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/avif" href="assets/img/pinkStar.avif">
    <link rel="stylesheet" href="assets/css/base.css">
</head>
<body>
    <header>
        <div class="navbar-wrapper">
            <div class="site-title"><a href="home">Julia Brouwer</a>
            <button class="menu-toggle" id="menu-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Menu">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </button> 
            </div>
            <nav id="primary-nav">
                <ul>
                    <li><a href="home" class="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="over" class="<?php echo basename($_SERVER['PHP_SELF']) == 'over.php' ? 'active' : ''; ?>">Over mij</a></li>
                    <li><a href="projecten" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projecten.php' ? 'active' : ''; ?>">Projecten</a></li>
                    <li><a href="contact" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <script>
    (function(){
        var btn = document.getElementById('menu-toggle');
        var nav = document.getElementById('primary-nav');
        if (!btn || !nav) return;
        btn.addEventListener('click', function(){
            var isOpen = nav.classList.toggle('is-open');
            btn.classList.toggle('is-open', isOpen);
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
        document.addEventListener('keydown', function(e){
            if (e.key === 'Escape' && nav.classList.contains('is-open')){
                nav.classList.remove('is-open');
                btn.classList.remove('is-open');
                btn.setAttribute('aria-expanded','false');
                btn.focus();
            }
        });
    })();
    </script>
</body>
</html>