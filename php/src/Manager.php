<?php

class Manager extends Worker implements JSerializable {

    protected $salario;

    public function __construct($salario = 0 ,$nombre = '', $apellidos = '', $edad = '', $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salario = $salario;
    }

    public function calcularSueldo() {
        return $this->salario + ($this->salario*$this->edad)/100;
    }
    public function __toString() {
        return parent::__toString();
    }
    public function toJSON() {
        $mapa = [];
        foreach ($this as $clave => $valor){
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }
    public function toSerialize() {
        return serialize($this);
    }
}
?>