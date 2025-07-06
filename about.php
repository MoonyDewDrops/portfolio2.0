<?php
$pageTitle = 'About Me | Julia Brouwer';
include_once 'header.php';
?>
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/about.css">

<main class="about-main">
    <section class="about-content">
        <div class="about-left">
            <!-- actual foto of me myself and i -->
            <img src="assets/img/myFoto.jpg" alt="Julia Brouwer" class="about-photo-placeholder">
        </div>
        <div class="about-right">
            <h1 class="about-heading">Over mij</h1>
            <p class="about-bio">
                Hoi! Ik ben Julia Brouwer, een enthousiaste web developer in opleiding aan het Grafisch Lyceum Utrecht. Ik hou erg veel van backend, en mijn favoriete codeer talen zijn PHP en Python. <br> <br>
                Over mij persoonlijk; In mijn vrije tijd lees ik veel, en game ik graag. Onder andere vindt ik het leuk om excel sheets te maken, plannen, en strategie spellen te spelen.</p>
            <div class="about-skills">
                <h2 class="skills-heading">Skills & Technologieën</h2>
                <ul class="skills-list">
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Python</li>
                    <li>Figma</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
include_once 'footer.php';
?>