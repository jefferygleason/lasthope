<?php
class page_fosterhome_details extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('fosterhome_id');
        
        $home = $this->add('Model_fosterhome')->load($_GET['fosterhome_id']);
        
        $this->add('CRUD')->setModel($home->ref('fosterhomecontact'));
    }
}