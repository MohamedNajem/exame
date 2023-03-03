<?php
class Prive extends Etudiant
{
    private $voiture;

    public function __construct($nom,$prenom,$salair,$fonction,$voiture)
    {
        parent::__construct($nom,$prenom,$salair,$fonction);
        $this->voiture=$voiture;
    }
    public function getVoiture()
    {
        return $this->voiture;
    }
    public function setVoiture($voiture)
    {
        $this->voiture=$voiture;
    }
    public function __toString()
    {
        return "Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>salair : ".$this->salair. "<br>Fonction : ".$this->fonction. "<br> voiture : ".$this->voiture;
    }
}
