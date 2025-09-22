<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            
            foreach ($Listdosen as $key => $value) {
                echo $key . " : " . $value . "<br>";
            }
            ?>
    </body>
</html>