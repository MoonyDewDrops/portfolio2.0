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
                            <img class="js-lightbox-trigger" src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
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
                        <div class="project-tech-list">
                            <span class="project-tech-label">Technieken:</span>
                            <?php echo htmlspecialchars(implode(', ', $project['tech'])); ?>
                        </div>
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

<!-- Lightbox markup -->
<div class="lightbox-overlay" id="lightbox-overlay" tabindex="-1" aria-hidden="true">
    <img class="lightbox-image" id="lightbox-image" src="" alt="Project afbeelding">
    <!-- overlay acts as backdrop; click anywhere to close -->
    <button type="button" id="lightbox-close" aria-label="Sluiten" style="position:absolute;top:16px;right:16px;background:transparent;border:none;color:#fff;font-size:28px;cursor:pointer;">&times;</button>
    </div>

<script>
(function(){
    var overlay = document.getElementById('lightbox-overlay');
    var imageEl = document.getElementById('lightbox-image');
    var closeBtn = document.getElementById('lightbox-close');
    function openLightbox(src, alt){
        imageEl.src = src;
        imageEl.alt = alt || '';
        overlay.classList.add('is-visible');
        overlay.setAttribute('aria-hidden','false');
        overlay.focus();
    }
    function closeLightbox(){
        overlay.classList.remove('is-visible');
        overlay.setAttribute('aria-hidden','true');
        imageEl.src = '';
        imageEl.alt = '';
    }
    document.addEventListener('click', function(e){
        var t = e.target;
        if (t && t.classList && t.classList.contains('js-lightbox-trigger')){
            e.preventDefault();
            openLightbox(t.getAttribute('src'), t.getAttribute('alt'));
        }
        if (t === overlay){
            closeLightbox();
        }
    });
    closeBtn.addEventListener('click', closeLightbox);
    document.addEventListener('keydown', function(e){
        if (e.key === 'Escape') closeLightbox();
    });
})();
</script>