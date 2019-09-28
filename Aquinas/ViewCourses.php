

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }


        .table {
            opacity: 0.6;
            filter: alpha(opacity=30); /* For IE8 and earlier */
        }




    </style>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Font Awsome CSS -->
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous"
    />

    <title>Aquinas Collage</title>
</head>



<body>


<div class="container ">


    <img class="fixed-top img-fluid" style="width: 1630px; " src="./Images/Logo1.png" alt="Aquinas Logo" height="-200px">


    <img class="" style="width: 1630px; margin-left: -300px; margin-top: -30px " src="./Images/aq_14.jpg" alt="Aquinas Logo" height="-200px">




    <table class=" table table-dark sticky-top" style="margin-top: -600px ">
        <thead>
        <tr>
            <th class="text-primary" scope="col">NAME</th>
            <th class="text-primary" scope="col">MODULE</th>

        </tr>
        </thead>
        <tr>
        <tr>

            <?php
            $connection = mysqli_connect('localhost','root','','aquinas');
            if(!$connection){
                echo "connection error";
            }

            $sql = "SELECT * FROM materials";
            $result = mysqli_query($connection, $sql);

            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['module']; ?></td>
                <td><a href="update.php" class="btn btn-warning">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>

         <?php   }  ?>
        </tr>
        </tbody>
    </table>



<!--    <td><a href="update.php?update_id=--><?php //echo $row['id']; ?><!--" class="btn btn-warning">Edit</a></td>-->
<!--    <td><a href="?delete_id=--><?php //echo $row['id']; ?><!--" class="btn btn-danger">Delete</a></td>-->


    <a type="button" class="btn btn-outline-dark" href="AddCourseMaterials.php">Back</a>

</div>

<div class="footer text-secondary " >
    <p>COPYRIGHT @ 2019 ALL RIGHTS RESERVED </p>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
