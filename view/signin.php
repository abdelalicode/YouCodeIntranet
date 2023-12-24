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
        <form method="post" action="index.php" class="form-signin d-flex flex-column justify-content-center vh-100">
            <img class="mb-4 align-self-center" src="assets/login.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="align-self-start m-2">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control v-25" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="align-self-start m-2">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control v-25" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <button name="action" value="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <div class="d-flex gap-3">
                <p>Not a member? Please Sign up </p>
                <span><a href="index.php?action=signup">SIGNUP</a></span>
            </div>
        </form>


    </div>
</body>

</html>