<?php
require_once 'login.php';
?>

<body>
    <form action="login.php" method="post">
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
            <input type="submit" value="Iniciar Sesión" class="a">
        </div>
    </form>
</body>

</html>