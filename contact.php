<?php
$pageTitle = 'Contact | Julia Brouwer';
include_once 'header.php';
?>
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/contact.css">

<main class="contact-main">
    <section class="contact-content">
        <h1 class="contact-heading">Contact</h1>
        <!-- changed from a form to these thingies. Email plus LinkedIn n GitHub -->
        <div class="contact-info-box">
            <div class="contact-label">E-mail</div>
            <div class="contact-value"><a href="mailto:230062@student.glu.nl">230062@student.glu.nl</a></div>
        </div>
        <div class="contact-info-box">
            <div class="contact-label">Socials</div>
            <div class="contact-value">
                <a href="https://www.linkedin.com/in/julia-brouwer-2b787a319/" target="_blank">LinkedIn</a> |
                <a href="https://github.com/MoonyDewDrops" target="_blank">GitHub</a>
            </div>
        </div>
    </section>
</main>

<?php
include_once 'footer.php';
?>