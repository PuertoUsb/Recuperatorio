<?php
class Tienda{
    private $nombre;
    private $direccion;
    private $telefono;
    private $colProductos; // Colección de productos
    private $colVentas; // Colección de ventas realizadas

    public function __construct($nombre, $direccion, $telefono, $colProductos, $colVentas){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->colProductos = $colProductos;
        $this->colVentas = $colVentas;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getColProductos() {
        return $this->colProductos;
    }

    public function getColVentas() {
        return $this->colVentas;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setColProductos($colProductos) {
        $this->colProductos = $colProductos;
    }

    public function setColVentas($colVentas) {
        $this->colVentas = $colVentas;
    }


public function __toString(){

    $cadena = "Nobre: ". $this->getNombre(). "\n";
    $cadena = $cadena. "Direccion: " . $this->getDireccion()."\n";
    $cadena = $cadena. "Telefono: " . $this->getTelefono()."\n";
    $cadena = $cadena. "Productos: " . retornarCadenaDesdeColeccion($this->getColProductos())."\n";
    $cadena = $cadena. "Ventas: " . retornarCadenaDesdeColeccion($this->getColVentas())."\n";
    
    return $cadena;
}
private function retornarCadenaDesdeColeccion($coleccion){
    $cadena = "";
    foreach ($coleccion as $unElemntoCol) {
        $cadena = $cadena. "  " . $unElemntoCol . "\n";
    }
    return $cadena;

}
}
?>