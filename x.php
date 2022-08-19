<?php

        $sdn='oka';
        $user='root';
        $pass='';
        $loc='localhost';
        $con = mysqli_connect($loc,$user,$pass,$sdn);
   if (!$con) {
  die("Connection failed: "
      . mysqli_connect_error());
}
echo "Connected successfully";


    if(isset($_POST['send'])){
        $name = $_POST['name'];

         $email = $_POST['email'];
          $address = $_POST['address'];
      $con->query("set names 'utf8'");




mysqli_query($con,"insert into tables (name,email,address) values('$name','$email','$address')");
echo "<div class='container alert alert-success'> تم ارسال البيانات شكرا لتفاعلك معنا</div>";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Title</title>
</head>
<body>
<div class="container">
<h1 style="color:red">mohmmed oka</h1>
    <form action="" method="post">
        <div class="mb-3">
    <input class="form-control form-control-lg"  name="name" type="text" placeholder="name" aria-label=".form-control-lg example">
</div>
        <div class="mb-3">
    <input class="form-control form-control-lg"  name="email" type="text" placeholder="email" aria-label=".form-control-lg example">
        </div>
            <div class="mb-3">
    <input class="form-control form-control-lg" name="address" type="text" placeholder="address" aria-label=".form-control-lg example">
            </div>
        <button type="submit" class="btn btn-primary" name="send">send </button>
    </form>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>