<?php
class page_breeds extends Page {
    function init(){
        parent::init();

  
        $this->add('CRUD')->setModel('breed');
        
    }
}