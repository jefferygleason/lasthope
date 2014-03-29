<?php
class page_dogs extends Page {
    function init(){
        parent::init();

  
        $this->add('CRUD')->setModel('dog');
        
    }
}