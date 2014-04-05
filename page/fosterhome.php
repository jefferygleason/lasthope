<?php
class page_fosterhome extends Page {
    function init(){
        parent::init();
        
        $m = $this->add('Model_fosterhome');
        
        $crud = $this->add('CRUD');
        $crud->setModel($m);
        
        if($crud->grid)$crud->grid->addColumn('expander', 'details');
     
    }
}