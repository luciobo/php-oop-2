<?php


class Prodotti {
    private $nomeProdotto;
    private $categoriaProdotto;
    private $immagini;
    private $prezzo;

function __construct($_nomeProdotto, $_categoriaProdotto, $_immagini, $_prezzo ) {

        $this->setNomeProdotto($_nomeProdotto);
        $this->setCategoriaProdotto($_categoriaProdotto);
        $this->setImmagini($_immagini);
        $this->setPrezzo($_prezzo);
}


    /**
     * Get the value of nomeProdotto
     */ 
    public function getNomeProdotto()
    {
        return $this->nomeProdotto;
    }

    /**
     * Set the value of nomeProdotto
     *
     * @return  self
     */ 
    public function setNomeProdotto($_nomeProdotto)
    {
        $this->nomeProdotto = $_nomeProdotto;

        return $this;
    }

    /**
     * Get the value of categoriaProdotto
     */ 
    public function getCategoriaProdotto()
    {
        return $this->categoriaProdotto;
    }

    /**
     * Set the value of categoriaProdotto
     *
     * @return  self
     */ 
    public function setCategoriaProdotto($_categoriaProdotto)
    {
        $this->categoriaProdotto = $_categoriaProdotto;

        return $this;
    }

    /**
     * Get the value of immagini
     */ 
    public function getImmagini()
    {
        return $this->immagini;
    }

    /**
     * Set the value of immagini
     *
     * @return  self
     */ 
    public function setImmagini($_immagini)
    {
        $this->immagini = $_immagini;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;

        return $this;
    }
}


?>