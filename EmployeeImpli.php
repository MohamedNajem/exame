<?php
require_once "index.php";
    class EmployeeImpli implements   EmployeeI
    {
        public function nombreJourConge($prive){
            if($prive->getFonction() == "prive"){
                echo "15 jours";
            }
            
        }
        public function salair($prive){
            if($prive->getFonction()=="prive"){
                echo "le salair : ".($prive->getSalair()*12);
            }
           
        }
        public function prime($prive){
            if($prive->getFonction()=="prive"){
                echo "le prime : ".((($prive->getSalair()*12)*30)/100);
            }
           
        }
        

    }