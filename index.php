<?php
// Connection code include
include('connection.php');

// Insert code include
include('insert.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>

    <!-- include navnar -->
    <?php include('navbar.php'); ?>

    <br><br>

    <h2 class="text-center">Have a some questions in your mind</h2><br>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="show_qustion.php" class="active">
                    <button type="button" class="btn btn-info">Show the all questions</button></a><br><br>
            </div>
            <div class="col-sm">
                <div class="card w-100" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://www.objetconnecte.com/wp-content/uploads/2021/08/Bulle-de-discu.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste
                            accusantium, repellat consectetur recusandae dolores vero reprehenderit cumque veniam
                            assumenda iusto voluptates similique eveniet! Dicta vero officia minus suscipit aperiam?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <!-- include form  -->
                <?php include('form.php'); ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>