<?php
$title = "Your School Stats";
include_once "controller/userController.php";
require_once "view/sidebar.php";

?>


<?php ob_start(); ?>



<div class="container mx-5">


    <h5 class="mt-5">STUDENTS STATS</h5>
    <div class="mt-4 p-5 w-50 bg-primary text-white rounded">
        <h1>STUDENTS</h1>
        <h3><?= $counter ?></h3>
        <p>studens in your school</p>
    </div>

    <br><br><br>

    <h5>OTHER STATS</h5>
    <div class="mt-4 p-5 w-50 bg-danger text-white rounded">
        <h1>INSTRUCTORS</h1>
        <h3>4</h3>
        <p>instructors in your school</p>
    </div>
</div>

<?php $content = ob_get_clean() ?>
<?php include_once "view/layout.php"; ?>