<?php
class Pubilc extends Etudiant
{
    private $tenu;

    public function __construct($nom,$prenom,$salair,$fonction,$tenu)
    {
        parent::__construct($nom,$prenom,$salair,$fonction);
        $this->tenu=$tenu;
    }
    public function getTenu()
    {
        return $this->tenu;
    }
    public function setTenu($tenu)
    {
        $this->tenu=$tenu;
    }
    public function __toString()
    {
        return "Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>salair : ".$this->salair. "<br>Fonction : ".$this->fonction. "<br> tenu : ".$this->tenu;
    }
}
