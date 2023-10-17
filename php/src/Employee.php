<?php
class Employee extends Worker implements  JSerializable {
    protected $horasTrabajadas;
    protected $precioPorHora;

    public function __construct($horasTrabajadas = 0, $precioPorHora = 0, $nombre = '', $apellidos = '', $edad = '', $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }
  
    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }


    public function setHorasTrabajadas(int $horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function setPrecioPorHora(float $precioPorHora) {
        $this->precioPorHora = $precioPorHora;
    }

    public function calcularSueldo() {
        return $this->horasTrabajadas * $this->precioPorHora;
    }
  
    public function getPrecioPorHora() {
        return $this->precioPorHora;
    }
    
    public function toJSON() {
        $mapa = array();
        foreach ($this as $clave => $valor){
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }
    public function toSerialize() {
        return serialize($this);
    }

    public function __toString() {
        return parent::__toString();
     }
}