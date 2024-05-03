<?php
Class Producto{
    private $codigoBarra;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantidadStock;

    public function __construct($codigoBarra, $marca, $color, $talle, $descripcion, $cantidadStock){
        $this->codigoBarra = $codigoBarra;
        $this->marca = $marca;
        $this->color = $color;
        $this->talle = $talle;
        $this->descripcion = $descripcion;
        $this->cantidadStock = $cantidadStock;
    }

    // Getters
    public function getCodigoBarra() {
        return $this->codigoBarra;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getColor() {
        return $this->color;
    }

    public function getTalle() {
        return $this->talle;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCantidadStock() {
        return $this->cantidadStock;
    }

    // Setters
    public function setCodigoBarra($codigoBarra) {
    $this->codigoBarra = $codigoBarra;
    }

    public function setMarca($marca) {
    $this->marca = $marca;
    }

    public function setColor($color) {
    $this->color = $color;
    }   

    public function setTalle($talle) {
    $this->talle = $talle;
        }

    public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
    }

    public function setCantidadStock($cantidadStock) {
    $this->cantidadStock = $cantidadStock;
    }

    public function __toString(){
        $cadena = "Codigo de Barra: ". $this->getCodigoBarra(). "\n";
        $cadena = $cadena. "Marca: ". $this->getMarca(). "\n";
        $cadena = $cadena. "Color: ". $this-> getColor(). "\n";
        $cadena = $cadena. "Talle: " . $this->getTalle(). "\n";
        $cadena = $cadena. "Descripcion: " . $this->getDescripcion(). "\n";
        $cadena = $cadena. "Cantidad de stock: " . $this->getCantidadStock(). "\n";
    return $cadena;
    }

    public function actulizarStock($cantStock){
        $copiaCantidadStock = $this->getCantidadStock();
        if ($cantStock > 0){
            $actualizacionStock = $copiaCantidadStock + $cantStock;
            $this->setCantidadStock($actualizacionStock);

        }elseif ($cantStock < 0){
            $actualizacionStock = $copiaCantidadStock - $cantStock;
            $this->setCantidadStock($actualizacionStock);
        }

    }



}

?>