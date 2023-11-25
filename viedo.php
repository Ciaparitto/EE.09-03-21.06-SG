<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="banerL">
        <h1>Internetowa wypozyczalnia filmow</h1>
    </div>
    <div id="banerP">
        <table>
            <tr>
                <td>kryminal</td>
                <td>horror</td>
                <td>przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div id="listaP">
        <h3>Polecamy</h3>
        <?php
    $conn =mysqli_connect("localhost","root", "", "filmy");
    $query = mysqli_query($conn, "SELECT id,nazwa,opis,zdjecie FROM produkty WHERE id = 18 OR id = 22 OR id = 23 OR id = 25");
    while($wynik = mysqli_fetch_row($query))
    {
        echo "<div class='blokgenerowany'>
        <h4 class='blokgenerowany'>$wynik[0]. $wynik[1]</h4>
        <img src='$wynik[3]' alt='film' />
        <p>$wynik[2]</p>
        </div>";
                  

    }
    mysqli_close($conn);
    ?>
    </div>
    <div id="listaF">
        <h3>filmy fantastyczne</h3>
    </div>
    <footer>
        <form action="viedo.php" method="post"></form>
        Stdone wykonal:00000000
    </footer>
</body>
</html>