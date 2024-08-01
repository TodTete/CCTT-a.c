<?php

use App\Models\GraduationModel;
use App\Middleware\Mild;

$pdo = Mild::getConnection();

$model = new GraduationModel($pdo);
$students = $model->getAllGraduation();

include_once 'Views/sources/nav.php';
?>
<title><?= htmlspecialchars($titulo) ?></title>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v20.0" nonce="zsFTBmeP"></script>
<!-- Cual fue la experiencia-->
<section class="section section-sm section-bottom-70 section-fluid bg-default" id="people">
    <div class="container-fluid">
        <h2 style="margin-top:7%;" class="quote wow fadeInRight">¿Cual fue mi experiencia aquí?</h2>
        <div class="row row-50 row-sm">
            <?php
            if (count($students) > 0) {
                foreach ($students as $index => $student) {
                    $name = $student['name'] ?? 'Nombre no disponible';
                    $description = $student['description'] ?? 'Descripción no disponible';
                    $status = $student['status'] ?? 'Estudiante Egresado';
                    $picture_url = $student['picture'] ?? 'default.jpg';
                    $delay = $index * 0.1;
            ?>
                    <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay="<?= $delay ?>s">
                        <article class="quote-modern quote-modern-custom">
                            <div class="unit unit-spacing-md align-items-center">
                                <div class="unit-left">
                                    <a class="quote-modern-figure" href="#">
                                        <img class="img-circles" src="<?= htmlspecialchars($picture_url) ?>" alt="<?= htmlspecialchars($name) ?>" width="75" height="75" />
                                    </a>
                                </div>
                                <div class="unit-body">
                                    <h4 class="quote-modern-cite"><a href="#"><?= htmlspecialchars($name) ?></a></h4>
                                    <p class="quote-modern-status"><?= htmlspecialchars($status) ?></p>
                                </div>
                            </div>
                            <div class="quote-modern-text">
                                <p class="q"><?= htmlspecialchars($description) ?></p>
                            </div>
                        </article>
                    </div>
            <?php
                }
            } else {
                echo "<p>No hay estudiantes disponibles.</p>";
            }
            ?>
        </div>
    </div>
    <div class="container-fluid">
        <h2 style="margin-top:7%;" class="quote wow fadeInRight">Mira nuestras publicaciones más recientes</h2>
        <div style="margin-left:5%;" class="fb-post" data-href="https://www.facebook.com/cecatra.tecamachalco/posts/882069067174029" data-width="500" data-show-text="true">
            <blockquote cite="https://www.facebook.com/cecatra.tecamachalco/posts/882069067174029" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/cecatra.tecamachalco">Cctt Tecamachalco</a> en&nbsp;<a href="https://www.facebook.com/cecatra.tecamachalco/posts/882069067174029">Martes, 30 de julio de 2024</a></blockquote>
        </div>
        <div style="margin-left:5%;" class="fb-post" data-href="https://www.facebook.com/cecatra.tecamachalco/posts/880403714007231" data-width="500" data-show-text="true">
            <blockquote cite="https://www.facebook.com/cecatra.tecamachalco/posts/880403714007231" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/cecatra.tecamachalco">Cctt Tecamachalco</a> en&nbsp;<a href="https://www.facebook.com/cecatra.tecamachalco/posts/880403714007231">Sábado, 27 de julio de 2024</a></blockquote>
        </div>
    </div>
</section>

<!-- Variables globales de salida-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="Helpers/js/core.min.js"></script>
<script src="Helpers/js/script.js"></script>

<script>
    if (window.history && window.history.pushState) {
        window.history.pushState(null, null, '/cctt-a.c/Graduations');
    }
</script>
<?php
include_once __DIR__ . '/sources/footer.php';
?>