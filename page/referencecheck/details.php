<?php
class page_referencecheck_details extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('applicant_id');
        
        $home = $this->add('Model_applicant')->load($_GET['applicant_id']);
        
        //$this->add('CRUD')->setModel($home->ref('fosterhomecontact'));
        
        $this->add('CRUD')->setModel($home->ref('reference'));
        
    }
}