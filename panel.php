<?php
session_start();
if (empty($_SESSION["auth_check"]) && $_SESSION["auth_check"] !== "LOGIN_DONE") {
    header("Location: ./index.php");
    exit;
}

if (!empty($_GET['auth'])) {
    session_destroy();
    header("Location: ./index.php");
}

if ($_SESSION["auth_check"] === "LOGIN_DONE") {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="./bootstrap-v5.3.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Brand Logo</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
        <a class="nav-link fw-bold py-1 px-0" href="panel.php?auth=logout">Logout</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1 class="mt-5">Cover your page.</h1>
    
    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam sequi corporis, ea dolorem est facilis aperiam quidem facere exercitationem unde sapiente ex molestiae laboriosam, doloribus sint perferendis earum reprehenderit. Fuga blanditiis deserunt animi consequuntur exercitationem ab deleniti ipsam recusandae sit, fugit ipsum commodi, dolore eveniet consectetur dolor necessitatibus at?</p>
    <p class="lead mt-5">
      <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>

</div>
</body>

</html>

<?php } ?>