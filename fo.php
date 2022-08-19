<?php
if (empty($_POST)===false){
   // echo '<pre>' ,print_r($_POST,false), '</pre>';
$errors=array();
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
echo $name, '     ' ,$email, '    ' ,$message;
if(empty($name)===true or empty($email)===true or empty($message)===true){
    $errors[]='name,email,message are required';

}else{ if (filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    $errors[]='that is nat valid email address';
}
if (ctype_alpha($name)===false){
    $errors[]='name must only contain letter';
}


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>

    </style>
</head>
<body>

<?php if (empty($errors)===false){
echo '<ul>';
foreach ($errors as $error){
    echo '<li>' ,$error, '</li>';
}
echo '</ul>';
}
}?>
<form action="" method="post">
<p>
    <label for="name"> name</label> <br>
    <input type="text" id="name" name="name"<?php if(isset($_POST['name'])===true){ echo 'value"',strip_tags($_POST['name']),'"';}?>>
</p>
<p>
    <label for="email"> email</label> <br>
    <input type="text" id="email" name="email" <?php if (isset($_POST['email'])===true){ echo 'value"',strip_tags($_POST['email']),'"';}?>>
</p>
<p>
    <label for="message"> message</label> <br>
    <textarea id="message" cols="30" rows="10" name="message"></textarea>
</p>
<p><input type="submit" name="submit" value="submit"> </p>
</form>
</body>
</html>