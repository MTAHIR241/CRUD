<!doctype html>
<html lang="en">
    <head>
        <title>create</title>
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
 
    <div class="container">
        <div class="row">

                <form action="query.php" method="post">
                  

                    <label for="">Name</label>
                    <input type="text"  class="form-control" name="U-name"  placeholder="Enter Name"><br>

                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="U-email"  placeholder="Enter Email"><br>

                    <label for="">Password</label>
                    <input type="password"  class="form-control" name="U-pass"  placeholder="Enter password"><br>

                    <label for="">Country</label>
                    <input type="text" name="U-country" class="form-control" placeholder="Enter Country"><br>
                    
                    <input type="submit" class="btn btn-danger" name="savebtn" value="submit form ">
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