<?php

class Product
{
    public $price;

    function __construct($price)
    {
        $this->price = $price;
    }
}
// Attention, il peut y avoir des classes qui descendent de la classe produit
// vous ne pouvez pas supposer que l’objet contenu dans le ProductDecorator n’a que deux propriétés

class SizedProduct extends Product {
    public $size;
    public function __construct($price, $size)
    {
        $this->size = $size;
        parent::__construct($price);
    }
}

class ProductDecorator
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    public function __call($name, $arguments)
    {
        $reflexion = new \ReflectionProperty($this->product, $name);
        if(!$reflexion->isPublic()){
            throw new \Exception("Property \"{$name}\" does not exist");
        }
        $this->product->{$name} = $arguments[0];
    }
    // --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
}
// Voici un exemple de l’appel au ProductDecorator
$sizedproduct = new SizedProduct(5,3);
$decorator = new ProductDecorator($sizedproduct);
$decorator->size(6);
$decorator->price(4);

// les propriétés $size et $price doivent valoir 6 et 4.
print "Nouvelle valeur de la propriété size : {$sizedproduct->size}<br />\n";
print "Nouvelle valeur de la propriété price : {$sizedproduct->price}<br />\n";