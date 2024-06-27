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

$sql = "SELECT clue, name, description FROM teachers";
$result = $conn->query($sql);
?>

<title>Docentes</title>
<!-- Docentes-->
<section class="section section-sm section-fluid bg-default" id="team">
    <div class="container-fluid">
        <h2>Docentes</h2>
        <div class="row row-sm row-30 justify-content-center">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['clue'];
                    $nombre = isset($row['name']) ? $row['name'] : 'Sin nombre';
                    $status = isset($row['description']) ? $row['description'] : 'Sin status';
                    ?>

                    <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".<?= $id ?>s">
                        <!-- Maestros-->
                        <article class="team-classic team-classic-lg">
                            <a class="team-classic-figure" href="#">
                                <img src="docente_image.php?id=<?= $id ?>" alt="<?= $nombre ?>" width="420" height="424" />
                            </a>
                            <div class="team-classic-caption">
                                <h4 class="team-classic-name"><a href="#"><?= $nombre ?></a></h4>
                                <p class="team-classic-status"><?= $status ?></p>
                            </div>
                        </article>
                    </div>

                    <?php
                }
            } else {
                echo "0 resultados";
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
