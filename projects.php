<?php
$pageTitle = 'Projects | Julia Brouwer';
include_once 'header.php';
include_once 'data.php';
?>
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/projects.css">

<main class="projects-main">
    <section class="projects-content">
        <h1 class="projects-heading">Mijn Projecten</h1>
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <?php if (!empty($project['image'])): ?>
                            <img src="<?=$project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                        <?php else: ?>
                            <div class="img-placeholder">No Image</div>
                        <?php endif; ?>
                    </div>
                    <div class="project-info">
                        <h2 class="project-title"><?php echo htmlspecialchars($project['name']); ?></h2>
                        <p class="project-desc"><?php echo htmlspecialchars($project['description']); ?></p>
                        <a href="project.php?id=<?php echo urlencode($project['id']); ?>" class="btn btn-accent">Bekijk project</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php
include_once 'footer.php';
?>