<?php
include_once 'sources/nav.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cctt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT clue, name, description FROM courses";
$result = $conn->query($sql);
?>

<title>Cursos</title>
<!-- Cursos-->
<section class="section section-sm section-fluid bg-default text-center" id="projects">
    <div class="container-fluid">
        <p class="quote-jean wow fadeInRight" style="padding-top: 6%;" data-wow-delay=".1s">Aquí puede haber una descripción de los cursos, dando datos relevantes que pueden llamar la atención del público en general</p>
        <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['clue'];
                    $nombre = isset($row['name']) ? $row['name'] : 'Sin nombre';
                    $descripcion = isset($row['description']) ? $row['description'] : 'Sin descripción';
                    ?>

                    <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                        <article class="thumbnail thumbnail-classic thumbnail-md">
                            <div class="thumbnail-classic-figure"><img src="image.php?id=<?= $id ?>" alt="<?= $nombre ?>" width="420" height="350" /></div>
                            <div class="thumbnail-classic-caption">
                                <div class="thumbnail-classic-title-wrap">
                                    <h5 class="thumbnail-classic-title"><a href="#"><?= $nombre ?></a></h5>
                                </div>
                                <p class="thumbnail-classic-text"><?= $descripcion ?></p>
                            </div>
                        </article>
                    </div>
                    
                    <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
</section>

<!-- Variables globales de salida-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="../Helpers/js/core.min.js"></script>
<script src="../Helpers/js/script.js"></script>

<?php
include_once __DIR__ . '/sources/footer.php';
?>
