<?php
class Etudiant
{
    
    protected $nom;
    protected $prenom;
    protected $salair;
    protected $fonction;
    public function __construct($nom,$prenom,$salair,$fonction){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->salair=$salair;
        $this->fonction=$fonction;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom =$nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom =$prenom;
    }
    public function getSalair()
    {
        return $this->salair;
    }
    public function setSalair($salair)
    {
        $this->salair =$salair;
    }
    public function getFonction()
    {
        return $this->fonction;
    }
    public function setFonction($fonction)
    {
        $this->fonction=$fonction;
    }
    public function __toString()
    {
        return "Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>salair : ".$this->salair. "<br>Fonction : ".$this->fonction;
    }
    

}
