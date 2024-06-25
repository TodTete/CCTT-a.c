<?php
require_once '../../App/Controllers/UpdateDetails.Controller.php';

$view = isset($_GET['view']) ? $_GET['view'] : 'courses';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$controller = new UpdateDetailsController();
$detail = $controller->getDetailById($view, $id);

$updateMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'picture' => $_POST['picture']
    ];

    $result = $controller->updateDetail($view, $data);

    if ($result) {
        $updateMessage = "Actualizados correctamente✨.";
    } else {
        $updateMessage = " Error al actualizar ❌.";
    }
}

include_once '../sources/add.php';

?>


<body>
    <div class="container">
        <h2>Actualizar</h2>
        <?php if ($updateMessage) : ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.success('<?= $updateMessage ?>');
                });
            </script>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?= htmlspecialchars($detail['clue']) ?>">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($detail['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= htmlspecialchars($detail['description']) ?>" required>
            </div>
            <div class="form-group">
                <label for="picture">Imagen</label>
                <input type="text" class="form-control" id="picture" name="picture" value="<?= htmlspecialchars($detail['picture']) ?>">
                <?php if (filter_var($detail['picture'], FILTER_VALIDATE_URL)) : ?>
                    <img src="<?= htmlspecialchars($detail['picture']) ?>" alt="Imagen Actual" class="img-thumbnail mt-2">
                <?php else : ?>
                    <p>La URL de la imagen no es válida.</p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="dashboard.php?view=<?= htmlspecialchars($view) ?>" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
</body>

</html>