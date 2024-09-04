<!doctype html>
<html lang="en">
    <head>
        <title>Edit Data</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <?php
        include("connection.php");
    // if (isset($_REQUEST["savebtn"])) {
        // // call
        // $name = $_REQUEST["U-name"];
        // $email = $_REQUEST["U-email"];
        // $pass = $_REQUEST["U-pass"];
      
        // $contry = $_REQUEST["U-country"];
        // query
        $id = $_REQUEST["id"];
        $editquery = "SELECT * FROM `userdata` WHERE id=$id ";
        $result = mysqli_query( $conn,$editquery);
        $row = mysqli_fetch_assoc($result);
        mysqli_close( $conn );
        // move to index.php
        // header("location: index.php");
    // }
    
    
 
    ?>  
    <div class="container">
        <div class="row">

                <form action="query.php" method="post">
                  
                    
                    <label for="">Name</label>
                    <input type="hidden"  class="form-control" name="U-id" value="<?php echo $row['id']?>" placeholder="Enter Name"><br>
                    <input type="text"  class="form-control" name="U-name" value="<?php echo $row['name']?>" placeholder="Enter Name"><br>

                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="U-email" value="<?php echo $row['email']?>" placeholder="Enter Email"><br>

                    <label for="">Password</label>
                    <input type="password"  class="form-control" name="U-pass" value="<?php echo $row['Password']?>" placeholder="Enter password"><br>

                    <label for="">Country</label>
                    <input type="text" name="U-country" class="form-control" value="<?php echo $row['Country']?>" placeholder="Enter Country"><br>
                    
                    <input type="submit" class="btn btn-warning" name="updatebtn" value="Update form ">
                </form>
           </div>
        </div>
    </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
