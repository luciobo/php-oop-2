<?php


class Categoria {
    protected $nomeCategoria;
    protected $icona = "fa-layer-group";


    function __construct($_nomeCategoria, $_icona = null) {
        $this->setNomeCategoria($_nomeCategoria);
        $this->setIcona($_icona);
    }



    

    /**
     * Get the value of nomeCategoria
     */ 
    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }

    /**
     * Set the value of nomeCategoria
     *
     * @return  self
     */ 
    public function setNomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;

        return $this;
    }

    /**
     * Get the value of icona
     */ 
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set the value of icona
     *
     * @return  self
     */ 
    public function setIcona($icona)
    {
        if (empty($icona)) {
            return;
        }

        $this->icona = $icona;

        return $this;
    }

    public function getIconHTML() {
        return "<i class='fas $this->icona' />";
    }
}


?>