<?php 
include_once '../sources/add.php';
?>

<body>
    <form id="loginForm" action="login.php" method="post">
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
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'error') {
                            toastr.error(response.message);
                        } else {
                            window.location.href = 'dashboard.php';
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>