<?php
class Persona {
    private string $nom;
    private string $cognoms;
    private int $edat;

    public function getNom(){
        return $this->nom;
    }
    public function getCognoms(){
        return $this->$cognoms;
    }
    public function getEdat(){
        return $this->$edat;
    }

    public function setNom($nombre){
        $this->$nom = $nombre;
    }
    public function setCognoms($apellidos){
        $this->$cognoms = $apellidos;
    }
    public function getEdat($edad){
        $this->$edat = $edad;
    }

    public function getNombreCompleto():string {
        return $this->$nom, " ",  $this->cognoms;
    }
    public function estaJubilado(){
        return $this->$edat<=65;
    }
}
?>