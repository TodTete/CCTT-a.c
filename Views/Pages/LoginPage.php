<?php
include_once 'Views/sources/add.php';
?>
<title>Log</title>

<body>

    <form id="loginForm" action="/cctt-a.c/Views/log/login.php" method="post">
        <div class="login-box">
            <p>Iniciar Sesión</p>
            <div class="user-box">
                <input type="text" id="username" name="username" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label>Password</label>
            </div>
            <button class="btn btn-success"> Iniciar Sesión</button>

            <a href="/cctt-a.c/index.php" class="btn btn-primary" style="margin-left: 34%;">Volver</a>

        </div>
    </form>
    <script>
        $('#loginForm').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '/cctt-a.c/Views/log/login.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'error') {
                        toastr.error(response.message || "Error desconocido.");
                    } else {
                        window.location.href = response.redirect_url;
                    }
                },
                error: function() {
                    toastr.error("Error en el servidor. Por favor, inténtelo de nuevo más tarde.");
                }
            });
        });
    </script>
    <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, '/cctt-a.c/');
        }
    </script>
</body>

</html>