<?php

use App\Models\CourseModel;
use App\Middleware\Mild;

$pdo = Mild::getConnection();

$model = new CourseModel($pdo);
$courses = $model->getAllCourses();

include_once 'Views/sources/nav.php';
?>
<title><?= htmlspecialchars($titulo) ?></title>
<!-- Cursos-->
<section class="section section-sm section-fluid bg-default text-center" id="projects">
    <div class="container-fluid">
        <p class="quote wow fadeInRight" style="padding-top: 6%;" data-wow-delay=".1s">Aquí puede haber una descripción de los cursos, dando datos relevantes que pueden llamar la atención del público en general</p>
        <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <?php
            if (count($courses) > 0) {
                foreach ($courses as $course) {
                    $id = $course['clue'];
                    $nombre = $course['name'] ?? 'Sin nombre';
                    $descripcion = $course['description'] ?? 'Sin descripción';
                    $html_file = $course['html_file'] ?? '';
                    $url = "/CCTT-A.C/Views/cursos/" . $html_file;
                    $picture_url = $course['picture'] ?? 'default.jpg';
            ?>
                    <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                        <article class="thumbnail thumbnail-classic thumbnail-md">
                            <div class="thumbnail-classic-figure">
                                <a href="<?= $url ?>">
                                    <img src="<?= htmlspecialchars($picture_url) ?>" alt="<?= htmlspecialchars($nombre) ?>" width="420" height="350" />
                                </a>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div class="thumbnail-classic-title-wrap">
                                    <h5 class="thumbnail-classic-title"><a href="<?= $url ?>"><?= htmlspecialchars($nombre) ?></a></h5>
                                </div>
                                <p class="thumbnail-classic-text"><?= htmlspecialchars($descripcion) ?></p>
                            </div>
                        </article>
                    </div>

            <?php
                }
            } else {
                echo "No hay cursos disponibles.";
            }
            ?>
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
        window.history.pushState(null, null, '/cctt-a.c/Courses');
    }
</script>
<?php
include_once __DIR__ . '/sources/footer.php';
?>