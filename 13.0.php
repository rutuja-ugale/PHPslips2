<?php
    $xml = simplexml_load_file("13.1.xml");
    foreach($xml->book as $b)
        {
            echo "Title: ".$b->title."<br>";
            echo "Author: ".$b->author."<br>";
            echo "Publication: ".$b->publication."<br><br>";
        }
?>