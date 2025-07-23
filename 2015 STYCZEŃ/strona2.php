<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie egzaminacyjne</title>
</head>
<body>
    <div id="glowny">
        <a href="index.html"><img src="banerek.jpg" alt="baner"></a>
        <ul>
            <li><a href="">PROSTE DZIAŁANIA</a></li>
            <li><a href="">Potęgowanie</a></li>
        </ul>
        <h1>POTĘGOWANIE - PHP</h1>
        <form action="strona2.php" method="post">
        
            <fieldset>
                <legend>POTĘGOWANIE</legend>
            <label>podaj podstawę potęgi<input type="number" name="podstawa"></label>
            <label>podaj dodatni, całkowity wykładnik potęgi<input type="number" name="wykladnik"></label>
            <input type="submit" name="send" value="potegownie">
            </fieldset>

            <?php

            if(isset($_POST["send"])){
                $liczba1=$_POST['podstawa'];
                $liczba2=$_POST['wykladnik'];
                
                if($liczba2<=0){
                    echo "wykładnik musi być dodatni";
                }
                
                if($liczba1==="" || $liczba2===""){
                    echo "pola nie mogą byc puste , uzupełnij je wszystkie";
                    return;
                }


                $wynik = 1 ; 

                for($i=0; $i<$liczba2 ; $i++){
                    $wynik = $wynik * $liczba1;
                    
                }

                echo "wynik działania wynosi:".$wynik;


            }


            
            ?>

        </form>
        
    </div>
    


</body>
</html>