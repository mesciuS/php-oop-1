<?php
require_once './Models/Movie.php';
require_once './Models/Cast.php';
require_once './db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Cast</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($movies as $singleMovie) {
                    ?>
                    <tr>
                        <td><?php echo $singleMovie->title?></td>
                        <td><?= $singleMovie->cast->getFullCast() ?></td>
                        <td><?= implode(",", $singleMovie->genre)?></td>
                        <td><?= $singleMovie->year?></td>
                        <td><?= $singleMovie->duration?>min.</td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>

    </table>
    <?php
    include './Views/partials/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>