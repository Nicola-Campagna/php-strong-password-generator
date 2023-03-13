<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PASSWORD GENERATOR</title>

</head>

<body>

    <form action="" method="get">

        <label for="password-length">Lunghezza Password:</label>
        <input type="number" id="password-length" name="password-length" min="0" max="12" required>

        <button type="submit">INVIA</button>

    </form>


    <div>
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

        <h1>PASSWORD GENERATA: <?= randomPassword($passwordlen)?></h1>

    </div>




</body>

</html>