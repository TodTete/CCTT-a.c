<?php

use App\Models\TeacherModel;
use App\Middleware\Mild;

$pdo = Mild::getConnection();

$model = new TeacherModel($pdo);
$teachers = $model->getAllTeachers();

include_once 'Views/sources/nav.php';
?>
<title><?= htmlspecialchars($titulo) ?></title>

<!-- Docentes-->
<section class="section section-sm section-fluid bg-default" id="team">
    <div class="container-fluid">
        <h2>Docentes</h2>
        <div class="row row-sm row-30 justify-content-center">
            <?php
            if (count($teachers) > 0) {
                foreach ($teachers as $teacher) {
                    $id = $teacher['clue'];
                    $nombre = $teacher['name'] ?? 'Sin nombre';
                    $status = $teacher['description'] ?? 'Sin status';
                    $picture_url = $teacher['picture'] ?? 'default.jpg';
            ?>
                    <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".<?= $id ?>s">
                        <article class="team-classic team-classic-lg">
                            <a href="#" class="team-classic-figure" data-toggle="modal" data-target="#docenteModal"
                                data-name="<?= htmlspecialchars($nombre) ?>"
                                data-description="<?= htmlspecialchars($status) ?>"
                                data-picture="<?= htmlspecialchars($picture_url) ?>">
                                <img src="<?= htmlspecialchars($picture_url) ?>" alt="<?= htmlspecialchars($nombre) ?>" width="420" height="424" />
                            </a>
                            <div class="team-classic-caption">
                                <h4 class="team-classic-name"><a href="#"><?= htmlspecialchars($nombre) ?></a></h4>
                                <p class="team-classic-status"><?= htmlspecialchars($status) ?></p>
                            </div>
                        </article>
                    </div>

            <?php
                }
            } else {
                echo "No hay docentes disponibles.";
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

<div class="modal fade" id="docenteModal" tabindex="-1" role="dialog" aria-labelledby="docenteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="docenteModalLabel">Detalles del Docente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img id="modalPicture" src="" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
                <h5 id="modalName" class="text-center mt-3"></h5>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>
</div>


<script>
    $('#docenteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var description = button.data('description');
        var picture = button.data('picture');

        var modal = $(this);
        modal.find('.modal-title').text('Detalles del Docente');
        modal.find('#modalName').text(name);
        modal.find('#modalDescription').text(description);
        modal.find('#modalPicture').attr('src', picture);
    });
</script>

<script>
    if (window.history && window.history.pushState) {
        window.history.pushState(null, null, '/cctt-a.c/Teachers');
    }
</script>
<?php
include_once __DIR__ . '/sources/footer.php';
?>