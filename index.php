<!doctype html>
<html lang="en">
    <head>
        <title>read data</title>
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
          $query="select * from userdata";
          $result = mysqli_query($conn,$query);
        //   print_r($result->fetch_all()); 
          if(mysqli_num_rows($result)>0){

                
          ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class=" table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           while($data= mysqli_fetch_array($result))
                           {
                           ?>
                           <tr>
                            <td><?php echo $data['id']?></td>
                            <td><?php echo $data['name']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['Password']?></td>
                            <td><?php echo $data['Country']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']?>" class="btn btn-primary ">Edit</a>
                                <a href="edit.php" class="btn btn-danger ">Delete</a>
                            </td>
                           </tr>
                           <?php  }  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     
<?php 
}
else{
    echo "No Record Found";
}

mysqli_close($conn);
?>
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
