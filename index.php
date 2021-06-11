<?php
require_once "base.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>


<form action="" method="POST" enctype="multipart/form-data">

    <input type="file" name="fichierEnvoye">
    <input type="hidden" name="inputTest" value="valeurTest">

    <button type="submit" class="btn btn-primary">Envoyer</button>


</form>



</body>
</html>