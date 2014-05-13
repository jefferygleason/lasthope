<?php
class page_referencecheck extends Page {
    function init(){
        parent::init();
        
        $m = $this->add('Model_referencecheck');
        
        $crud = $this->add('CRUD');
        $crud->setModel($m);
        
        if($crud->grid)$crud->grid->addColumn('expander', 'details');
     
    }
}