<?php

require_once(__DIR__.'/includes/db.php')

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Tutorial - University of Suffolk</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <?php require_once(__DIR__.'/includes/header.php'); ?>
    <div class="container">
        <h1 class="mt-5 mb-5">Create new animal</h1>

        <?php
            if($_POST['animal_name']) {
                // Process the form
                $data = [
                    "animal_name" => $_POST['animal_name'],
                    "animal_age" => $_POST['animal_age'],
                    "animal_image" => $_POST['animal_image']
                ];

                $query = "INSERT INTO animals (animal_name, animal_age, animal_image) VALUES (:animal_name, :animal_age, :animal_image)";
                $stmt = $Conn->prepare($query);
                $stmt->execute($data);

                ?>
                    <div class="alert alert-success" role="alert">
                        Your animal has been created.
                    </div>
                <?php
            }
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="animalname">Animal name</label>
                <input type="text" class="form-control" id="animalname" name="animal_name">
            </div>
            <div class="form-group">
                <label for="animalage">Animal age</label>
                <input type="text" class="form-control" id="animalage" name="animal_age">
            </div>
            <div class="form-group">
                <label for="animalimage">Animal image</label>
                <input type="text" class="form-control" id="animalimage" name="animal_image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>


    </div>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
