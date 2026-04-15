<?php
    $bookinfo = new SimpleXMLElement("<BookInfo/>");

    $book = $bookinfo->addChild("Book");
    $book->addAttribute("bookid", "1");
    $book->addChild("bookname", "JAVA");
    $book->addChild("authorname", " Balguru Swami");
    $book->addChild("price", "300");
    $book->addChild("year", "2023");

    $book1 = $bookinfo->addChild("Book");
    $book1->addAttribute("bookid", "2");
    $book1->addChild("bookname", "PHP");
    $book1->addChild("authorname", " John Doe");
    $book1->addChild("price", "250");
    $book1->addChild("year", "2003");

    $bookinfo->asXML("12.1.xml");
    echo "XML file created successfully.";
?>