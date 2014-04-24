<?php
class page_testDogDetails extends Page {
    function init(){
        parent::init();

        $g=$this->add("Grid");
        $g->setModel("dog");
        $g->addColumn("button", "Details");
        $g->addPaginator(5);
        
        
        $m=$this->add("Model_dogevent");
        if($_GET["dog_id"]){
            $m->addCondition("dog_id", $_GET["dog_id"]);    
        }
//        $g2=$this->add("Grid");
//        $g2->setModel($m);

        $g2=$this->add('CRUD');
        $g2->setModel($m);
        if($_GET["Details"]){
            $g2->js()->reload(array("dog_id" => $_GET["Details"]))->execute();
        }
        
    }
}