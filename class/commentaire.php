<?php

class Commentaire {
    
    private string $id_com;
    private string $author;
    private string $date;
    private string $contents;

    public function __construct($id_com, $author, $date, $contents) {

        $this->id_com = $id_com;
        $this->author = $author;
        $this->date = $date;
        $this->contents = $contents;

    }

    public function display_id_com() {
        return $this->id_com;
    }
    
    public function display_author_com() {
        return $this->author;
    }

    public function display_date_com() {
        return $this->date;
    }
    
    public function display_contents_com() {
        return $this->contents;
    }


}