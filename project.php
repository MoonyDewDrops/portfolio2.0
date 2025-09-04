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
            <a href="projecten" class="btn btn-outline project-back">&larr; Terug naar projecten</a>
            <div class="project-detail-card">
                <div class="project-detail-images">
                    <div class="project-detail-image">
                        <?php if (!empty($project['image'])): ?>
                            <img class="js-lightbox-trigger" src="<?=$project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                        <?php else: ?>
                            <div class="img-placeholder">No Image</div>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($project['image2'])): ?>
                        <br>
                        <div class="project-detail-image">
                            <img class="js-lightbox-trigger" src="<?=$project['image2']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?> tweede afbeelding">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="project-detail-info">
                    <h1 class="project-detail-title"><?php echo htmlspecialchars($project['name']); ?></h1>
                    <div class="project-detail-date">Datum: <?php echo htmlspecialchars($project['date']); ?></div>
                    <p class="project-detail-desc"><?php echo htmlspecialchars($project['description']); ?></p>
                    <?php if (!empty($project['video'])): ?>
                        <div class="project-video-section">
                            <div class="project-video-title">Video</div>
                            <div class="project-video-wrapper">
                                <video controls preload="metadata">
                                    <source src="<?php echo htmlspecialchars($project['video']); ?>" type="video/mp4">
                                    <source src="<?php echo htmlspecialchars($project['video']); ?>" type="video/webm">
                                    Je browser ondersteunt de video-tag niet. 
                                    <a href="<?php echo htmlspecialchars($project['video']); ?>" target="_blank" rel="noopener">Bekijk video</a>.
                                </video>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="project-tech-badges">
                        <span class="project-tech-label">Technieken:</span>
                        <?php foreach ($project['tech'] as $tech): ?>
                            <span class="tech-badge"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <?php if (!empty($project['link'])): ?>
                        <br><br>
                        <div class="project-links">
                            <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" rel="noopener" class="btn btn-outline">Bekijk live</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="project-not-found">
                <h2>Project niet gevonden</h2>
                <a href="projecten" class="btn btn-outline">&larr; Terug naar projecten</a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
include_once 'footer.php';
?>

<!-- Lightbox markup -->
<div class="lightbox-overlay" id="lightbox-overlay" tabindex="-1" aria-hidden="true">
    <img class="lightbox-image" id="lightbox-image" src="" alt="Project afbeelding">
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