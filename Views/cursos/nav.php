<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="../../Helpers/images/favicon.ico" type="image/x-icon">
  <!-- Estilos -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
  <link rel="stylesheet" href="../../Helpers/css/bootstrap.css">
  <link rel="stylesheet" href="../../Helpers/css/fonts.css">
  <link rel="stylesheet" href="../../Helpers/css/style.css">
  <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
  <!-- Agrega la biblioteca Font Awesome para los iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMyK4hclpSjlW5NqZm5WjjWAwD80AQOqR8YZ2j5" crossorigin="anonymous">
  <style>
    .navbar-custom {
      background: rgba(255, 255, 255, 0.7);
      padding: 10px 20px;
      backdrop-filter: blur(10px);
      position: fixed;
      height: 128px;
      width: 100%;
      z-index: 1000;
      transition: background 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-bottom-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    .navbar-custom.scrolled {
      background: rgba(255, 255, 255, 0.9);
    }

    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      max-height: 120px;
      margin-right: 40px;
    }

    .navbar-brand span {
      font-size: 1.7rem;
      letter-spacing: 2px;
      font-weight: 700;
      background: linear-gradient(45deg, #ff0000, #8B0000);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: colorChange 3s infinite;
    }

    @keyframes colorChange {
      0% {
        color: #ff0000;
      }

      50% {
        color: #8B0000;
      }

      100% {
        color: #ff0000;
      }
    }

    .navbar-nav {
      margin-left: auto;
      font-size: 1.2rem;
    }

    .navbar-nav .nav-link {
      color: #000;
      font-weight: 500;
      display: flex;
      align-items: center;
      margin-left: 30px;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #ff4d4d;
      transform: translateX(5px);
      text-shadow: 0 0 10px rgba(255, 77, 77, 0.7);
    }

    .navbar-nav .nav-link i {
      margin-left: 5px;
      font-size: 18px;
    }

    .navbar-toggler {
      border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .nav-item.active .nav-link {
      font-weight: 700;
    }

    /* Estilos adicionales para responsividad */
    @media (max-width: 1024px) {
      .navbar-custom {
        height: 100px;
      }

      .navbar-brand img {
        max-height: 50px;
        margin-right: 10px;
      }

      .navbar-brand span {
        font-size: 1rem;
      }

      .navbar-nav {
        display: none;
      }

      .navbar-bottom {
        display: flex;
        justify-content: space-around;
        align-items: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.9);
        padding: 10px 0;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
      }

      .navbar-bottom a {
        color: #000;
        font-size: 1rem;
        position: relative;
        transition: color 0.3s ease, transform 0.3s ease;
      }

      .navbar-bottom a:hover {
        color: #ff4d4d;
        transform: translateY(-5px);
      }

      .navbar-bottom a i {
        font-size: 1.5rem;
      }

      .navbar-bottom a:hover::after {
        content: attr(data-title);
        position: absolute;
        bottom: 35px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        white-space: nowrap;
        font-size: 0.9rem;
      }
    }
  </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../Helpers/images/logoCCTT.png" alt="Logo">
                <span>CENTRO DE CAPACITACIÓN PARA <br> EL TRABAJO TECAMACHALCO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../index.php?view=Home">Inicio <i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php?view=courses">Cursos <i class="fas fa-book"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php?view=Teachers">Docentes <i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php?view=Graduation">Graduaciones <i class="fas fa-graduation-cap"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar-bottom d-lg-none">
        <a href="index.php?view=Home" data-title="Inicio"><i class="fas fa-home"></i></a>
        <a href="index.php?view=Courses" data-title="Cursos"><i class="fas fa-book"></i></a>
        <a href="index.php?view=Teachers" data-title="Docentes"><i class="fa-solid fa-user"></i></a>
        <a href="index.php?view=Graduation" data-title="Graduaciones"><i class="fas fa-graduation-cap"></i></a>
    </nav>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>