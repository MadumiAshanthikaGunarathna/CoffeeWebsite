<?php


class CoffeeEntity 
{
    public $id;
    public $name;
    public $type;
    public $price;
    public $roast;
    public $country;
    public $images;
    public $review;
    
    function __construct($id, $name, $type, $price, $roast, $country, $images, $review) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->roast = $roast;
        $this->country = $country;
        $this->images = $images;
        $this->review = $review;
    }

    
    
}
?>
