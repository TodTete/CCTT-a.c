<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cctt";

if (isset($_GET['clue'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $stmt = $conn->prepare("SELECT picture FROM courses WHERE clue = ?");
    $stmt->bind_param("i", $_GET['clue']);
    $stmt->execute();
    $stmt->bind_result($imagenBlob);

    if ($stmt->fetch()) {
        header("Content-Type: image/jpg");
        echo $imagenBlob;
    } else {
        // $imagenDefault = file_get_contents('default_image.jpg');
        // header("Content-Type: image/jpeg");
        // echo $imagenDefault;
        echo '"<div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="../Helpers/images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="../Helpers/images/logoCCTT.png" alt="" width="420" height="350" /></a>";';
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID de imagen no proporcionado";
}
?>
