<?php
class page_applicants extends Page {
    function init(){
        parent::init();
        
        $m = $this->add('Model_applicant');
        
        $crud = $this->add('CRUD');
        $crud->setModel($m);
        
        if($crud->grid)$crud->grid->addColumn('expander', 'details');
     
    }
}