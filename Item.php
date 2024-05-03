<?php
class Item{
    private $cantVendida;
    private $referenciaProducto;

    public function __construct($cantVendida, $referenciaProducto){
        $this->cantVendida = $cantVendida;
        $this->referenciaProducto = $referenciaProducto;
    }
    // Getters
    public function getCantVendida() {
        return $this->cantVendida;
    }

    public function getReferenciaProducto() {
        return $this->referenciaProducto;
    }

    // Setters
    public function setCantVendida($cantVendida) {
        $this->cantVendida = $cantVendida;
    }

    public function setReferenciaProducto($referenciaProducto) {
        $this->referenciaProducto = $referenciaProducto;
    }

    

        
}
?>