<?php
class page_dogs_events_add extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('dog_id');
        
        $this->add('CRUD')->setModel('dogdetail');
        

        
    }
}