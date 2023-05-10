<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
<body>
    <div class="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    
    <div class="glowny">
        
        <h2>Moje zainteresowania</h2>

        <ul>
            <li>
                Muzyka
            </li>
            <li>
                Film
            </li>
            <li>
                Komputery
            </li>
        </ul>

        <h2>Moi znajomi</h2>
            <?php
            $con=mysqli_connect("localhost","root","","dane");
            $sql=mysqli_query($con,"SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id=1||Hobby_id=2||Hobby_id=3");
            while($i=mysqli_fetch_array($sql)){
                echo"
                    <div class='zdjecie'>
                    <img src='$i[3]'>
                    </div>

                ";
            }
            
            ?>
    </div>

    <div class="stopka1">
        Stronę wykonał:00000000000
    </div>
    
    <div class="stopka2">
        <a href=mailto:ja@portal.pl>Napisz do mnie</a>
    </div>


</body>
</html>