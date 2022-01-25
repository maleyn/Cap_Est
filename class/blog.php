<?php
 
class Blog {

    private string $id;
    private string $author;
    private string $date;
    private string $title;
    
    public function __construct($id, $author, $date, $title) {
     
        $this->id = $id;
        $this->author = $author;
        $this->date = $date;
        $this->title = $title;

    }

    public function display_id() {
        return $this->id;
    }

    public function display_author() {
        return $this->author;
    }

    public function display_date() {
        return $this->date;
    }

    public function display_title() {
        return $this->title;
    }

}


