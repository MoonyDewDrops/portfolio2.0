<?php
$pageTitle = 'Contact | Julia Brouwer';
include_once 'header.php';
?>
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/contact.css">

<?php
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = true;
}
?>

<main class="contact-main">
    <section class="contact-content">
        <h1 class="contact-heading">Contact</h1>
        <?php if ($success): ?>
            <div class="contact-success">Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.</div>
        <?php else: ?>
        <form class="contact-form" method="post" action="contact.php">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Bericht</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-accent">Verstuur</button>
        </form>
        <?php endif; ?>
    </section>
</main>

<?php
include_once 'footer.php';
?>