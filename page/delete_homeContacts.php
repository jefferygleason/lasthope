<?php
class page_homes_homeContacts extends Page {
    function init(){
        parent::init();
        
        $this->api->stickyGET('id');
        
        $home = $this->add('Model_home')->load($_GET['id']);
        
        $this->add('CRUD')->setModel($home->ref('contact'));
    }
}