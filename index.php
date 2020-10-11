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
        <h1 class="mt-5 mb-5">Animals</h1>

        <a href="new.php" class="btn btn-primary">Create new animal</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $stmt = $Conn->prepare('SELECT * FROM animals');
                    $stmt->execute();
                    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach($animals as $key => $animal) {
                ?>

                <tr>
                    <th scope="row"><?php echo $animal['animal_id']; ?></th>
                    <td><?php echo $animal['animal_image']; ?></td>
                    <td><?php echo $animal['animal_name']; ?></td>
                    <td><?php echo $animal['animal_age']; ?></td>
                    <td><a class="btn btn-primary" href="edit.php?id=<?php echo $animal['animal_id']; ?>">Edit animal</a></td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
