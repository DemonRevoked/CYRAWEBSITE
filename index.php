<?php 
session_start();
if (!empty($_SESSION["auth_check"]) && $_SESSION["auth_check"] === "LOGIN_DONE") {
    header("Location: ./panel.php");
    exit;
}
$msg = false;
if (!empty($_POST["email"]) && !empty($_POST["pass"])) {
    if ($_POST["email"] === "peter@whizrange.com" && $_POST["pass"] === "stewie") {
        $_SESSION["auth_check"] = "LOGIN_DONE";
        header("Location: ./panel.php");
    } else {
        $msg = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./bootstrap-v5.3.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
</head>

<body class="h-100 text-bg-dark">
    <div class="init-ui">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-xl-3 col-sm-12"></div>
                <div class="col-md-6 col-xl-6 col-sm-12">
                    <div class="border p-4 rounded mx-auto login-box">
                        <h4 class="mb-3">Brand Name or logo</h4>
                        <?php if ($msg) { ?>
                            <div class="alert alert-danger" role="alert">
                                Email and Password are wrong...
                            </div>
                        <?php  } ?>
                        <form id="form_handle" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email Id</label>
                                <input type="email" name="email" required class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="pass" autocomplete="off" required class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>

</html>