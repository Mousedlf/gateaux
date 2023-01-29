
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<nav class="navbar px-5 py-4 mt-2 shadow sticky-top bg-white">

    <a class="navbar-brand" href="index.php">RECETTES :)</a>
    <a class="nav-link active" aria-current="page" href="index.php?type=post&action=index">All recipes</a>
    <a class="nav-link" href="index.php?type=post&action=create">Add a recipe</a>

</nav>

<div class="container mt-5">


            <?= $pageContent ?>


</div>



</body>
</html>