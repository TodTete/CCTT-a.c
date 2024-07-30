<?php

require_once "../../vendor/autoload.php";

use App\Controllers\UpdateDetailsController;

$view = $_GET['view'] ?? 'courses';
$id = $_GET['id'] ?? 0;

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

    $updateMessage = $result ? "Actualizados correctamente✨." : "Error al actualizar ❌.";
}

include_once '../sources/add.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Detalles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
</head>

<body>
    <div class="container">
        <h2>Actualizar</h2>
        <?php if ($updateMessage) : ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "timeOut": "5000"
                    };
                    toastr.success('<?= htmlspecialchars($updateMessage, ENT_QUOTES, 'UTF-8') ?>');
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