<?php

class Books
{
    public $bookname;
    public function set_book_name($book_name)
    {
        $this->bookname= $book_name;
    }

    public function get_book_name()
    {
        return $this->bookname;
    }
}


$book1=new Books();
$book2=new Books();
$book1->set_book_name("Alice in Wonderland");
$book2->set_book_name("Enmakaje");
echo $book1->get_book_name();
echo "<br>";
echo $book2->get_book_name();
?>