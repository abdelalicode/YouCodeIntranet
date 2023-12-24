<?php
$title = "LIST OF USERS";

include_once "controller/userController.php";
require_once "view/sidebar.php";

?>

<?php ob_start();


?>

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>ROLE</th>
            <th>ASSIGN ROLE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($apprenants as $apprenant) : ?>


            <tr>
                <td> <?= $apprenant['id'] ?></td>
                <td><?= $apprenant['firstname'] ?></td>
                <td><?= $apprenant['lastname'] ?></td>
                <td><?= $apprenant['name'] ?></td>
                <td>
                    <form class="d-flex gap-2" action="index.php" method="post">
                        <input type="hidden" name="userhid" value="<?= $apprenant['id'] ?>">
                        <select name="role" class="form-select w-50" aria-label="Default select example">
                            <option value="0">Choose Role</option>
                            <option value="3">Apprenant</option>
                            <option value="2">Formateur</option>
                        </select>
                        <button class="btn btn-outline-dark" type="submit" name="action" value="updrole">
                            <span class="material-symbols-outlined">
                                reduce_capacity
                            </span>
                        </button>
                    </form>
                </td>
            </tr>



        <?php
        endforeach;
        ?>

    </tbody>
</table>
<?php $content = ob_get_clean() ?>
<?php include_once "view/layout.php"; ?>