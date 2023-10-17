<?php

class Empleado extends Persona8 {
    protected $telefonos = [];
    protected $sueldo;

    public function getTelefonos() {
        return $this->telefonos;
    }
    public function getSueldo() {
        return $this->sueldo;
    }



    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }



    public function anyadirTelefono(int $telefono) : void{
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string{
        return implode(',', $this->telefonos);
    }

    public function vaciarTelefonos() {
        $this->telefonos = array();
    }

    public function debePagarImpuestos() {
        return $this->sueldo >3333;
    }

   
    
    public static function toHtml(Persona8 $emp) {
        $datos = '';
        $datos .= '<p>'.$emp->getNombreCompleto().'</p>';
        if($emp instanceof  Empleado){
            $datos .= '<ul>';
            foreach ($emp->getTelefons() as $telefono){
                $datos .= '<li>' . $telefono . '</li>';
            }
            $datos .= '</ul>';
            return $datos;
        }
        return $datos;
    }
    public function __toString() {
        $datos = '';
        $datos = Persona8::__toString();
        $datos .= '<ul>';
        foreach ($this->getTelefons() as $telefono){
            $datos .= '<li>' . $telefono . '</li>';
        }
        return $datos . '</ul>';
    }
}
?>