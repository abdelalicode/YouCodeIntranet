<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YouCode</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    body {
      font-family: "Poppins";
      font-size: 0.6em;
    }
  </style>
</head>

<body>

  <div class="col-2 position-fixed d-flex flex-column justify-content-between align-items-center" style="background-color: #f6f6f6; height: 100vh">
    <div>
      <div class="d-flex  align-items-center">
        <div class="dropdown">
          <button class="btn w-50 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/login.png" class="align-items-center" style="width: 40%;" />
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">PROFILE</button></li>
            <li><a href="index.php?action=logout"><button class="dropdown-item" type="button">LOGOUT</button></a></li>
          </ul>
        </div>
      </div>
      <hr class="mx-3" />
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #f6f6f6;">
              LIST OF USERS
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="index.php?action=allusers">ALL USERS</a></li>
                <li><a class="dropdown-item my-4" href="index.php?action=allform">INSTRUCTORS</a></li>
                <li><a class="dropdown-item my-4" href="index.php?action=allappr">STUDENTS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #f6f6f6;">
              STATISTICS
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="service_stats.php">STATISTICS</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>

    </div>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>