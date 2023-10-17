<?php
class Persona7 {
    private string $nom;
    private string $cognoms;
    private int $edat;


    public function __construct(string $nom, string $cognoms, int $edat = 25){
        $this->$nom = $nom;
        $this->$cognoms = $cognoms;
        $this->$edat = $edat;
    }

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
    public function getEdat($edat){
        $this->$edat = $edat;
    }

    public function getNombreCompleto():string {
        return $this->$nom, " ",  $this->cognoms;
    }
    public function estaJubilado(){
        return $this->$edat<=65;
    }
}
?>