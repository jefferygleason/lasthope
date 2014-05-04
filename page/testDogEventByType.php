<?php
class page_testDogEventByType extends Page {
    function init(){
        parent::init();

        $g=$this->add('CRUD');
        $g->setModel('dogeventbytype');
        
    }
}