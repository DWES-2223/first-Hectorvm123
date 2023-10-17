<?php

class Enterprise implements JSerializable {
    protected $workers = [];

    public function __construct(
        protected $nombre,
        protected $direccion
    ){}


    public function getNom(){
        return $this->nombre;
    }

    public function getDireccio() {
        return $this->direccion;
    }

    
    public function addWorker(Worker $worker){
        array_push($this->workers,$worker);
    }

    public function listWorkersHtml() {
        $lista = '<div>';
        foreach ($this->workers as $worker){
            $lista .= Worker::toHtml($worker);
        }
        $lista .= '</div>';
        return $lista;
    }
    public function getCosteNominas() {
        $costeTotal = 0;
        foreach ($this->workers as $worker){
            $costeTotal += $worker->calcularSueldo();
        }
        return $costeTotal;
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