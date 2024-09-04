<?php
        include("connection.php");
        $id = $_REQUEST["U-id"];
        $name = $_REQUEST["U-name"];
        $email = $_REQUEST["U-email"];
        $pass = $_REQUEST["U-pass"];
        $contry = $_REQUEST["U-country"];

    if (isset($_REQUEST["savebtn"])) {
        // query
        $savequery = "   INSERT INTO `userdata`( `name`, `email`, `Password`, `Country`) VALUES ('$name','$email','$pass','$contry')	";
        $result = mysqli_query( $conn,$savequery);
        mysqli_close( $conn );
        // move to index.php
        header("location: index.php");
    }
    elseif (isset($_REQUEST["updatebtn"])) {
        // query
        $updatequery =  " UPDATE `userdata` SET `name`='$name',`email`='$email',`Password`='$pass',`Country`='$contry' WHERE  id = $id";
        $result = mysqli_query( $conn,$updatequery);
        mysqli_close( $conn );
        header("location: index.php");
    }
   
 
    ?> 