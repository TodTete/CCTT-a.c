<?php
require_once '../../Middleware/Mild.Middleware.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $picture = null;

    if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
        $picture = file_get_contents($_FILES['picture']['tmp_name']);
    }

    $conn = Mild::handle();

    $query = "UPDATE teachers_admin SET name = :name, description = :description" . ($picture ? ", picture = :picture" : "") . " WHERE clue = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
    
    if ($picture) {
        $stmt->bindParam(':picture', $picture, PDO::PARAM_LOB);
    }

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
