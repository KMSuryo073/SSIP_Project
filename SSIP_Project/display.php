    <?php include 'connect.php'; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student's data</title>
        <!-- bootstarp css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style1.css" rel="stylesheet"/>
    </head>
    <body>
    <h1>
    <!-- Displaying Universities -->
        <div class="container my-5">
            <button class="btn btn-dark"><a href="listuniversity.php" class="text-light text-decoration-none">Add University</button>
            <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>University Name</th>
                        <th class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query="Select * from `university`";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $univname=$row['university'];
                            echo " <tr>
                            <td>$id</td>
                            <td>$univname</td>
                            <td class='text-center'>
                            <button class='btn btn-dark'><a href='updateuniversity.php?update_id=$id' class='text-light text-decoration-none'>Update</button>
                            <button class='btn btn-danger'><a href='deleteuniversity.php?delete_id=$id' class='text-light text-decoration-none'>Delete</button>
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
                <!-- Displaying Faculties -->
                    <div class="container my-5">
                        <button class="btn btn-dark"><a href="listfaculty.php" class="text-light text-decoration-none">Add Faculty</button>
                        <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Faculty Name</th>
                        <th>University ID</th>
                        <th class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query="Select * from `faculty`";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $idf=$row['id'];
                            $facname=$row['faculty_name'];
                            $univid=$row['university_id'];
                            echo " <tr>
                            <td>$idf</td>
                            <td>$facname</td>
                            <td>$univid</td>
                            <td class='text-center'>
                            <button class='btn btn-dark'><a href='updatefaculty.php?update_id=$idf' class='text-light text-decoration-none'>Update</button>
                            <button class='btn btn-danger'><a href='deletefaculty.php?delete_id=$idf' class='text-light text-decoration-none'>Delete</button>
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
    <!-- Displaying Majors -->
        <div class="container my-5">
            <button class="btn btn-dark"><a href="listmajor.php" class="text-light text-decoration-none">Add Major</button>
            <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Major Name</th>
                        <th>Faculty ID</th>
                        <th class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query="Select * from `major`";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $idm=$row['id'];
                            $majorname=$row['major_name'];
                            $facid=$row['faculty_id'];
                            echo " <tr>
                            <td>$idm</td>
                            <td>$majorname</td>
                            <td>$facid</td>
                            <td class='text-center'>
                            <button class='btn btn-dark'><a href='updatemajor.php?update_id=$idm' class='text-light text-decoration-none'>Update</button>
                            <button class='btn btn-danger'><a href='deletemajor.php?delete_id=$idm' class='text-light text-decoration-none'>Delete</button>
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
                <!-- Displaying Lecturers -->
                    <div class="container my-5">
                        <button class="btn btn-dark"><a href="listlecturers.php" class="text-light text-decoration-none">Add Lecturer</button>
                        <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lecturer's Name</th>
                        <th>Faculty ID</th>
                        <th>University ID</th>
                        <th class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query="Select * from `lecturers`";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $idl=$row['id'];
                            $lectname=$row['lecturer_name'];
                            $facid=$row['faculty_id'];
                            $univid=$row['university_id'];
                            echo " <tr>
                            <td>$idl</td>
                            <td>$lectname</td>
                            <td>$facid</td>
                            <td>$univid</td>
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
                <!-- Displaying Students -->
                    <div class="container my-5">
                        <button class="btn btn-dark"><a href="liststudent.php" class="text-light text-decoration-none">Add Student</button>
                        <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student's Name</th>
                        <th>Major ID</th>
                        <th>University ID</th>
                        <th class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query="Select * from `student`";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $ids=$row['id'];
                            $stdname=$row['student_name'];
                            $majorid=$row['major_id'];
                            $univid=$row['university_id'];
                            echo " <tr>
                            <td>$ids</td>
                            <td>$stdname</td>
                            <td>$majorid</td>
                            <td>$univid</td>
                            <td class='text-center'>
                            <button class='btn btn-dark'><a href='updatestudent.php?update_id=$ids' class='text-light text-decoration-none'>Update</button>
                            <button class='btn btn-danger'><a href='deletestudent.php?delete_id=$ids' class='text-light text-decoration-none'>Delete</button>
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
        </div>
    </h1>
    </body>
    </html>