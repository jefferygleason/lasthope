<?php
class page_testPage extends Page {
    function init(){
        parent::init();

        $g=$this->add("Grid");
        $g->setModel("fosterhome");
        $g->addColumn("button", "filter");
        
        
        $m=$this->add("Model_fosterhomecontact");
        if($_GET["fosterhome_id"]){
            $m->addCondition("fosterhome_id", $_GET["fosterhome_id"]);    
        }
//        $g2=$this->add("Grid");
//        $g2->setModel($m);

        $g2=$this->add('CRUD');
        $g2->setModel($m);
        if($_GET["filter"]){
            $g2->js()->reload(array("fosterhome_id" => $_GET["filter"]))->execute();
        }
        
    }
}