
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







    <form action="" method="POST" style="margin-top: -500px; margin-left:200px" enctype="multipart/form-data" >
        <div class="form-group row">
            <label class="col-form-label text-md-right col-md-2 " >Name</label>

            <div class="col-md-6">
            <input type="text" name ="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a name" value="">
            </div>


        </div>




        <div class="form-group row" style="margin-top: 10px">
            <label class="col-form-label text-md-right col-md-2 " for="exampleInputPassword1">Select a course</label>
            <div class="col-md-6">
                <select name = "id" class="form-control" id="exampleFormControlSelect1" style="margin-top: 10px" >
                    <option value="">----Select----</option>
                    <option value="Computer Networks">Computer Networks</option>
                    <option value="Database System">Database System</option>
                    <option value="Human Computer Interaction">Human Computer Interaction</option>
                    <option value="Data Science and Analytics ">Data Science and Analytics</option>

                </select>
            </div>
        </div>

        <div class="form-group row" style="margin-top: 10px">

                <label class="col-form-label text-md-right col-md-2" for="exampleFormControlFile1">Select Files</label>

            <div class="col-md-6">
                <input type="file" name="my_file" class="form-control-file" >

            </div>


        </div>

        <div class="form-group row" style="margin-top: 10px">

            <div class="offset-md-2 col-auto">

        <button name = "insert" value="INSERT DATA" type="submit" class="btn btn-primary" style="margin-top: 10px" >Submit</button>

            </div>

        </div>

    </form>


<nav class="navbar navbar-expand-sm sticky-top" style="margin-top: -350px">

    <div class="navbar-nav">

        <a class="nav-item nav-link text-dark fas fa-home  " style="margin-right:50px"href="#">Home</a>
        <a class="nav-item nav-link nav-link text-dark far fa-folder " style="margin-right:50px" href="ViewCourses.php">History Of Materials Added</a>
        <a class="nav-item nav-link nav-link text-dark fas fa-arrow-circle-left " href="./Main.php">Back</a></div>
        <a class="nav-item nav-link nav-link text-dark fas fa-arrow-right " href="../index.php">Sign out</a></div>




</nav




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
