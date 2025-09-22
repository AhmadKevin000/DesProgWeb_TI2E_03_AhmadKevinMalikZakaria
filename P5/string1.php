<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur, 
    adipisicing elit. Reiciendis corrupti quae in sapiente error. 
    Facilis accusantium, quaerat laboriosam debitis provident tempore modi totam.
    Asperiores porro iste dolorem eius, veritatis at.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: ". strlen( $loremIpsum ) ."<br>";
    echo "Panjang kata: ". str_word_count( $loremIpsum ) ."<br>";
    echo "<p>". strtoupper( $loremIpsum ) ."</p>";
    echo ",p.". strtolower( $loremIpsum ) ."</p>";

?>