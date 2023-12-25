<?php
$name = $_SESSION['firstname']

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.cdnfonts.com/css/huntesla-gloficka" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>YouCode</title>
</head>



<body style="background-image: url(<?php echo $_SESSION['role_id'] == 2 ? 'assets/bacform.jpg' : 'assets/bac.jpg'; ?>); background-repeat: no-repeat;
        background-size: cover;">


<nav id="navbar" class="navbar px-5 navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#">
            <span class="material-symbols-outlined">
                YOUCODE
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mt-2 justify-content-end flex-grow-1 pe-3 gap-3">
                    <?php if($_SESSION['role_id'] == 2) {?>
                    <li class="nav-item">
                        <a class="nav-link active d-flex" aria-current="page" href="#">
                            ADD CLASSROOM
                        </a>
                    </li>
                    <?php }?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $name ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">YOUR PROFILE</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index.php?action=logout">LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>


<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

            document.getElementById("navbar").style.background = "#1F0D16";
        } else {

            document.getElementById("navbar").style.background = "none";
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>