<?php
if(isset($_POST['add'])){
   $font=realpath('nato.ttf');
    $iamge=imagecreatefromjpeg("cer.jpg");
    $color=imagecolorallocate($iamge,51,51,102);
    imagettftext($iamge, 20, 0, 170 ,130 ,$color,$font,$_POST['name']);
    imagettftext($iamge, 20, 0, 170 ,230,$color,$font,$_POST['names']);
    imagettftext($iamge, 20, 0, 170 ,330 ,$color,$font,$_POST['nameadmin']);
    imagettftext($iamge, 20, 0, 170 ,430 ,$color,$font,$_POST['gender']);
    imagettftext($iamge, 20, 0, 170 ,530 ,$color,$font,$_POST['class_a']);
    imagejpeg($iamge,"student/" .$_POST['name'].".jpg");
    imagedestroy($iamge);



}
