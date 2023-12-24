<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>YouCode</title>
</head>

<body class="text-center">
    <div class="container w-25">
        <form action="index.php" method="post" class="form-signin d-flex flex-column justify-content-center vh-100">
            <img class="mb-4 align-self-center" src="assets/code.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
            <div class="d-flex gap-3">
                <div>
                    <label for="inputEmail" class="align-self-start m-2">First Name</label>
                    <input type="text" name="firstname" class="form-control v-25" placeholder="First Name" required autofocus>
                </div>
                <div>
                    <label for="inputPassword" class="align-self-start m-2">Last Name</label>
                    <input type="text" name="lastname" class="form-control v-25" placeholder="Last Name" required>
                </div>
            </div>
            <label for="inputEmail" class="align-self-start m-2">Email address</label>
            <input type="email" name="email" class="form-control v-25" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="align-self-start m-2">Password</label>
            <input type="password" name="password" class="form-control v-25" placeholder="Password" required>
            <br><br>
            <button name="action" value="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        </form>
    </div>
</body>

</html>