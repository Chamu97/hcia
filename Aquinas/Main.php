<?php
?>


<!doctype html>
<html lang="en">
<head>

    <?php

    $connection = mysqli_connect('localhost','root','','aquinas');
    if(!$connection){
        echo "connection error";
    }

    if(isset($_POST['insert'])) {


        $query = "INSERT INTO `materials`(`name`, `module`) VALUES ('".$_POST["username"]."','".$_POST["id"]."')";
        // $query = "select * from degrees";
        // $query_run = mysqli_query($connection, $query);
        // $results = mysqli_fetch_array($query_run);
        if( $connection->query($query) == TRUE ){
            echo "done";
        }else{
            echo "not done";
        }

        if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
            $target_dir = "Uploads/";
            $file = $_FILES['my_file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['my_file']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;

// Check if file already exists
            if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
            }else{
                move_uploaded_file($temp_name,$path_filename_ext);
                echo "Congratulations! File Uploaded Successfully.";
            }
        }

    }





    ?>
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
            padding: 5px;
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

    <img class="" style="width: 1630px; margin-left: -300px; margin-top: -30px " src="./Images/Background.jpg" alt="Aquinas Logo" height="-200px">




    <!--<form>-->
    <!--    <div class="row" style="margin-top: 150px; margin-right: -10px">-->
    <!---->
    <!--        <div class="col" >-->
    <!--            <label style="margin-left: 250px" for="name">Name:</label>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="col" style="margin-right: 300px" >-->
    <!--        <input type="text" class="form-control" id="name">-->
    <!--        </div>-->
    <!---->
    <!--    </div>-->
    <!---->
    <!---->
    <!--        <div class="row" style="margin-top: 20px; margin-right: -10px">-->
    <!--            <div class=" form-group col " >-->
    <!--              <label  style="margin-left: 250px " for="exampleFormControlSelect1">Select Course</label>-->
    <!---->
    <!--            </div>-->
    <!--            <div class="form-group col" style="margin-right: 300px">-->
    <!--                <select class="form-control"  >-->
    <!--                    <option>1</option>-->
    <!--                    <option>2</option>-->
    <!--                    <option>3</option>-->
    <!--                    <option>4</option>-->
    <!--                    <option>5</option>-->
    <!--                </select>-->
    <!---->
    <!--            </div>-->
    <!---->
    <!---->
    <!---->
    <!--            <form class="row" style="margin-top: 20px; margin-right: -10px">-->
    <!---->
    <!--                <div class="col" style="margin-right: 300px">-->
    <!--                    <form>-->
    <!--                        <div class="form-group" >-->
    <!--                            <label style="margin-left: 250px " for="exampleFormControlFile1">Select Relevent</label>-->
    <!--                            <input style="margin-left: 250px " type="file" class="form-control-file" id="exampleFormControlFile1">-->
    <!--                        </div>-->
    <!--                    </form>-->
    <!---->
    <!--                </div>-->
    <!---->
    <!--                <button style="margin-left: 250px " type="button" class="btn btn-primary">Primary</button>-->
    <!---->
    <!--            </form>-->
    <!---->
    <!--            </div>-->





    <nav class="navbar navbar-expand-sm sticky-top" style="margin-top: -550px; margin-left: -50px ">

        <div class="navbar-nav">

            <a class="nav-item nav-link text-dark fas fa-home  " style="margin-right:50px"href="#">Home</a>
            <a class="nav-item nav-link nav-link text-dark far fa-folder " style="margin-right:50px" href="ViewCourses.php">View Courses</a>
            <a class="nav-item nav-link nav-link text-dark fas fas fa-book-open " href="#">Books</a></div>
            <a class="nav-item nav-link nav-link text-dark fas fas fa-file-alt" href="./AddCourseMaterials.php">Add Course Materials</a></div>


    </nav

<div class="jumbotron" >
    <h1 class="display-4">Hello, Tharindu!</h1>
    <p class="lead">Hope you have a good day, Thanks for your service against our Univercity.</p>
    <hr class="my-4">
    <p>We whould like to know your thoughts about our web site as well so put a feedback if you have time</p>

</div>







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



