<?php
if ($idrole == 2) {
    $title = "LIST OF INSTRUCTORS";
} else if ($idrole == 3) {
    $title = "LIST OF STUDENTS";
}



// include_once "controller/userController.php";
require_once "view/sidebar.php";

?>

<?php ob_start();


?>

<table class="table">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($apprenants as $apprenant) : ?>


            <tr>
                <td> <?= $apprenant['id'] ?></td>
                <td><?= $apprenant['firstname'] ?></td>
                <td><?= $apprenant['lastname'] ?></td>
                <td class="d-flex gap-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal<?= $apprenant['id'] ?>">
                        <span class="material-symbols-outlined">
                            contract_edit
                        </span>
                    </button>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?= $apprenant['id'] ?>">
                        <button type="button" class="btn btn-outline-danger">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </button>
                    </a>
                </td>
            </tr>
            <div class="modal fade" id="modal<?= $apprenant['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE INFORMATION</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post" class="form-signin d-flex flex-column justify-content-center">
                                <div class="d-flex gap-3">
                                    <input type="hidden" name="idup" value="<?= $apprenant['id'] ?>">
                                    <div>
                                        <label for="inputEmail" class="align-self-start m-2">First Name</label>
                                        <input type="text" name="firstname" class="form-control v-25" placeholder="First Name" required autofocus value="<?= $apprenant['firstname'] ?>">
                                    </div>
                                    <div>
                                        <label for="inputPassword" class="align-self-start m-2">Last Name</label>
                                        <input type="text" name="lastname" class="form-control v-25" placeholder="Last Name" required value="<?= $apprenant['lastname'] ?>">
                                    </div>
                                </div>
                                <label for="inputEmail" class="align-self-start m-2">Email address</label>
                                <input type="email" name="email" class="form-control v-25" placeholder="Email address" required autofocus value="<?= $apprenant['email'] ?>">

                                <br><br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="action" value="updateappr" class="btn btn-primary">UPDATE</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>

    </tbody>
</table>

</div>
<?php $content = ob_get_clean() ?>

<?php include_once "view/layout.php"; ?>