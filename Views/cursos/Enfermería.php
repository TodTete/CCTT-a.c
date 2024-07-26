<?php
require_once  'nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>Diseño gráfico</title>
    <link rel="icon" href="imagenes/logo.png" type="image/png"> <!-- Añadir favicon correctamente -->
    <link rel="stylesheet" href="../../Helpers/css/courses.css">

</head>
<body>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="imagenes/diseñoT.jpg" alt="Diseño 1">
            </div>
            <div class="carousel-item">
                <img src="imagenes/diseñoG.jpg" alt="Diseño 2">
            </div>
            <div class="carousel-item">
                <img src="imagenes/diseñoT.jpg" alt="Diseño 3">
            </div>
            <!-- Agrega más imágenes dentro de div.carousel-item según sea necesario -->
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">&lt;</button>
        <button class="carousel-button next" onclick="nextSlide()">&gt;</button>
    </div>
    <div class="content">
        <h1>Auxiliar en Enfermeria</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, aspernatur. Quis laudantium nihil id veritatis nobis cumque, quo, asperiores vero recusandae maiores quia sequi, amet unde dicta excepturi quaerat exercitationem!</p>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde earum tempora cupiditate illo nisi natus id, neque sequi officiis voluptates vitae, debitis repellat! Architecto recusandae consequatur dolor consequuntur, cupiditate laborum!</p>
    </div>
    <div class="footer">
        <p>Contacto: email@example.com | Tel: 123-456-7890</p>
    </div>
    <script>
        var currentSlide = 0;
        var slides = document.querySelectorAll('.carousel-item');
        var totalSlides = slides.length;
        var intervalId;

        function showSlide(index) {
            if (index < 0) {
                index = totalSlides - 1;
            } else if (index >= totalSlides) {
                index = 0;
            }
            var offset = -index * 100;
            document.querySelector('.carousel-inner').style.transform = 'translateX(' + offset + '%)';
            currentSlide = index;
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        function nextSlide() {
            if (currentSlide == totalSlides - 1){
                showSlide(0);
            } else {
                showSlide(currentSlide + 1);
            }
        }

        function startCarousel() {
            intervalId = setInterval(nextSlide, 3000); // Cambia 3000 a
        }

function stopCarousel() {
    clearInterval(intervalId);
}

startCarousel(); // Comienza automáticamente el carrusel

// Pausa el carrusel cuando el cursor está sobre él y reanuda cuando el cursor sale
var carousel = document.querySelector('.carousel');
carousel.addEventListener('mouseenter', stopCarousel);
carousel.addEventListener('mouseleave', startCarousel);

function toggleMenu() {
    var menu = document.getElementById('dropdown-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}
</script>
</body>
</html>
