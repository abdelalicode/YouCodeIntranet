<?php

include_once "controller/userController.php";
require_once "view/nav.php";

?>



<div class="row gap-5" style="margin: 150px  0 0 200px;">
   <div class="text-white">
   <h1 >LIST OF CLASSROOMS</h1>
    <hr>
   </div>
    <?php foreach ($classes as $classe) : ?>
        <div class="col-sm-5">
            <div class="card">
                <img class="card-img-top" src="assets/cover.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Classe Name: <?= $classe['name'] ?></h5>
                    <p class="card-text">Level: <?= $classe['level'] ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Promo: <?= $classe['start_year'] ?> / <?= $classe['end_year'] ?></small>
                </div>
            </div>
        </div>

    <?php
    endforeach;
    ?>
</div>













</div>