<?php
$pageTitle = 'Project | Julia Brouwer';
include_once 'header.php';
include_once 'data.php';
?>
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/project.css">

<?php
$projectId = isset($_GET['id']) ? $_GET['id'] : null;
$project = null;
// this is for loading in the project n everything, breaking so it doesnt continue looping after the specific product is already found
foreach ($projects as $p) {
    if ($p['id'] === $projectId) {
        $project = $p;
        break;
    }
}
?>

<main class="project-main">
    <section class="project-detail-content">
        <?php if ($project): ?>
            <a href="projects.php" class="btn btn-outline project-back">&larr; Terug naar projecten</a>
            <div class="project-detail-card">
                <div class="project-detail-image">
                    <?php if (!empty($project['image'])): ?>
                        <img src="<?=$project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                    <?php else: ?>
                        <div class="img-placeholder">No Image</div>
                    <?php endif; ?>
                </div>
                <div class="project-detail-info">
                    <h1 class="project-detail-title"><?php echo htmlspecialchars($project['name']); ?></h1>
                    <div class="project-detail-date">Datum: <?php echo htmlspecialchars($project['date']); ?></div>
                    <p class="project-detail-desc"><?php echo htmlspecialchars($project['description']); ?></p>
                </div>
            </div>
        <?php else: ?>
            <div class="project-not-found">
                <h2>Project niet gevonden</h2>
                <a href="projects.php" class="btn btn-outline">&larr; Terug naar projecten</a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
include_once 'footer.php';
?>