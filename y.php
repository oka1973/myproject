<?php
if(isset($_POST['encrypt'])){
 $simple_string=$_POST['text'];
 echo "origin data" . $simple_string ;
 echo "<br>";
$ciphering="AES-128-CTR";
$option=0;
$encryption_iv=1234567891234567;
$encryption_key="hellow";
$encryption=openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);
echo "encryption data:" .$encryption ;
echo "<br>";

}
if(isset($_POST['decrypt'])){
    $text=$_POST['text'];
    $ciphering="AES-128-CTR";
    $option=0;
    $decryption_iv=1234567891234567;
    $decryption_key="hellow";
    $decryption=openssl_decrypt($text,$ciphering,$decryption_key,$option,$decryption_iv);
    echo "decryption data" .$decryption;
    echo "<br>";
}