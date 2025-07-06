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
            <!-- Loop to load in projects. using : and endforeach for readability since i read its beter! -->
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <!-- if its not empty, load that shi -->
                        <?php if (!empty($project['image'])): ?>
                            <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                            <!-- otherwise no image for u queen -->
                        <?php else: ?>
                            <div class="img-placeholder">No Image</div>
                        <?php endif; ?>
                    </div>
                    <div class="project-info">
                        <h2 class="project-title"><?php echo htmlspecialchars($project['name']); ?></h2>
                        <p class="project-desc">
                            <?php
                            $desc = $project['description'];
                            $preview = preg_split('/([.!?]) /', $desc, 2, PREG_SPLIT_DELIM_CAPTURE);
                            if (strlen($desc) > 100) {
                                // If first sentence is too long, cut at 100 chars
                                $short = mb_substr($desc, 0, 100);
                                echo htmlspecialchars($short) . '...';
                            } else if (count($preview) > 1) {
                                // Show first sentence
                                echo htmlspecialchars($preview[0] . $preview[1]);
                                echo '...';
                            } else {
                                echo htmlspecialchars($desc);
                            }
                            ?>
                        </p>
                        <a href="project?id=<?php echo urlencode($project['id']); ?>" class="btn btn-accent">Bekijk project</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php
include_once 'footer.php';
?>