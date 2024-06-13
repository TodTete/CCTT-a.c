<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="icon" href="../../Helpers/images/logoCCTT.png">
    <link rel="stylesheet" href="../../Helpers/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../Helpers/css/lg.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../Helpers/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
</head>

<?php
require_once 'Courses.Controller.php';
require_once 'Teachers.Controller.php';
require_once 'Graduation.Controller.php';


$view = isset($_GET['view']) ? $_GET['view'] : 'courses';

if ($view === 'teachers') {
    $controller = new TeacherController();
    $data = $controller->getAllTeachers();
} elseif ($view === 'graduations') {
    $controller = new GraduationController();
    $data = $controller->getAllGraduations();
} else {
    $controller = new CourseController();
    $data = $controller->getAllCourses();
}
?>
