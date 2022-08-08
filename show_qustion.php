<?php
// Connection code include
include('connection.php');
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

    <h2 class="text-center">Showing the all questions post by user</h2><br>

    <div class="container">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">SR NO</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">comment</th>
                </tr>
            </thead>

            <?php
  
  $sql = "SELECT * FROM `user_comment`;";

  $data = mysqli_query($conn,$sql);
  $total_rows = mysqli_num_rows($data);

  while($result = mysqli_fetch_array($data)){

  ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $result['id'] ?></th>
                    <td><?php echo $result['fname'] ?></td>
                    <td><?php echo $result['lname'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['messagee'] ?></td>
                </tr>

                <?php
  }
  ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>