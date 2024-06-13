<?php
require_once '../../App/Controllers/view_Controller.php';
?>
<style>
    #btn {
        background: #076585;
        background: -webkit-linear-gradient(to right, #fff, #076585);
        background: linear-gradient(to right, #fff, #076585);
        border-radius: 30%;
    }
</style>
<body>
    <div class="sidebar hidden">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>Dashboard</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="?view=courses" class="<?= $view === 'courses' ? 'active' : '' ?>"><span class="las la-school"></span><span>Cursos</span></a></li>
                <li><a href="?view=teachers" class="<?= $view === 'teachers' ? 'active' : '' ?>"><span class="las la-chalkboard-teacher"></span><span>Profesores</span></a></li>
                <li><a href="?view=graduations" class="<?= $view === 'graduations' ? 'active' : '' ?>"><span class="las la-graduation-cap"></span><span>Graduaciones</span></a></li>
                <li><a href="#"><span class="las la-newspaper"></span><span>Noticias</span></a></li>
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
            <div class="input-container">
                <input type="text" name="text" class="input" placeholder="Buscar...">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon">
                    <path d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z"></path>
                </svg>
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
                                <td><?= htmlspecialchars($view === 'teachers' ? $item['name_teachers'] : ($view === 'graduations' ? $item['name'] : $item['name_course'])); ?></td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <button class="btn" id="btn">
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
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Actualizar Información</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateForm">
                        <input type="hidden" id="updateId">
                        <div class="form-group">
                            <label for="updateName">Nombre</label>
                            <input type="text" class="form-control" id="updateName" required>
                        </div>
                        <div class="form-group">
                            <label for="updateDescription">Descripción</label>
                            <input type="text" class="form-control" id="updateDescription" required>
                        </div>
                        <div class="form-group">
                            <label for="updatePicture">Imagen</label>
                            <input type="file" class="form-control-file" id="updatePicture">
                            <img id="updatePicturePreview" src="#" alt="Preview" class="img-thumbnail mt-2" style="display: none;">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
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