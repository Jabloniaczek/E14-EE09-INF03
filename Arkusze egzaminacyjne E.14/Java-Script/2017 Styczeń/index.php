<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>

<body>

    <?php
    $connect = mysqli_connect("localhost", "root", "", "komis");
    if (!$connect) {
        echo "błąd połączenia";
        echo "opis błędu:" . " " . mysqli_connect_error();
        echo "numer błędu:" . " " . mysqli_connect_errno();
    }
    ?>
    <div class="container">
        <header class="baner">
            <h2>SAMOCHODY</h2>
        </header>
        <main class="sections">
            <section class="lewy">
                <h2>WYKAZ SAMOCHODÓW</h2>
                <?php
                $query1 = "SELECT id,model,marka FROM samochody;";
                $result1 = mysqli_query($connect, $query1);
                if (!$result1) {
                    echo "błąd połączenia";
                    echo "opis błędu:" . " " . mysqli_error($connect);
                    echo "numer błędu:" . " " . mysqli_errno($connect);
                }
                echo "<ul>";
                while ($wynik1 = mysqli_fetch_assoc($result1)) {
                    echo $wynik1['id'] . " " . $wynik1['model'] . " " . $wynik1['marka'] . "</li>" . "<br>";
                }
                echo "</ul>";


                ?>

                <h2>ZAMÓWIENIA</h2>

                <?php
                $query2 = "SELECT Samochody_id,klient FROM zamowienia;";
                $result2 = mysqli_query($connect, $query2);
                if (!$result2) {
                    echo "błąd połączenia";
                    echo "opis błędu:" . " " . mysqli_error($connect);
                    echo "numer błędu:" . " " . mysqli_errno($connect);
                }
                echo "<ul>";
                while ($wynik2 = mysqli_fetch_assoc($result2)) {
                    echo "<li>" . $wynik2['Samochody_id'] . " " . $wynik2['klient'] . "</li>";
                }
                echo "</ul>";
                ?>
            </section>
            <section class="prawy">
                <h2>Pełne dane:FIAT</h2>
                <?php
                $query3 = "SELECT * FROM samochody WHERE marka='FIAT';";
                $result3 = mysqli_query($connect, $query3);
                if (!$result3) {
                    echo "błąd połączenia";
                    echo "opis błędu:" . " " . mysqli_error($connect);
                    echo "numer błędu:" . " " . mysqli_errno($connect);
                }

                while ($wynik3 = mysqli_fetch_assoc($result3)) {
                    //foreach ($wynik3 as $wynik4) {
                    //echo $wynik4 ;
                    echo implode(" / ", $wynik3) . "<br>";
                }
                //}

                ?>
            </section>
        </main>
        <footer class="stopka">
            <table>
                <tr>
                    <td><a href="kwerendy.txt">KWERENDY</a></td>
                    <td>Autor: KODZIK</td>
                    <td>
                        <img src="auto.png" alt="samochod">
                    </td>
                </tr>
            </table>
        </footer>
    </div>

    <?php
    mysqli_close($connect);
    ?>
</body>

</html>