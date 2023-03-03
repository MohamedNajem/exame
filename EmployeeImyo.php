<?php
    class EmployeeImyo implements   EmployeeIm
    {
        public function nombreJourConge($public){
        if($public->getFonction()=="public"){
            echo "10 jours";
        }
    }
        public function salair($public){
        if($public->getFonction()=="public"){
            echo "le salair : ".($public->getSalair()*12);
        }
    }
        

    }