<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SSIP PROJECT</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">SSIP PROJECT</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/index.html">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/displayuniversity.php">University</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/displayfaculty.php">Faculty</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/displaymajor.php">Major</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/displaylecturer.php">Lecturer</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://localhost/SSIP_Project/displaystudent.php">Student</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="http://localhost/SSIP_Project/index.html">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Lecturer</h1>
                    <p>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Lecturer data</title>
                            <!-- bootstarp css link -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                            <link href="style1.css" rel="stylesheet"/>
                        </head>
                        <body>
                        <h1>
                            <!-- Displaying Lecturers -->
                            <div class="container my-5">
                                <button class="btn btn-dark"><a href="listlecturers.php" class="text-light text-decoration-none">Add Lecturer</button>
                                <table class="table mt-5 table-bordered" style='font-size:50%'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Lecturer's Name</th>
                                            <th>Faculty Name</th>
                                            <th>University Name</th>
                                            <th class="text-center">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $select_query="Select * from `lecturer`";
                                        $result=mysqli_query($con,$select_query);
                                        $i=1;
                                        if($result){
                                            while($row=mysqli_fetch_assoc($result)){
                                                $idl=$row['id'];
                                                $lectname=$row['lectname'];
                                                $facname=$row['facname'];
                                                $univname=$row['univname'];
                                                echo " <tr>
                                                <td>$idl</td>
                                                <td>$lectname</td>
                                                <td>$facname</td>
                                                <td>$univname</td>
                                                <td class='text-center'>
                                                <button class='btn btn-dark'><a href='updatelecturer.php?update_id=$idl' class='text-light text-decoration-none'>Update</button>
                                                <button class='btn btn-danger'><a href='deletelecturer.php?delete_id=$idl' class='text-light text-decoration-none'>Delete</button>
                                                </td>
                                                </tr>";
                                                $i++;
                                            }
                        
                                        }else{
                                            die(mysqli_error($con));
                                        }
                                    ?>  
                                    </tbody>
                                </table>
                            </div>
                        </h1>    
                    </p>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
