<?php
class page_dogdetailcodes_values extends Page {
    function init(){
        parent::init();

        $this->api->stickyGET('dogdetailcode_id');
        
        $home = $this->add('Model_dogdetailcode')->load($_GET['dogdetailcode_id']);
        
        //$this->add('CRUD')->setModel($home->ref('fosterhomecontact'));
        
        $this->add('CRUD')->setModel($home->ref('dogdetailcodevalue'));
        
    }
}