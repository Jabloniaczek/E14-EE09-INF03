<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkoła Ponadgimnazjalna</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'szkola1');
    if (!$connect) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    $zapytanie1 = "SELECT imie, nazwisko FROM uczen;";
    $zapytanie2 = "SELECT imie, nazwisko FROM uczen WHERE id = 2;";
    $zapytanie3 = "SELECT AVG(ocena) AS srednia FROM ocena WHERE przedmiot_id = 1;";
    ?>

    <div id="kontener">
        <header id="baner">
            <h1>Oceny uczniów: język polski</h1>
        </header>
        <main id="glowny">
            <section id="lewy">
                <h2>Lista uczniów</h2>
                <?php
                $wynik1 = mysqli_query($connect, $zapytanie1);

                if (!$wynik1) {
                    die("Błąd zapytania: " . mysqli_error($connect));
                }

                echo "<ol>";
                while ($wiersz = mysqli_fetch_assoc($wynik1)) {
                    echo "<li>" . $wiersz['imie'] . " " . $wiersz['nazwisko'] . "</li>";
                }
                echo "</ol>";
                ?>
            </section>
            <section id="prawy">
                <?php
                $wynik2 = mysqli_query($connect, $zapytanie2);
                if (!$wynik2) {
                    die("Błąd zapytania: " . mysqli_error($connect));
                }

                $wiersz2 = mysqli_fetch_assoc($wynik2);
                echo "<h2>Uczeń: " . $wiersz2['imie'] . " " . $wiersz2['nazwisko'] . "</h2><br>";

                $wynik3 = mysqli_query($connect, $zapytanie3);
                if (!$wynik3) {
                    die("Błąd zapytania: " . mysqli_error($connect));
                }

                $wiersz3 = mysqli_fetch_assoc($wynik3);
                echo "Średnia ocen z języka polskiego: " . round($wiersz3['srednia'], 2) . "<br>";
                ?>
            </section>
        </main>
        <footer id="stopka">
            <p>Zespół Szkół Ponadgimnazjalnych</p>
            <p>Stronę wykonał:</p>
        </footer>
    </div>

    <?php
    mysqli_close($connect);
    ?>

</body>

</html>