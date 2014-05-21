<?php
class page_applicants_details extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('applicant_id');

        $applicant = $this->add('Model_applicant')->load($_GET['applicant_id']);
        
        //$this->add('CRUD')->setModel($home->ref('fosterhomecontact'));
        
        $this->add('CRUD')->setModel($applicant->ref('reference'));
        
    }
}