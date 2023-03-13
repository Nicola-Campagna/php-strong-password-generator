<?php 
    $passwordlen=$_GET["password-length"]??"5
    ";

    // funzione genera password random 
    function randomPassword($passwordlen){
        
    $password_caracters="ABCDEFGKILMNOPQRSTUVZabcdefghilmnopqrstuvz1234567890!£$%&/()=?";
    $password=array();
    $password_caracters_length=strlen($password_caracters)-1;

    for($i=0; $i<$passwordlen;$i++){
    $n=rand(0,$password_caracters_length);
    $password[]=$password_caracters[$n];
    };

    return implode($password);

    }
?>