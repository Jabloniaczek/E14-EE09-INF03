<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="post">
    <fieldset>

        <legend>Formularz-1</legend>

            <label for="text1" >IMIE
            </label><input type="text" id="text1" name="imie">
            <label for="text2">NAZWISKO
            </label>
            <input type="text" id="text2" name="nazwisko" >
    <input type="submit" value="wyslij">
    </fieldset>
</form>

<form action="index.php" method="post">
    <fieldset>

        <legend>Formularz-2</legend>

            <label for="text1-1" >IMIE
            </label><input type="text" id="text1-1" name="imie1">
            <label for="text2-1">NAZWISKO
            </label>
            <input type="text" id="text2-1" name="nazwisko1" >
    <input type="submit" value="wyslij">
    </fieldset>
</form>

<form action="index.php" method="post">
    <fieldset>

        <legend>Formularz-3</legend>

            <label for="text1-2" >IMIE
            </label><input type="text" id="text1-2" name="dane[]">
            <label for="text2-2">NAZWISKO
            </label>
            <input type="text" id="text2-2" name="dane[]" >
    <input type="submit" value="wyslij">
    </fieldset>
</form>
    
<form action="index.php" method="post">
    <fieldset>

        <legend>Formularz-4</legend>

            <label for="text1-2.1" >IMIE
            </label><input type="text" id="text1-2.1" name="imie123">
            <label for="text2-2.1">NAZWISKO
            </label>
            <input type="text" id="text2-2.1" name="nazwisko123['klucz']" >
    <input type="submit" value="wyslij">
</form>

</body>

<?php

    $form11=@$_POST['imie'];
    $form12=@$_POST['nazwisko'];
    if(isset($_POST['imie']) && isset($_POST['nazwisko']))
    {
        echo $form11." ".$form12;

    }
    
    $form21=@['imie' => $_POST['imie1'], 'nazwisko' => $_POST['nazwisko1']];

    if(isset($_POST['imie1']) && isset($_POST['nazwisko1'])){
        echo $form21['imie'];
        echo $form21['nazwisko'];
    }

    $ostatni=@$_POST['dane'];
    
    if(isset($ostatni[0]) && isset($ostatni['1'])){
        echo $ostatni[0];
        echo $ostatni[1];
    }


    $czwarty=[$_POST['imie123'],$_POST['nazwisko123']];
    if(isset($_POST['imie123'], $_POST['nazwisko123'])){
        echo $czwarty[0];
        echo $czwarty[1];
    }

    
//echo "LOGIN ".$login;
//echo "HASLO ".$haslo;

//echo $_GET['login'];
//echo $_GET['haslo'];



//echo $_GET['login'];
//echo $_GET['haslo'];

//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";

//echo "<pre>";
//print_r($_GET);
//echo "</pre>";

/*
if(mysqli_num_rows($wynik) > 0){
            echo 'login i hasło są poprawne';
        }

        else{
            echo 'login lub haslo sa nie poprawne';
        }

*/

?>

</html>


