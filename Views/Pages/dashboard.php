<?php
session_start();

if (!isset($_SESSION['user_logged_in'])) {
    header('Location: Login.Page.php');
    exit();
}

require_once '../../App/Controllers/Generic.Controller.php';

$view = isset($_GET['view']) ? $_GET['view'] : 'courses';

switch ($view) {
    case 'teachers':
        $controller = new GenericController("teachers");
        break;
    case 'graduations':
        $controller = new GenericController("graduations");
        break;
    default:
        $controller = new GenericController("courses");
        break;
}

$data = $controller->getAllItems();

include_once '../sources/add.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../Helpers/css/styles.css">
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <div class="sidebar hidden">
        <div class="sidebar-brand">
            <h2 style="color: white;"><span class="lab la-accusoft"></span>Dashboard</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a style="text-decoration:none;" href="?view=courses" class="<?= $view === 'courses' ? 'active' : '' ?>"><span class="las la-school"></span><span>Cursos</span></a></li>
                <li><a style="text-decoration:none;" href="?view=teachers" class="<?= $view === 'teachers' ? 'active' : '' ?>"><span class="las la-chalkboard-teacher"></span><span>Profesores</span></a></li>
                <li><a style="text-decoration:none;" href="?view=graduations" class="<?= $view === 'graduations' ? 'active' : '' ?>"><span class="las la-graduation-cap"></span><span>Graduaciones</span></a></li>
                <li><a style="text-decoration:none;" href="#"><span class="las la-newspaper"></span><span>Noticias</span></a></li>
            </ul>
        </div>
    </div>
    <div class="main-content expanded">
        <header class="header">
            <h2>
                <label for="sidebar-toggle">
                    <span class="las la-bars"></span>
                </label>
                CCTT
            </h2>
            <div class="logout-container">
                <form id="logoutForm" action="logout.php" method="post">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt fa-2xl"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </header>

        <main>
            <div class="container mx-auto" style="width: 30%; padding:3%;">
                <h2>Lista de <?= $view === 'teachers' ? 'Profesores' : ($view === 'graduations' ? 'Graduaciones' : 'Cursos') ?></h2>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td><?= htmlspecialchars($item['name']); ?></td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-success" id="btn" onclick="location.href='update_view.php?view=<?= htmlspecialchars($view) ?>&id=<?= htmlspecialchars($item['clue']) ?>'">
                                            <i class="las la-edit"></i> Actualizar
                                        </button>
                                        <label class="switch">
                                            <input type="checkbox" class="toggle-hide" data-id="<?= htmlspecialchars($item['clue']); ?>">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>

<script>
    document.querySelector('.las.la-bars').addEventListener('click', () => {
        document.querySelector('.sidebar').classList.toggle('hidden');
        document.querySelector('.main-content').classList.toggle('expanded');
    });
</script>
<script src="../../Helpers/js/script.js"></script>
