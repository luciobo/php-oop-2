<?php
require_once __DIR__ . "/Prodotto.php";
// require_once __DIR__ . "/Categoria.php";



class Cibo extends Prodotto {
    protected $calorie;
    protected $ingredienti = [];

    function __construct($_nomeProdotto, Categoria $_categoriaProdotto, $_immagini, $_prezzo, $_calorie) {
        // Invoco il costruttore della classe padre
        parent::__construct($_nomeProdotto, $_categoriaProdotto, $_immagini, $_prezzo);
    
        $this->setCalorie($_calorie);
    }





    /**
     * Get the value of calorie
     */ 
    public function getCalorie()
    {
        return $this->calorie;
    }

    /**
     * Set the value of calorie
     *
     * @return  self
     */ 
    public function setCalorie($calorie)
    {
        $this->calorie = $calorie;

        return $this;
    }

    /**
     * Get the value of ingredienti
     */ 
    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    /**
     * Set the value of ingredienti
     *
     * @return  self
     */ 
    public function setIngredienti($ingredienti)
    {
        $this->ingredienti = $ingredienti;

        return $this;
    }
}