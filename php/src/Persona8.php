<?php
class Persona8 {
    private string $nom;
    private string $cognoms;
    private int $edat;
    private static int $limite_edat= 66;

    public function __construct(
        protected string $nom,
        protected string $cognoms,
        protected int $edat = 25,
    ) {}

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
        return $this->$edat<=$limite_edat;
    }

    public static function modificaLimite($nuevaEdat) {
        $limite_edat = $nuevaEdat;
    }
}
?>