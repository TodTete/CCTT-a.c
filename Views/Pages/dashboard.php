<?php
include_once '../sources/Item.php';
?>


<title>Dashboard</title>
<link rel="stylesheet" href="../../Helpers/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="../../Helpers/css/dashboard.css">

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2 style="color: white;"><span class="lab la-accusoft"></span>Dashboard</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a style="text-decoration:none;" href="?view=courses" class="<?= $view === 'courses' ? 'active' : '' ?>"><span class="las la-school"></span><span>Cursos</span></a></li>
                <li><a style="text-decoration:none;" href="?view=teachers" class="<?= $view === 'teachers' ? 'active' : '' ?>"><span class="las la-chalkboard-teacher"></span><span>Profesores</span></a></li>
                <li><a style="text-decoration:none;" href="?view=graduations" class="<?= $view === 'graduations' ? 'active' : '' ?>"><span class="las la-graduation-cap"></span><span>Graduaciones</span></a></li>
                <!-- <li><a style="text-decoration:none;" href="#"><span class="las la-newspaper"></span><span>Noticias</span></a></li> -->
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header class="header">
            <h2>
                <span id="sidebar-toggle" class="las la-bars sidebar-toggle-btn"></span>
                CCTT
            </h2>
            <div class="logout-container">
                <form id="logoutForm" action="../log/logout.php" method="post">
                    <button type="submit" class="btn_exit">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </header><br>

        <main>
            <div class="container">
                <h2>Lista de <?= $view === 'teachers' ? 'Profesores' : ($view === 'graduations' ? 'Graduaciones' : 'Cursos') ?></h2>
                <div class="table-wrapper">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Ocultar/Mostrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['name']); ?></td>
                                    <td>
                                        <button class="button" id="btn" onclick="location.href='update_view.php?view=<?= htmlspecialchars($view) ?>&id=<?= htmlspecialchars($item['clue']) ?>'">
                                            <i class="las la-edit"></i> Actualizar
                                        </button>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" class="toggle-hide" data-id="<?= htmlspecialchars($item['clue']); ?>" <?= $item['hidden'] ? '' : 'checked'; ?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script src="../../Helpers/js/js.js"></script>
</body>

</html>