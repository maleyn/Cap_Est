<?php


class Formule {

    private string $picture;
    private string $id;
    private string $name;
    private string $detail;
    private string $detail_more;
    private string $price;

    public function __construct($picture, $id, $name, $detail, $detail_more, $price) {

        $this->picture = $picture;
        $this->id = $id;
        $this->name = $name;
        $this->detail = $detail;
        $this->detail_more = $detail_more;
        $this->price = $price;

    }
    public function id() {
        return $this->id;
    }
    public function image_formule() {
        return $this->picture;
    }

    public function titre_formule() {
        return $this->name;
    }
    
    public function detail_formule() {
        return $this->detail;
    }

    public function detail_more_formule() {
        return $this->detail_more;
    }

    public function display_price() {
        return $this->price;
    }

}