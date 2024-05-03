<?php
class Venta{
    private $fechaVenta;
    private $objCliente;
    private $nroFactura;
    private $tipoComprobante;
    private $colItems;

    public function __construct($fechaVenta, $objCliente, $nroFactura, $tipoComprobante, $colItems) {
        $this->fechaVenta = $fechaVenta;
        $this->objCliente = $objCliente;
        $this->nroFactura = $nroFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->colItems = $colItems;
    }

    // Getters
    public function getFechaVenta() {
        return $this->fechaVenta;
    }

    public function getObjCliente() {
        return $this->objCliente;
    }

    public function getNroFactura() {
        return $this->nroFactura;
    }

    public function getTipoComprobante() {
        return $this->tipoComprobante;
    }

    public function getColItems() {
        return $this->colItems;
    }

    // Setters
    public function setFechaVenta($fechaVenta) {
        $this->fechaVenta = $fechaVenta;
    }

    public function setObjCliente($objCliente) {
        $this->objCliente = $objCliente;
    }

    public function setNroFactura($nroFactura) {
        $this->nroFactura = $nroFactura;
    }

    public function setTipoComprobante($tipoComprobante) {
        $this->tipoComprobante = $tipoComprobante;
    }

    public function setColItems($colItems) {
        $this->colItems = $colItems;
    }

    public function incorporarProducto($unObjProducto, $cantidadAVender) {
        $copiaColItems = $this->colItems;

        if ($unObjProducto->getCantidadStock() >= $cantidadAVender) {

            $itemVenta = new Item($cantidadAVender, $unObjProducto);
        
            array_push ($copiaColItems, $itemVenta);
            $this->setColItems($copiaColItems);
            $unObjProducto->actualizarStock($cantidadAVender);
        }else{
            $unObjProducto = null;
        }
        return $unObjProducto;
    }

}    
?>