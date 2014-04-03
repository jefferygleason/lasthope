<?php
class page_fosterhome extends Page {
    function init(){
        parent::init();
        //$this->add('CRUD')->setModel('home');
        $m = $this->add('Model_fosterhome');
        
        $crud = $this->add('CRUD');
        $crud->setModel($m);
        
        if($crud->grid)$crud->grid->addColumn('expander', 'details');
        
 //       $model = $this->add('Model_dog');
 //       $grid = $this->add('Grid');
 //       $grid->setModel($model);
 //       $grid->addPaginator(10);
        /*
        $g=$this->add('Grid');
        $g->addColumn('text', 'dogName');
        $g->addColumn('text', 'breedName');
        $g->setSource('dog');
        $g->addPaginator(10);
*/

        
        
    }
}